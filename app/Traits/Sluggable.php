<?php

namespace App\Traits;

trait Sluggable
{
    public function generateSlug($string)
    {
        $slug = strtolower(str_replace(' ', '-', $string));
        $count = 1;

        while ($this->slugExist($slug))
        {
            $slug = strtolower(str_replace(' ', '-', $string) . '-' . $count);
            $count++;
        }

        return $slug;
    }

    protected function slugExist($slug)
    {
        return static::where('slug', $slug)->exists();
    }
}
