<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка IT КМБ | VR Курс молодого бойца</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     @include('hader')
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
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes scan {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
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
        
        /* Кнопка скачивания */
        .download-btn {
            background: linear-gradient(135deg, var(--hud-green), var(--hud-blue));
            color: black;
            font-weight: 700;
            border: 1px solid var(--hud-green);
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 255, 136, 0.4);
            background: linear-gradient(135deg, #00e676, #0091ea);
        }
        
        .download-btn::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 45%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 55%
            );
            transform: rotate(30deg);
            animation: scan 3s linear infinite;
        }
        
        /* Список требований */
        .requirement-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
        }
        
        .requirement-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: 5px;
            width: 20px;
            height: 20px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" fill="%2300a2ff" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>');
            background-repeat: no-repeat;
        }
        
        /* Прогресс-бар */
        .progress-bar {
            height: 6px;
            background-color: rgba(0, 240, 255, 0.2);
            border-radius: 3px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--hud-blue), var(--hud-green));
            border-radius: 3px;
            transition: width 0.5s ease;
        }
        
        /* Анимация загрузки */
        @keyframes loadingPulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }
        
        .loading-pulse {
            animation: loadingPulse 1.5s infinite;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Контейнер страницы -->
    <div class="container mx-auto px-4 py-12 max-w-6xl relative z-10">

        <!-- Заголовок -->
        <div class="text-center mb-16 animate__animated animate__fadeIn">
            <h1 class="text-4xl md:text-5xl font-bold hud-font text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 mb-4">
                ЗАГРУЗКА IT КМБ
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Виртуальный тренинг для будущих IT-специалистов. Скачайте игру и начните свой путь в мир военного программирования.
            </p>
        </div>

        <!-- Основной контент -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Блок загрузки -->
            <!-- Блок загрузки с 3D моделью -->
<div class="card-hud p-8 rounded-xl relative overflow-hidden">
    <!-- Декоративные углы -->
    <div class="hud-element hud-corner" style="top: 10px; left: 10px; border-right: none; border-bottom: none;"></div>
    <div class="hud-element hud-corner" style="top: 10px; right: 10px; border-left: none; border-bottom: none;"></div>
    
    <!-- 3D модель автомата -->
    <div class="absolute -right-20 -bottom-10 w-80 h-80 opacity-70 hover:opacity-90 transition-opacity duration-300 z-0">
        <model-viewer 
            src="https://modelviewer.dev/shared-assets/models/Astronaut.glb" 
            alt="Military Rifle"
            auto-rotate
            camera-controls
            camera-orbit="0deg 75deg 120%"
            field-of-view="30deg"
            exposure="1.2"
            environment-image="neutral"
            style="width:100%; height:100%;"
            class="z-0">
        </model-viewer>
    </div>
    
    <div class="relative z-10">
        <div class="text-center mb-8">
            <!-- Иконка загрузки с эффектом -->
            <div class="relative inline-block mb-4">
                <div class="absolute inset-0 bg-blue-500/20 rounded-full animate-ping"></div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                </svg>
            </div>
            
            <h2 class="text-2xl font-bold hud-font text-gray-200 mb-2">ВЕРСИЯ 1.0.0</h2>
            <p class="text-gray-400">Последнее обновление: <span class="text-blue-400">25.10.2023</span></p>
            
            <!-- Статус серверов -->
            <div class="inline-flex items-center mt-3 bg-gray-800/80 px-3 py-1 rounded-full border border-green-500/30">
                <span class="relative flex h-2 w-2 mr-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="text-sm text-gray-300">Сервера онлайн</span>
            </div>
        </div>
        
        <!-- Блок информации о загрузке -->
        <div class="mb-8 bg-gray-800/50 p-4 rounded-lg border border-gray-700/50 backdrop-blur-sm">
            <div class="flex justify-between text-sm text-gray-400 mb-3">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                    Размер: 2.4 GB
                </span>
                <span class="flex items-center" id="downloads-count">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    1,248 скачиваний
                </span>
            </div>
            
            <!-- Прогресс-бар с анимацией -->
            <div class="progress-bar mb-2 h-3 bg-gray-700 rounded-full overflow-hidden">
                <div class="progress-fill h-full bg-gradient-to-r from-blue-500 to-green-500 rounded-full" style="width: 0%" id="download-progress"></div>
            </div>
            <p class="text-xs text-gray-500 text-right">Готово к загрузке</p>
        </div>
        
        <!-- Кнопка загрузки с эффектом -->
        <button id="download-btn" class="download-btn w-full py-4 rounded-lg font-medium text-lg flex items-center justify-center bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 transition-all shadow-lg hover:shadow-blue-500/20 relative overflow-hidden">
            <span class="absolute inset-0 bg-white/10 opacity-0 hover:opacity-100 transition-opacity duration-300"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            СКАЧАТЬ VR КМБ
        </button>
        
        <!-- Информация о файле -->
        <div class="mt-6 text-center text-sm text-gray-500 bg-gray-800/30 p-3 rounded-lg border border-gray-700/50">
            <div class="flex justify-center space-x-6">
                <div>
                    <p class="font-medium text-gray-400">Файл:</p>
                    <p class="text-blue-400">VR_KMB_Setup.exe</p>
                </div>
                <div>
                    <p class="font-medium text-gray-400">Целостность:</p>
                    <p class="text-green-400">SHA-256: a1b2...7890</p>
                </div>
            </div>
        </div>
    </div>
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
                    
    <!-- Эффект сканирования -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden rounded-xl">
        <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(45deg,transparent_45%,rgba(0,240,255,0.03)_50%,transparent_55%)] bg-[length:300%_300%] animate-scan"></div>
    </div>
