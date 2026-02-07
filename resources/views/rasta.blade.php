<!DOCTYPE html>
<html lang="ru">
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка и растаможка автомобилей | Zinway</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: 1 },
                            '50%': { opacity: 0.7 },
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0A1A3A;
            --secondary-blue: #1E3A8A;
            --primary-red: #DC2626;
            --secondary-red: #B91C1C;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            overflow-x: hidden;
        }
        
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Мобильное меню */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            max-width: 400px;
            height: 100vh;
            background: white;
            z-index: 1000;
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
        }
        
        .mobile-menu.active {
            right: 0;
        }
        
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Стили для секций */
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
        }
        
        .red-gradient {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--secondary-red) 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .process-step {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-red), var(--primary-blue));
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }
        
        .process-step:hover::before {
            transform: translateX(0);
        }
        
        .process-step:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 28px;
        }
        
        .timeline-item::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: #10B981;
            font-weight: bold;
            font-size: 1.1rem;
        }
        
        .price-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .price-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-red);
            box-shadow: 0 20px 40px rgba(220, 38, 38, 0.1);
        }
        
        /* Анимации */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        /* Декоративные элементы */
        .decorative-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.15;
            z-index: 0;
        }
        
        /* Адаптивность */
        @media (max-width: 768px) {
            .process-step {
                margin-bottom: 24px;
            }
            
            .process-step:hover {
                transform: translateY(-4px);
            }
        }
    </style>
