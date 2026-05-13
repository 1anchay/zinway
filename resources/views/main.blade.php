<!DOCTYPE html>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<html lang="ru">
    @include('hader')
<head>
    <title>VR КМБ - Виртуальный курс молодого бойца</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключаем Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Подключаем Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #1e3a8a;
            --secondary: #172554;
            --accent: #166534;
            --light: #111827;
            --dark: #e5e7eb;
            --darker: #1f2937;
            --red: #b91c1c;
            --blue: #1e40af;
            --white: #f3f4f6;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .header-bg {
            background: linear-gradient(rgba(17, 24, 39, 0.9), rgba(17, 24, 39, 0.9)), 
                        url('https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .skill-card {
            background: var(--darker);
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border-left: 4px solid var(--accent);
        }
        
        .tech-icon {
            filter: drop-shadow(0 0 5px rgba(30, 58, 138, 0.5));
            transition: all 0.3s ease;
        }
        
        .tech-icon:hover {
            filter: drop-shadow(0 0 10px rgba(30, 58, 138, 0.7));
            transform: scale(1.1);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .vr-headset {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .section-divider {
            height: 100px;
            background: linear-gradient(to bottom, var(--light), transparent);
            clip-path: polygon(0 0, 100% 0, 100% 70%, 0 100%);
        }
        
        .section-divider.reverse {
            clip-path: polygon(0 70%, 100% 0, 100% 100%, 0 100%);
            background: linear-gradient(to top, var(--light), transparent);
        }
        
        .russian-flag {
            background: linear-gradient(to bottom, 
                var(--white) 33%, 
                #1e3a8a 33%, 
                #1e3a8a 66%, 
                #b91c1c 66%);
        }
        
        .patriot-badge {
            background: radial-gradient(circle, var(--white) 40%, #b91c1c 40%);
            border: 3px solid #1e3a8a;
        }
        
        .military-badge {
            background-color: var(--darker);
            border: 2px solid var(--primary);
        }
        
        .glow {
            text-shadow: 0 0 10px rgba(30, 58, 138, 0.7);
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-100">
    <!-- Hero Section -->
    <section class="header-bg py-24 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-16 lg:mb-0">
                    <div class="inline-flex items-center bg-gradient-to-r from-blue-700 to-green-700 text-white px-6 py-2 rounded-full mb-6 text-sm font-bold uppercase tracking-wider">
                        <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russian Flag" class="h-4 mr-2">
                        VR курс подготовки
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                        <span class="text-blue-400 glow">Курс молодого бойца</span><br>
                        <span class="text-green-400">в виртуальной реальности</span>
                    </h1>
                    <p class="text-lg text-gray-300 mb-8 max-w-lg">
                        Освойте военные навыки через инновационные VR-тренажеры. Реалистичная подготовка в безопасной виртуальной среде.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#skills" class="px-8 py-3 bg-gradient-to-r from-blue-700 to-green-600 text-white rounded-lg font-bold hover:from-blue-800 hover:to-green-700 transition-all shadow-lg hover:shadow-xl text-center transform hover:-translate-y-1 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russia" class="h-5 mr-2">
                            Начать обучение
                        </a>
                        <a href="#about" class="px-8 py-3 border-2 border-blue-500 text-blue-400 rounded-lg font-bold hover:bg-gray-800 transition-all text-center transform hover:-translate-y-1 flex items-center justify-center">
                            <i class="fas fa-info-circle mr-2"></i> Узнать больше
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center relative">
                    <!-- 3D модель солдата -->
                    <img src="https://cdn-icons-png.flaticon.com/512/3903/3903983.png" alt="Russian Soldier" class="w-full max-w-md vr-headset">
                    <div class="absolute -bottom-5 -right-5 patriot-badge w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                        <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russian Flag" class="h-8">
                    </div>
                    <div class="absolute top-10 left-10 military-badge px-3 py-1 rounded-full text-xs font-bold text-white flex items-center">
                        <i class="fas fa-shield-alt mr-2"></i> Защита Отечества
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center mb-4">
                    <div class="h-1 w-16 bg-blue-500 mr-4"></div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white">
                        <span class="text-blue-400">Боевые</span> <span class="text-green-400">навыки</span>
                    </h2>
                    <div class="h-1 w-16 bg-green-500 ml-4"></div>
                </div>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Освойте ключевые военные дисциплины через VR-тренажеры
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Skill 1 -->
                <div class="skill-card rounded-lg overflow-hidden">
                    <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель тактической карты -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3174/3174836.png" alt="Тактика" class="h-32 w-32 object-contain tech-icon">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russia" class="h-3 mr-1">
                            Обязательный
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">Тактическая подготовка</h3>
                        <p class="text-gray-300 mb-4">
                            Отработка действий в различных тактических ситуациях, принятие решений в условиях ограниченного времени и стресса.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-blue-400">Уровень: Базовый</span>
                            <span class="text-sm text-gray-400">2 недели</span>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="skill-card rounded-lg overflow-hidden">
                    <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель медицинского набора -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3174/3174839.png" alt="Первая помощь" class="h-32 w-32 object-contain tech-icon">
                        <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russia" class="h-3 mr-1">
                            Обязательный
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">Медицинская подготовка</h3>
                        <p class="text-gray-300 mb-4">
                            Оказание первой помощи в полевых условиях, работа с медицинским оборудованием в стрессовых ситуациях.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-green-400">Уровень: Средний</span>
                            <span class="text-sm text-gray-400">3 недели</span>
                        </div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="skill-card rounded-lg overflow-hidden">
                    <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель карты и компаса -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3174/3174840.png" alt="Ориентирование" class="h-32 w-32 object-contain tech-icon">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russia" class="h-3 mr-1">
                            Обязательный
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">Топография и ориентирование</h3>
                        <p class="text-gray-300 mb-4">
                            Работа с картами и компасом, ориентирование на местности в различных погодных условиях и времени суток.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-blue-400">Уровень: Базовый</span>
                            <span class="text-sm text-gray-400">2 недели</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider reverse"></div>

    <!-- About Section -->
<section id="about" class="py-20 bg-gradient-to-b from-gray-900 to-black relative overflow-hidden">
    <!-- Анимированный фон -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/dark-geometric.png')]"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-purple-900/20 to-blue-900/20"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Текстовый блок -->
            <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                <div class="inline-flex items-center mb-6">
                    <div class="h-1 w-12 bg-gradient-to-r from-blue-400 to-green-400 mr-4"></div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white font-russo">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">VR-КМБ</span> - курс нового поколения
                    </h2>
                </div>
                <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                    Инновационная программа подготовки военных специалистов с использованием передовых технологий виртуальной и дополненной реальности. Наш курс революционизирует традиционные методы военной подготовки.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Карточка 1 -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl border border-gray-700 hover:border-blue-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-3">
                            <div class="h-10 w-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white">Реалистичные сценарии</h3>
                        </div>
                        <p class="text-gray-300 text-sm">Тренировка в условиях, максимально приближенных к боевым, с тактической средой и ИИ противником</p>
                    </div>
                    
                    <!-- Карточка 2 -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl border border-gray-700 hover:border-green-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-3">
                            <div class="h-10 w-10 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white">Безопасность</h3>
                        </div>
                        <p class="text-gray-300 text-sm">Возможность отрабатывать сложные ситуации и совершать ошибки без реальных последствий</p>
                    </div>
                </div>
                
                <!-- Кнопка -->
                <a href="#join" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-green-600 text-white font-medium rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300">
                    <span>Записаться на курс</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            
            <!-- 3D модель и визуализация -->
<div class="lg:w-1/2 relative">
    <!-- Контейнер для 3D модели с эффектами -->
    <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-2xl border border-gray-700 transform hover:scale-[1.02] transition-transform duration-500 h-[500px]">
        <!-- Встраивание 3D модели с продвинутыми эффектами -->
        <model-viewer 
            src="/models/model3.glb"
            alt="VR Military Training Simulation"
            ar
            ar-modes="webxr scene-viewer quick-look"
            environment-image="https://modelviewer.dev/shared-assets/environments/spruit_sunrise_1k_HDR.hdr"
            exposure="1.2"
            shadow-intensity="1"
            auto-rotate
            auto-rotate-delay="0"
            camera-controls
            camera-orbit="0deg 75deg 105%"
            field-of-view="30deg"
            style="width:100%; height:100%;"
            class="z-10">
            
            <!-- Анимации и эффекты для модели -->
            <div class="hotspot" slot="hotspot-1" data-position="0 0 0" data-normal="0 1 0">
                <div class="hotspot-annotation bg-blue-600/90 text-white">
                    Тактический VR-тренажер
                </div>
            </div>
            
            <button slot="ar-button" class="absolute bottom-4 right-4 bg-black/80 text-white px-4 py-2 rounded-full backdrop-blur-sm border border-gray-600 hover:bg-blue-600 transition-all">
                👆 Просмотр в AR
            </button>
        </model-viewer>
        
        <!-- Военные HUD-элементы поверх модели -->
        <div class="absolute top-6 left-6 w-16 h-16 bg-blue-500/20 rounded-full backdrop-blur-sm border-2 border-blue-400/50 flex items-center justify-center animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
            </svg>
        </div>
        
        <div class="absolute bottom-6 right-6 w-16 h-16 bg-green-500/20 rounded-full backdrop-blur-sm border-2 border-green-400/50 flex items-center justify-center animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
            </svg>
        </div>
        
        <!-- Радар-индикатор -->
        <div class="absolute top-6 right-6 bg-gray-900/80 backdrop-blur-sm px-3 py-1 rounded-full border border-gray-700 flex items-center">
            <div class="relative mr-2">
                <div class="radar-scan w-4 h-4 rounded-full border-2 border-green-400"></div>
            </div>
            <span class="text-sm text-gray-200 font-mono">RADAR ACTIVE</span>
        </div>
        
        <!-- Панель управления с анимацией -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-gray-900/80 backdrop-blur-sm px-4 py-2 rounded-full border border-gray-700 flex space-x-4">
            <button class="text-blue-400 hover:text-blue-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                </svg>
            </button>
            <button class="text-red-400 hover:text-red-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
            <button class="text-green-400 hover:text-green-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        
        <!-- Российский флаг и подпись Unity с анимацией -->
        <div class="absolute bottom-6 left-6 bg-gradient-to-r from-blue-600 to-green-600 p-3 rounded-lg shadow-lg flex items-center transform hover:scale-105 transition-transform duration-300 z-10 hover:shadow-blue-500/20">
            <div class="russian-flag w-8 h-8 rounded-full mr-3"></div>
            <div class="text-white">
                <p class="text-xs font-bold uppercase tracking-wider">Разработано в</p>
                <p class="text-lg font-bold font-russo">UNITY 3D</p>
            </div>
        </div>
        
        <!-- Эффект голографического сканирования -->
        <div class="absolute inset-0 overflow-hidden rounded-2xl pointer-events-none">
            <div class="absolute inset-0 bg-gradient-to-br from-transparent via-blue-500/10 to-transparent opacity-30"></div>
            <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(45deg,transparent_45%,rgba(0,240,255,0.05)_50%,transparent_55%)] bg-[length:300%_300%] animate-scan"></div>
        </div>
    </div>
    
    <!-- Декоративные элементы фона с анимацией -->
    <div class="absolute -top-12 -left-12 w-40 h-40 bg-blue-500/10 rounded-full backdrop-blur-sm z-0 animate-float"></div>
    <div class="absolute -bottom-12 -right-12 w-48 h-48 bg-green-500/10 rounded-full backdrop-blur-sm z-0 animate-float delay-1000"></div>
</div>

<style>
    /* Анимация радара */
    .radar-scan {
        position: relative;
        overflow: hidden;
    }
    .radar-scan::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(
            transparent 0deg,
            transparent 90deg,
            rgba(0, 255, 170, 0.3) 90deg,
            rgba(0, 255, 170, 0.7) 180deg,
            transparent 180deg,
            transparent 270deg,
            rgba(0, 255, 170, 0.3) 270deg,
            rgba(0, 255, 170, 0.7) 360deg
        );
        animation: radar-rotate 4s linear infinite;
    }
    
    @keyframes radar-rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    /* Анимация сканирования */
    @keyframes scan {
        0% { background-position: 0% 0%; }
        100% { background-position: 100% 100%; }
    }
    .animate-scan {
        animation: scan 8s linear infinite;
    }
</style>

<!-- Подключение model-viewer (добавить в head) -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
            </div>
        </div>
    </div>
</section>

    <!-- Tech Section -->
    <section id="tech" class="py-16 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center mb-4">
                    <div class="h-1 w-16 bg-blue-500 mr-4"></div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white">
                        <span class="text-blue-400">Технологии</span> <span class="text-green-400">обучения</span>
                    </h2>
                    <div class="h-1 w-16 bg-green-500 ml-4"></div>
                </div>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Современные решения для эффективной подготовки
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Tech 1 -->
                <div class="flex flex-col items-center">
                    <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                        <!-- 3D модель логотипа Unity -->
                        <img src="https://cdn-icons-png.flaticon.com/512/5969/5969346.png" alt="Unity" class="h-10 w-10 object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">Unity 3D</h3>
                    <p class="text-gray-400 text-center text-sm">Движок для создания VR-тренажеров</p>
                </div>
                
                <!-- Tech 2 -->
                <div class="flex flex-col items-center">
                    <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                        <!-- 3D модель логотипа C# -->
                        <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="C#" class="h-10 w-10 object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">C#</h3>
                    <p class="text-gray-400 text-center text-sm">Программирование логики тренажеров</p>
                </div>
                
                <!-- Tech 3 -->
                <div class="flex flex-col items-center">
                    <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                        <!-- 3D модель VR-шлема -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="VR" class="h-10 w-10 object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">VR Системы</h3>
                    <p class="text-gray-400 text-center text-sm">Oculus Rift, HTC Vive</p>
                </div>
                
                <!-- Tech 4 -->
                <div class="flex flex-col items-center">
                    <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                        <!-- 3D модель оружия -->
                        <img src="https://cdn-icons-png.flaticon.com/512/2779/2779775.png" alt="Blender" class="h-10 w-10 object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">3D Модели</h3>
                    <p class="text-gray-400 text-center text-sm">Реалистичные объекты и окружение</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Russian Culture Section -->
    <section class="py-16 bg-gradient-to-r from-gray-800 to-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    <span class="text-blue-400">Связь с</span> <span class="text-green-400">российской культурой</span>
                </h2>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Мы гордимся нашим наследием и интегрируем его в обучение
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                    <div class="h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель российского флага -->
                        <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russian Flag" class="h-32 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Государственная символика</h3>
                        <p class="text-gray-300">Изучение истории и значения российского флага, герба и гимна</p>
                    </div>
                </div>
                
                <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                    <div class="h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель военного мемориала -->
                        <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russian Culture" class="h-32 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Военные традиции</h3>
                        <p class="text-gray-300">Знакомство с богатыми традициями российской армии</p>
                    </div>
                </div>
                
                <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                    <div class="h-48 bg-gray-700 flex items-center justify-center">
                        <!-- 3D модель исторического сражения -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3903/3903983.png" alt="Russian History" class="h-32 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Исторические победы</h3>
                        <p class="text-gray-300">Изучение ключевых сражений и тактик русской армии</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-800 to-green-700">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-3xl mx-auto bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
                <div class="p-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                        Готовы к призыву в <span class="text-blue-400">VR</span> <span class="text-green-400">КМБ</span>?
                    </h2>
                    <p class="text-lg text-gray-300 mb-6">
                        Оставьте заявку и получите консультацию по программе обучения
                    </p>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Ваше имя" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white">
                        </div>
                        <div>
                            <input type="tel" placeholder="Телефон" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white">
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-blue-700 to-green-600 text-white font-bold rounded-lg hover:from-blue-800 hover:to-green-700 transition-all shadow-lg transform hover:-translate-y-1 flex items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/197/197408.png" alt="Russia" class="h-5 mr-2">
                            Отправить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('button.md\\:hidden');
        const navLinks = document.querySelector('nav.hidden.md\\:flex');
        
        mobileMenuButton.addEventListener('click', () => {
            navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex');
            navLinks.classList.toggle('flex-col');
            navLinks.classList.toggle('absolute');
            navLinks.classList.toggle('top-20');
            navLinks.classList.toggle('right-6');
            navLinks.classList.toggle('bg-gray-800');
            navLinks.classList.toggle('p-4');
            navLinks.classList.toggle('rounded-lg');
            navLinks.classList.toggle('shadow-xl');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (!navLinks.classList.contains('hidden')) {
                    navLinks.classList.add('hidden');
                    navLinks.classList.remove('flex');
                }
            });
        });
    </script>
</body>
@include('footer')
</html>