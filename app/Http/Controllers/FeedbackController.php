<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class FeedbackController extends Controller 
{
    public function create()
    {
        return view('feedback');
    }
    public function send(Request $request)
    {

    }
}

