<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class tokos extends Model
{
    
     use HasFactory;
     protected $table = 'tokos';
    
    protected $fillable = [
        'name',
        'cabang',
    ];
    public function toko()
    {
        return $this->belongsTo(tokosModel::class, 'id_tokos');
    }
}