<?php

namespace App\Http\Controllers;

use App\Services\ShopifyService;
use Illuminate\Http\Request;

class ShopifyPostController extends Controller
{
    protected $shopifyService;
    public function __construct(ShopifyService $shopifyService)
    {
        $this->shopifyService = $shopifyService;
    }

    public function index(Request $request)
    {
        $this->shopifyService->publishPost('This title', 'This content');

        return response()->json(['message' => 'Post shopify published successfully']);
    }
}
