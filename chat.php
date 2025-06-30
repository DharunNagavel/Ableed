<?php
header('Content-Type: application/json');

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Get POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validate input
if (json_last_error() !== JSON_ERROR_NONE || empty($data['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request']);
    exit;
}

// Start/resume session (if you still want session handling)
if (!empty($data['sessionId'])) {
    session_id($data['sessionId']);
    session_start();
    
    // Initialize conversation if it doesn't exist
    if (!isset($_SESSION['conversation'])) {
        $_SESSION['conversation'] = [
            ['role' => 'system', 'content' => 'You are a helpful assistant.']
        ];
    }
    
    // Add user message to conversation
    $_SESSION['conversation'][] = ['role' => 'user', 'content' => $data['message']];
    $messages = $_SESSION['conversation'];
} else {
    // If no session, just use the current message
    $messages = [
        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
        ['role' => 'user', 'content' => $data['message']]
    ];
}

// API configuration (using your new endpoint)
$url = 'https://deepseek-r11.p.rapidapi.com/chat/completions';
$apiKey = 'c99c675c1amsh9d0f92d0a0a05afp1d4091jsncefae81ce4cf';
$apiHost = 'deepseek-r11.p.rapidapi.com';

// Prepare request data (matching your JS example)
$requestData = [
    'model' => 'gemini-1.5-flash',
    'messages' => $messages,
    'stream' => true
];

// Initialize cURL
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($requestData),
    CURLOPT_HTTPHEADER => [
        'x-rapidapi-key: ' . $apiKey,
        'x-rapidapi-host: ' . $apiHost,
        'Content-Type: application/json'
    ],
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYPEER => true
]);

// For streaming response
if ($requestData['stream']) {
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, function($curl, $data) {
        echo $data;
        ob_flush();
        flush();
        return strlen($data);
    });
    
    // Execute the request
    curl_exec($ch);
} else {
    // Regular non-streaming response
    $response = curl_exec($ch);
    
    if ($response === false) {
        http_response_code(500);
        echo json_encode(['error' => 'API connection failed: ' . curl_error($ch)]);
    } else {
        $result = json_decode($response, true);
        
        // Update conversation if using sessions
        if (!empty($data['sessionId']) && isset($result['choices'][0]['message']['content'])) {
            $_SESSION['conversation'][] = [
                'role' => 'assistant', 
                'content' => $result['choices'][0]['message']['content']
            ];
        }
        
        echo $response;
    }
}

// Close connection
curl_close($ch);
exit;
?>