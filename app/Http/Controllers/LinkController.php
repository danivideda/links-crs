<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function show()
    {
        $links = Link::all();

        return view('welcome', [
            'links' => $links
        ]);
    }
}
