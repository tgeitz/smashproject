<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('user.dashboard', ['user' => $user ]);
    }
};