<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('support.chat.index');
    }
}
