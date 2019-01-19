<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsPanelController extends Controller
{
    public function index()
    {
        return view('settings.information.index');
    }
}