</head>


    <!-- Hero секция -->
    <section class="relative gradient-bg text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="container mx-auto px-4 py-20 md:py-32 relative">
            <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
                <span class="inline-block bg-white/20 backdrop-blur-sm text-white px-5 py-2 rounded-full text-sm font-semibold mb-6 shadow-lg">
                    <i class="fas fa-shipping-fast mr-2"></i>ДОСТАВКА И РАСТАМОЖКА ПОД КЛЮЧ
                </span>
                <h1 class="logo-font text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Доставка автомобилей<br>из Азии
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Полный цикл: от подбора до передачи ключей с гарантией легальности
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#calculator" class="bg-white text-red-600 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition duration-300 inline-flex items-center justify-center shadow-lg hover:shadow-xl">
                        <i class="fas fa-calculator mr-2"></i>Рассчитать стоимость
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-xl hover:bg-white/10 transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-headset mr-2"></i>Консультация эксперта
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="py-16 md:py-24 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="logo-font text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Почему выбирают нас
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Гарантия юридической чистоты и прозрачности на всех этапах
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="glass-card rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fade-in-up" style="animation-delay: 0.1s">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-900">100% юридическая чистота</h3>
                    <p class="text-gray-600">Все документы оформляются строго по законодательству РФ с гарантией легальности</p>
                </div>
                
                <div class="glass-card rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-900">Четкие сроки</h3>
                    <p class="text-gray-600">Соблюдение оговоренных сроков с онлайн-отслеживанием на каждом этапе</p>
                </div>
                
                <div class="glass-card rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fade-in-up" style="animation-delay: 0.3s">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-ruble-sign text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-900">Без скрытых платежей</h3>
                    <p class="text-gray-600">Фиксированная стоимость — все расходы известны до начала оформления</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция процесса (обновленная) -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in-up">
                <span class="inline-block bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-2 rounded-full text-sm font-semibold mb-4 shadow-lg">
                    4 ЭТАПА ДОСТАВКИ
                </span>
                <h2 class="logo-font text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Процесс от выбора<br>до получения ключей
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Прозрачная схема работы с контролем на каждом этапе
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
                    <!-- Этап 1 -->
                    <div class="process-step bg-white rounded-2xl p-8 text-center shadow-xl animate-fade-in-up" style="animation-delay: 0.1s">
                        <div class="relative mb-8">
                            <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
                                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-2xl animate-float">
                                    <span class="text-white font-bold text-2xl">1</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-red-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-search-dollar text-red-600 text-3xl"></i>
                        </div>
                        
                        <h3 class="font-bold text-xl mb-4 text-gray-900">Выбор и покупка</h3>
                        
                        <ul class="text-gray-700 text-left space-y-3 mb-6">
                            <li class="timeline-item pl-7">Подбор автомобиля по вашим критериям</li>
                            <li class="timeline-item pl-7">Проверка истории и технического состояния</li>
                            <li class="timeline-item pl-7">Оформление договора купли-продажи</li>
                        </ul>
                        
                        <div class="mt-6 pt-6 border-t border-gray-100">
                            <div class="inline-flex items-center text-red-600 font-semibold text-sm">
                                <i class="fas fa-clock mr-2"></i>
                                <span>3-7 рабочих дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Этап 2 -->
                    <div class="process-step bg-white rounded-2xl p-8 text-center shadow-xl animate-fade-in-up" style="animation-delay: 0.2s">
                        <div class="relative mb-8">
                            <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-2xl animate-float" style="animation-delay: 0.2s">
                                    <span class="text-white font-bold text-2xl">2</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-ship text-blue-600 text-3xl"></i>
                        </div>
                        
                        <h3 class="font-bold text-xl mb-4 text-gray-900">Доставка до РФ</h3>
                        
                        <ul class="text-gray-700 text-left space-y-3 mb-6">
                            <li class="timeline-item pl-7">Подготовка экспортных документов</li>
                            <li class="timeline-item pl-7">Морская или автомобильная доставка</li>
                            <li class="timeline-item pl-7">Таможенное оформление в стране отправки</li>
                        </ul>
                        
                        <div class="mt-6 pt-6 border-t border-gray-100">
                            <div class="inline-flex items-center text-blue-600 font-semibold text-sm">
                                <i class="fas fa-clock mr-2"></i>
                                <span>30-45 календарных дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Этап 3 -->
                    <div class="process-step bg-white rounded-2xl p-8 text-center shadow-xl animate-fade-in-up" style="animation-delay: 0.3s">
                        <div class="relative mb-8">
                            <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-2xl animate-float" style="animation-delay: 0.4s">
                                    <span class="text-white font-bold text-2xl">3</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-file-contract text-green-600 text-3xl"></i>
                        </div>
                        
                        <h3 class="font-bold text-xl mb-4 text-gray-900">Таможня в РФ</h3>
                        
                        <ul class="text-gray-700 text-left space-y-3 mb-6">
                            <li class="timeline-item pl-7">Таможенное декларирование и оформление</li>
                            <li class="timeline-item pl-7">Расчет и оплата пошлин и налогов</li>
                            <li class="timeline-item pl-7">Получение СБКТС и ПТС</li>
                        </ul>
                        
                        <div class="mt-6 pt-6 border-t border-gray-100">
                            <div class="inline-flex items-center text-green-600 font-semibold text-sm">
                                <i class="fas fa-clock mr-2"></i>
                                <span>5-10 рабочих дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Этап 4 -->
                    <div class="process-step bg-white rounded-2xl p-8 text-center shadow-xl animate-fade-in-up" style="animation-delay: 0.4s">
                        <div class="relative mb-8">
                            <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-2xl animate-float" style="animation-delay: 0.6s">
                                    <span class="text-white font-bold text-2xl">4</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-car text-purple-600 text-3xl"></i>
                        </div>
                        
                        <h3 class="font-bold text-xl mb-4 text-gray-900">Получение авто</h3>
                        
                        <ul class="text-gray-700 text-left space-y-3 mb-6">
                            <li class="timeline-item pl-7">Постановка на учет в ГИБДД</li>
                            <li class="timeline-item pl-7">Прохождение техосмотра (при необходимости)</li>
                            <li class="timeline-item pl-7">Передача автомобиля с полным пакетом документов</li>
                        </ul>
                        
                        <div class="mt-6 pt-6 border-t border-gray-100">
                            <div class="inline-flex items-center text-purple-600 font-semibold text-sm">
                                <i class="fas fa-clock mr-2"></i>
                                <span>3-5 рабочих дней</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Итоговая информация -->
                <div class="mt-16 text-center animate-fade-in-up" style="animation-delay: 0.5s">
                    <div class="inline-flex flex-col md:flex-row items-center bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-white shadow-2xl max-w-2xl mx-auto">
                        <div class="md:w-2/3 md:pr-8 mb-6 md:mb-0">
                            <h3 class="logo-font text-2xl font-bold mb-3">Общий срок доставки</h3>
                            <p class="text-gray-300 text-lg">От 45 до 65 дней в зависимости от страны отправки и выбранного транспорта</p>
                        </div>
                        <div class="md:w-1/3">
                            <div class="text-4xl font-bold mb-2">45-65</div>
                            <div class="text-sm text-gray-300">дней</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция стоимости -->
    <section id="calculator" class="py-16 md:py-24 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="logo-font text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Стоимость доставки и растаможки
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Прозрачное ценообразование для каждой категории автомобилей
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Эконом класс -->
                <div class="price-card bg-white rounded-2xl p-8 shadow-xl animate-fade-in-up" style="animation-delay: 0.1s">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-car text-green-600 text-3xl"></i>
                        </div>
                        <h3 class="font-bold text-2xl mb-2 text-gray-900">Эконом-класс</h3>
                        <div class="text-gray-500 text-sm">Chery, Geely, Haval</div>
                    </div>
                    
                    <div class="text-center mb-8">
                        <span class="text-4xl font-bold text-gray-900">от 120 000 ₽</span>
                        <div class="text-gray-500 text-sm mt-2">*зависит от стоимости авто</div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Доставка: 60 000 - 90 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Таможенная пошлина: от 30 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Утильсбор: от 15 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Наши услуги: от 15 000 ₽</span>
                        </li>
                    </ul>
                    
                    <div class="text-center text-sm text-gray-600 mb-6 p-4 bg-gray-50 rounded-xl">
                        <i class="fas fa-info-circle mr-2 text-green-600"></i>Срок доставки: 45-60 дней
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold py-4 rounded-xl hover:shadow-lg transition-all duration-300">
                        Рассчитать для эконом-класса
                    </button>
                </div>
                
                <!-- Бизнес класс -->
                <div class="price-card bg-white rounded-2xl p-8 shadow-xl animate-fade-in-up relative" style="animation-delay: 0.2s">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-red-600 to-red-700 text-white text-sm font-bold px-5 py-2 rounded-full shadow-lg">
                            ПОПУЛЯРНО
                        </span>
                    </div>
                    
                    <div class="text-center mb-8 pt-4">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-car-side text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="font-bold text-2xl mb-2 text-gray-900">Бизнес-класс</h3>
                        <div class="text-gray-500 text-sm">Li Auto, Changan, Exeed</div>
                    </div>
                    
                    <div class="text-center mb-8">
                        <span class="text-4xl font-bold text-gray-900">от 180 000 ₽</span>
                        <div class="text-gray-500 text-sm mt-2">*зависит от стоимости авто</div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Доставка: 80 000 - 120 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Таможенная пошлина: от 50 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Утильсбор: от 20 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Наши услуги: от 20 000 ₽</span>
                        </li>
                    </ul>
                    
                    <div class="text-center text-sm text-gray-600 mb-6 p-4 bg-blue-50 rounded-xl">
                        <i class="fas fa-info-circle mr-2 text-blue-600"></i>Срок доставки: 40-55 дней
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 rounded-xl hover:shadow-lg transition-all duration-300">
                        Рассчитать для бизнес-класса
                    </button>
                </div>
                
                <!-- Премиум класс -->
                <div class="price-card bg-white rounded-2xl p-8 shadow-xl animate-fade-in-up" style="animation-delay: 0.3s">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-car text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="font-bold text-2xl mb-2 text-gray-900">Премиум-класс</h3>
                        <div class="text-gray-500 text-sm">Luxury, SUV, Электромобили</div>
                    </div>
                    
                    <div class="text-center mb-8">
                        <span class="text-4xl font-bold text-gray-900">от 250 000 ₽</span>
                        <div class="text-gray-500 text-sm mt-2">*индивидуальный расчет</div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Доставка: от 120 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Таможенная пошлина: от 80 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Утильсбор: от 30 000 ₽</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 text-lg mr-3 mt-1"></i>
                            <span class="text-gray-700">Наши услуги: от 25 000 ₽</span>
                        </li>
                    </ul>
                    
                    <div class="text-center text-sm text-gray-600 mb-6 p-4 bg-purple-50 rounded-xl">
                        <i class="fas fa-info-circle mr-2 text-purple-600"></i>Срок доставки: 35-50 дней
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-gray-900 to-gray-800 text-white font-semibold py-4 rounded-xl hover:shadow-lg transition-all duration-300">
                        Консультация для премиум-класса
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция контактов -->
    <section id="contact" class="py-16 md:py-24 bg-gradient-to-r from-gray-900 to-gray-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="logo-font text-3xl md:text-4xl font-bold mb-8">
                    Рассчитаем стоимость доставки вашего авто
                </h2>
                <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                    Отправьте данные об автомобиле и получите точный расчет в течение 30 минут
                </p>
                
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 md:p-12 shadow-2xl">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-left text-gray-300 mb-2">Ваше имя</label>
                                <input type="text" placeholder="Иван Иванов" class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                            </div>
                            <div>
                                <label class="block text-left text-gray-300 mb-2">Номер телефона</label>
                                <input type="tel" placeholder="+7 (___) ___-__-__" class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-left text-gray-300 mb-2">Марка и модель автомобиля</label>
                            <input type="text" placeholder="Например: Geely Coolray" class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-left text-gray-300 mb-2">Стоимость автомобиля ($)</label>
                                <input type="number" placeholder="Например: 25000" class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                            </div>
                            <div>
                                <label class="block text-left text-gray-300 mb-2">Объем двигателя (л)</label>
                                <input type="number" step="0.1" placeholder="Например: 1.5" class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-left text-gray-300 mb-2">Страна отправки</label>
                            <select class="w-full p-4 rounded-xl bg-white/10 border border-white/20 text-white focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all">
                                <option value="" disabled selected>Выберите страну</option>
                                <option value="china">Китай</option>
                                <option value="japan">Япония</option>
                                <option value="korea">Южная Корея</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full red-gradient text-white font-bold py-5 px-8 rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-calculator mr-2"></i>Рассчитать стоимость доставки
                        </button>
                        
                        <p class="text-sm text-gray-400 text-center">
                            Нажимая кнопку, вы соглашаетесь с 
                            <a href="#" class="text-red-300 hover:text-red-200 underline">политикой конфиденциальности</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <script>
        // Мобильное меню
        const menuToggle = document.getElementById('menuToggle');
        const menuClose = document.getElementById('menuClose');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuOverlay = document.getElementById('menuOverlay');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        menuClose.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        menuOverlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Плавная прокрутка
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Анимация появления элементов при скролле
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);
        
        // Наблюдаем за всеми элементами с анимацией
        document.querySelectorAll('.animate-fade-in-up').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
@include('footer')
</html>