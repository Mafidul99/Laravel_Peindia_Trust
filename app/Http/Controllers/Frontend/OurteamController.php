<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function ourteam()
    {
        return view('Frontend.Pages.ourteam');
    }
}
