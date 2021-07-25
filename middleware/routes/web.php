<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::get('/User', function () {

    $users = DB::table('UserTbl')
    ->select('*')
    ->get();    

    return view(
        'userTbl', ['users' => $users]
    );
});



Route::get('/Modification', function () {

    $modifications = DB::table('ModificationTbl')
    ->join('StatusTbl', 'StatusTbl.statusID', '=', 'ModificationTbl.statusID')
    ->join('UserTbl', 'UserTbl.userID', '=', 'ModificationTbl.proposerUserID')
    ->select('*')
    ->get();

    return view(
        'modificationTbl', [ 'modifcations' => $modifications]
    );
});