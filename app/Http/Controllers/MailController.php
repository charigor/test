<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSimple;

class MailController extends Controller
{
    public function send() {
        Mail::to('cherychara@gmail.com')->send(new MailSimple());
    }
}
