<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Dumpable;

class Post extends Model
{
    use Sluggable, Dumpable;

    protected $fillable = [
        'title', 'slug', 'content'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->generateSlug($value);
        $this->dump($this->attributes);
    }
}
