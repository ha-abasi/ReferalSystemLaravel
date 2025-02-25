<?php

namespace App\Models\Traits;

use App\Models\ReferralCode;

trait HasReferrals
{
    public function referralCode()
    {
        return $this->hasOne(ReferralCode::class);
    }

    public function getReferralUrl(){
        return route("referral.index", ['referralCode' => $this->referralCode->code]);
    }
}
