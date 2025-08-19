<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    protected $table = 'kullanici';  // tablo adı
    protected $primaryKey = 'id';    // primary key
    public $timestamps = true;       // created_at ve updated_at kullanıyorsan true

    protected $fillable = [
        'adi', 'soyadi', 'numara', 'hat_turu', 'mevcut_paket',
        'kalan_dk', 'kalan_sms', 'kalan_gb',
        'harcanan_dk', 'harcanan_sms', 'harcanan_gb', 'kalan_gun'
    ];

    // Paket ile ilişki (her kullanıcı bir pakete ait)
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'mevcut_paket', 'paket_adi');
    }
    
}
