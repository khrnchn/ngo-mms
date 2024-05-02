<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Members\Resources\PaymentResource;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('member-checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('prod_Q1wSNQshk8amEI', 'price_1PBsZMFnEos8XaF9a0XFjnR9')
        ->checkout([
            'success_url' => route('success'),
            'cancel_url' => route('success'),
        ]);
})
    ->name('member-checkout');

Route::view('success', 'Success')
    ->name('success');

Route::get('/success', function () {
    return 'Success!';
})->name('success');