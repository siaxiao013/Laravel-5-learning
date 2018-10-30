<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function about() {

        $first = 'SSSSIA';
        $last = 'XXXXIAO';

        return view('pages.about')->with(['first'=>'SIA', 'last'=>'XIao']);
    }
}
