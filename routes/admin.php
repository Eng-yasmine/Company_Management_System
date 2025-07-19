<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminMainController;


Route::prefix('/admin')->controller(AdminMainController::class)->group(function () {
    Route::get('/', 'index')->name('admin_DashBoard');
});

Route::resource('contacts',ContactController::class)->only(['show','index','destroy']);
