<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function viewAboutFile(){
        return view('about_file');
    }
}
