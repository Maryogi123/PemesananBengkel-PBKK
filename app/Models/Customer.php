<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];

    public $timestamp = false;

    public function dataTambahanKeluhan(){
        return $this->hasMany(Keluhan::class,'customer_id');
    }
}
