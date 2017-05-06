<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    public function get(Link $link){
        dd($link);
    }
}
