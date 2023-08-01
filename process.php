<?php
    // Read the user input from the JSON request
    $data = json_decode(file_get_contents('php://input'), true);

    // Load the responses from the JSON file
    $responsesData = json_decode(file_get_contents('js/message.json'), true);
    $responses = $responsesData['responses'];

    // Find a matching response for the user input
    $botResponse = "I'm sorry, I don't understand.";
    foreach ($responses as $response) {
        if (strtolower($response['question']) === strtolower($data['userMessage'])) {
            $botResponse = $response['answer'];
            break;
        }
    }

    // Prepare the response as JSON
    $response = array('botResponse' => $botResponse);
    header('Content-Type: js/message.json');
    echo json_encode($response);
?>