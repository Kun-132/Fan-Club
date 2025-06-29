<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'), true);
$userEmail = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(strip_tags($data['message']));

if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
    exit;
}

$apiKey = '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';
$adminEmail = 'phyomo2904@gmail.com';
$senderEmail = 'phyo.cwb@gmail.com';

$emailData = [
    'sender' => ['name' => 'Website Form', 'email' => $senderEmail],
    'to' => [['email' => $adminEmail]],
    'replyTo' => ['email' => $userEmail],
    'subject' => 'New Contact from ' . $userEmail,
    'htmlContent' => "<p><strong>From:</strong> {$userEmail}</p><p>" . nl2br($message) . "</p>"
];

$ch = curl_init('https://api.brevo.com/v3/smtp/email');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
    'api-key: ' . $apiKey,
    'Content-Type: application/json',
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($emailData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$responseJson = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$response = json_decode($responseJson, true);
$errorMsg = $response['message'] ?? ($response['error']['message'] ?? 'No message returned');

echo json_encode([
    'success' => $httpCode === 201,
    'message' => $httpCode === 201
        ? 'Message sent successfully!'
        : "Failed to send message. Brevo response status: $httpCode. Error: $errorMsg"
]);

