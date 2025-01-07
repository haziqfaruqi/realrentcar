<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    public function show(User $user){
        $user = User::find($user->id);
        $notificationsCount = Auth::user()->unreadNotifications->count();
        $notifications = Auth::user()->notifications;
        return view('admin.clientDetails', compact('user', 'notifications', 'notificationsCount'));
    }

    public function create(){
        return view('admin.addAdmin');
    }
}
