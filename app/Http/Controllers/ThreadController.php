<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ThreadController extends Controller
{
    public function index() {
//        return view('thread.index');
        return Cache::get('key');
    }
    public function show() {
        return view('thread.show');
    }
    public function create() {
        Thread::create(['name' => "hello"]);
        return view('thread.create'); } }
