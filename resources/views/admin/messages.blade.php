<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения пользователей</title>
</head>
<body>
    <h1>Сообщения пользователей</h1>
    <div id="messages-container">
        <!-- Сообщения будут загружаться сюда -->
    </div>

    <script>
        // Получаем все сообщения с сервера
        fetch('/admin/messages')
            .then(response => response.json())
            .then(messages => {
                const messagesContainer = document.getElementById('messages-container');
                messages.forEach(message => {
                    const messageElement = document.createElement('div');
                    messageElement.textContent = message.content;
                    messagesContainer.appendChild(messageElement);
                });
            })
            .catch(error => console.error('Error fetching messages:', error));
    </script>
</body>
</html>
