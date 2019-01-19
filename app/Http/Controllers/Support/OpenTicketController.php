<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpenTicketController extends Controller
{
    public function index()
    {
        return view('support.open-ticket.index');
    }
}
