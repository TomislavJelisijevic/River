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

use App\Submission;

Route::get('/', function () {
    return view('welcome', [
        'submissions' => Submission::all()
    ]);
});

Route::get('submissions/createForm', 'SubmissionController@createForm');
Route::post('submissions/store', 'SubmissionController@store');
Route::get('submissions/all', 'SubmissionController@all');
