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
            background: #f8fafc;
        }
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        .footer-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
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
        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            transform: translateY(-3px);
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
        .road-container {
            position: relative;
            height: 120px;
            overflow: hidden;
            background: #1e293b;
        }
        .road-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 4px;
            background: repeating-linear-gradient(
                90deg,
                transparent,
                transparent 30px,
                #fbbf24 30px,
                #fbbf24 60px
            );
            transform: translateY(-50%);
        }
        .car {
            position: absolute;
            top: 50%;
            left: 0;
            width: 80px;
            height: 40px;
            transform: translateY(-50%);
            animation: drive 20s linear infinite;
            filter: drop-shadow(0 5px 10px rgba(0,0,0,0.3));
        }
        @keyframes drive {
            0% { left: -100px; }
            100% { left: 100%; }
        }
        .car-body {
            position: absolute;
            width: 70px;
            height: 30px;
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            border-radius: 10px 15px 5px 5px;
        }
        .car-top {
            position: absolute;
            top: -15px;
            left: 10px;
            width: 50px;
            height: 20px;
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            border-radius: 10px 10px 5px 5px;
        }
        .car-wheel {
            position: absolute;
            width: 15px;
            height: 15px;
            background: #1e293b;
            border-radius: 50%;
            border: 3px solid #94a3b8;
            bottom: -5px;
            animation: wheelRotate 0.5s linear infinite;
        }
        @keyframes wheelRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .car-wheel-front {
            left: 10px;
        }
        .car-wheel-back {
            right: 10px;
        }
        .car-light {
            position: absolute;
            width: 8px;
            height: 5px;
            background: #fbbf24;
            border-radius: 50%;
            right: -4px;
            top: 10px;
            box-shadow: 0 0 10px 5px rgba(251, 191, 36, 0.7);
        }
        .footer-link {
            transition: all 0.3s ease;
            padding: 4px 0;
            display: inline-block;
        }
        .footer-link:hover {
            color: #DC2626;
            transform: translateX(5px);
        }
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        .contact-item:hover {
            transform: translateX(5px);
        }
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background: #1e293b;
            height: 200px;
            position: relative;
        }
        .map-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }
        .newsletter-input {
            border: 2px solid #cbd5e1;
            transition: all 0.3s ease;
        }
        .newsletter-input:focus {
            border-color: #DC2626;
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
        }
        .footer-divider {
            border-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <!-- Основной контент (для демонстрации) -->
    <main class="min-h-screen flex items-center justify-center">
        <div class="text-center p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Zinway - Автомобили из Азии</h1>
            <p class="text-gray-600">Прокрутите вниз, чтобы увидеть footer</p>
            <div class="mt-8 text-6xl">
                <i class="fas fa-arrow-down text-blue-600 animate-bounce"></i>
            </div>
        </div>
    </main>

    <!-- Анимированная дорога с машиной -->
    <div class="road-container">
        <div class="road-line"></div>
        <div class="car">
            <div class="car-body"></div>
            <div class="car-top"></div>
            <div class="car-wheel car-wheel-front"></div>
            <div class="car-wheel car-wheel-back"></div>
            <div class="car-light"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-gradient text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-12">
                <!-- Колонка 1: О компании -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-lg flex items-center justify-center mr-3">
                            <span class="logo-font text-white text-2xl font-black">Z</span>
                        </div>
                        <div>
                            <h3 class="logo-font text-2xl font-black">ZINWAY</h3>
                            <p class="text-sm text-gray-300">Your Way to Cars from the East</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        Ведущий импортер автомобилей из Китая, Японии и Кореи. 
                        Профессиональное сопровождение, гарантия качества и полная 
                        юридическая безопасность сделок.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="social-icon avito-bg text-white" title="Наш Avito">
                            <i class="fas fa-store text-lg"></i>
                        </a>
                        <a href="#" class="social-icon tiktok-bg text-white" title="Наш TikTok">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                        <a href="#" class="social-icon instagram-bg text-white" title="Наш Instagram">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="social-icon bg-blue-600 text-white" title="Наш VK">
                            <i class="fab fa-vk text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Колонка 2: Навигация -->
                <div>
                    <h4 class="text-xl font-bold mb-6 border-l-4 border-red-600 pl-3">Навигация</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Главная</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Каталог автомобилей</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Автомобили из Китая</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Автомобили из Японии</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Автомобили из Кореи</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Как мы работаем</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Отзывы клиентов</a></li>
                    </ul>
                </div>

                <!-- Колонка 3: Контакты -->
                <div>
                    <h4 class="text-xl font-bold mb-6 border-l-4 border-red-600 pl-3">Контакты</h4>
                    <div class="space-y-4">
                        <div class="contact-item">
                            <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <p class="font-semibold">+7 (800) 555-35-35</p>
                                <p class="text-sm text-gray-300">Бесплатный звонок по России</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p class="font-semibold">info@zinway.ru</p>
                                <p class="text-sm text-gray-300">Для общих вопросов</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Москва, ул. Автомобильная, 15</p>
                                <p class="text-sm text-gray-300">Офис продаж и демо-зал</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Колонка 4: Рассылка и карта -->
                <div>
                    <h4 class="text-xl font-bold mb-6 border-l-4 border-red-600 pl-3">Новости и акции</h4>
                    <p class="text-gray-300 mb-4">Подпишитесь на рассылку, чтобы первыми узнавать о новых поступлениях и специальных предложениях.</p>
                    
                    <form class="mb-6">
                        <div class="flex mb-4">
                            <input type="email" placeholder="Ваш email" class="newsletter-input flex-grow px-4 py-3 rounded-l-lg text-gray-900 focus:outline-none">
                            <button type="submit" class="red-btn px-6 rounded-r-lg font-semibold">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <input type="checkbox" id="agree" class="mr-2">
                            <label for="agree">Согласен с политикой конфиденциальности</label>
                        </div>
                    </form>
                    
                    <div class="map-container">
                        <div class="map-placeholder">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-4xl mb-3 text-yellow-400"></i>
                                <p>Карта расположения офиса</p>
                                <p class="text-sm text-gray-300 mt-1">Москва, ул. Автомобильная, 15</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные услуги -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <div class="bg-white bg-opacity-5 p-4 rounded-lg border border-white border-opacity-10">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center mb-3 mx-auto">
                        <i class="fas fa-passport text-xl"></i>
                    </div>
                    <p class="text-center font-semibold">Растаможка</p>
                </div>
                <div class="bg-white bg-opacity-5 p-4 rounded-lg border border-white border-opacity-10">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mb-3 mx-auto">
                        <i class="fas fa-file-contract text-xl"></i>
                    </div>
                    <p class="text-center font-semibold">Юридическое сопровождение</p>
                </div>
                <div class="bg-white bg-opacity-5 p-4 rounded-lg border border-white border-opacity-10">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mb-3 mx-auto">
                        <i class="fas fa-truck-loading text-xl"></i>
                    </div>
                    <p class="text-center font-semibold">Доставка по РФ</p>
                </div>
                <div class="bg-white bg-opacity-5 p-4 rounded-lg border border-white border-opacity-10">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mb-3 mx-auto">
                        <i class="fas fa-tools text-xl"></i>
                    </div>
                    <p class="text-center font-semibold">Сервисное обслуживание</p>
                </div>
            </div>

            <!-- Нижняя часть футера -->
            <div class="border-t footer-divider pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p class="text-gray-400 text-sm">
                            &copy; 2023 Zinway. Все права защищены. 
                            <a href="#" class="text-red-400 hover:text-red-300 ml-2">Политика конфиденциальности</a>
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-credit-card text-gray-400 mr-2"></i>
                            <span class="text-sm text-gray-400">Принимаем к оплате:</span>
                            <div class="flex ml-2">
                                <i class="fab fa-cc-visa text-2xl mx-1 text-gray-300"></i>
                                <i class="fab fa-cc-mastercard text-2xl mx-1 text-gray-300"></i>
                                <i class="fas fa-university text-2xl mx-1 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 md:mt-0">
                        <button class="red-btn text-white font-semibold py-3 px-6 rounded-lg flex items-center">
                            <i class="fas fa-headset mr-2"></i> Заказать звонок
                        </button>
                    </div>
                </div>
                
                <!-- Дополнительная информация -->
                <div class="text-center mt-6">
                    <p class="text-xs text-gray-500">
                        Zinway — официальный партнер ведущих автопроизводителей Китая: BYD, Geely, Chery, Haval, Changan.
                        Все автомобили проходят предпродажную подготовку и имеют гарантию производителя.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>