<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class PaymentController extends Controller
{
    public function showPaymentPage($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);
        return view('payment.makePayment', compact('reservation'));
    }

    // public function processPayment(Request $request)
    // {
    //     $request->validate([
    //         'payment_method' => 'required',
    //     ]);

    //     $paymentMethod = $request->payment_method;

    //     if ($paymentMethod === 'credit_card') {
    //         // Redirect or integrate with credit card payment gateway
    //     } elseif ($paymentMethod === 'fpx') {
    //         // Redirect or integrate with FPX payment gateway
    //     }

    //     return redirect()->route('clientReservation')->with('success', 'Payment successfully processed.');
    // }

    public function processPayment(Request $request)
    {
        $reservation = Reservation::findOrFail($request->reservation_id); 

        // dd($reservation);
        $reservation->update(['payment_status' => 'Paid']);

        return redirect()->route('clientReservation')->with('success', 'Payment processed successfully.');
    }
}
