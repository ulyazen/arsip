<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class ArsipController
{
    public function index()
    {
        return view('backend.arsip');
    }
}
