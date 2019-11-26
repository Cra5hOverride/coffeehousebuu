<?php

Route::group(['prefix' => 'staff', 'middleware' => ['login']], function(){
    Route::get('/viewcustomer', 'Web\StaffController@viewcustomer')->name('staff.viewcustomer');
    Route::get('/addcustomer', 'Web\StaffController@addCustomer')->name('staff.addCustomer');
    Route::get('/viewmenu', 'Web\StaffController@viewmenu')->name('staff.viewmenu');
    Route::get('/viewpromotion', 'Web\StaffController@viewpromotion')->name('staff.viewpromotion');
    Route::get('/viewbill', 'Web\StaffController@viewbill')->name('staff.viewbill');
    Route::get('/viewclaim', 'Web\StaffController@viewclaim')->name('staff.viewclaim');
    Route::get('/vieworderproduct', 'Web\StaffController@vieworderproduct')->name('staff.vieworderproduct');
    Route::get('/viewreceiveclaim', 'Web\StaffController@viewreceiveclaim')->name('staff.viewreceiveclaim');
    Route::get('/viewreceiveproduct', 'Web\StaffController@viewreceiveproduct')->name('staff.viewreceiveproduct');
    Route::get('/viewshowstock', 'Web\StaffController@viewshowstock')->name('staff.viewshowstock');
    Route::get('/viewhome', 'Web\StaffController@viewhome')->name('staff.viewhome');
});