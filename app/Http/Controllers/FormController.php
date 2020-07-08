<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show()
    {
        return view('submit');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url|max:255',
            'description' => 'required|max:255'
        ]);

        $link = tap(new \App\Link($data))->save();

        return redirect('/');
    }
}
