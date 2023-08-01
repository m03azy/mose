<?php
    require_once "menu.php";
    require "php/connection.php";
    require "header.php";
    
?>

    <div class="card">
        <h1>Chatbot</h1>
        <div id="chatbox"></div>
        <input type="text" id="userInput" placeholder="Ask a question">
        <button onclick="sendMessage()">Send</button>
    </div>
  

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


</body>
</html>
