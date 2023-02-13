<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CifrasCategoryCifra extends Model
{
    use HasFactory;
    protected $fillable = [
        'cifras_id',
        'category_cifras_id'
    ];
}
