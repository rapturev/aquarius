<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index() {
        return view('thread.index');
    }
    public function show() {
        return view('thread.show');
    }
    public function create() {
        return view('thread.create');
    }
}
