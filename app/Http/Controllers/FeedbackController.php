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
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email',
            'comments' => 'required',
        ]);

        $fullName = $request->input('full_name');
        $email = $request->input('email');
        $comments = $request->input('comments');
    }
     public function showSuccess()
    {
        return view('feedback.success');
    }
}

