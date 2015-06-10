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
    return view('index');
});

Route::get('/about/', function() {
    return view('about')->with('number_of_cats', Cat\Cat::count());
});

Route::group(['prefix' => 'breeds'], function() {
    Route::get('/', function() {
        $breeds = Cat\Breed::all();
        return view('breeds.index')->with('breeds', $breeds);
    });
    Route::post('/', function() {
        $breed = Cat\Breed::create(Input::all());
        if ($breed) {
            return redirect("breeds/")->withSuccess('Breed has been created.');
        } else {
            return redirect("breeds/create")->withError('There are some errors, please try again.');
        }
    });
    Route::get('/create', function() {
        return view('breeds.create');
    });
});

Route::group(['prefix' => 'breed'], function() {
    Route::get('/', function() {
        return redirect('/breeds');
    });
    Route::get('/{id}', function($id) {
        $breed = Cat\breed::find($id);
        return view('breeds.show')->with('breed', $breed);
    })->where('id', '[0-9]*');
    Route::get('/{id}/edit', function($id) {
        $breed = Cat\Breed::find($id);
        return view('breeds.edit')->with('breed', $breed);
    });
    Route::get('/{id}/delete', function($id) {
        $breed = Cat\Breed::find($id);
        if ($breed->delete()) {
            return redirect('breeds/')->withSuccess('Breed has been deleted.');
        } else {
            return redirect('breed/' . $id)->withError('There are some errors, please try again.');
        }
        return view('breeds.edit')->with('breed', $breed);
    });
    Route::put('/{id}', function($id) {
        $breed = Cat\Breed::find($id);
        if ($breed->update(Input::all())) {
            return redirect('breed/' . $id)->withSuccess('Breed has been updated.');
        } else {
            return redirect('breed/' . $id . '/edit')->withError('There are some errors, please try again.');
        }
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


Route::get('login', 'Auth\AuthController@index');

Route::get('home', 'HomeController@index');



Route::get('regist', 'Auth\AuthController@create');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);