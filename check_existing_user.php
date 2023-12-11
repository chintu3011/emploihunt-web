<?php

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the mobile number from the query parameters
    $phoneNumber = isset($_GET['mobile']) ? $_GET['mobile'] : '';

    // Validate the phone number (you may need to implement your validation logic)
    if (!isPhoneNumberValid($phoneNumber)) {
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Invalid phone number']);
        exit;
    }

    // Call your API or perform necessary operations here
    $apiUrl = 'https://api.emploihunt.com/api/signin/check_user_existing?mobile=' . urlencode($phoneNumber);

    // Make cURL request
    $response = file_get_contents($apiUrl);

    // Check if the response is successful (status code 200)
    if ($response !== false) {
        $responseData = json_decode($response, true);
        if ($responseData['status'] == 200) {
            // API response is 200
            echo json_encode(['status' => 200]);
        } else {
            // Handle other response statuses if needed
            http_response_code(404); 
            echo json_encode(['error' => 'API response status: ' . $responseData['status']]);
        }
    } else {
        // Handle cURL request failure
        http_response_code(404); // Internal Server Error
        echo json_encode(['error' => 'Failed to login beacuse user not exist']);
    }
} else {
    // Handle other HTTP methods if needed
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method Not Allowed']);
}

// Function to validate the phone number (you may need to implement your validation logic)
function isPhoneNumberValid($phoneNumber) {
    // Implement your validation logic here
    // Return true if valid, false otherwise
    return true;    
}

?>