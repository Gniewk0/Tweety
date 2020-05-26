<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeLine()
        ]);
    }
    
    public function store(){
        $atributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' =>auth()->id(),
            'body' => $atributes['body']
        ]);

        return redirect('/home');
    }
}
