<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

class Cifras extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
        'icon',
        'published',
        'category'
    ];
    public function categoryCifras()
    {
        return $this->belongsToMany(CategoryCifras::class,'cifras_category_cifras')->withTimestamps();    
    }
}
