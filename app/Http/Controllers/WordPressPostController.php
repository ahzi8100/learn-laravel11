<?php

namespace App\Http\Controllers;

use App\Services\WordpressService;
use Illuminate\Http\Request;

class WordPressPostController extends Controller
{
    protected $wordpressService;
    public function __construct(WordpressService $wordpressService)
    {
        $this->wordpressService = $wordpressService;
    }

    public function index(Request $request)
    {
        $this->wordpressService->publishPost('This title', 'This content');

        return response()->json(['message' => 'Post published successfully!']);
    }
}
