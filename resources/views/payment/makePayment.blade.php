@extends('layouts\myapp')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold text-center mb-6">Make Payment</h1>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <p class="text-gray-700 text-base mb-4">
            <span class="font-semibold text-gray-800">Reservation ID:</span> 
            <span class="text-gray-600">{{ $reservation->id }}</span> <br>
            <span class="font-semibold text-gray-800">Total Amount:</span> 
            <span class="text-green-600">
                RM{{ number_format($reservation->total_price - ($reservation->total_price * 85 / 100) + $reservation->total_price, 2) }}
            </span>
        </p>
            
        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
            <div class="mb-4">
                <label for="payment_method" class="block text-gray-700 text-sm font-bold mb-2">Choose Payment Method:</label>
                <select id="payment_method" name="payment_method" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">-- Select Payment Method --</option>
                    <option value="credit_card">Credit/Debit Card</option>
                    <option value="fpx">FPX Payment</option>
                </select>
            </div>
            <button type="submit" class="bg-green-600 p-3 text-white font-bold hover:bg-green-800 w-full rounded-md">
                Proceed to Pay
            </button>
        </form>        
    </div>
</div>
@endsection
