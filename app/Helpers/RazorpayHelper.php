<?php

namespace App\Helpers;

use Razorpay\Api\Api;

class RazorpayHelper
{
    public static function makePayment(
        $rfnm,
        $amnt,
        $desc,
        $name,
        $email,
        $cont,
        $proc,
        $pan
    ) {
        // Fetch the Razorpay API Key and Secret from .env
        $api_key = env('RAZORPAY_KEY');
        $amnt = $amnt * 100; // Convert amount to paise for Razorpay

        // Razorpay Checkout Script
        echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>';
        echo <<<DELIMETER
        <script>
            function startPayment() {
                var options = {
                    key: "{$api_key}",
                    amount: "{$amnt}",
                    currency: "INR",
                    name: "Guru Puraskar",
                    description: "{$desc}",
                    image: "https://gurupuraskar.com/assets/img/logo.png",
                    prefill: {
                        name: "{$name}",
                        email: "{$email}",
                        contact: "{$cont}"
                    },
                    notes: {
                        address: "Razorpay Corporate Office",
                        process: "{$proc}"
                    },
                    theme: {
                        color: "#3399cc"
                    },
                    callback_url: "https://gurupuraskar.com/payment.php?paymentStatus=success&rfnum={$rfnm}&proc={$proc}&amnt={$amnt}&pan={$pan}&name={$name}&email={$email}&phNum={$cont}"
                };
                var rzp = new Razorpay(options);
                rzp.open();
            }

            startPayment();
        </script>
        DELIMETER;
    }
}
