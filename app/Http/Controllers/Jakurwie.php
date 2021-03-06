<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
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
