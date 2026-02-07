<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zinway | Автомобили из Китая и Азии</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        .header-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
            transition: all 0.3s ease;
        }
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #DC2626;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .red-btn {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.2);
        }
        .red-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.3);
        }
        .z-logo {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }
        .social-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            transform: translateY(-2px);
        }
        .avito-bg {
            background: linear-gradient(135deg, #6CC24A 0%, #4CAF50 100%);
        }
        .tiktok-bg {
            background: linear-gradient(135deg, #000000 0%, #333333 100%);
        }
        .instagram-bg {
            background: linear-gradient(135deg, #833AB4 0%, #FD1D1D 50%, #F56040 100%);
        }
        .business-border {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Стили для компактной контактной панели */
        .contact-panel {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .contact-panel.hidden {
            max-height: 0;
            padding-top: 0;
            padding-bottom: 0;
            opacity: 0;
            transform: translateY(-10px);
        }
        
        .compact-contact-panel {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }
        
        .contact-item-compact {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            flex: 1;
            min-width: 180px;
        }
        
        .contact-item-compact:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }
        
        .contact-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            flex-shrink: 0;
        }
        
        .contact-text {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }
        
        .contact-main {
            font-weight: 600;
            font-size: 0.85rem;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .contact-sub {
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .social-section {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-left: 12px;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Информационная панель */
        .info-panel {
            transition: all 0.3s ease;
        }
        
        .info-panel.hidden {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            padding-top: 0;
            padding-bottom: 0;
            border: none;
        }
        
        /* Стили для мобильного меню */
        .mobile-menu {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: none;
        }
        
        .mobile-menu.show {
            display: block;
        }
        
        .menu-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(4px);
            animation: fadeIn 0.3s ease;
        }
        
        .menu-panel {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 85%;
            max-width: 400px;
            background: white;
            box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
        }
        
        .menu-panel.show {
            transform: translateX(0);
        }
        
        .menu-content {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 20px;
        }
        
        .menu-header {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
            padding: 20px;
            color: white;
            position: relative;
        }
        
        .menu-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .menu-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            color: #374151;
            font-weight: 500;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f3f4f6;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .menu-item:not(.accordion-btn):hover {
            background: #fef2f2;
            color: #DC2626;
            padding-left: 25px;
        }
        
        .menu-link {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            color: #374151;
            font-weight: 500;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f3f4f6;
            width: 100%;
            text-decoration: none;
        }
        
        .menu-link:hover {
            background: #fef2f2;
            color: #DC2626;
            padding-left: 25px;
        }
        
        .menu-item i, .menu-link i {
            width: 24px;
            margin-right: 12px;
            text-align: center;
            color: #9ca3af;
        }
        
        .menu-item:hover i, .menu-link:hover i {
            color: #DC2626;
        }
        
        .menu-subitem {
            display: block;
            padding: 12px 20px 12px 56px;
            color: #6b7280;
            font-size: 0.95rem;
            border-bottom: 1px solid #f3f4f6;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        
        .menu-subitem:hover {
            background: #fef2f2;
            color: #DC2626;
            padding-left: 60px;
        }
        
        .menu-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .menu-accordion.active .menu-accordion-content {
            max-height: 500px;
        }
        
        .menu-accordion.active .fa-chevron-down {
            transform: rotate(180deg);
        }
        
        .menu-buttons {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }
        
        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Адаптивность */
        @media (max-width: 1200px) {
            .compact-contact-panel {
                gap: 10px;
            }
            
            .contact-item-compact {
                min-width: 160px;
            }
        }
        
        @media (max-width: 992px) {
            .compact-contact-panel {
                flex-wrap: wrap;
                justify-content: flex-start;
            }
            
            .contact-item-compact {
                flex: 0 0 calc(50% - 10px);
                min-width: 0;
            }
            
            .social-section {
                border-left: none;
                padding-left: 0;
                margin-top: 10px;
                width: 100%;
                justify-content: flex-start;
            }
        }
        
        @media (max-width: 768px) {
            .contact-item-compact {
                flex: 0 0 100%;
                margin-bottom: 5px;
            }
            
            .compact-contact-panel {
                flex-direction: column;
                gap: 5px;
            }
            
            .social-section {
                justify-content: center;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding-top: 10px;
                margin-top: 10px;
            }
            
            .contact-main {
                font-size: 0.9rem;
            }
            
            .contact-sub {
                font-size: 0.75rem;
            }
        }
        
        @media (max-width: 640px) {
            .menu-panel {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    
        
        <!-- Основная навигация -->
        <nav class="bg-white py-4">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between">
                    <!-- Логотип и название -->
                    <div class="flex items-center">
                        <div class="relative mr-4">
                            <div class="z-logo w-14 h-14 flex items-center justify-center">
                                <span class="logo-font text-white text-3xl font-black">Z</span>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <h1 class="logo-font text-3xl font-black text-gray-900 leading-tight">
                                ZINWAY
                                <span class="block text-sm font-normal text-gray-600 mt-1">Your Way to Cars from the East</span>
                            </h1>
                        </div>
                        <div class="lg:hidden">
                            <h1 class="logo-font text-2xl font-black text-gray-900">ZINWAY</h1>
                        </div>
                    </div>
                    
                    <!-- Навигационные ссылки (скрыты на мобильных) -->
                    <div class="hidden lg:flex items-center space-x-8">
                        <a href="#" class="nav-link text-gray-800 font-semibold hover:text-red-600">
                            Главная
                        </a>
                        <a href="#" class="nav-link text-gray-800 font-semibold hover:text-red-600">
                            Каталог авто
                        </a>
                        <div class="relative group">
                            <a href="#" class="nav-link text-gray-800 font-semibold hover:text-red-600 flex items-center">
                                Услуги
                                <i class="fas fa-chevron-down ml-2 text-xs"></i>
                            </a>
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 border-b border-gray-100">Подбор авто</a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 border-b border-gray-100">Доставка и растаможка</a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600">Сервисное обслуживание</a>
                            </div>
                        </div>
                        <a href="#" class="nav-link text-gray-800 font-semibold hover:text-red-600">
                            О компании
                        </a>
                        <a href="#" class="nav-link text-gray-800 font-semibold hover:text-red-600">
                            Контакты
                        </a>
                    </div>
                    
                    <!-- Кнопки действий -->
                    <div class="flex items-center space-x-3">
                        <button class="red-btn text-white font-bold py-3 px-4 lg:px-6 rounded-lg flex items-center whitespace-nowrap">
                            <i class="fas fa-car mr-2"></i>
                            <span class="hidden sm:inline">Подобрать авто</span>
                            <span class="sm:hidden">Подбор</span>
                        </button>
                        <button class="hidden lg:flex border-2 border-gray-800 hover:bg-gray-800 hover:text-white text-gray-800 font-bold py-3 px-6 rounded-lg transition duration-300 items-center">
                            <i class="fas fa-comment-alt mr-2"></i>Консультация
                        </button>
                        <button onclick="openMobileMenu()" class="lg:hidden text-gray-800 p-3 hover:bg-gray-100 rounded-lg transition-colors duration-300">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Информационная панель -->
        <div class="info-panel bg-gray-50 py-3 border-y border-gray-200">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex flex-wrap items-center gap-4 md:gap-6 mb-3 md:mb-0">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-check-circle text-red-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Гарантия 12 месяцев</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-file-contract text-blue-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Юридическая чистота</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-ruble-sign text-green-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Без скрытых платежей</span>
                        </div>
                    </div>
                    
                    <div class="text-center md:text-right">
                        <span class="text-sm text-gray-600">Автомобили из:</span>
                        <div class="flex space-x-2 mt-1 justify-center md:justify-end">
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Китай</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Япония</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Корея</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Мобильное меню -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="menu-overlay" onclick="closeMobileMenu()"></div>
        <div class="menu-panel" id="menuPanel">
            <!-- Заголовок меню -->
            <div class="menu-header">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mr-3">
                        <span class="logo-font text-red-600 text-2xl font-black">Z</span>
                    </div>
                    <div>
                        <h2 class="logo-font text-xl">ZINWAY</h2>
                        <p class="text-sm text-gray-300">Your Way to Cars from the East</p>
                    </div>
                </div>
                <button class="menu-close" onclick="closeMobileMenu()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Контент меню -->
            <div class="menu-content">
                <!-- Контакты -->
                <div class="p-5 bg-gray-50 border-b">
                    <div class="space-y-3">
                        <a href="tel:+78005553535" class="flex items-center p-3 bg-white rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-phone text-red-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">+7 (800) 555-35-35</div>
                                <div class="text-xs text-gray-500">Бесплатный звонок</div>
                            </div>
                        </a>
                        
                        <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-clock text-blue-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">9:00-20:00</div>
                                <div class="text-xs text-gray-500">Пн-Пт, Сб-Вс 10:00-18:00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Навигация -->
                <nav class="py-2">
                    <a href="#" class="menu-link" onclick="closeMobileMenu()">
                        <i class="fas fa-home"></i>
                        <span>Главная</span>
                    </a>
                    
                    <a href="#" class="menu-link" onclick="closeMobileMenu()">
                        <i class="fas fa-car"></i>
                        <span>Каталог авто</span>
                    </a>
                    
                    <!-- Аккордеон Услуги -->
                    <div class="menu-accordion">
                        <button class="menu-item accordion-btn" onclick="toggleAccordion(this)">
                            <div class="flex items-center">
                                <i class="fas fa-cogs"></i>
                                <span>Услуги</span>
                            </div>
                            <i class="fas fa-chevron-down ml-auto text-gray-400 text-sm transition-transform duration-300"></i>
                        </button>
                        <div class="menu-accordion-content">
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Подбор авто</a>
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Доставка и растаможка</a>
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Сервисное обслуживание</a>
                        </div>
                    </div>
                    
                    <!-- Аккордеон Автомобили -->
                    <div class="menu-accordion">
                        <button class="menu-item accordion-btn" onclick="toggleAccordion(this)">
                            <div class="flex items-center">
                                <i class="fas fa-globe-asia"></i>
                                <span>Автомобили по странам</span>
                            </div>
                            <i class="fas fa-chevron-down ml-auto text-gray-400 text-sm transition-transform duration-300"></i>
                        </button>
                        <div class="menu-accordion-content">
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Китайские автомобили</a>
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Корейские автомобили</a>
                            <a href="#" class="menu-subitem" onclick="closeMobileMenu()">Японские автомобили</a>
                        </div>
                    </div>
                    
                    <a href="#" class="menu-link" onclick="closeMobileMenu()">
                        <i class="fas fa-building"></i>
                        <span>О компании</span>
                    </a>
                    
                    <a href="#" class="menu-link" onclick="closeMobileMenu()">
                        <i class="fas fa-comments"></i>
                        <span>Отзывы клиентов</span>
                    </a>
                    
                    <a href="#" class="menu-link" onclick="closeMobileMenu()">
                        <i class="fas fa-address-book"></i>
                        <span>Контакты</span>
                    </a>
                </nav>
                
                <!-- Социальные сети -->
                <div class="px-5 py-4 border-t">
                    <p class="text-sm text-gray-500 mb-3">Мы в социальных сетях:</p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300" title="Avito">
                            <i class="fas fa-store"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-black to-gray-800 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300" title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Бренды -->
                <div class="px-5 py-4 border-t">
                    <p class="text-sm text-gray-500 mb-3">Работаем с брендами:</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-red-50 text-red-700 rounded-full text-xs font-medium border border-red-100">Li Auto</span>
                        <span class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-full text-xs font-medium border border-blue-100">Geely</span>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 rounded-full text-xs font-medium border border-green-100">Changan</span>
                        <span class="px-3 py-1.5 bg-purple-50 text-purple-700 rounded-full text-xs font-medium border border-purple-100">Chery</span>
                        <span class="px-3 py-1.5 bg-yellow-50 text-yellow-700 rounded-full text-xs font-medium border border-yellow-100">Haval</span>
                    </div>
                </div>
            </div>
            
            <!-- Кнопки действий -->
            <div class="menu-buttons">
                <button onclick="closeMobileMenu()" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold py-4 rounded-xl flex items-center justify-center hover:from-red-700 hover:to-red-800 transition-colors duration-300">
                    <i class="fas fa-car mr-3"></i> Подобрать авто
                </button>
                
                <button onclick="closeMobileMenu()" class="w-full border-2 border-red-600 text-red-600 font-semibold py-4 rounded-xl flex items-center justify-center hover:bg-red-50 transition-colors duration-300">
                    <i class="fas fa-headset mr-3"></i> Заказать звонок
                </button>
            </div>
        </div>
    </div>

    <script>
        // Переменные для отслеживания скролла
        let lastScrollTop = 0;
        let contactPanelVisible = true;
        const contactPanel = document.querySelector('.contact-panel');
        const infoPanel = document.querySelector('.info-panel');
        const header = document.querySelector('header');

        // Функции управления мобильным меню
        function openMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const panel = document.getElementById('menuPanel');
            
            menu.classList.add('show');
            setTimeout(() => {
                panel.classList.add('show');
            }, 10);
            
            // Блокируем скролл страницы
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const panel = document.getElementById('menuPanel');
            
            panel.classList.remove('show');
            setTimeout(() => {
                menu.classList.remove('show');
            }, 300);
            
            // Разблокируем скролл страницы
            document.body.style.overflow = '';
        }
        
        // Аккордеон в мобильном меню
        function toggleAccordion(button) {
            const accordion = button.closest('.menu-accordion');
            const isActive = accordion.classList.contains('active');
            const chevron = button.querySelector('.fa-chevron-down');
            
            // Закрываем все остальные аккордеоны
            document.querySelectorAll('.menu-accordion').forEach(otherAccordion => {
                if (otherAccordion !== accordion) {
                    otherAccordion.classList.remove('active');
                    const otherChevron = otherAccordion.querySelector('.fa-chevron-down');
                    if (otherChevron) {
                        otherChevron.style.transform = 'rotate(0deg)';
                    }
                }
            });
            
            // Переключаем текущий аккордеон
            if (!isActive) {
                accordion.classList.add('active');
                if (chevron) {
                    chevron.style.transform = 'rotate(180deg)';
                }
            } else {
                accordion.classList.remove('active');
                if (chevron) {
                    chevron.style.transform = 'rotate(0deg)';
                }
            }
        }
        
        // Управление скрытием панелей при скролле
        function handleScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Показываем/скрываем контактную панель при скролле вниз/вверх
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Скроллим вниз
                if (contactPanelVisible) {
                    contactPanel.classList.add('hidden');
                    infoPanel.classList.add('hidden');
                    contactPanelVisible = false;
                }
            } else if (scrollTop < lastScrollTop) {
                // Скроллим вверх
                if (!contactPanelVisible && scrollTop < 300) {
                    contactPanel.classList.remove('hidden');
                    infoPanel.classList.remove('hidden');
                    contactPanelVisible = true;
                }
            }
            
            lastScrollTop = scrollTop;
        }
        
        // Закрытие меню при нажатии Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
        
        // Инициализация
        document.addEventListener('DOMContentLoaded', function() {
            // Закрываем все аккордеоны при загрузке
            document.querySelectorAll('.menu-accordion').forEach(accordion => {
                accordion.classList.remove('active');
            });
            
            // Добавляем обработчик скролла
            window.addEventListener('scroll', handleScroll);
            
            // Добавляем обработчики кликов для закрытия меню при клике на ссылки
            document.querySelectorAll('.menu-subitem, .menu-link').forEach(link => {
                link.addEventListener('click', function() {
                    closeMobileMenu();
                });
            });
        });
        
        // Очистка при размонтировании
        window.addEventListener('beforeunload', function() {
            window.removeEventListener('scroll', handleScroll);
        });
    </script>
</body>
</html>