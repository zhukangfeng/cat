<?php 
namespace Cat\Http\Controllers;

use Cat\Http\Requests;
use Cat\Http\Controllers\Controller;
use Cat\DownloadFile;
use Illuminate\Http\Request;
use Response;
use BinaryFileResponse;

class FileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return 'index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Download the file by file id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function downloadByFileId($file_id)
	{
		//
		$file = DownloadFile::file($file_id);
		$real_path = storage_path() . $file->save_path;
        $headers = array(
              'Content-Type:' . $file->type ,
            );
        // return $file->save_path;
        $realFile = $real_path . DIRECTORY_SEPARATOR . $file->save_name;
        $response = new Response();
        // return $response->download($realFile, $file->real_name, $headers);
        // echo iconv('UTF-8', 'ASCII', $realFile);
        $realFile = mb_convert_encoding($realFile, 'ASCII');
        // exit;
        // return response()->download(iconv('UTF-8', 'ASCII', $realFile), $file->real_name, $headers);
        return Response::download($realFile, $file->real_name, $headers);
         $response = new BinaryFileResponse($file, 200, $headers, true);
         if (is_null($name)) {
	        $name = basename($file);
	    }

	   return $response->setContentDisposition($disposition, $name, Str::ascii($name));
		}

	/**
	 * Download the file in storage.
	 *
	 * @param  int  $file_cd
	 * @param  int  $resource_id
	 * @return Response
	 */
	public function downloadOne($file_cd, $resource_id)
	{
		//
		// echo $file_cd . '/' . $resource_id;
		$file = DownloadFile::downloadUpdateNearlyOneFile($file_cd, $resource_id);

		$real_path = storage_path() . $file->save_path;
        $headers = array(
              'Content-Type:' . $file->type ,
            );
        // return $file->save_path;
        $realFile = $real_path . DIRECTORY_SEPARATOR . $file->save_name;
        return Response::download($realFile, $file->real_name, $headers);

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
	}

}
