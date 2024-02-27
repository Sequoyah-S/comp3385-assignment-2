<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
// ...
Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
 ->send(new Feedback($fullname, $email, $comment));