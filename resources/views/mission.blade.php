<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Миссия и ценности - VR-КМБ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
        }
        .russo {
            font-family: 'Russo One', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(90deg, #3b82f6, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .military-card {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border: 1px solid #334155;
            transition: all 0.3s ease;
        }
        .military-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
        }
        .russian-flag {
            display: inline-block;
            width: 24px;
            height: 16px;
            background: linear-gradient(to bottom, 
                white 0%, white 33%,
                #0039a6 33%, #0039a6 66%,
                #d52b1e 66%, #d52b1e 100%);
            margin-right: 8px;
            vertical-align: middle;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Шапка -->
     @include('hader')

    <!-- Основной контент -->
    <main>
        <!-- Герой-секция с 3D моделью оружия -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-blue-900/20 relative overflow-hidden">
    <!-- Фоновые эффекты -->
    <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-blue-900/10 z-0"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Текстовый блок -->
            <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-10">
                <div class="inline-flex items-center bg-gray-800/50 px-4 py-2 rounded-full border border-gray-700 mb-6">
                    <div class="russian-flag w-6 h-6 rounded-full mr-3"></div>
                    <span class="text-sm text-gray-300 font-medium">ВОЕННЫЕ VR-ТЕХНОЛОГИИ</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-400">Тактическая подготовка</span><br>
                    <span class="text-gray-300">в виртуальной реальности</span>
                </h1>
                
                <p class="text-xl text-gray-300 mb-8 max-w-lg">
                    Отработка боевых навыков на инновационных VR-тренажерах с полным погружением и реалистичной физикой.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#demo" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-green-600 text-white rounded-lg font-medium transition-all shadow-lg hover:shadow-blue-500/30 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Демо-ролик
                    </a>
                    <a href="#features" class="px-6 py-3 border-2 border-blue-500 text-blue-400 rounded-lg font-medium hover:bg-blue-900/30 transition-all flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Возможности
                    </a>
                </div>
            </div>
            
            <!-- 3D модель оружия -->
            <div class="lg:w-1/2 relative">
                <div class="relative bg-gray-800/50 rounded-2xl overflow-hidden border-2 border-gray-700/50 hover:border-blue-400/30 transition-all duration-300 shadow-2xl h-[400px]">
                    <model-viewer 
                        src="/models/model2.glb"
                        alt="Тактическое оружие в VR"
                        ar
                        ar-modes="webxr scene-viewer quick-look"
                        environment-image="https://modelviewer.dev/shared-assets/environments/spruit_sunrise_1k_HDR.hdr"
                        exposure="1.5"
                        shadow-intensity="1.8"
                        auto-rotate
                        auto-rotate-delay="0"
                        camera-controls
                        camera-orbit="0deg 65deg 110%"
                        field-of-view="25deg"
                        style="width:100%; height:100%;"
                        class="z-10 bg-gray-900">
                        
                        <!-- Кнопка AR для мобильных -->
                        <button slot="ar-button" class="absolute bottom-4 right-4 bg-blue-600/90 hover:bg-blue-700 text-white px-4 py-2 rounded-full backdrop-blur-sm border border-blue-400/50 transition-all flex items-center z-20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                            AR View
                        </button>
                    </model-viewer>
                    
                    <!-- Подпись модели -->
                    <div class="absolute bottom-4 left-4 bg-gray-900/80 px-4 py-2 rounded-full border border-gray-700 flex items-center z-20">
                        <div class="russian-flag w-6 h-6 rounded-full mr-3"></div>
                        <span class="text-sm text-gray-200 font-medium">АК-12 | VR Тренажер</span>
                    </div>
                    
                    <!-- Эффекты -->
                    <div class="absolute inset-0 pointer-events-none">
                        <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(45deg,transparent_45%,rgba(0,240,255,0.03)_50%,transparent_55%)] bg-[length:300%_300%] animate-scan"></div>
                    </div>
                </div>
                
                <!-- Декоративные элементы -->
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-blue-500/10 rounded-full backdrop-blur-sm z-0 animate-float"></div>
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-green-500/10 rounded-full backdrop-blur-sm z-0 animate-float delay-1000"></div>
            </div>
        </div>
    </div>
    
    <!-- Сканирующая линия -->
    <div class="scan-line"></div>
</section>

<style>
.russian-flag {
    width: 24px;
    height: 24px;
    background: linear-gradient(to bottom, 
        white 33%, 
        #0039a6 33%, 
        #0039a6 66%, 
        #d52b1e 66%);
    border-radius: 50%;
    display: inline-block;
}

@keyframes scan {
    0% { background-position: 0% 0%; }
    100% { background-position: 100% 100%; }
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

.scan-line {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: linear-gradient(to right, transparent, #00f0ff, transparent);
    box-shadow: 0 0 10px #00f0ff;
    animation: scan 5s linear infinite;
    opacity: 0.3;
    z-index: 1;
}
</style>

<!-- Обязательно подключите библиотеку model-viewer -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

        <!-- Секция миссии -->
        <section id="mission" class="py-16 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 russo">
                        <span class="gradient-text">Наша миссия</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mb-6"></div>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Создать наиболее реалистичную и эффективную систему подготовки военных специалистов нового поколения
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="military-card p-8 rounded-xl">
                        <div class="h-16 w-16 bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 russo">Технологии</h3>
                        <p class="text-gray-400">
                            Разрабатываем инновационные VR-решения для военной подготовки на базе современных игровых движков
                        </p>
                    </div>

                    <div class="military-card p-8 rounded-xl">
                        <div class="h-16 w-16 bg-gradient-to-r from-green-600 to-green-800 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 russo">Обучение</h3>
                        <p class="text-gray-400">
                            Обеспечиваем безопасную среду для отработки навыков без риска для жизни и здоровья курсантов
                        </p>
                    </div>

                    <div class="military-card p-8 rounded-xl">
                        <div class="h-16 w-16 bg-gradient-to-r from-purple-600 to-purple-800 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 russo">Инновации</h3>
                        <p class="text-gray-400">
                            Постоянно совершенствуем наши решения, внедряя последние достижения в области VR и ИИ
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция ценностей -->
        <section id="values" class="py-16 bg-gradient-to-b from-gray-900 to-black">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 russo">
                        <span class="gradient-text">Наши ценности</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mb-6"></div>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Основные принципы, которые лежат в основе всего, что мы делаем
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                    <div class="military-card p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 bg-blue-600/20 rounded-full border border-blue-500/50 flex items-center justify-center mr-3">
                                <span class="text-blue-400 russo">1</span>
                            </div>
                            <h3 class="text-lg font-bold text-white russo">Патриотизм</h3>
                        </div>
                        <p class="text-gray-400">
                            Воспитываем любовь к Родине и уважение к традициям российской армии
                        </p>
                    </div>

                    <div class="military-card p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 bg-green-600/20 rounded-full border border-green-500/50 flex items-center justify-center mr-3">
                                <span class="text-green-400 russo">2</span>
                            </div>
                            <h3 class="text-lg font-bold text-white russo">Реализм</h3>
                        </div>
                        <p class="text-gray-400">
                            Максимально точное воспроизведение реальных условий и ситуаций
                        </p>
                    </div>

                    <div class="military-card p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 bg-purple-600/20 rounded-full border border-purple-500/50 flex items-center justify-center mr-3">
                                <span class="text-purple-400 russo">3</span>
                            </div>
                            <h3 class="text-lg font-bold text-white russo">Инновации</h3>
                        </div>
                        <p class="text-gray-400">
                            Постоянное развитие и внедрение передовых технологий
                        </p>
                    </div>

                    <div class="military-card p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 bg-yellow-600/20 rounded-full border border-yellow-500/50 flex items-center justify-center mr-3">
                                <span class="text-yellow-400 russo">4</span>
                            </div>
                            <h3 class="text-lg font-bold text-white russo">Ответственность</h3>
                        </div>
                        <p class="text-gray-400">
                            Осознание важности нашей работы для безопасности страны
                        </p>
                    </div>
                </div>

                <!-- 3D модель с оборудованием -->
                <div class="bg-gray-800/50 rounded-2xl overflow-hidden border border-gray-700 p-1">
                    <div class="flex flex-col lg:flex-row">
                        <div class="lg:w-1/2 p-8 flex flex-col justify-center">
                            <h3 class="text-2xl font-bold text-white mb-4 russo">
                                <span class="gradient-text">Современное оборудование</span>
                            </h3>
                            <p class="text-gray-300 mb-6">
                                Мы используем точные 3D-модели реального вооружения и техники для максимально реалистичной подготовки.
                            </p>
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-start">
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Точные баллистические расчеты</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Реалистичная отдача и звуки</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Детализированные модели оружия</span>
                                </li>
                            </ul>
                        </div>
                        <div class="lg:w-1/2 h-96">
                            <model-viewer 
                                src="/models/model1.glb"
                                alt="Военное оборудование в VR"
                                auto-rotate
                                camera-controls
                                environment-image="neutral"
                                exposure="1.2"
                                shadow-intensity="1"
                                style="width:100%; height:100%;"
                                class="rounded-r-lg">
                                <button slot="ar-button" class="absolute bottom-4 right-4 bg-black/80 text-white px-4 py-2 rounded-full backdrop-blur-sm border border-gray-600 hover:bg-blue-600 transition-all">
                                    👆 Просмотр в AR
                                </button>
                            </model-viewer>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Призыв к действию -->
        <section class="py-20 bg-gradient-to-r from-gray-900 to-blue-900">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 russo">
                    Готовы к новому уровню военной подготовки?
                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                    Присоединяйтесь к VR-КМБ и испытайте будущее военного обучения уже сегодня
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-green-600 text-white rounded-lg font-medium hover:shadow-lg hover:shadow-blue-500/30 transition-all">
                        Записаться на демо
                    </a>
                    <a href="#" class="px-8 py-4 border-2 border-white text-white rounded-lg font-medium hover:bg-white/10 transition-all">
                        Узнать подробнее
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Подвал -->
     @include('footer')
</body>
</html>