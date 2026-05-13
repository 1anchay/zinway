<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT КМБ | VR Курс молодого бойца</title>
    @include('hader')
    <!-- Подключаем TailwindCSS через CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;700&display=swap" rel="stylesheet">

    <style>
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
        
        /* Боковые изображения */
        .side-image {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.2;
            filter: grayscale(100%) brightness(0.5) sepia(100%) hue-rotate(160deg) saturate(500%);
            transition: all 0.5s ease;
            z-index: 0;
        }
        
        .side-image:hover {
            opacity: 0.4;
            filter: grayscale(50%) brightness(0.7) sepia(100%) hue-rotate(160deg) saturate(300%);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Блоки для изображений по бокам -->
    <div class="side-image left-0 -translate-x-20">
        <img src="{{ asset('images/left-image.png') }}" alt="Military VR Tech" class="w-80 lg:w-96">
    </div>

    <div class="side-image right-0 translate-x-20">
        <img src="{{ asset('images/right-image.png') }}" alt="VR Training" class="w-80 lg:w-96">
    </div>

    <!-- Контейнер с увеличенной шириной -->
    <div class="container mx-auto px-8 py-10 flex-grow max-w-7xl space-y-12 relative z-10">
        
        <!-- Главный заголовок -->
        <div class="max-w-4xl mx-auto p-8 rounded-lg shadow-lg relative overflow-hidden">
            <div class="matrix-rain"></div>
            <div class="hud-element hud-corner" style="top: 10px; left: 10px; border-right: none; border-bottom: none;"></div>
            <div class="hud-element hud-corner" style="top: 10px; right: 10px; border-left: none; border-bottom: none;"></div>
            
            <header class="text-center py-8 fade-in relative z-10">
                <h1 class="text-5xl font-extrabold hud-font text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    IT КМБ: КУРС МОЛОДОГО БОЙЦА
                </h1>
                <p class="text-xl mt-4 text-gray-400">
                    Виртуальная подготовка к реальным IT-боевым действиям
                </p>
                <div class="flex justify-center space-x-2 mt-6">
                    <div class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></div>
                    <div class="h-2 w-2 rounded-full bg-blue-500 animate-pulse"></div>
                    <div class="h-2 w-2 rounded-full bg-orange-500 animate-pulse"></div>
                </div>
            </header>
        </div>

        <!-- Основной контент -->
        <section class="p-8 rounded-lg bg-gray-900 bg-opacity-70 shadow-lg mt-10 relative overflow-hidden border border-gray-800 hover:border-blue-500 transition-all duration-300">
            <div class="matrix-rain"></div>
            <div class="scan-line"></div>
            
            <h2 class="text-4xl font-semibold text-gray-100 flex items-center mb-8 hud-font">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                ВИРТУАЛЬНЫЙ ТРЕНИНГ ДЛЯ БУДУЩИХ IT-СОЛДАТ
            </h2>
            <p class="mt-4 text-xl text-gray-400">Когда-то солдаты тренировались на полигонах. Сегодня будущие IT-специалисты проходят подготовку в виртуальной реальности.</p>
            <p class="mt-4 text-lg text-gray-300">Наш проект создан для того, чтобы превратить ваше обучение в увлекательную военную операцию, где каждая задача - это новая миссия.</p>
        </section>

        <!-- Карточки -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-10">
            <div class="card-hud p-8 rounded-lg text-center transform transition duration-300">
                <img src="https://img.freepik.com/premium-photo/robot-hand-holding-glowing-crystal-advanced-futuristic-technology-ai-concept_691560-6615.jpg" 
                     alt="VR Military Training" class="rounded-lg mx-auto mb-6 shadow-md w-full h-60 object-cover border border-gray-800">
                <p class="text-gray-100 text-2xl font-semibold hud-font">VR-ТРЕНИНГИ</p>
                <p class="mt-4 text-gray-400 text-lg">Имитация реальных IT-боевых условий в виртуальной реальности</p>
                <div class="mt-6 flex justify-center space-x-2">
                    <span class="inline-block h-2 w-2 rounded-full bg-green-500"></span>
                    <span class="inline-block h-2 w-2 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="inline-block h-2 w-2 rounded-full bg-orange-500"></span>
                </div>
            </div>

            <div class="card-hud p-8 rounded-lg text-center transform transition duration-300">
                <img src="https://images.unsplash.com/photo-1545987796-200677ee1011?q=80&w=1280" 
                     alt="Military Hackathon" class="rounded-lg mx-auto mb-6 shadow-md w-full h-60 object-cover border border-gray-800">
                <p class="text-gray-100 text-2xl font-semibold hud-font">ТАКТИЧЕСКИЕ ХАКАТОНЫ</p>
                <p class="mt-4 text-gray-400 text-lg">Соревнования в условиях, приближенных к боевым</p>
                <div class="mt-6 flex justify-center space-x-2">
                    <span class="inline-block h-2 w-2 rounded-full bg-green-500"></span>
                    <span class="inline-block h-2 w-2 rounded-full bg-blue-500"></span>
                    <span class="inline-block h-2 w-2 rounded-full bg-orange-500 animate-pulse"></span>
                </div>
            </div>
        </div>

        <!-- Раздел "Программа подготовки" -->
        <section class="relative py-14 px-10 rounded-lg shadow-lg overflow-hidden mt-10 bg-gray-900 bg-opacity-80 border border-gray-800">
            <div class="matrix-rain"></div>
            <div class="hud-element hud-corner" style="top: 10px; left: 10px; border-right: none; border-bottom: none;"></div>
            <div class="hud-element hud-corner" style="top: 10px; right: 10px; border-left: none; border-bottom: none;"></div>
            
            <!-- Летающий дрон -->
            <div class="absolute top-0 left-0 animate-float">
                <img src="{{ asset('images/drone.png') }}" alt="Military Drone" class="w-28 opacity-80 filter drop-shadow-lg">
            </div>

            <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 text-center hud-font">
                ПРОГРАММА ПОДГОТОВКИ:
            </h2>

            <ul class="mt-10 space-y-10">
                @foreach([
                    ['icon' => 'academic-cap', 'text' => 'БАЗОВАЯ IT-ПОДГОТОВКА', 'desc' => 'Освоение фундаментальных навыков программирования.', 'image' => asset('images/ai-learning.jpg')],
                    ['icon' => 'code', 'text' => 'ТАКТИЧЕСКОЕ ПРОГРАММИРОВАНИЕ', 'desc' => 'Решение задач в условиях ограниченного времени.', 'image' => asset('images/programming.jpg')],
                    ['icon' => 'light-bulb', 'text' => 'ВОЕННЫЕ IT-ТЕХНОЛОГИИ', 'desc' => 'Изучение специализированных решений для обороны.', 'image' => asset('images/technology-innovation.jpg')],
                    ['icon' => 'chart-bar', 'text' => 'КАРЬЕРНОЕ ПРОДВИЖЕНИЕ', 'desc' => 'Построение успешной карьеры в IT-армии.', 'image' => asset('images/business-growth.jpg')],
                    ['icon' => 'globe-alt', 'text' => 'VR-СИМУЛЯЦИИ БОЕВЫХ ДЕЙСТВИЙ', 'desc' => 'Тренировки в виртуальных условиях сражений.', 'image' => asset('images/future-ai.jpg')]
                ] as $item)
                    <li class="relative group overflow-hidden rounded-lg shadow-lg transition transform hover:scale-105 card-hud">
                        <img src="{{ $item['image'] }}" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110" alt="Background">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-80 group-hover:opacity-90 transition duration-500"></div>
                        <div class="absolute bottom-0 p-8">
                            <div class="flex items-center">
                                <svg class="h-10 w-10 text-green-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <use href="#{{ $item['icon'] }}"></use>
                                </svg>
                                <h3 class="text-2xl font-bold text-white hud-font">{{ $item['text'] }}</h3>
                            </div>
                            <p class="text-gray-300 text-lg mt-2">{{ $item['desc'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>

    <!-- Футер -->
    <footer class="w-full bg-gray-900 py-6 text-center text-white mt-auto border-t border-gray-800">
        @include('footer')
    </footer>

    <!-- Анимация дрона -->
    <style>
    @keyframes fly {
        0%, 100% { transform: translateY(0) translateX(0); }
        25% { transform: translateY(-20px) translateX(10px); }
        50% { transform: translateY(0) translateX(20px); }
        75% { transform: translateY(20px) translateX(10px); }
    }
    .animate-float {
        animation: fly 8s ease-in-out infinite;
    }
    </style>
</body>
</html>