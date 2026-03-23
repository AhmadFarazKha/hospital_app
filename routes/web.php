<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// پبلک انٹرفیس (مریضوں کے لیے)
Route::get('/', [DoctorController::class, 'publicIndex']);
Route::get('/find-doctor', [DoctorController::class, 'publicIndex']);

// ایڈمن انٹرفیس (گروپنگ اور سیکیورٹی کے ساتھ)
Route::middleware(['auth'])->group(function () {
    Route::resource('doctors', DoctorController::class);
});

// اس سے لاگ ان تو کام کرے گا لیکن نئی رجسٹریشن بند ہو جائے گی
Auth::routes(['register' => false]);