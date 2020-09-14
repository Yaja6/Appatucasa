<?php

namespace App\Policies;

use App\Dealer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DealerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any dealers.
     *
     * @param  \App\User  $user
     * @return mixed
     */

    public function before($user, $ability)
    {
        if ($user->isGranted(User::ROLE_ADMIN)) {
            return true;
        }
    }
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the dealer.
     *
     * @param  \App\User  $user
     * @param  \App\Dealer  $dealer
     * @return mixed
     */
    public function view(User $user, Dealer $dealer)
    {
        return $user->isGranted(User::ROLE_CLIENT) && $user->id === $dealer->user_id;
    }

    /**
     * Determine whether the user can create dealers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_SELLER);
    }

    /**
     * Determine whether the user can update the dealer.
     *
     * @param  \App\User  $user
     * @param  \App\Dealer  $dealer
     * @return mixed
     */
    public function update(User $user, Dealer $dealer)
    {
        return $user->isGranted(User::ROLE_SELLER) && $user->id === $dealer->user_id;
    }

    /**
     * Determine whether the user can delete the dealer.
     *
     * @param  \App\User  $user
     * @param  \App\Dealer  $dealer
     * @return mixed
     */
    public function delete(User $user, Dealer $dealer)
    {
        return $user->isGranted(User::ROLE_ADMIN);
    }

    /**
     * Determine whether the user can restore the dealer.
     *
     * @param  \App\User  $user
     * @param  \App\Dealer  $dealer
     * @return mixed
     */
    public function restore(User $user, Dealer $dealer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dealer.
     *
     * @param  \App\User  $user
     * @param  \App\Dealer  $dealer
     * @return mixed
     */
    public function forceDelete(User $user, Dealer $dealer)
    {
        //
    }
}
