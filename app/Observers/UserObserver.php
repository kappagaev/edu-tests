<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        $this->setPassword($user);
    }

    public function setPassword(User $user)
    {
        if ($user->isDirty('password')) {
            $user->password = bcrypt($user->password);
        }
    }
    /**
     * Handle the user "created" event.
     *
     * @param  \App\=App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\=App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\=App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\=App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\=App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
