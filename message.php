<?php
    require_once "menu.php";
    require "php/connection.php";
    require "header.php";
    
?>


    <h1>Chatbot</h1>
    <div id="chatbox"></div>
    <input type="text" id="userInput" placeholder="Ask a question">
    <button onclick="sendMessage()">Send</button>

    <script>
        function addBotResponse(message) {
            var chatbox = document.getElementById('chatbox');
            chatbox.innerHTML += '<p><strong>Bot:</strong> ' + message + '</p>';
        }

        function sendMessage() {
            var userInput = document.getElementById('userInput').value;
            var chatbox = document.getElementById('chatbox');
            chatbox.innerHTML += '<p><strong>You:</strong> ' + userInput + '</p>';

            // Send user input to the server for processing
            fetch('process.php', {
                method: 'POST',
                body: JSON.stringify({ userMessage: userInput }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Display the bot's response
                addBotResponse(data.botResponse);
            })
            .catch(error => {
                console.error('Error:', error);
            });

            // Clear the input field after sending the message
            document.getElementById('userInput').value = '';
        }
    </script>

<?php
    // Read the user input from the JSON request
    $data = json_decode(file_get_contents('php://input'), true);

    // Load the responses from the JSON file
    $responsesData = json_decode(file_get_contents('chatbot_responses.json'), true);
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
</body>
</html>
