<?php

use App\Http\Controllers\KullaniciController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    $kullanicilar = \App\Models\Kullanici::all();
    return view('login', compact('kullanicilar'));
});
Route::get('/kullanicilar', [KullaniciController::class, 'listele'])->name('kullanicilar.listele');

Route::post('/profile', function (Illuminate\Http\Request $request) {
    $kullanici = \App\Models\Kullanici::findOrFail($request->kullanici_id);
    return view('profile', compact('profile'));
})->name('profile');

Route::get('/paketler', function () {
    $paketler = \App\Models\Paket::all();
    return view('paketler', compact('paketler'));
})->name('paketler');

Route::post('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/profile', function (Illuminate\Http\Request $request) {
    
    
    return view('profile', compact('kullanici', 'paket', 'internetYuzde', 'dakikaYuzde', 'smsYuzde', 
        'kalanInternet', 'kalanDakika', 'kalanSMS'));
})->name('profile');

Route::get('/uyarilar/{kullanici_id}', function ($kullanici_id) {
    $kullanici = \App\Models\Kullanici::findOrFail($kullanici_id);
    $paket = \App\Models\Paket::findOrFail($kullanici->paket_id);
    
    // Ay sonuna kalan gün hesaplama
    $ayinSonGunu = \Carbon\Carbon::now()->endOfMonth();
    $kalanGun = \Carbon\Carbon::now()->diffInDays($ayinSonGunu);
    
    // Kalan miktar hesaplamaları
    $kalanInternet = $paket->internet - $kullanici->harcanan_internet;
    $kalanInternetYuzde = ($kalanInternet / $paket->internet) * 100;
    
    $kalanDakika = $paket->dakika - $kullanici->harcanan_dakika;
    $kalanDakikaYuzde = ($kalanDakika / $paket->dakika) * 100;
    
    $kalanSMS = $paket->sms - $kullanici->harcanan_sms;
    $kalanSMSYuzde = ($kalanSMS / $paket->sms) * 100;
    
    return view('uyarilar', compact('kullanici', 'paket', 'kalanGun', 'kalanInternetYuzde', 'kalanDakikaYuzde', 'kalanSMSYuzde'));
})->name('uyarilar');
Route::get('/tarifeler', function () {
  
    return view('tarifeler');
});
Route::get('/dashboard', function () {
  
    return view('dashboard', );
});