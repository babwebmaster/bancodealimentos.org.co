<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideDonors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'status'
    ];
}
