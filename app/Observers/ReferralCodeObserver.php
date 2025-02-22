<?php

namespace App\Observers;

use App\Models\ReferralCode;
use App\Utility\UniqueReferralCodeGenerator;
use Illuminate\Support\Str;

class ReferralCodeObserver
{
    /**
     * Handle the ReferralCode "created" event.
     */
    public function created(ReferralCode $referralCode): void
    {
        //
    }

    public function creating(ReferralCode $referralCode): void
    {
        // Generate a unique referral code
        $referralCode -> code = (new UniqueReferralCodeGenerator)->generate();
    }

    /**
     * Handle the ReferralCode "updated" event.
     */
    public function updated(ReferralCode $referralCode): void
    {
        //
    }

    /**
     * Handle the ReferralCode "deleted" event.
     */
    public function deleted(ReferralCode $referralCode): void
    {
        //
    }

    /**
     * Handle the ReferralCode "restored" event.
     */
    public function restored(ReferralCode $referralCode): void
    {
        //
    }

    /**
     * Handle the ReferralCode "force deleted" event.
     */
    public function forceDeleted(ReferralCode $referralCode): void
    {
        //
    }
}
