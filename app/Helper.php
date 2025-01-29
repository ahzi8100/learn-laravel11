<?php

namespace App;

use Carbon\Carbon;

class Helper
{
    public static function ymdTomdY($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }

    public static function mdYToymd($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
