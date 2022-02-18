<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function Donate()
    {
        return view('Frontend.Donate.donate');
    }
}
