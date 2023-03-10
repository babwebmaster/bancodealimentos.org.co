<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'linkSpanish',
        'linkEnglish',
        'linkFrench'
    ];
}
