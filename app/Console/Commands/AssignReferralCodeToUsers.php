<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AssignReferralCodeToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:assign-referral-code-to-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign referral code to each user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::query()
            ->doesntHave('referralCode')
            // when using chunk, it will execute the callback function for each chunk of 100 users
            // it's useful when you have a lot of users and you don't want to load all of them at once
            // and you want to process them in batches
            ->chunk(100, function ($users) {
                $users->each(function ($user) {
                    $user->referralCode()->create();
                });
            });

        $this->info('Referral code assigned successfully.');
    }
}
