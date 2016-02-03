<?php 
namespace Cat\Http\Controllers\Cat;

use Cat\Http\Requests;
use Cat\Http\Controllers\Controller;
use Cat\Cat;
use Cat\UploadFile;
use Cat\DownloadFile;
use Auth;
use Config;
use Cat\Libraries\GlobalFileFunc;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Storage;
use Validator;

class CatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$cats = Cat::where('is_public', '=', true)->orwhere('created_user_id', '=', Auth::id())->get();

	    return view('cats.index')->with('cats', $cats);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('cats.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		if (Auth::guest()) {
			return redirect('/auth/login');
		}


		$input = $request->input();
	    $input['created_user_id'] = Auth::id();
    	$validator = Validator::make(
			$input,
		    ['name' => 'required|min:3', 'breed_id' => 'required']
		);
	   	$cat = Cat::create($input);

	    // $cat = Cat::create($input);

	    // var_dump( Storage::disk('local'));
	    // exit;
	    if ($request->hasFile('icon')) {
	        $file = $request->file('icon');
	    	$icon_validator = ['image/jpeg', 'image/bmp', 'image/png', 'image/gif'];
	    	if (!in_array($file->getClientMimeType(), $icon_validator)) {
	    		return redirect('cat/create')->with('cat', $input)->withError('The icon must be a photo or gif.');
	    	}
	    	if ($validator->fails()) {
	    		return redirect('cat/create')->with('cat', $input)->withError('The icon must be a photo or gif.');
	    	}

	        if (file_exists($file)) {
	        	$uploadFile = new UploadFile();
	        	$uploadFile->file = $file;
	        	$uploadFile->resource_id = $cat->id;
	        	$uploadFile->file_cd = Config::get('db_const.DB_FILE_FILE_CD_CAT_ICON_CODE');

	        	$result = $uploadFile->saveFile();
	        	if (!$result) {
	        		return redirect('cat/create')->withError('Icon updating error, please try again.');
	        	}
	        }
	    }
	    if ($cat->id) {
	        return redirect('cat/' . $cat->id)->withSuccess('Cat has been created.');
	    } else {
	        return redirect('cat/create')->withError('There are some errors, please try again.');
	    }
	    
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		// $cat = Cat::find($id);
		// return var_dump($id);

		// if (!$cat->is_public && $cat->created_user_id !== Auth::id()) {
		// 	abort(404);
		// }
		// return Config::get('db_const.DB_USERS_USER_TYPE_ADMIN');
		// return $id;
		$cat = $id;
		if (
			$cat->owner()->is_public
			|| $cat->owner()->id == Auth::id()
			|| (!Auth::guest() && Auth::user()->user_type != Config::get('db_const.DB_USERS_USER_TYPE_COMMON'))
			) {
			$cat->creator = $cat->owner()->name;
		} else {
			$cat->creator = 'secure';
		}
		$icons = DownloadFile::downloadFiles(Config::get('db_const.DB_FILE_FILE_CD_CAT_ICON_CODE'), $cat->id);
		if ($icons) {
			$cat->icons = $icons;
		}
		return view('cats.show')->with('cat', $cat);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		// return $id;
		// $cat = Cat::find($id);
		$cat = $id;
		if ($cat->created_user_id !== Auth::id() && Auth::user()->user_type === Config::get('db_const.DB_USERS_USER_TYPE_COMMON')) {
			abort(403);
		}
		$icons = DownloadFile::downloadFiles(Config::get('db_const.DB_FILE_FILE_CD_CAT_ICON_CODE'), $cat->id);
		if ($icons) {
			$cat->icons = $icons;
		}

    	return view('cats.edit')->with('cat', $cat);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
		// return 1;
		// $request = new Request();
		$cat = $id;
		if (
			Auth::guest() 
			|| (Auth::id() != $cat->created_user_id && Auth::user()->user_type === Config::get('db_const.DB_USERS_USER_TYPE_COMMON'))
		) {
			abort(403);
		}
		$data = $request->input();
    	$validator = Validator::make(
			$data,
		    ['name' => 'required|min:3', 'breed_id' => 'required']
		);
		$file = Input::file('icon');
    	if ($file) {
	    	$icon_validator = ['image/jpeg', 'image/bmp', 'image/png', 'image/gif'];
	    	if (!in_array($file->getClientMimeType(), $icon_validator)) {
	    		return redirect('cat/' . $cat->id)->with('cat', $data)->withError('The icon must be a photo or gif.');
	    	}
	    	if ($validator->fails()) {
	    		return redirect('cat/' . $cat->id)->with('cat', $data)->withError('name must has more than 3 characters.');
	    	}

	        if (file_exists($file)) {
	        	$uploadFile = new UploadFile();
	        	$uploadFile->file = $file;
	        	$uploadFile->resource_id = $cat->id;
	        	$uploadFile->file_cd = Config::get('db_const.DB_FILE_FILE_CD_CAT_ICON_CODE');

	        	$result = $uploadFile->saveFile();
	        	if (!$result) {
	        		return redirect('cat/create')->withError('Icon updating error, please try again.');
	        	}
	        }
	    }

	    if ($cat->update($data)) {
	        return redirect('/cat/' . $cat->id)->withSuccess('Cat has been updated.');   
	    } else {
	        return redirect('/cat/' . $cat->id . "/edit")->withError('There are some errors, please try again.');   
    	}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		return $id;
	}

}
