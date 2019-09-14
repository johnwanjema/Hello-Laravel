<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');

// Route::get('/project/create', 'ProjectsController@create');

// Route::get('/projects{project}', 'ProjectsController@show');

// Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects{project}/edit', 'ProjectsController@edit');

// Route::patch('/projects{project}/edit', 'ProjectsController@update');

// Route::delete('/projects{project}/edit', 'ProjectsController@delete');

Route::get('/', function () {
    $tasks = [
        'code for ip',
        'eat lunch', 'submit cv',
        'learn php',
    ];

    return view('welcome', ['tasks' => $tasks, 'foo' => 'foobar',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
