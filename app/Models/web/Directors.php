<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'name',
        'description',
        'image',
    ];
}
