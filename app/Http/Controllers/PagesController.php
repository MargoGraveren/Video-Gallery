<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        $header = 'Kontakt';
        $content = 'Ul. Królewska 11 Lublin';
        return view('pages.contact', compact('header', 'content'));
    }

    public function about(){
        $header = 'O nas';
        $content = 'Dosłownie kilka słów o nas.';
        $date = '11/09/2019';
        return view('pages.about', compact('header', 'content', 'date'));
    }

    public function start(){
        $header = 'Witamy!';
        return view('pages.start', compact('header'));
    }
}
