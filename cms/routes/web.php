<?php
use App\Book;
use App\Buyer_hope;
use Illuminate\Http\Request;


Route::get('/logout',[
'uses' => 'BooksController@getLogout',
'as' => 'user.logout'
]);

/**
* 本のダッシュボード表示(books.blade.php)
*/
//本ダッシュボード表示

Route::get('/','BooksController@index');

Auth::routes();

Route::get('/home', 'BooksController@index')->name('home');

Route::get('/property','PropertyController@index');

// サプライヤーリスト
Route::get('/supplier','SupplierController@index');



// 管理者以上にのみ許容
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    
    // バイヤーリスト取得
    Route::get('/buyer_list','BooksController@buyer_list');
    
    
    Route::get('/buyer_register','BooksController@buyer_register');
    
    // バイヤー登録
    Route::post('/books','BooksController@store');  
    
    //バイヤー更新画面
    Route::post('/buyer_edit/{books}','BooksController@edit');
    
    // バイヤー更新
    Route::post('/buyer/update','BooksController@buyer_update');
    
    //バイヤー削除
    Route::delete('/book/{book}','BooksController@destroy');

    // サプライヤ―更新画面
    Route::post('/supplier_edit/{suppliers}','SupplierController@edit');

    // サプライヤー更新
    Route::post('/supplier/update','SupplierController@update');

    //サプライヤー削除
    Route::delete('/supplier/{supplier}','SupplierController@destroy');

    
    
});

// バイヤーのみ許可
Route::group(['middleware' => ['auth', 'can:buyer']], function () {

    // Route::post('/booksedit/{books}',[
    // 'uses' => 'BooksController@edit',
    // 'as' => 'buyer.edit'
    // ]);
    
    // バイヤー希望物件登録
    Route::post('/hoperegister','Buyer_hopeController@hoperegister');  
    
    Route::get('/hope','Buyer_hopeController@hope');
    
    Route::get('/','Buyer_hopeController@hope_list');
    
    // バイヤー希望物件更新画面　｛｝内はモデル名で通用する
    Route::get('/hopesedit/{buyer_hopes}','Buyer_hopeController@buyer_hope_edit');
    
    // バイヤー希望物件更新
    Route::post('/hope/update','Buyer_hopeController@update');
    
    Route::get('/buyer_register_edit','BooksController@buyer_edit');
    
    //バイヤー用のバイヤー更新画面
    Route::post('/buyer_register_edit/{buyers}','BooksController@edit_buyer');
    
    // バイヤー更新
    Route::post('/books/update','BooksController@update');
    
    // バイヤー登録
    Route::post('/buyer_regist','BooksController@buyer_regist');  
    
    // バイヤー登録画面表示
    Route::get('/buyer_register2','BooksController@buyer_regiview');  


});


// サプライヤー&管理者のみ許可
Route::group(['middleware' => ['auth', 'can:supplier']], function () {

    Route::get('/hope_list','Buyer_hopeController@hope_list_all');
    
    // 物件登録画面
    Route::get('/property_register','PropertyController@property_regiview');
    
    // 物件登録手続き
    Route::post('/property_register','PropertyController@property_register');
    
    // サプライヤー登録画面
    Route::get('/supplier_register','SupplierController@supplier_regiview');
    
    // サプライヤー登録手続き
    Route::post('/supplier_register','SupplierController@supplier_register');
    

});