<?php
    include "./layout/header.php";
    include "./layout/sidebar.php";
?>
<title>AI Assistant</title>
<div class="chatbot-container mt-5">
    <div class="card bg-secondary border border-secondary">
        <div class="card-header bg-secondary text-info">
            <h5 class="mb-0 text-info">AI Assistant</h5>
        </div>
        <div class="card-body p-0 bg-secondary">
            <div class="chat-messages bg-dark p-3" id="chat-messages" style="height: 300px; overflow-y: auto;"></div>
            <div class="input-group p-3 border-top">
                <input type="text" class="text-white bg-dark border border-secondary form-control" id="user-message">
                <button class="btn btn-dark text-info" id="send-message">
                    <i class="bi bi-send-fill"></i> Send
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap and dependencies -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<!-- Chatbot JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const userInput = document.getElementById('user-message');
    const sendBtn = document.getElementById('send-message');
    
    // Generate session ID
    const sessionId = 'session-' + Math.random().toString(36).substring(2, 11);
    
    // Add message to chat
    function addMessage(role, content) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `mb-2 ${role}-message`;
        
        const messageContent = document.createElement('div');
        messageContent.className = role === 'user' ? 'bg-primary text-white p-2 rounded' : 'bg-light p-2 rounded';
        messageContent.style.maxWidth = '80%';
        messageContent.style.wordWrap = 'break-word';
        messageContent.style.float = role === 'user' ? 'right' : 'left';
        messageContent.style.clear = 'both';
        
        messageContent.innerHTML = `
            <strong>${role === 'user' ? 'You' : 'Assistant'}:</strong>
            <div>${content}</div>
            <div class="text-end small text-muted">${new Date().toLocaleTimeString()}</div>
        `;
        
        messageDiv.appendChild(messageContent);
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Send message to server
    async function sendMessage() {
        const message = userInput.value.trim();
        if (!message) return;
        
        addMessage('user', message);
        userInput.value = '';
        
        try {
            const response = await fetch('./chat.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    message: message,
                    sessionId: sessionId
                })
            });
            
            const data = await response.json();
            
            if (data.reply) {
                addMessage('assistant', data.reply);
            } else {
                addMessage('assistant', data.error || "Sorry, I couldn't process your request.");
            }
        } catch (error) {
            console.error('Error:', error);
            addMessage('assistant', "Failed to connect to the chatbot service.");
        }
    }
    
    // Event listeners
    sendBtn.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    
    // Initial greeting
    setTimeout(() => {
        addMessage('assistant', "Hello! How can I help you today?");
    }, 500);
});
</script>
<?php
    include "./layout/footer.php";
?>