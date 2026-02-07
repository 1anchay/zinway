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
        }
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        .header-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
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
        .compact-contact-panel {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }
        
        .contact-item-compact {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
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
        }
        
        .contact-text {
            display: flex;
            flex-direction: column;
        }
        
        .contact-main {
            font-weight: 600;
            font-size: 0.9rem;
            line-height: 1.2;
        }
        
        .contact-sub {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.2;
        }
        
        .social-section {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-left: 12px;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Адаптивность для компактной панели */
        @media (max-width: 1024px) {
            .compact-contact-panel {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            
            .contact-item-compact {
                flex: 1;
                min-width: 200px;
                max-width: 250px;
            }
            
            .social-section {
                border-left: none;
                padding-left: 0;
                justify-content: center;
                width: 100%;
                margin-top: 10px;
            }
        }
        
        @media (max-width: 640px) {
            .contact-item-compact {
                min-width: 100%;
            }
            
            .compact-contact-panel {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="sticky top-0 z-50 shadow-2xl">
        <!-- Верхняя контактная панель - КОМПАКТНАЯ -->
        <div class="header-gradient text-white py-3 px-4 business-border">
            <div class="container mx-auto">
                <div class="compact-contact-panel">
                    <!-- Контактные данные в компактном формате -->
                    <div class="contact-item-compact">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt text-white text-sm"></i>
                        </div>
                        <div class="contact-text">
                            <span class="contact-main">+7 (800) 555-35-35</span>
                            <span class="contact-sub">Бесплатный звонок по России</span>
                        </div>
                    </div>
                    
                    <div class="contact-item-compact">
                        <div class="contact-icon">
                            <i class="fas fa-clock text-white text-sm"></i>
                        </div>
                        <div class="contact-text">
                            <span class="contact-main">Пн-Пт 9:00-20:00</span>
                            <span class="contact-sub">Сб-Вс 10:00-18:00</span>
                        </div>
                    </div>
                    
                    <div class="contact-item-compact">
                        <div class="contact-icon">
                            <i class="fas fa-truck text-white text-sm"></i>
                        </div>
                        <div class="contact-text">
                            <span class="contact-main">Доставка по РФ</span>
                            <span class="contact-sub">Крым, ДНР, ЛНР включительно</span>
                        </div>
                    </div>
                    
                    <!-- Социальные сети справа -->
                    <div class="social-section">
                        <span class="text-sm text-gray-300 whitespace-nowrap">Мы в соцсетях:</span>
                        <div class="flex gap-2">
                            <a href="#" class="social-icon avito-bg text-white" title="Наш Avito">
                                <i class="fas fa-store text-lg"></i>
                            </a>
                            <a href="#" class="social-icon tiktok-bg text-white" title="Наш TikTok">
                                <i class="fab fa-tiktok text-lg"></i>
                            </a>
                            <a href="#" class="social-icon instagram-bg text-white" title="Наш Instagram">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Основная навигация -->
        <nav class="bg-white py-4">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <!-- Логотип и название -->
                    <div class="flex items-center mb-4 lg:mb-0">
                        <div class="relative mr-4">
                            <div class="z-logo w-14 h-14 flex items-center justify-center">
                                <span class="logo-font text-white text-3xl font-black">Z</span>
                            </div>
                        </div>
                        <div>
                            <h1 class="logo-font text-3xl font-black text-gray-900 leading-tight">
                                ZINWAY
                                <span class="block text-sm font-normal text-gray-600 mt-1">Your Way to Cars from the East</span>
                            </h1>
                        </div>
                    </div>
                    
                    <!-- Навигационные ссылки -->
                    <div class="hidden lg:flex items-center space-x-8 mb-4 lg:mb-0">
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
                    <div class="flex items-center space-x-4">
                        <button class="red-btn text-white font-bold py-3 px-6 rounded-lg flex items-center">
                            <i class="fas fa-car mr-2"></i>Подобрать авто
                        </button>
                        <button class="hidden lg:flex border-2 border-gray-800 hover:bg-gray-800 hover:text-white text-gray-800 font-bold py-3 px-6 rounded-lg transition duration-300 items-center">
                            <i class="fas fa-comment-alt mr-2"></i>Консультация
                        </button>
                        <button class="lg:hidden text-gray-800 p-2">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Мобильная навигация -->
                <div class="lg:hidden mt-4 border-t border-gray-200 pt-4">
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-gray-100">
                            Главная
                        </a>
                        <a href="#" class="text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-gray-100">
                            Каталог
                        </a>
                        <a href="#" class="text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-gray-100">
                            Услуги
                        </a>
                        <a href="#" class="text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-gray-100">
                            О нас
                        </a>
                        <a href="#" class="text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-gray-100">
                            Контакты
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Информационная панель -->
        <div class="bg-gray-50 py-3 border-y border-gray-200">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center mb-2 md:mb-0">
                        <div class="flex items-center mr-6">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-check-circle text-red-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-800">Гарантия 12 месяцев</span>
                        </div>
                        <div class="flex items-center mr-6">
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
                        <div class="flex space-x-3 mt-1 justify-center md:justify-end">
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Китай</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Япония</span>
                            <span class="px-3 py-1 bg-white border border-gray-300 rounded-full text-xs font-medium">Корея</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
</html>