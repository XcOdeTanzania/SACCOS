<?php

use Illuminate\Support\Facades\Route;

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

//general ledger routes starts here
Route::get('/generalLedger/incomes', function () {
    return view('pages.generalLedger.incomes');
});

Route::get('/generalLedger/expenditures', function () {
    return view('pages.generalLedger.expenditures');
});

Route::get('/generalLedger/savings', function () {
    return view('pages.generalLedger.savings');
});

Route::get('/generalLedger/deposit', function () {
    return view('pages.generalLedger.deposit');
});

Route::get('/generalLedger/specialdeposit', function () {
    return view('pages.generalLedger.specialDeposit');
});

Route::get('/generalLedger/shares', function () {
    return view('pages.generalLedger.shares');
});

Route::get('/generalLedger/internalloans', function () {
    return view('pages.generalLedger.internalLoans');
});

Route::get('/generalLedger/externalloans', function () {
    return view('pages.generalLedger.externalLoans');
});

Route::get('/generalLedger/investment', function () {
    return view('pages.generalLedger.investment');
});

//assets routes starts here
Route::get('/assets/allassets', function () {
    return view('pages.assets.allAssets');
});

Route::get('/assets/newAsset', function () {
    return view('pages.assets.newAsset');
});

Route::get('/assets/newassetcategory', function () {
    return view('pages.assets.newAssetCategory');
});

Route::get('/assets/assetcategories', function () {
    return view('pages.assets.assetCategories');
});

Route::get('/assets/newdepreciationrecord', function () {
    return view('pages.assets.newDepreciationRecord');
});

Route::get('/assets/depreciationrecords', function () {
    return view('pages.assets.depreciationRecords');
});

//meetings routes starts here
Route::get('/meetings/newmeetinginformation', function () {
    return view('pages.meetings.newMeetingInformation');
});

Route::get('/meetings/listofmeetings', function () {
    return view('pages.meetings.listOfMeetings');
});

//growth routes starts here
Route::get('/growth/receivedsavings', function () {
    return view('pages.growth.receivedSavings');
});

Route::get('/growth/receiveddeposit', function () {
    return view('pages.growth.receivedDeposit');
});

Route::get('/growth/soldshares', function () {
    return view('pages.growth.soldShares');
});

Route::get('/growth/disbursedloans', function () {
    return view('pages.growth.disbursedLoans');
});