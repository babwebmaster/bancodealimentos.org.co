<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideMain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content_desktop',
        'content_mobile',
        'status'
    ];
}
