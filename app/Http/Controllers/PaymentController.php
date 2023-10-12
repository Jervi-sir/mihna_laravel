<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function createPayment(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);
        $amount = $request->input('pay_half') ? $course->price / 2 : $course->price;

        $configurations = [
            'mode' => 'CIB',
            'payment' => [
                'client_name' => auth()->user()->name,
                'client_email' => auth()->user()->email,
                'amount' => $amount,
                'description' => 'Payment for course: ' . $course->title,
            ]
        ];

        $checkout_url = Epay_Invoice::make($configurations);

        // Record this in your database
        $reservation = new Reservation([
            'course_id' => $course->id,
            'student_id' => auth()->user()->id,
            'amount_paid' => $amount,
            'payment_status' => 'pending',
        ]);
        $reservation->save();

        return redirect($checkout_url);
    }

}
