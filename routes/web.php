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

// financial Reports


Route::get('/financialReports/balancesheet', function () {
    return view('pages.financialReports.balancesheet');
});

Route::get('/financialReports/balance', function () {
    return view('pages.financialReports.balance');
});

Route::get('/financialReports/cashflow', function () {
    return view('pages.financialReports.cashflow');
});

Route::get('/financialReports/changeofcapital', function () {
    return view('pages.financialReports.changeofcapital');
});

Route::get('/financialReports/nonmembersinfo', function () {
    return view('pages.financialReports.nonmembersinfo');
});

Route::get('/financialReports/membersinfo', function () {
    return view('pages.financialReports.membersinfo');
});


Route::get('/financialReports/incomeandexpenses', function () {
    return view('pages.financialReports.incomeandexpenses');
});

Route::get('/financialReports/divident', function () {
    return view('pages.financialReports.divident');
});

Route::get('/financialReports/loanbalance', function () {
    return view('pages.financialReports.loanbalance');
    });

// saccos info roots start here
Route::get('/saccos_info/change', function () {
    return view('pages.saccos_info.change');
});

Route::get('/saccos_info/allow', function () {
    return view('pages.saccos_info.allow');
});

Route::get('/saccos_info/prevent', function () {
    return view('pages.saccos_info.prevent');
});

// users roots start here
Route::get('/users/add', function () {
    return view('pages.users.add');
});

Route::get('/users/info', function () {
    return view('pages.users.info');
});

Route::get('/users/list', function () {
    return view('pages.users.list');
});
