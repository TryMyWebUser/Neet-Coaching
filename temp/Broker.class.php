<?php
 
require_once __DIR__ . '/vendor/autoload.php';
require "Mailer.class.php";

session_start();

// Handle both JSON and FormData submissions
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
    exit();
}

// Check if data is coming from FormData or JSON
if (!empty($_POST)) {
    $applicantDetails = [
        "fullName" => $_POST["fullName"] ?? null,
        "email" => $_POST["email"] ?? null,
        "phoneNumber" => $_POST["phoneNumber"] ?? null,
        "subject" => $_POST["subject"] ?? null,
        "message" => $_POST["message"] ?? null,
    ];
} else {
    // JSON-based request handling
    $requestData = json_decode(file_get_contents("php://input"), true);
    if (!$requestData || !isset($requestData["applicantData"])) {
        echo json_encode(["success" => false, "message" => "Invalid form data received"]);
        exit();
    }
    $applicantDetails = $requestData["applicantData"];
}

// Validate required fields for both forms (without resume)
foreach (["fullName", "email", "phoneNumber", "message"] as $key) {
    if (empty($applicantDetails[$key])) {
        echo json_encode(["success" => false, "message" => ucfirst($key) . " is required"]);
        exit();
    }
}

// Initialize the Mailer class
$emailService = new Mailer();

// Otherwise, it's a contact form
$emailResult = $emailService->sendContactEmail(
    $applicantDetails["fullName"],
    $applicantDetails["email"],
    $applicantDetails["subject"],
    $applicantDetails["phoneNumber"],
    $applicantDetails["message"]
);

// Return the result of the email sending
if ($emailResult["success"]) {
    echo json_encode([
        "success" => true,
        "message" => "Your application has been submitted successfully.",
        "email_status" => true
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "There was an issue sending your email. Please try again later.",
        "email_status" => false
    ]);
}

?>