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

// expense roots starts here

Route::get('/expenses/add', function () {
    return view('pages.expenses.add');
});

Route::get('/expenses/addsaving', function () {
    return view('pages.expenses.addsaving');
});

Route::get('/expenses/reports', function () {
    return view('pages.expenses.reports');
});

Route::get('/expenses/prepaidaccount', function () {
    return view('pages.expenses.prepaidaccount');
});

Route::get('/expenses/prepaidexpenses', function () {
    return view('pages.expenses.prepaidexpenses');
});

Route::get('/expenses/specialimprest', function () {
    return view('pages.expenses.specialimprest');
});
Route::get('/expenses/provisionandaccrual', function () {
    return view('pages.expenses.provisionandaccrual');
});

Route::get('/expenses/groupcategory', function () {
    return view('pages.expenses.groupcategory');
});


// bank&cash roots start here

Route::get('/bank_cash/moneybanks', function () {
    return view('pages.bank_cash.moneybanks');
});


Route::get('/bank_cash/accounts', function () {
    return view('pages.bank_cash.accounts');
});

Route::get('/bank_cash/reminders', function () {
    return view('pages.bank_cash.reminders');
});

Route::get('/bank_cash/cash', function () {
    return view('pages.bank_cash.cash');
});

Route::get('/bank_cash/moneyCash', function () {
    return view('pages.bank_cash.moneyCash');
});

Route::get('/bank_cash/transactions', function () {
    return view('pages.bank_cash.transactions');
});

// estimate roots starts here

Route::get('/estimates/view', function () {
    return view('pages.estimates.view');
});

Route::get('/estimates/prepareincome', function () {
    return view('pages.estimates.prepareincome');
});

Route::get('/estimates/prepareexpenses', function () {
    return view('pages.estimates.prepareexpenses');
});

Route::get('/estimates/editincome', function () {
    return view('pages.estimates.editincome');
});

Route::get('/estimates/editexpenses', function () {
    return view('pages.estimates.editexpenses');
});
