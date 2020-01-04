<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function viewAboutFile(Request $request){
        $data['heading'] = $request->head;
        return view('about_file',$data);
    }
}
