<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        return view('frontend.index');
    }



    function about() {

        return view('frontend.about');
    }


    function categoryArchive($slug) {
        dd($slug);
    }



}
