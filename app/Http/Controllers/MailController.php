<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Xin Chào',
            'body' => 'Ngon lắm',
        ];
        $body = [
            'title' => 'vip pro'
        ];
        Mail::to(Auth::user()->username)->send(new \App\Mail\TestMail($details, $body));
        trans('passwords.throttled');
    }
}
