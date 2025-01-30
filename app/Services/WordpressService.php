<?php

namespace App\Services;

use App\Interfaces\PostInterface;

class WordpressService implements PostInterface
{
    public function publishPost($title, $content)
    {
        // TODO: Implement publishPost() method.
        info('Publish Post in WordPress');
    }

    public function getPostDetails($postId)
    {
        info('Get Post Details from WordPress');
    }
}
