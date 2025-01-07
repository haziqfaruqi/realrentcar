<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class adminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $clients = User::where('role', 'client')->count();
        $admins = User::where('role', 'admin')->count();
        $cars = Car::all();

        $reservations = Reservation::paginate(8);
        $avatars = User::all();
        
        $notifications = Auth::user()->notifications;
        $notificationsCount = Auth::user()->unreadNotifications->count();

        return view('admin.adminDashboard', compact('clients', 'avatars', 'admins', 'cars', 'reservations', 'notifications', 'notificationsCount'));
    }
}
