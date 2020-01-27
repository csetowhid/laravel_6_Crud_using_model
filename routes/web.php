<?php


Route::get('/', function () {
    return view('welcome');
});
// Route::get('Students','StudentController@create')->name('student');
// Route::post('Store/Students','StudentController@store')->name('storestudent');
// Route::get('All/Students','StudentController@alls')->name('allstudents');
// Route::get('viewstudent{id}','StudentController@show');
// Route::get('deletestudent{id}','StudentController@destroy');
// Route::get('editstudent{id}','StudentController@edit');
// Route::post('updatestudent{id}','StudentController@update');

Route::resource('student','StudentController');