<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT КМБ | VR Курс молодого бойца</title>
    
    <!-- Подключаем Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Rajdhani:wght@400;500;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        :root {
            --primary: #3a86ff;
            --primary-dark: #2667cc;
            --hud-green: #00ff88;
            --hud-blue: #00a2ff;
            --hud-red: #ff2d75;
            --military-gradient: linear-gradient(135deg, var(--hud-green), var(--hud-blue));
            --unity-orange: #f05a22;
            --neon-blue: #00f0ff;
        }
        
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #0a0a0a;
            color: #e0e0e0;
        }
        
        .code-font {
            font-family: 'JetBrains Mono', monospace;
        }
        
        /* Хедер с высокотехнологичным HUD */
        .header-container {
            position: relative;
            background: 
                radial-gradient(circle at 20% 30%, rgba(0, 160, 255, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(0, 255, 136, 0.05) 0%, transparent 40%),
                linear-gradient(to bottom, rgba(10, 10, 10, 0.9), rgba(20, 20, 20, 0.9));
            box-shadow: 0 0 20px rgba(0, 240, 255, 0.1);
            height: 90px;
            overflow: hidden;
            z-index: 10;
            border-bottom: 1px solid rgba(0, 240, 255, 0.2);
        }
        
        /* Анимация цифрового дождя */
        .matrix-rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><text x="0" y="15" font-family="JetBrains Mono" font-size="14" fill="rgba(0,240,255,0.03)">01</text></svg>');
            z-index: -1;
            opacity: 0.5;
        }
        
        /* HUD элементы */
        .hud-element {
            position: absolute;
            border: 1px solid rgba(0, 240, 255, 0.3);
            box-shadow: 0 0 10px rgba(0, 240, 255, 0.1);
        }
        
        .hud-corner {
            width: 30px;
            height: 30px;
            border-color: var(--neon-blue);
            border-width: 2px;
        }
        
        .hud-top-left {
            top: 10px;
            left: 10px;
            border-right: none;
            border-bottom: none;
        }
        
        .hud-top-right {
            top: 10px;
            right: 10px;
            border-left: none;
            border-bottom: none;
        }
        
        /* Стили для логотипа с HUD эффектом */
        .logo-text {
            font-size: 28px;
            font-weight: 700;
            font-family: 'Orbitron', sans-serif;
            color: var(--hud-green);
            text-shadow: 0 0 10px rgba(0, 255, 136, 0.5);
            position: relative;
            padding-right: 15px;
            letter-spacing: 2px;
        }
        
        .logo-text::after {
            content: ">";
            position: absolute;
            right: 0;
            color: var(--unity-orange);
            animation: blink 1s step-end infinite;
        }
        
        @keyframes blink {
            50% { opacity: 0; }
        }
        
        /* Навигация с HUD подсветкой */
        .nav-link {
            position: relative;
            color: #c0c0c0;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 20px;
            margin: 0 5px;
            transition: all 0.3s ease;
            font-family: 'Rajdhani', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--military-gradient);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: white;
            text-shadow: 0 0 10px rgba(0, 240, 255, 0.7);
        }
        
        .nav-link:hover::before {
            width: 100%;
        }
        
        /* Кнопки в стиле военного HUD */
        .auth-btn {
            padding: 10px 25px;
            border-radius: 2px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-family: 'Rajdhani', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .login-btn {
            color: var(--hud-blue);
            border: 1px solid rgba(0, 240, 255, 0.3);
            background: rgba(0, 162, 255, 0.1);
        }
        
        .login-btn:hover {
            background: rgba(0, 162, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 162, 255, 0.3);
            color: white;
        }
        
        .register-btn {
            background: linear-gradient(135deg, var(--hud-green), var(--hud-blue));
            color: black;
            font-weight: 700;
            box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
            border: 1px solid var(--hud-green);
        }
        
        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(0, 255, 136, 0.5);
            color: black;
        }
        
        .profile-img-container {
            position: relative;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.3);
        }
        
        .profile-img-container::before {
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
        
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 2;
        }
        
        /* Иконка темы в стиле научного прибора */
        .theme-btn {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 2px;
            transition: all 0.3s ease;
            background: rgba(20, 20, 20, 0.8);
            border: 1px solid rgba(0, 240, 255, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .theme-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                rgba(0, 240, 255, 0.1) 50%,
                transparent 55%
            );
            animation: scan 4s linear infinite;
        }
        
        @keyframes scan {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        
        .theme-btn:hover {
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.3);
            transform: scale(1.05);
        }
        
        /* Индикаторы в стиле военных датчиков */
        .nav-indicator {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--military-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .nav-item:hover .nav-indicator {
            transform: scaleX(1);
        }
        
        /* Эффект сканирования */
        .scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--neon-blue), transparent);
            box-shadow: 0 0 10px var(--neon-blue);
            animation: scan 5s linear infinite;
            opacity: 0.7;
            z-index: -1;
        }
        
        /* Эффект радиопомех */
        @keyframes radioStatic {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }
        
        .static-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(0deg, transparent 45%, rgba(255,255,255,0.1) 50%, transparent 55%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="2" height="2" x="%{x}" y="%{y}" fill="rgba(255,255,255,0.05)"/></svg>');
            opacity: 0;
            z-index: 5;
            pointer-events: none;
            animation: radioStatic 0.1s infinite;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">
    <!-- Хедер с высокотехнологичным HUD интерфейсом -->
    <header class="header-container">
        <div class="matrix-rain"></div>
        <div class="scan-line"></div>
        <div class="hud-element hud-corner hud-top-left"></div>
        <div class="hud-element hud-corner hud-top-right"></div>
        
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">
            <!-- Логотип с HUD эффектом -->
            <div class="flex items-center space-x-3">
                <span class="logo-text">IT_КМБ</span>
                <div class="flex space-x-1">
                    <div class="h-2 w-2 rounded-full bg-green-500 animate-pulse" title="Система активна"></div>
                    <div class="h-2 w-2 rounded-full bg-blue-500 animate-pulse" title="VR подключен"></div>
                    <div class="h-2 w-2 rounded-full bg-orange-500" title="Unity 2022.3.15f1"></div>
                </div>
            </div>

            <!-- Навигация с HUD подсветкой -->
            <nav class="hidden md:flex items-center space-x-1">
                <div class="nav-item relative">
                    <div class="nav-indicator"></div>
                    <a href="{{ route('main') }}" class="nav-link">Главная</a>
                </div>
                <div class="nav-item relative">
                    <div class="nav-indicator"></div>
                    <a href="{{ route('curs') }}" class="nav-link">Курсы</a>
                </div>
                <div class="nav-item relative">
                    <div class="nav-indicator"></div>
                    <a href="{{ route('comments.index') }}" class="nav-link">Сообщество</a>
                </div>
                <div class="nav-item relative">
                    <div class="nav-indicator"></div>
                    <a href="{{ route('register') }}" class="nav-link">Для преподавателей</a>
                </div>
                <div class="nav-item relative">
                    <div class="nav-indicator"></div>
                    <a href="#" class="nav-link"><span style="color: var(--unity-orange); font-weight: bold;">UNITY</span> VR</a>
                </div>
            </nav>

            <!-- Блок авторизации -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="login-btn">Войти</a>
                    <a href="{{ route('register') }}" class="register-btn">Регистрация</a>
                @else
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 group">
                            <div class="profile-img-container">
                                <img src="{{ optional(Auth::user())->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://via.placeholder.com/40' }}" 
                                     alt="Profile" class="profile-img">
                            </div>
                            <span class="text-sm font-medium" style="color: var(--hud-blue);">USER: {{ Auth::user()->name }}</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm hover:text-red-400 transition-colors" style="color: var(--hud-red);">
                                Выйти
                            </button>
                        </form>
                    </div>
                @endguest
                
                <!-- Кнопка темы в стиле научного прибора -->
                <button id="theme-toggle" class="theme-btn">
                    <i class="fas fa-sun text-yellow-400 dark:hidden"></i>
                    <i class="fas fa-moon text-purple-300 hidden dark:block"></i>
                </button>
            </div>
        </div>
    </header>

    <script>
        // Инициализация темы
        function initTheme() {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const html = document.documentElement;
            
            if (localStorage.getItem('theme') === 'dark' || 
                (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
            
            themeToggleBtn.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
            });
        }
        
        // Эффект радиопомех
        function createStaticEffect() {
            const header = document.querySelector('.header-container');
            const staticOverlay = document.createElement('div');
            staticOverlay.className = 'static-overlay';
            header.appendChild(staticOverlay);
            
            setTimeout(() => {
                staticOverlay.style.opacity = '0.3';
                setTimeout(() => {
                    staticOverlay.style.opacity = '0';
                    setTimeout(() => {
                        header.removeChild(staticOverlay);
                    }, 300);
                }, 200);
            }, 50);
        }
        
        // Случайные помехи
        function randomStatic() {
            if (Math.random() > 0.85) {
                createStaticEffect();
            }
        }
        
        // Анимация HUD элементов
        function animateHudElements() {
            const corners = document.querySelectorAll('.hud-corner');
            corners.forEach(corner => {
                corner.style.boxShadow = `0 0 ${5 + Math.random() * 5}px rgba(0, 240, 255, ${0.3 + Math.random() * 0.2})`;
            });
            
            requestAnimationFrame(animateHudElements);
        }
        
        // Инициализация
        document.addEventListener('DOMContentLoaded', () => {
            initTheme();
            
            // Начальные эффекты
            setTimeout(createStaticEffect, 300);
            setTimeout(createStaticEffect, 800);
            
            // Случайные эффекты
            setInterval(randomStatic, 5000);
            
            // Анимация HUD
            animateHudElements();
            
            // Эффект при наведении на навигацию
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    if (Math.random() > 0.7) {
                        createStaticEffect();
                    }
                });
            });
        });
    </script>
</body>
</html>