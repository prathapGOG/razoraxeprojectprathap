<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Helpers\RazorpayHelper;


class PaymentController extends Controller
{
    public function index()
    {
        return view('razorpay_form');
    }

    public function handlePayment(Request $request)
    {
        // Call the RazorpayHelper makePayment method
        RazorpayHelper::makePayment(
            uniqid(), // Reference number
            $request->input('amount'),
            'Payment for Service',
            $request->input('name'),
            $request->input('email'),
            $request->input('contact'),
            'process_id',
            'PAN_Number'
        );
    }
}
