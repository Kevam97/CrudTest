<?php

namespace App\Observers;

use App\Mail\AdminReport;
use App\Mail\UserResgistred;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // $admin = User::role('itern')->first();

        Mail::to($user->email)->send(new UserResgistred($user));
        Mail::to('test@example.com')->send(new AdminReport());
    }

    // /**
    //  * Handle the User "updated" event.
    //  */
    // public function updated(User $user): void
    // {
    //     //
    // }

    // /**
    //  * Handle the User "deleted" event.
    //  */
    // public function deleted(User $user): void
    // {
    //     //
    // }

    // /**
    //  * Handle the User "restored" event.
    //  */
    // public function restored(User $user): void
    // {
    //     //
    // }

    // /**
    //  * Handle the User "force deleted" event.
    //  */
    // public function forceDeleted(User $user): void
    // {
    //     //
    // }
}
