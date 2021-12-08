<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index() {
        // return 'Homepage';
        return view('index');
    }
    function about() {
        return view('about');
    }

    function services() {
        return view('services');
    }

    function team() {
        return view('team');
    }

    function contact() {
        return view('contact');
    }

    function user($name, $age) {
        // return view('user.index')->with('name', $name)->with('age', $age);
        // return view('user.index', compact('name', 'age'));
        return view('user.index', [
            'name' => $name,
            'age' => $age
        ]);
    }
}
