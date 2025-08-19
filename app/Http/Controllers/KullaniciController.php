<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;

class KullaniciController extends Controller
{
    // Sayfayı göster
    public function listele()
    {
        // Tüm kullanıcıları al
        $kullanicilar = Kullanici::all();

        // Blade view'e gönder
        return view('kullanici-liste', compact('kullanicilar'));
    }
   
}
