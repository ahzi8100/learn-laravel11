<?php

namespace App\Services;

use App\Interfaces\PostInterface;

class ShopifyService implements PostInterface
{
    public function publishPost($title, $content)
    {
        info('publish post in shopify');
    }

    public function getPostDetails($postId)
    {
        info('get post details in shopify');
    }
}
