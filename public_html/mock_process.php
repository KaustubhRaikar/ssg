<?php
header('Content-Type: application/json');

// This file serves as a mockup for processing donations.
// In a real scenario, this would integrate with Razorpay, Stripe, PayU, etc.,
// and then use a library like PHPMailer or TCPDF to actually generate PDFs and send emails.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate posted variables
    $rawName = trim($_POST['name'] ?? 'Donor');
    $name = htmlspecialchars(strip_tags($rawName), ENT_QUOTES, 'UTF-8');
    if (empty($name)) {
        $name = 'Donor';
    }

    $rawEmail = trim($_POST['email'] ?? '');
    if (filter_var($rawEmail, FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($rawEmail, ENT_QUOTES, 'UTF-8');
    } else {
        $email = 'Not provided';
    }

    $rawMobile = trim($_POST['mobile'] ?? '');
    $mobile = preg_replace('/[^0-9+ -]/', '', $rawMobile);
    if (empty($mobile)) {
        $mobile = 'Not provided';
    }

    $rawActivity = trim($_POST['activity'] ?? 'General Fund');
    $activity = htmlspecialchars(strip_tags($rawActivity), ENT_QUOTES, 'UTF-8');

    $rawAmount = trim($_POST['amount'] ?? '0');
    $amountNum = floatval($rawAmount);
    $amount = ($amountNum > 0) ? number_format($amountNum, 2, '.', '') : '0';

    $rawPan = strtoupper(trim($_POST['pan'] ?? ''));
    $pan = preg_replace('/[^A-Z0-9]/', '', $rawPan);
    if (empty($pan)) {
        $pan = 'Not provided';
    }

    $need80G = (isset($_POST['80g_benefit']) && strtolower($_POST['80g_benefit']) === 'yes') ? 'Yes' : 'No';
    $paymentMethod = htmlspecialchars(strip_tags($_POST['payment_method'] ?? 'Unknown'), ENT_QUOTES, 'UTF-8');

    // Mock processing logic (Simulate a successful payment generation)
    $paymentAckNo = 'SSG-' . strtoupper(uniqid()) . '-' . rand(1000, 9999);
    $transactionDate = date("d-M-Y h:i A");

    // Return sanitized JSON response
    echo json_encode([
        'status' => 'success',
        'message' => 'Payment processed successfully and emails mocked.',
        'transaction_id' => $paymentAckNo,
        'amount' => $amount,
        'name' => $name,
        'email' => $email,
        'activity' => $activity,
        'date' => $transactionDate
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid Request Method.'
    ]);
}
?>