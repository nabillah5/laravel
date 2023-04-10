<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    
     use HasFactory;
     protected $table = 'barangs';
    
    protected $fillable = [
        'kode',
        'jumlah',
    ];
    public function barangs()
    {
        return $this->belongsTo(barangsModel::class, 'id_barangs');
    }
}