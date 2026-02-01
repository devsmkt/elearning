<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});


Route::get('cron', 'CronController@cron')->name('cron');




Route::get('app/deposit/confirm/{hash}', 'Gateway\PaymentController@appDepositConfirm')->name('deposit.app.confirm');
Route::get('donation/payment/confirm', 'Gateway\PaymentController@donationDepositConfirm')->name('donation.payment.confirm');
Route::get('donation/payment/manual', 'Gateway\PaymentController@donationManualDepositConfirm')->name('donation.payment.manual.confirm');
Route::post('donation/payment/manual', 'Gateway\PaymentController@donationManualDepositUpdate')->name('donation.payment.manual.update');


Route::controller('SiteController')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('placeholder-image/{size}', 'placeholderImage')->withoutMiddleware('maintenance')->name('placeholder.image');
 
});

