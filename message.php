<?php   
    // require "header.php";
    // require_once "menu.php";
    require "php/connection.php";
 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/sample.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
  <nav>
      <ul>
        <li><a href="images/evmack.png" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="dashboard.php">
          <i class="fas fa-id-card"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="message.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="tasks.php">
          <i class="fas fa-list"></i>
          <span class="nav-item">tasks</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">profile</span>
        </a></li>
        <li><a href="setting.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

<center>
    <div class="card">
        <h1>chatbot</h1>
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

</center>
<?
    // require "footer.php";
?>
</body>
</html>
