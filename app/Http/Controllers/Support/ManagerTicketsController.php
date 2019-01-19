<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerTicketsController extends Controller
{
    public function index()
    {
        return view('support.manager-tickets.index');
    }
}
