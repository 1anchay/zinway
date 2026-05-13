<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Командный чат | IT КМБ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;700&display=swap');
        
        :root {
            --hud-green: #00ff88;
            --hud-blue: #00a2ff;
            --hud-red: #ff2d75;
            --neon-blue: #00f0ff;
            --unity-orange: #f05a22;
        }
        
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #0a0a0a;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(0, 160, 255, 0.03) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(0, 255, 136, 0.03) 0%, transparent 40%),
                linear-gradient(to bottom, rgba(10, 10, 10, 0.95), rgba(20, 20, 20, 0.95));
            color: #e0e0e0;
        }
        
        .hud-font {
            font-family: 'Orbitron', sans-serif;
        }
        
        /* Анимации */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }
        
        @keyframes scan {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Стили для HUD элементов */
        .hud-element {
            border: 1px solid rgba(0, 240, 255, 0.3);
            box-shadow: 0 0 10px rgba(0, 240, 255, 0.1);
        }
        
        .hud-corner {
            width: 30px;
            height: 30px;
            border-color: var(--neon-blue);
            border-width: 2px;
        }
        
        /* Эффект цифрового дождя */
        .matrix-rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><text x="0" y="15" font-family="Courier New" font-size="14" fill="rgba(0,240,255,0.03)">01</text></svg>');
            z-index: 0;
            opacity: 0.3;
        }
        
        /* Сканирующая линия */
        .scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--neon-blue), transparent);
            box-shadow: 0 0 10px var(--neon-blue);
            animation: scan 5s linear infinite;
            opacity: 0.5;
            z-index: 1;
        }
        
        /* Стили для карточек */
        .card-hud {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 240, 255, 0.2);
            background: rgba(20, 20, 30, 0.7);
            transition: all 0.3s ease;
        }
        
        .card-hud:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 240, 255, 0.2);
            border-color: var(--neon-blue);
        }
        
        .card-hud::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                rgba(0, 240, 255, 0.05) 50%,
                transparent 55%
            );
            animation: scan 6s linear infinite;
            z-index: 1;
        }
        
        /* Кнопки в военном стиле */
        .military-btn {
            background: linear-gradient(135deg, #8B9862, #3a86ff);
            color: black;
            font-weight: 700;
            border: 1px solid #2667cc;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .military-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
            background: linear-gradient(135deg, #7a8a52, #2667cc);
        }
        
        /* Аватар с голографическим эффектом */
        .soldier-avatar {
            position: relative;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.3);
            border: 2px solid #3a86ff;
        }
        
        .soldier-avatar::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 45%,
                rgba(0, 240, 255, 0.3) 50%,
                transparent 55%
            );
            transform: rotate(30deg);
            animation: hologram 3s linear infinite;
            z-index: 1;
        }
        
        @keyframes hologram {
            0% { transform: rotate(30deg) translateY(0); }
            100% { transform: rotate(30deg) translateY(100%); }
        }
        
        /* Комментарии в стиле военных сообщений */
        .message-card {
            background: rgba(20, 30, 40, 0.7);
            border-left: 3px solid var(--hud-blue);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .message-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                rgba(0, 240, 255, 0.03) 50%,
                transparent 55%
            );
            animation: scan 8s linear infinite;
            z-index: 0;
        }
        
        .message-card:hover {
            transform: translateX(5px);
            border-left-color: var(--hud-green);
            box-shadow: 0 5px 15px rgba(0, 240, 255, 0.1);
        }
        
        /* Индикаторы статуса */
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .status-online {
            background-color: var(--hud-green);
            box-shadow: 0 0 10px var(--hud-green);
        }
        
        .status-offline {
            background-color: var(--hud-red);
            box-shadow: 0 0 10px var(--hud-red);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Контейнер страницы -->
    <div class="container mx-auto px-4 py-8 max-w-4xl relative z-10">

        <!-- Заголовок с военной атрибутикой -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-gray-900 bg-opacity-80 rounded-xl p-6 shadow-lg border border-gray-800 animate__animated animate__fadeIn">
            <div class="flex items-center mb-4 md:mb-0">
                <div class="soldier-avatar mr-4">
                    <img src="{{ asset('images/soldier-avatar.png') }}" alt="Командир" class="w-full h-full object-cover relative z-2">
                </div>
                <div>
                    <h1 class="text-3xl font-bold hud-font text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        КОМАНДНЫЙ ЧАТ IT КМБ
                    </h1>
                    <p class="text-gray-400">Канал связи для бойцов виртуального фронта</p>
                </div>
            </div>
            <div class="bg-gray-800 border border-gray-700 rounded-lg px-4 py-3">
                <div class="flex items-center">
                    <span class="status-indicator status-online animate-pulse"></span>
                    <span class="text-sm text-gray-300">СИСТЕМА АКТИВНА</span>
                </div>
            </div>
        </div>

        <!-- Уведомление об успешной отправке -->
        <div id="success-message" class="hidden bg-gradient-to-r from-green-500 to-green-600 text-white p-4 rounded-lg mb-6 shadow-md flex items-center justify-between animate__animated animate__bounceIn border border-green-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Сообщение отправлено в командный центр!</span>
            </div>
            <button onclick="document.getElementById('success-message').classList.add('hidden')" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Форма для отправки сообщения -->
        <div class="card-hud p-6 rounded-xl mb-10 animate__animated animate__fadeInUp">
            <h2 class="text-2xl font-bold text-gray-200 mb-4 flex items-center hud-font">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                ОТПРАВИТЬ ДОНЕСЕНИЕ
            </h2>
            
            <form id="comment-form" class="space-y-4">
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-400 mb-1">СОДЕРЖАНИЕ СООБЩЕНИЯ</label>
                    <textarea id="comment" name="content" rows="4" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-gray-200" placeholder="Введите текст донесения..."></textarea>
                    <p class="mt-1 text-sm text-gray-500">Максимальная длина: 500 символов</p>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <button type="button" class="p-2 rounded-full bg-gray-700 text-gray-400 hover:bg-gray-600 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                        </button>
                        <button type="button" class="p-2 rounded-full bg-gray-700 text-gray-400 hover:bg-gray-600 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit" class="military-btn px-6 py-2 rounded-lg font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        ОТПРАВИТЬ
                    </button>
                </div>
            </form>
        </div>

        <!-- Список сообщений -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-200 mb-6 flex items-center hud-font">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                ПОСЛЕДНИЕ ДОНЕСЕНИЯ
                <span id="comments-count" class="ml-2 bg-blue-500 text-white text-sm font-semibold px-2.5 py-0.5 rounded-full">0</span>
            </h2>

            <div id="comments-list" class="space-y-4">
                <!-- Пример сообщения -->
                <div class="message-card p-5 rounded-lg">
                    <div class="flex items-start relative z-10">
                        <div class="mr-4">
                            <div class="soldier-avatar">
                                <img src="{{ asset('images/commander-avatar.png') }}" alt="Командир" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-bold text-gray-200">Командир</h3>
                                    <span class="text-xs text-gray-400 flex items-center">
                                        <span class="status-indicator status-online mr-1"></span>
                                        ONLINE
                                    </span>
                                </div>
                                <span class="text-xs text-gray-500">10 мин назад</span>
                            </div>
                            <p class="text-gray-300 mt-2">Внимание всем бойцам! Сегодня в 20:00 по МСК проводим учения по VR-программированию. Явка обязательна!</p>
                            <div class="mt-3 flex space-x-3">
                                <button class="text-gray-400 hover:text-green-400 text-sm flex items-center like-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                    24
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Статистика подразделения -->
        <div class="card-hud p-6 rounded-xl mb-10">
            <h3 class="text-lg font-semibold text-gray-200 mb-4 flex items-center hud-font">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                СТАТИСТИКА ПОДРАЗДЕЛЕНИЯ
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-800 p-3 rounded-lg text-center border border-gray-700">
                    <div class="text-2xl font-bold text-blue-400">1,248</div>
                    <div class="text-sm text-gray-400">БОЙЦОВ В СТРОЮ</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg text-center border border-gray-700">
                    <div class="text-2xl font-bold text-green-400">5,763</div>
                    <div class="text-sm text-gray-400">ОПЕРАТИВНЫХ СООБЩЕНИЙ</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg text-center border border-gray-700">
                    <div class="text-2xl font-bold text-yellow-400">892</div>
                    <div class="text-sm text-gray-400">ВЫПОЛНЕННЫХ МИССИЙ</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg text-center border border-gray-700">
                    <div class="text-2xl font-bold text-red-400">24/7</div>
                    <div class="text-sm text-gray-400">РЕЖИМ РАБОТЫ ЦЕНТРА</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-gray-900 text-gray-400 py-8 border-t border-gray-800 mt-auto">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                        <span class="text-xl font-bold hud-font text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">IT КМБ</span>
                    </div>
                    <p class="text-gray-500 text-sm mt-2">Виртуальный тренинг для будущих IT-специалистов</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-500 hover:text-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-6 pt-6 text-sm text-center">
                © 2023 IT КМБ. Все права защищены. Версия системы: 2.4.8
            </div>
        </div>
    </footer>

    <!-- Скрипт для обработки формы -->
    <script>
        // Инициализация конфетти
        const confettiSettings = { target: 'confetti-canvas', max: 150, size: 1.5, animate: true };
        const confetti = new ConfettiGenerator(confettiSettings);
        
        document.addEventListener('DOMContentLoaded', function() {
            // Обновляем счетчик сообщений
            updateCommentsCount();
        });

        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Получаем значение сообщения
            const commentContent = document.getElementById('comment').value.trim();

            // Если сообщение пустое, то не отправляем
            if (!commentContent) {
                showError('Сообщение не может быть пустым!');
                return;
            }
            
            if (commentContent.length > 500) {
                showError('Сообщение слишком длинное (максимум 500 символов).');
                return;
            }

            // Создаем новое сообщение
            const newComment = document.createElement('div');
            newComment.classList.add('message-card', 'p-5', 'rounded-lg', 'animate__animated', 'animate__fadeIn');
            newComment.innerHTML = `
                <div class="flex items-start relative z-10">
                    <div class="mr-4">
                        <div class="soldier-avatar">
                            <img src="{{ asset('images/user-avatar.png') }}" alt="Боец" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-gray-200">Боец #${Math.floor(1000 + Math.random() * 9000)}</h3>
                                <span class="text-xs text-gray-400 flex items-center">
                                    <span class="status-indicator status-online mr-1"></span>
                                    ONLINE
                                </span>
                            </div>
                            <span class="text-xs text-gray-500">Только что</span>
                        </div>
                        <p class="text-gray-300 mt-2">${commentContent}</p>
                        <div class="mt-3 flex space-x-3">
                            <button class="text-gray-400 hover:text-green-400 text-sm flex items-center like-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                0
                            </button>
                        </div>
                    </div>
                </div>
            `;

            // Добавляем новое сообщение в начало списка
            const commentsList = document.getElementById('comments-list');
            commentsList.insertBefore(newComment, commentsList.firstChild);
            
            // Добавляем обработчик для кнопки лайка
            newComment.querySelector('.like-btn').addEventListener('click', function() {
                const likeCount = this.querySelector('svg').nextSibling;
                likeCount.nodeValue = ' ' + (parseInt(likeCount.nodeValue.trim()) + 1);
                this.classList.add('text-green-400');
            });

            // Показываем уведомление об успешной отправке
            const successMessage = document.getElementById('success-message');
            successMessage.classList.remove('hidden');
            successMessage.classList.add('animate__bounceIn');
            
            // Запускаем конфетти
            confetti.render();
            setTimeout(() => confetti.clear(), 3000);

            // Обновляем счетчик сообщений
            updateCommentsCount();

            // Очищаем форму и скрываем уведомление через 3 секунды
            document.getElementById('comment-form').reset();
            setTimeout(() => {
                successMessage.classList.remove('animate__bounceIn');
                successMessage.classList.add('animate__fadeOut');
                setTimeout(() => successMessage.classList.add('hidden'), 500);
            }, 3000);
        });
        
        function updateCommentsCount() {
            const count = document.getElementById('comments-list').children.length;
            document.getElementById('comments-count').textContent = count;
        }
        
        function showError(message) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'bg-red-900 bg-opacity-80 border border-red-700 text-red-200 px-4 py-3 rounded relative mb-4 animate__animated animate__headShake';
            errorDiv.setAttribute('role', 'alert');
            errorDiv.innerHTML = `
                <strong class="font-bold">ВНИМАНИЕ!</strong>
                <span class="block sm:inline">${message}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove()">
                    <svg class="fill-current h-6 w-6 text-red-400" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            `;
            
            const form = document.getElementById('comment-form');
            form.insertBefore(errorDiv, form.firstChild);
            
            setTimeout(() => {
                errorDiv.classList.remove('animate__headShake');
                errorDiv.classList.add('animate__fadeOut');
                setTimeout(() => errorDiv.remove(), 500);
            }, 3000);
        }
    </script>

    <!-- Canvas для конфетти -->
    <canvas id="confetti-canvas" class="fixed top-0 left-0 w-full h-full pointer-events-none z-50" style="display: none;"></canvas>
    
    <!-- Дополнительные элементы интерфейса -->
    <div class="fixed bottom-4 right-4 z-20">
        <button id="command-center-btn" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all transform hover:scale-110 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </button>
    </div>

    <!-- Модальное окно командного центра -->
    <div id="command-center-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-gray-900 border-2 border-blue-500 rounded-xl p-6 max-w-2xl w-full relative">
            <div class="hud-element hud-corner" style="top: 10px; left: 10px; border-right: none; border-bottom: none;"></div>
            <div class="hud-element hud-corner" style="top: 10px; right: 10px; border-left: none; border-bottom: none;"></div>
            <div class="hud-element hud-corner" style="bottom: 10px; left: 10px; border-right: none; border-top: none;"></div>
            <div class="hud-element hud-corner" style="bottom: 10px; right: 10px; border-left: none; border-top: none;"></div>
            
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold hud-font text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">КОМАНДНЫЙ ЦЕНТР IT КМБ</h3>
                <button id="close-command-center" class="text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <h4 class="font-bold text-blue-400 mb-2">ТЕКУЩАЯ МИССИЯ</h4>
                    <p class="text-gray-300">VR-тренинг: Основы Unity для военных приложений</p>
                    <div class="mt-3 w-full bg-gray-700 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Прогресс: 65%</p>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <h4 class="font-bold text-green-400 mb-2">БЛИЖАЙШИЕ УЧЕНИЯ</h4>
                    <p class="text-gray-300">28.10.2023 - Хакатон "Военные VR-решения"</p>
                    <p class="text-xs text-gray-400 mt-2">Осталось: 3 дня</p>
                </div>
            </div>
            
            <div class="bg-gray-800 p-4 rounded-lg border border-gray-700 mb-4">
                <h4 class="font-bold text-yellow-400 mb-2">ВАШ СТАТУС</h4>
                <div class="flex items-center">
                    <div class="soldier-avatar mr-3">
                        <img src="{{ asset('images/user-avatar.png') }}" alt="Боец" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-200">Боец #<span id="soldier-id">8472</span></p>
                        <p class="text-sm text-gray-400">Ранг: <span class="text-yellow-400">Кадет</span></p>
                    </div>
                </div>
                <div class="mt-3 flex justify-between text-xs text-gray-400">
                    <span>Опыт: 245/1000</span>
                    <span>Уровень: 2</span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-2 mt-1">
                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 24.5%"></div>
                </div>
            </div>
            
            <button class="w-full military-btn py-3 rounded-lg font-medium mt-4">
                ПЕРЕЙТИ К ТРЕНИНГУ
            </button>
        </div>
    </div>

    <!-- Скрипт для командного центра -->
    <script>
        // Обработка командного центра
        document.getElementById('command-center-btn').addEventListener('click', function() {
            document.getElementById('command-center-modal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });
        
        document.getElementById('close-command-center').addEventListener('click', function() {
            document.getElementById('command-center-modal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
        
        // Генерация случайного ID бойца
        document.getElementById('soldier-id').textContent = Math.floor(1000 + Math.random() * 9000);
        
        // Анимация статуса онлайн
        setInterval(() => {
            const indicators = document.querySelectorAll('.status-indicator');
            indicators.forEach(indicator => {
                indicator.style.opacity = '0.5';
                setTimeout(() => {
                    indicator.style.opacity = '1';
                }, 500);
            });
        }, 2000);
        
        // Эффект радиопомех при ошибке
        function showError(message) {
            // ... (предыдущий код ошибки)
            
            // Добавляем эффект радиопомех
            const errorAudio = new Audio('{{ asset("sounds/radio-static.mp3") }}');
            errorAudio.volume = 0.3;
            errorAudio.play().catch(e => console.log("Autoplay prevented"));
            
            // Вибрация (если поддерживается)
            if (navigator.vibrate) {
                navigator.vibrate([200, 100, 200]);
            }
        }
        
        // Имитация радиосвязи при успешной отправке
        function playRadioSound() {
            const radioAudio = new Audio('{{ asset("sounds/radio-acknowledge.mp3") }}');
            radioAudio.volume = 0.5;
            radioAudio.play().catch(e => console.log("Autoplay prevented"));
        }
        
        // Обновляем обработчик формы для воспроизведения звука
        document.getElementById('comment-form').addEventListener('submit', function(e) {
            // ... (предыдущий код обработки)
            
            // Воспроизводим звук радиосвязи
            playRadioSound();
            
            // ... (остальной код)
        });
    </script>

    <!-- Дополнительные стили для модального окна -->
    <style>
        #command-center-modal {
            backdrop-filter: blur(5px);
        }
        
        #command-center-btn {
            box-shadow: 0 0 20px rgba(0, 162, 255, 0.5);
        }
        
        #command-center-btn:hover {
            animation: none;
            box-shadow: 0 0 30px rgba(0, 162, 255, 0.8);
        }
        
        @keyframes radio-wave {
            0% { box-shadow: 0 0 0 0 rgba(0, 162, 255, 0.7); }
            100% { box-shadow: 0 0 0 20px rgba(0, 162, 255, 0); }
        }
        
        .radio-wave {
            animation: radio-wave 2s infinite;
        }
    </style>
</body>
</html>