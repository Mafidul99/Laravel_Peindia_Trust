<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function terms()
    {
        return view('Frontend.Pages.terms');
    }
}
