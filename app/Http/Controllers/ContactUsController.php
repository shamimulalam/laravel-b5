<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function viewContactUsFile()
    {
        // php artisan
        $data['heading'] = 'From Contact Us File';
        $data['paragraph'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem eaque itaque laudantium magni maxime nobis perferendis placeat possimus quisquam! Aspernatur, assumenda dolorem doloribus laborum officiis quo soluta vitae voluptates.';
        return view('contact_us_file',$data);
    }
}
