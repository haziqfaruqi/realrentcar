<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Reservation Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333333;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #ff9b00;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px 40px;
            line-height: 1.6;
        }
        .email-footer {
            background-color: #1f2937;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }
        .info-row {
            margin-bottom: 10px;
        }
        .info-row strong {
            font-weight: bold;
        }
        .cta-button {
            display: inline-block;
            background-color: #ff9b00;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .cta-button:hover {
            background-color: #1f2937;
        }
    </style>
</head>
<body>
    <table class="email-wrapper" cellpadding="0" cellspacing="0" width="100%">
        <!-- Header -->
        <tr>
            <td class="email-header">
                New Reservation Received
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td class="email-body">
                <p>Hello Admin,</p>
                <p>You have received a new reservation. Below are the details:</p>
                
                <div class="info-row">
                    <strong>Customer Name:</strong> {{ $reservation->user->name }}
                </div>
                <div class="info-row">
                    <strong>Email:</strong> {{ $reservation->user->email }}
                </div>
                <div class="info-row">
                    <strong>Car Reserved:</strong> {{ $reservation->car->name }}
                </div>
                <div class="info-row">
                    <strong>Start Date:</strong> {{ $reservation->start_date->format('d-m-Y') }}
                </div>
                <div class="info-row">
                    <strong>End Date:</strong> {{ $reservation->end_date->format('d-m-Y') }}
                </div>
                <div class="info-row">
                    <strong>Total Price:</strong> RM{{ $reservation->total_price }}
                </div>

                <p>If you need to review this reservation, please log in to the admin panel.</p>

                <a href="{{ route('adminDashboard') }}" class="cta-button">View Reservation</a>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td class="email-footer">
                &copy; 2024 DZ Empire Legacy. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>
