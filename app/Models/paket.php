<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';     // tablo adı
    protected $primaryKey = 'id';   // primary key
    public $timestamps = false;     // timestamps yok

    protected $fillable = [
        'paket_adi', 'dakika', 'sms', 'internet'
    ];

    // Paket ile ilişkili kullanıcılar
    public function kullanicilar()
    {
        return $this->hasMany(Kullanici::class, 'mevcut_paket', 'paket_adi');
    }
}
