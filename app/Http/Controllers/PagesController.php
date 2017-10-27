<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About us';
        return view('pages.about', compact('title'));
    }
    public function form(){
        $title = 'Form';
        return view('pages.form', compact('title'));
    }
     public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'Support']
        );
        return view('pages.services')->with($data);
    }

}
 