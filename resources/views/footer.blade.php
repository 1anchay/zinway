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
        
        /* Плавный переход в футер */
        .footer-gradient {
            background: linear-gradient(to top, #0A1A3A 0%, #1E3A8A 30%, #2D4A9C 100%);
            position: relative;
            overflow: hidden;
        }
        
        /* Декоративный элемент - дорога в перспективе */
        .road-perspective {
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom, transparent, #1E3A8A);
            z-index: 1;
        }
        
        .road-perspective::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                #DC2626 10%, 
                #DC2626 90%, 
                transparent 100%);
            box-shadow: 0 0 20px rgba(220, 38, 38, 0.3);
        }
        
        /* Стили для социальных иконок */
        .social-icon {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
        }
        
        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
            border-color: rgba(220, 38, 38, 0.3);
            background: rgba(220, 38, 38, 0.1);
        }
        
        .avito-bg:hover {
            background: linear-gradient(135deg, #6CC24A 0%, #4CAF50 100%);
        }
        
        .tiktok-bg:hover {
            background: linear-gradient(135deg, #000000 0%, #333333 100%);
        }
        
        .instagram-bg:hover {
            background: linear-gradient(135deg, #833AB4 0%, #FD1D1D 50%, #F56040 100%);
        }
        
        .vk-bg:hover {
            background: linear-gradient(135deg, #4C75A3 0%, #2A5885 100%);
        }
        
        /* Стили для ссылок */
        .footer-link {
            transition: all 0.3s ease;
            padding: 6px 0;
            display: inline-block;
            position: relative;
        }
        
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: #DC2626;
            transition: width 0.3s ease;
        }
        
        .footer-link:hover {
            color: #DC2626;
            padding-left: 8px;
        }
        
        .footer-link:hover::after {
            width: 20px;
        }
        
        /* Стили для контактных элементов */
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 18px;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 8px;
        }
        
        .contact-item:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(5px);
        }
        
        /* Карта */
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            height: 200px;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .map-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 40%, rgba(220, 38, 38, 0.1) 50%, transparent 60%);
            animation: mapShine 3s infinite;
        }
        
        @keyframes mapShine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        /* Форма подписки */
        .newsletter-input {
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.05);
            color: white;
            transition: all 0.3s ease;
        }
        
        .newsletter-input:focus {
            border-color: #DC2626;
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.2);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        /* Карточки услуг */
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            border-color: rgba(220, 38, 38, 0.3);
            background: rgba(220, 38, 38, 0.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        /* Кнопки */
        .footer-btn {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.2);
        }
        
        .footer-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(220, 38, 38, 0.4);
            background: linear-gradient(135deg, #B91C1C 0%, #991B1B 100%);
        }
        
        /* Разделители */
        .footer-divider {
            border-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Анимации */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        /* Декоративные элементы футера */
        .footer-decoration {
            position: absolute;
            pointer-events: none;
        }
        
        .decoration-1 {
            top: 10%;
            left: 5%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(220, 38, 38, 0.1) 0%, transparent 70%);
        }
        
        .decoration-2 {
            bottom: 20%;
            right: 10%;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
        }
    </style>
