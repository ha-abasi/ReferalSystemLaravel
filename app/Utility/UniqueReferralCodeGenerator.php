<?php

namespace App\Utility;

use App\Models\ReferralCode;
use Illuminate\Support\Str;

/**
 * This class generates unique referral codes
 */
class UniqueReferralCodeGenerator
{
    public function generate(){
        $code = Str::random(8);
        // check if the code already exists in the database
        while (ReferralCode::where('code', $code)->exists()){
            $code = Str::random(8);
        }
        return $code;
    }
}
