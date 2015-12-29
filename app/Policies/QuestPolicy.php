<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Quest;


class QuestPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Quest $quest)
    {
        return $user->owns($quest);
    }

    public function view(User $user, Quest $quest)
    {
        //
    }

}
