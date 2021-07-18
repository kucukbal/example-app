<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FollowsController extends Controller
{
   /**
     * Class constructor.
     */
    public function __construct()
    {
        $this-> middleware('auth');
    }
    public function store(User $user)
    {
        
        return auth()->user()->following()->toggle($user->profile);
        // auth()->user()->following()->toggle($user->profile());
        // 
    }
}
