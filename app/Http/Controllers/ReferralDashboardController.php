<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralDashboardController extends Controller
{
    public function __invoke()
    {
        return view('referrals.index');
    }
}
