<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//deposit roots start

Route::get('/deposit/add', function () {
    return view('pages.deposit.add');
});

Route::get('/deposit/withdrawn', function () {
    return view('pages.deposit.withdrawn');
});

Route::get('/deposit/deposited', function () {
    return view('pages.deposit.deposited');
});

// saving roots start

Route::get('/savings/add', function () {
    return view('pages.savings.add');
});

Route::get('/savings/withdrawn', function () {
    return view('pages.savings.withdrawn');
});

Route::get('/savings/deposited', function () {
    return view('pages.savings.deposited');
});

Route::get('/savings/types', function () {
    return view('pages.savings.types');
});

Route::get('/savings/membersdeposit', function () {
    return view('pages.savings.membersdeposit');
});

// shares roots starts here

Route::get('/shares/add', function () {
    return view('pages.shares.add');
});

Route::get('/shares/withdrawn', function () {
    return view('pages.shares.withdrawn');
});

Route::get('/shares/salesreport', function () {
    return view('pages.shares.salesreport');
});

Route::get('/shares/shares', function () {
    return view('pages.shares.shares');
});

// income roots starts here

Route::get('/income/add', function () {
    return view('pages.income.add');
});

Route::get('/income/addtypes', function () {
    return view('pages.income.addtypes');
});

Route::get('/income/types', function () {
    return view('pages.income.types');
});

Route::get('/income/reports', function () {
    return view('pages.income.reports');
});

Route::get('/income/registeraccountreceivable', function () {
    return view('pages.income.registeraccountreceivable');
});

