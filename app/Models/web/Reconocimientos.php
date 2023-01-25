<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reconocimientos extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image', 
        'icon', 
        'color', 
        'fecha_anuncio' 
    ];
}
