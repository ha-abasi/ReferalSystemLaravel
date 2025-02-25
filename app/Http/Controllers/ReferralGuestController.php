<?php

namespace App\Http\Controllers;

use App\Models\ReferralCode;
use Illuminate\Http\Request;

class ReferralGuestController extends Controller
{
    public function __invoke(ReferralCode $referralCode, Request $request)
    {
        return view('referral-guest.index', ['referral' => $referralCode]);
    }
}
