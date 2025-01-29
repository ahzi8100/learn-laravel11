<?php

namespace App\Http\Controllers;

use App\Helper;
use Illuminate\Http\Request;

class TestHelperController extends Controller
{
    public function index()
    {
        $newDate = Helper::mdYToymd('03/01/2024');
        $newDate2 = Helper::ymdTomdY('2024-03-01');

        dd($newDate, $newDate2);
    }
}
