<?php

Route::group(['prefix' => 'admin', 'middleware' => ['login']], function(){
    Route::get('/updateposition/{$userid}/{$position}', 'Web\Owner@updatePositionOfUser')->name('admin.updateposition');
});