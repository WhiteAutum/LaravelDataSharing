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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'StudentController@test');

Route::get('/homes', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

//Account 类
Route::get('/Alist', 'AccountsController@accountlist');
Route::get('/chargeAccount', 'AccountsController@chargeAccount');
Route::get('/createAccount', 'AccountsController@createAccount');
Route::get('/getBalance', 'AccountsController@getBalance');
Route::get('/rigisterAccounts', 'AccountsController@rigisterAccounts');
Route::get('/rigisterAccountList', 'AccountsController@rigisterAccountList');

//Provider类
Route::get('/ProviderData', 'ProviderController@Provider_data');
Route::get('/ProviderDataList', 'ProviderController@Data_List');
Route::get('/ProviderTask', 'ProviderController@Provider_Task');
Route::get('/TaskList', 'ProviderController@Task_List');

//Requester
Route::get('/RequesteData', 'RequesterController@Requeste_Data');
Route::get('/RequesteDataList', 'RequesterController@Data_List');
Route::get('/RequesteTask', 'RequesterController@Requeste_Task');
Route::get('/RequesteTaskList', 'RequesterController@Task_List');

//Search
Route::get('/DataList', 'SearchController@Data_List');
Route::get('/TaskList', 'SearchController@Task_List');
Route::get('/SearchProData', 'SearchController@Search_Pro_Data');
Route::get('/SearchReqData', 'SearchController@Search_Req_Data');
Route::get('/SearchProTask', 'SearchController@Search_Pro_Task');
Route::get('/SearchReqTask', 'SearchController@Search_Req_Task');

//Managements
Route::get('/PersonalDataList', 'ManagementsController@Personal_Data_List');
Route::get('/ProvideDataControl', 'ManagementsController@Provide_Data_Control');
Route::get('/PersonalTaskList', 'ManagementsController@Personal_Task_List');
Route::get('/ProvideTaskControl', 'ManagementsController@Provide_Task_Control');

//Transactions
Route::get('/SearchTransaction', 'TransactionsController@Search_Transaction');
Route::get('/EtherTransaction', 'TransactionsController@Ether_Transaction');