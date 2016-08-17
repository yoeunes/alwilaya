<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebsiteController extends Controller {

    public function home() {
        return view('welcome');
    }
    public function contactUs() {
        return view('website.contactUs');
    }
}
