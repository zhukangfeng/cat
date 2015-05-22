<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return redirect('cats');
});

Route::get('/about/', function() {
    return view('about')->with('number_of_cats', Cat\Cat::count());
});

Route::group(['prefix' => 'breeds'], function() {
    Route::get('/', function() {
        return view('breeds.index');
    });
    Route::get('/create', function() {
        return view('breeds.create');
    });
});

Route::get('/cats', function() {
    $cats = Cat\Cat::all();
     return view('cats.index')->with('cats', $cats);
});
Route::post('/cats', function() {
    $cat = Cat\Cat::create(Input::all());
    if ($cat) {
        return redirect('cat/' . $cat->id)->withSuccess('Cat has been created.');
    } else {
        return redirect('cats/create')->withError('There are some errors, please try again.');
    }
    
    return view('cats.create');
});
Route::get('/cats/create', function() {
    return view('cats.create');
});
Route::get('/cat/{id}', function($id) {
    $cat = Cat\Cat::find($id);
    return view('cats.show')->with('cat', $cat);
})->where('id', '[0-9]*');
Route::put('/cat/{id}', function($id) {
    $cat = Cat\Cat::find($id);
    if ($cat->update(Input::all())) {
        return redirect('/cat/' . $id)->withSuccess('Cat has been updated.');   
    } else {
        return redirect('/cat/' . $id . "/edit")->withError('There are some errors, please try again.');   
    }
})->where('id', '[0-9]*');
Route::get('/cat/{id}/delete', function($id) {
    $cat = Cat\Cat::find($id);
    if ($cat->delete()) {
        return redirect('/cats/')->withSuccess('Cat has been deleted.');
    }
})->where('id', '[0-9]*');
Route::get('/cat/{id}/edit', function($id) {
    $cat = Cat\Cat::find($id);
    return view('cats.edit')->with('cat', $cat);
})->where('id', '[0-9]*');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);