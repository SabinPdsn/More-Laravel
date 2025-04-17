<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{

    // public function index show store update destroy
    public function index(User $user){
        return $user->hasRole('editor') && $user->hasPermissionTo('edit posts');
}
}
