<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller 
{
    public function show() 
    {
        $user = User::joinWith('profile.city.country')->find(1);
        echo __('The first user profile country is: ') . $user->profile->city->country->name . PHP_EOL;
    }
}
