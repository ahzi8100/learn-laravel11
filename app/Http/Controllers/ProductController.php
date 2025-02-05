<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $input = [
            'name' => 'Gold',
            'body' => 'This is a Gold',
            'status' => ProductStatus::Active
        ];

        $product = Product::create($input);
        $product->dd();
    }
}