</div>


<!-- Скрипт для анимации загрузки -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const downloadBtn = document.getElementById('download-btn');
    const progressBar = document.getElementById('download-progress');
    
    downloadBtn.addEventListener('click', function() {
        // Анимация загрузки
        downloadBtn.disabled = true;
        downloadBtn.innerHTML = `
            <svg class="animate-spin h-6 w-6 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Загрузка...
        `;
        
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 10;
            if (progress > 100) progress = 100;
            progressBar.style.width = `${progress}%`;
            
            if (progress === 100) {
                clearInterval(interval);
                setTimeout(() => {
                    downloadBtn.disabled = false;
                    downloadBtn.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Установить
                    `;
                    progressBar.classList.add('bg-green-500');
                }, 500);
            }
        }, 300);
    });
});
</script>

<style>
/* Анимации */
@keyframes scan {
    0% { background-position: 0% 0%; }
    100% { background-position: 100% 100%; }
}

.progress-bar {
    box-shadow: inset 0 0 10px rgba(0,0,0,0.3);
}

.progress-fill {
    transition: width 0.3s ease;
    box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
}

.hud-corner {
    width: 30px;
    height: 30px;
    border: 2px solid #00f0ff;
    position: absolute;
}

.download-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
}
</style>

            <!-- Блок с инструкциями -->
            <div class="space-y-8">
                <!-- Требования к системе -->
                <div class="card-hud p-6 rounded-xl">
                    <h2 class="text-2xl font-bold hud-font text-gray-200 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                        ТРЕБОВАНИЯ К СИСТЕМЕ
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-bold text-blue-400 mb-3">МИНИМАЛЬНЫЕ</h3>
                            <ul class="space-y-3">
                                <li class="requirement-item">ОС: Windows 10 (64-bit)</li>
                                <li class="requirement-item">Процессор: Intel i5-4590 / AMD FX 8350</li>
                                <li class="requirement-item">Память: 8 GB RAM</li>
                                <li class="requirement-item">Видеокарта: NVIDIA GTX 970 / AMD Radeon R9 290</li>
                                <li class="requirement-item">Место на диске: 5 GB</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-bold text-green-400 mb-3">РЕКОМЕНДУЕМЫЕ</h3>
                            <ul class="space-y-3">
                                <li class="requirement-item">ОС: Windows 11 (64-bit)</li>
                                <li class="requirement-item">Процессор: Intel i7-6700K / AMD Ryzen 5 1600</li>
                                <li class="requirement-item">Память: 16 GB RAM</li>
                                <li class="requirement-item">Видеокарта: NVIDIA GTX 1070 / AMD RX Vega 56</li>
                                <li class="requirement-item">Место на диске: 5 GB SSD</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Инструкция по установке -->
                <div class="card-hud p-6 rounded-xl">
                    <h2 class="text-2xl font-bold hud-font text-gray-200 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        ИНСТРУКЦИЯ ПО УСТАНОВКЕ
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-1 mr-3">1</div>
                            <div>
                                <h3 class="font-bold text-gray-200">Скачайте установочный файл</h3>
                                <p class="text-gray-400">Нажмите кнопку "Скачать игру" выше и дождитесь завершения загрузки.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-1 mr-3">2</div>
                            <div>
                                <h3 class="font-bold text-gray-200">Запустите IT_KMB_Setup.exe</h3>
                                <p class="text-gray-400">Найдите скачанный файл и запустите его от имени администратора.</p>
                                <p class="text-xs text-gray-500 mt-1">* Система может запросить подтверждение</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-1 mr-3">3</div>
                            <div>
                                <h3 class="font-bold text-gray-200">Следуйте инструкциям установщика</h3>
                                <p class="text-gray-400">Выберите папку для установки и дождитесь завершения процесса.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-1 mr-3">4</div>
                            <div>
                                <h3 class="font-bold text-gray-200">Запустите игру</h3>
                                <p class="text-gray-400">После установки ярлык появится на рабочем столе. Запустите игру и начните обучение!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Дополнительная информация -->
        <div class="card-hud p-6 rounded-xl mt-8">
            <h2 class="text-2xl font-bold hud-font text-gray-200 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                ВАЖНАЯ ИНФОРМАЦИЯ
            </h2>
            
            <div class="space-y-4">
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-red-500">
                    <h3 class="font-bold text-red-400 mb-2">Антивирусные программы</h3>
                    <p class="text-gray-300">Некоторые антивирусы могут ошибочно блокировать наш файл. Если это произошло, добавьте игру в исключения вашего антивируса.</p>
                </div>
                
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-yellow-500">
                    <h3 class="font-bold text-yellow-400 mb-2">VR-совместимость</h3>
                    <p class="text-gray-300">Для полного погружения рекомендуем использовать VR-гарнитуру, но игра также работает и в обычном режиме.</p>
                </div>
                
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-green-500">
                    <h3 class="font-bold text-green-400 mb-2">Техническая поддержка</h3>
                    <p class="text-gray-300">Если у вас возникли проблемы с установкой или запуском, обратитесь в наш <a href="#" class="text-blue-400 hover:underline">центр поддержки</a>.</p>
                </div>
            </div>
        </div>
    </div>

     @include('footer')

    <!-- Скрипт для имитации загрузки -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const downloadBtn = document.getElementById('download-btn');
            const downloadProgress = document.getElementById('download-progress');
            const downloadsCount = document.getElementById('downloads-count');
            
            // Обновляем счетчик скачиваний
            let count = 1248;
            setInterval(() => {
                count += Math.floor(Math.random() * 5);
                downloadsCount.textContent = count.toLocaleString() + ' скачиваний';
            }, 30000);
            
            // Обработка клика по кнопке скачивания
            downloadBtn.addEventListener('click', function() {
                // Имитация загрузки
                downloadBtn.disabled = true;
                downloadBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    ЗАГРУЗКА...
                `;
                
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 10;
                    if (progress > 100) progress = 100;
                    downloadProgress.style.width = progress + '%';
                    
                    if (progress === 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                               <!-- Дополнительные разделы -->
    <div class="container mx-auto px-4 py-12 max-w-6xl relative z-10">
        
        <!-- Раздел с видеообзором -->
        <div class="card-hud p-6 rounded-xl mb-12">
            <h2 class="text-2xl font-bold hud-font text-gray-200 mb-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                ВИДЕООБЗОР ИГРОВОГО ПРОЦЕССА
            </h2>
            
            <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-lg overflow-hidden border border-gray-700">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-800 p-3 rounded-lg border border-gray-700 text-center">
                    <div class="text-blue-400 font-bold">15+</div>
                    <div class="text-xs text-gray-400">Учебных миссий</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg border border-gray-700 text-center">
                    <div class="text-green-400 font-bold">15+</div>
                    <div class="text-xs text-gray-400">Учебных миссий</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg border border-gray-700 text-center">
                    <div class="text-yellow-400 font-bold">10+</div>
                    <div class="text-xs text-gray-400">Часов контента</div>
                </div>
                <div class="bg-gray-800 p-3 rounded-lg border border-gray-700 text-center">
                    <div class="text-purple-400 font-bold">100%</div>
                    <div class="text-xs text-gray-400">Практических навыков</div>
                </div>
            </div>
        </div>

        <!-- Раздел с системными уведомлениями -->
        <div class="card-hud p-6 rounded-xl mb-12">
            <h2 class="text-2xl font-bold hud-font text-gray-200 mb-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                СИСТЕМНЫЕ УВЕДОМЛЕНИЯ
            </h2>
            
            <div class="space-y-4">
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-blue-500 flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-blue-400 mb-1">Обновление 1.0.1</h3>
                        <p class="text-gray-300">Вышло критическое обновление безопасности. Рекомендуем обновить игру до последней версии.</p>
                        <p class="text-xs text-gray-500 mt-2">25.10.2023 | Системное сообщение</p>
                    </div>
                </div>
                
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-green-500 flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-green-400 mb-1">Сервера работают стабильно</h3>
                        <p class="text-gray-300">Все системы функционируют в штатном режиме. Задержка соединения минимальна.</p>
                        <p class="text-xs text-gray-500 mt-2">24.10.2023 | Статус серверов</p>
                    </div>
                </div>
                
                <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-purple-500 flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-purple-400 mb-1">Новые учебные миссии</h3>
                        <p class="text-gray-300">Добавлены 3 новые практические миссии по работе с Unity и VR.</p>
                        <p class="text-xs text-gray-500 mt-2">22.10.2023 | Новый контент</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел с часто задаваемыми вопросами -->
        <div class="card-hud p-6 rounded-xl">
            <h2 class="text-2xl font-bold hud-font text-gray-200 mb-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ
            </h2>
            
            <div class="space-y-4">
                <div class="border-b border-gray-700 pb-4">
                    <button class="faq-question flex justify-between items-center w-full text-left font-bold text-gray-200 hover:text-blue-400 transition-colors">
                        <span>Как проверить, соответствует ли мой компьютер требованиям?</span>
                        <svg class="h-5 w-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer mt-2 text-gray-400 hidden">
                        <p>Вы можете использовать бесплатные утилиты типа CPU-Z или GPU-Z для проверки характеристик вашего компьютера. Также в игре есть встроенный бенчмарк, который оценит производительность системы.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-700 pb-4">
                    <button class="faq-question flex justify-between items-center w-full text-left font-bold text-gray-200 hover:text-blue-400 transition-colors">
                        <span>Какие VR-гарнитуры поддерживаются?</span>
                        <svg class="h-5 w-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer mt-2 text-gray-400 hidden">
                        <p>Игра поддерживает все основные VR-гарнитуры: Oculus Rift S, Quest (через Link), HTC Vive, Valve Index, Windows Mixed Reality. Для каждой гарнитуры есть оптимальные настройки.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-700 pb-4">
                    <button class="faq-question flex justify-between items-center w-full text-left font-bold text-gray-200 hover:text-blue-400 transition-colors">
                        <span>Можно ли играть без VR-гарнитуры?</span>
                        <svg class="h-5 w-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer mt-2 text-gray-400 hidden">
                        <p>Да, игра имеет режим "Desktop Mode" с обычным управлением мышью и клавиатурой. Однако для полного погружения рекомендуется использовать VR.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-700 pb-4">
                    <button class="faq-question flex justify-between items-center w-full text-left font-bold text-gray-200 hover:text-blue-400 transition-colors">
                        <span>Как получить доступ к обновлениям?</span>
                        <svg class="h-5 w-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer mt-2 text-gray-400 hidden">
                        <p>Игра автоматически проверяет обновления при запуске. Вы также можете вручную проверить обновления в настройках лаунчера.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-700 pb-4">
                    <button class="faq-question flex justify-between items-center w-full text-left font-bold text-gray-200 hover:text-blue-400 transition-colors">
                        <span>Какие языки поддерживаются?</span>
                        <svg class="h-5 w-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer mt-2 text-gray-400 hidden">
                        <p>На данный момент доступны русский и английский языки интерфейса и озвучки. В планах добавление других языков.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Дополнительные скрипты -->
    <script>
        // Обработка FAQ
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('svg');
                
                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            });
        });
        
        // Имитация системных уведомлений
        function showSystemNotification(title, message, type = 'info') {
            const colors = {
                info: 'blue',
                success: 'green',
                warning: 'yellow',
                error: 'red'
            };
            
            const notification = document.createElement('div');
            notification.className = `p-4 bg-gray-800 rounded-lg border-l-4 border-${colors[type]}-500 mb-4 animate__animated animate__fadeInRight`;
            notification.innerHTML = `
                <h3 class="font-bold text-${colors[type]}-400 mb-1">${title}</h3>
                <p class="text-gray-300">${message}</p>
            `;
            
            document.querySelector('.card-hud').prepend(notification);
            
            setTimeout(() => {
                notification.classList.add('animate__fadeOutRight');
                setTimeout(() => notification.remove(), 500);
            }, 5000);
        }
        
        // Пример использования:
        // setTimeout(() => showSystemNotification('Новое обновление', 'Доступна версия 1.0.2 с исправлением ошибок', 'info'), 3000);
    </script>