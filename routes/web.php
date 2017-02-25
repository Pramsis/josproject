<?php

Route::get('/', function () {
    return view('welcome');
});


//Route Of Master
Route::get('/home', 'josController@index')->name('home');
Route::get('/class', 'JosController@kelas')->name('class');
Route::get('/jurnal', 'JosController@jurnal')->name('jurnal');
Route::get('/manage', 'JosController@manage')->name('manage');
// -------------------

//Route Of Absensi
Route::get('/absensi', 'JosController@absensi')->name('absensi');
Route::post('/absensi', 'JosController@store')->name('absensi');
//------------------------

//Route Of Rekap
Route::get('/rekap', 'RekapController@index')->name('rekap');
Route::get('/rekap/absen-xrpl1', 'RekapController@rekapAbsenXrpl1')->name('rekapAbsenXrpl1');
Route::get('/rekap/absen-xirpl1', 'RekapController@rekapAbsenXirpl1')->name('rekapAbsenXirpl1');
Route::get('/rekap/absen-xiirpl1', 'RekapController@rekapAbsenXiirpl1')->name('rekapAbsenXiirpl1');
Route::get('/rekap/jurnal-xrpl1', 'RekapController@rekapJurnalXrpl1')->name('rekapJurnalXrpl1');
Route::get('/rekap/jurnal-xirpl1', 'RekapController@rekapJurnalXirpl1')->name('rekapJurnalXirpl1');
Route::get('/rekap/jurnal-xiirpl1', 'RekapController@rekapJurnalXiirpl1')->name('rekapJurnalXiirpl1');
// --------------------------

//Route OF Login
Route::get('/loginjos', 'SessionController@create')->name('login');
Route::post('/loginjos', 'SessionController@store')->name('login');
Route::get('/logoutjos', 'SessionController@destroy')->name('logoutjos');
//------------------------

//Route Of Class
Route::get('/class/xrpl1', 'JosController@xrpl1')->name('class.xrpl1');
Route::get('/class/xirpl1', 'JosController@xirpl1')->name('class.xirpl1');
Route::get('/class/xiirpl1', 'JosController@xiirpl1')->name('class.xiirpl1');
// ---------------------------

//Route Of JurnalController
Route::get('/jurnal/xrpl1', 'JurnalController@jurnalxrpl1')->name('jurnal.xrpl1');
Route::get('/jurnal/xirpl1', 'JurnalController@jurnalxirpl1')->name('jurnal.xirpl1');
Route::get('/jurnal/xiirpl1', 'JurnalController@jurnalxiirpl1')->name('jurnal.xiirpl1');
Route::post('/jurnal/xrpl1', 'JurnalController@store');
Route::post('/jurnal/xirpl1', 'JurnalController@store');
Route::post('/jurnal/xiirpl1', 'JurnalController@store');
// ------------------------------

//Route Of CRUD Class
Route::get('/manage/update-xrpl1', 'SiswaController@crudxrpl1')->name('manage.xrpl1');
Route::get('/manage/update-xirpl1', 'SiswaController@crudxirpl1')->name('manage.xirpl1');
Route::get('/manage/update-xiirpl1', 'SiswaController@crudxiirpl1')->name('manage.xiirpl1');
Route::post('/manage/update-xrpl1', 'SiswaController@store');
Route::post('/manage/update-xirpl1', 'SiswaController@store');
Route::post('/manage/update-xiirpl1', 'SiswaController@store');
Route::delete('/manage/update-xrpl1/{id}', 'SiswaController@destroy')->name('student.destroy');
Route::get('/manage/update-xrpl1/{id}', 'SiswaController@show');
Route::get('/manage/update-xrpl1/{id}/editsiswa', 'SiswaController@editguru')->name('editsiswa');
Route::put('/manage/update-xrpl1/{id}', 'SiswaController@update')->name('student.update');
// -------------------------------

//Route Of CRUD Teacher
Route::get('/manage/update-head', 'GuruController@head')->name('head');
Route::get('/manage/update-normative', 'GuruController@normative')->name('normative');
Route::get('/manage/update-productive', 'GuruController@productive')->name('productive');
Route::post('/manage/update-head', 'GuruController@store');
Route::post('/manage/update-normative', 'GuruController@store');
Route::post('/manage/update-productive', 'GuruController@store');
Route::delete('/manage/update-head/{id}', 'GuruController@destroy')->name('teacher.destroy');
Route::get('/manage/update-head/{id}', 'GuruController@show');
Route::get('/manage/update-head/{id}/editguru', 'GuruController@editguru')->name('editguru');
Route::put('/manage/update-head/{id}', 'GuruController@update')->name('teacher.update');
// -----------------------------

//Route Of Admin
Route::get('/manage/admin', 'AdminController@index')->name('Admin');
Route::get('/manage/admin', 'AdminController@index')->name('Admin');
Route::get('/manage/admin', 'AdminController@index')->name('Admin');
Route::post('/manage/admin', 'AdminController@store');
Route::delete('/manage/admin/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/manage/admin/{id}', 'AdminController@show');
Route::get('/manage/admin/{id}/editadmin', 'AdminController@editadmin')->name('editadmin');
Route::put('/manage/admin/{id}', 'AdminController@update')->name('admin.update');
// -----------------------------

Auth::routes();
