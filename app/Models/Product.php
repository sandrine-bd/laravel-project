<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'state',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
