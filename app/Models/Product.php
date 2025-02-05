<?php

namespace App\Models;

use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Dumpable;

class Product extends Model
{
    use HasFactory, Dumpable;

    protected $fillable = [
        'name', 'body', 'status'
    ];

    protected $casts = [
        'status' => ProductStatus::class
    ];
}
