<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCifras extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function cifras()
    {
        return $this->belongsToMany(Cifras::class, 'cifras_category_cifras')->withTimestamps();
    }
}
