<div id="chatbox" class="chatbox">
  <div id="chat-header" class="chat-header">
    <span>Чат с поддержкой</span>
    <button id="close-chat" class="close-chat">×</button>
  </div>
  <div id="chat-body" class="chat-body">
    <div class="message-container">
      <!-- Здесь будут отображаться сообщения -->
    </div>
  </div>
  <input id="chat-input" class="chat-input" type="text" placeholder="Напишите сообщение..." />
  <button id="send-chat" class="send-chat">Отправить</button>
</div>

<!-- Кнопка для открытия чата -->
<button id="open-chat" class="open-chat">Открыть чат</button>

<script>
    document.getElementById('send-chat').addEventListener('click', function() {
        const message = document.getElementById('chat-input').value;
        
        if (message.trim()) {
            fetch('/messages', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    content: message,
                }),
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('chat-input').value = ''; // Очищаем поле ввода
                console.log('Message sent:', data);
            })
            .catch(error => console.error('Error sending message:', error));
        }
    });
</script>
