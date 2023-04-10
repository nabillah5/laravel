<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class admis extends Model
{
    
     use HasFactory;
     protected $table = 'admis';
    
    protected $fillable = [
        'name',
        'kode',
    ];
    public function admis()
    {
        return $this->belongsTo(admisModel::class, 'id_admis');
    }
}