<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\TestMarkdownMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function bar () {

        // $user = ['email' => 'user@mail.user', 'name' => 'Denzel'];

        // Mail::to($user['email'])->send(new TestMail($user));

        Mail::to('test@gmail.com')->send(new TestMarkdownMail());

        return view('emails.test');
    }
}