</head>
<body>
    
    <footer class="footer-gradient text-white pt-20 pb-10 relative">
        <!-- Декоративные элементы -->
        <div class="footer-decoration decoration-1"></div>
        <div class="footer-decoration decoration-2"></div>
        
        <!-- Плавный переход-дорога -->
        <div class="road-perspective"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <!-- Верхняя часть футера -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 mb-16">
                <!-- Колонка 1: О компании -->
                <div class="animate-fadeInUp" style="animation-delay: 0.1s;">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-gradient-to-br from-red-600 to-red-700 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="logo-font text-white text-3xl font-black">Z</span>
                        </div>
                        <div>
                            <h3 class="logo-font text-2xl font-black bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">ZINWAY</h3>
                            <p class="text-sm text-gray-300 mt-1">Your Way to Cars from the East</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-8 leading-relaxed">
                        Ведущий импортер автомобилей из Китая и Азии. Обеспечиваем полный цикл услуг: 
                        от подбора авто до сервисного обслуживания. Безопасность и качество — наш приоритет.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="social-icon text-white hover:text-white" title="Наш Avito">
                            <i class="fas fa-store text-lg"></i>
                        </a>
                        <a href="#" class="social-icon text-white hover:text-white" title="Наш TikTok">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                        <a href="#" class="social-icon text-white hover:text-white" title="Наш Instagram">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="social-icon text-white hover:text-white" title="Наш VK">
                            <i class="fab fa-vk text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Колонка 2: Навигация -->
                <div class="animate-fadeInUp" style="animation-delay: 0.2s;">
                    <h4 class="text-xl font-bold mb-8 pb-3 border-b border-white border-opacity-20 relative">
                        Навигация
                        <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-red-600"></div>
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Главная</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Каталог автомобилей</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Китайские авто</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Корейские авто</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Японские авто</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Как мы работаем</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Отзывы клиентов</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Контакты</a></li>
                    </ul>
                </div>

                <!-- Колонка 3: Контакты -->
                <div class="animate-fadeInUp" style="animation-delay: 0.3s;">
                    <h4 class="text-xl font-bold mb-8 pb-3 border-b border-white border-opacity-20 relative">
                        Контакты
                        <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-red-600"></div>
                    </h4>
                    <div class="space-y-5">
                        <div class="contact-item">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">+7 (800) 555-35-35</p>
                                <p class="text-sm text-gray-300 mt-1">Бесплатный звонок по России</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">info@zinway.ru</p>
                                <p class="text-sm text-gray-300 mt-1">Для общих вопросов</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Москва, ул. Автомобильная, 15</p>
                                <p class="text-sm text-gray-300 mt-1">Офис продаж и демо-зал</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Колонка 4: Рассылка и карта -->
                <div class="animate-fadeInUp" style="animation-delay: 0.4s;">
                    <h4 class="text-xl font-bold mb-8 pb-3 border-b border-white border-opacity-20 relative">
                        Новости и акции
                        <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-red-600"></div>
                    </h4>
                    <p class="text-gray-300 mb-6">Подпишитесь, чтобы первыми получать информацию о новых поступлениях и специальных предложениях.</p>
                    
                    <form class="mb-8">
                        <div class="flex mb-4">
                            <input type="email" placeholder="Ваш email" 
                                   class="newsletter-input flex-grow px-5 py-3.5 rounded-l-xl focus:outline-none">
                            <button type="submit" class="footer-btn px-6 rounded-r-xl font-semibold flex items-center">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                        <div class="flex items-start text-sm text-gray-300">
                            <input type="checkbox" id="agree" class="mt-1 mr-3">
                            <label for="agree">Согласен с политикой конфиденциальности</label>
                        </div>
                    </form>
                    
                    <div class="map-container">
                        <div class="map-placeholder">
                            <div class="relative z-10 text-center">
                                <i class="fas fa-map-marker-alt text-5xl mb-4 text-red-400"></i>
                                <p class="font-semibold text-lg">Наш офис в Москве</p>
                                <p class="text-sm text-gray-300 mt-2">ул. Автомобильная, 15</p>
                                <p class="text-xs text-gray-400 mt-1">Пн-Пт: 9:00-20:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные услуги -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                <div class="service-card p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center mb-4 mx-auto shadow-lg">
                        <i class="fas fa-passport text-white text-xl"></i>
                    </div>
                    <h5 class="font-bold mb-2">Растаможка</h5>
                    <p class="text-sm text-gray-300">Полное оформление таможенных документов</p>
                </div>
                
                <div class="service-card p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-4 mx-auto shadow-lg">
                        <i class="fas fa-file-contract text-white text-xl"></i>
                    </div>
                    <h5 class="font-bold mb-2">Юридическое сопровождение</h5>
                    <p class="text-sm text-gray-300">Полная юридическая безопасность сделки</p>
                </div>
                
                <div class="service-card p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-600 to-green-700 rounded-full flex items-center justify-center mb-4 mx-auto shadow-lg">
                        <i class="fas fa-truck-loading text-white text-xl"></i>
                    </div>
                    <h5 class="font-bold mb-2">Доставка по РФ</h5>
                    <p class="text-sm text-gray-300">Быстрая доставка в любой регион России</p>
                </div>
                
                <div class="service-card p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-full flex items-center justify-center mb-4 mx-auto shadow-lg">
                        <i class="fas fa-tools text-white text-xl"></i>
                    </div>
                    <h5 class="font-bold mb-2">Сервисное обслуживание</h5>
                    <p class="text-sm text-gray-300">Гарантия и обслуживание у официальных дилеров</p>
                </div>
            </div>

            <!-- Нижняя часть футера -->
            <div class="border-t footer-divider pt-10">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
                    <div>
                        <p class="text-gray-400">
                            &copy; 2023 Zinway. Все права защищены.
                            <a href="#" class="text-red-400 hover:text-red-300 ml-2 font-medium">Политика конфиденциальности</a>
                        </p>
                    </div>
                    
                    <div class="flex items-center">
                        <span class="text-gray-400 mr-3 text-sm">Принимаем к оплате:</span>
                        <div class="flex space-x-3">
                            <div class="w-10 h-7 bg-white rounded flex items-center justify-center shadow-sm">
                                <i class="fab fa-cc-visa text-blue-600 text-lg"></i>
                            </div>
                            <div class="w-10 h-7 bg-white rounded flex items-center justify-center shadow-sm">
                                <i class="fab fa-cc-mastercard text-red-600 text-lg"></i>
                            </div>
                            <div class="w-10 h-7 bg-white rounded flex items-center justify-center shadow-sm">
                                <i class="fas fa-university text-gray-700 text-lg"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <button class="footer-btn text-white font-semibold py-3.5 px-8 rounded-xl flex items-center group">
                            <i class="fas fa-headset mr-3"></i> 
                            <span>Заказать звонок</span>
                            <i class="fas fa-arrow-right ml-3 opacity-0 group-hover:opacity-100 group-hover:ml-4 transition-all duration-300"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Дополнительная информация -->
                <div class="text-center pt-6 border-t footer-divider">
                    <p class="text-sm text-gray-500 max-w-3xl mx-auto">
                        Zinway — официальный партнер ведущих автопроизводителей Китая: 
                        <span class="text-gray-300 font-medium">BYD, Geely, Chery, Haval, Changan, Li Auto, EXEED, GAC.</span>
                        Все автомобили проходят предпродажную подготовку и имеют гарантию производителя.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 mt-4">
                        <span class="px-3 py-1.5 bg-white bg-opacity-5 rounded-full text-xs text-gray-300">Сертифицированный импортер</span>
                        <span class="px-3 py-1.5 bg-white bg-opacity-5 rounded-full text-xs text-gray-300">Официальная гарантия</span>
                        <span class="px-3 py-1.5 bg-white bg-opacity-5 rounded-full text-xs text-gray-300">Бесплатная доставка по РФ</span>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>

    <script>
        // Анимация появления элементов при скролле
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                    }
                });
            }, observerOptions);
            
            // Наблюдаем за анимируемыми элементами
            document.querySelectorAll('.animate-fadeInUp').forEach(el => {
                observer.observe(el);
            });
            
            // Обработка формы подписки
            const newsletterForm = document.querySelector('form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = this.querySelector('input[type="email"]').value;
                    if (email) {
                        // Здесь можно добавить отправку данных на сервер
                        alert('Спасибо за подписку! На ' + email + ' будут приходить новости Zinway.');
                        this.reset();
                    }
                });
            }
        });
        // Добавить в существующий script тег
document.addEventListener('DOMContentLoaded', function() {
    // Аккордеон для мобильного меню
    const accordionBtns = document.querySelectorAll('.accordion-btn');
    
    accordionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Закрываем все остальные аккордеоны
            accordionBtns.forEach(otherBtn => {
                if (otherBtn !== this) {
                    otherBtn.classList.remove('active');
                    const otherContent = otherBtn.nextElementSibling;
                    if (otherContent) {
                        otherContent.style.maxHeight = '0';
                    }
                }
            });
            
            // Переключаем текущий аккордеон
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            
            if (content) {
                if (this.classList.contains('active')) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                } else {
                    content.style.maxHeight = '0';
                }
            }
        });
    });
    
    // Открываем первый аккордеон по умолчанию
    if (accordionBtns.length > 0) {
        accordionBtns[0].click();
    }
});
    </script>
    
</body>

</html>