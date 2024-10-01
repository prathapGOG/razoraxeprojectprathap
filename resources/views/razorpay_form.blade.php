<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Razorpay Payment Form</h2>
    <form id="razorpay-form" method="POST" action="{{ route('razorpay.payment') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="amount">Amount (INR):</label>
        <input type="number" id="amount" name="amount" required><br><br>

        <button type="submit" id="continue-btn">Proceed to Payment</button>
    </form>

</body>
</html>
