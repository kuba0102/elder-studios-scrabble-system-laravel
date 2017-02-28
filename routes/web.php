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

Route::get('/', function () {
    return view('welcome');
});
Route::get('all', 'MemberController@index');

Route::get('getTopTen', 'MemberController@getTopTen');

Route::get('details/{memberId}', 'MemberController@details');

Route::get('addMemberForm', 'MemberController@addForm');

Route::post('addMember', 'MemberController@addMember');

Route::post('removeMember', 'MemberController@removeMember');

Route::get('addResultForm', 'ResultController@addResultForm');

Route::post('addResult', 'ResultController@addResult');

Route::get('updateMemberForm/{memberId}', 'MemberController@updateForm');

Route::post('updateMember/{memberId}', 'MemberController@updateMember');
