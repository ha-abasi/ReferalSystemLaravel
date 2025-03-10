<?php

namespace App\Models;

use App\Observers\ReferralCodeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ReferralCodeObserver::class])]
class ReferralCode extends Model
{
    //
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
