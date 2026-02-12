<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand', 'model', 'year', 'cc', 'fuel_type', 'price', 'stock', 'description', 'is_active',
    ];
}
