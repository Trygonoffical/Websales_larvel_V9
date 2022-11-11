<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDataLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()

    {   $users = ''; 
        if(Auth::user()->role == 'admin'){

            $users = User::all();
            return view('admindash.users', compact('users') );
        } 
        return view('admindash.users', compact('users'));
    }
}
