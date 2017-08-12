<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OverViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function overview(){
        return view('admin.contents.overview');
    }
}
