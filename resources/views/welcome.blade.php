<!DOCTYPE html>
<html lang="ru">
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalAuto | Премиальные автомобили из-за рубежа</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fafafa;
        }
        .yandex-gradient {
            background: linear-gradient(135deg, #FF4F12 0%, #FFD84B 100%);
        }
        .car-card-hover {
            transition: all 0.3s ease;
        }
        .car-card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .guarantee-card {
            border-left: 4px solid #FF4F12;
        }
        .contact-btn {
            transition: all 0.3s ease;
        }
        .contact-btn:hover {
            transform: scale(1.05);
        }
        .hero-pattern {
            background-image: radial-gradient(#FF4F12 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.05;
        }
    </style>
</head>
<body>
    <main class="min-h-screen">
        <!-- Hero секция -->
        <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zinway | Автомобили из Китая</title>
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
        .hero-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 25% 25%, rgba(220, 38, 38, 0.1) 0%, transparent 55%);
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
        .outline-btn {
            transition: all 0.3s ease;
        }
        .outline-btn:hover {
            background: white;
            color: #0A1A3A;
        }
        .car-slider {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        .car-slides-container {
            display: flex;
            transition: transform 0.8s cubic-bezier(0.645, 0.045, 0.355, 1);
        }
        .car-slide {
            min-width: 100%;
            position: relative;
        }
        .car-slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .car-info {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: translateY(10px);
            transition: transform 0.5s ease;
        }
        .car-slide.active .car-info {
            transform: translateY(0);
        }
        .slider-nav {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        .nav-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .nav-dot.active {
            background: #DC2626;
            transform: scale(1.3);
        }
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .slider-arrow:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
        }
        .slider-arrow.left {
            left: 20px;
        }
        .slider-arrow.right {
            right: 20px;
        }
        .brand-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            background: rgba(220, 38, 38, 0.1);
            border-radius: 20px;
            border: 1px solid rgba(220, 38, 38, 0.3);
            margin-right: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        .feature-item {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .feature-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
        .price-tag {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .car-stats {
            display: flex;
            gap: 15px;
            color: #666;
            font-size: 0.9rem;
        }
        .car-stat {
            display: flex;
            align-items: center;
        }
        .floating-card {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(-3deg); }
            50% { transform: translateY(-10px) rotate(-3deg); }
        }
    </style>
</head>
<body>
    <!-- Герой-секция с слайдером -->
    <section class="relative overflow-hidden hero-gradient text-white">
        <div class="hero-pattern absolute inset-0"></div>
        <div class="relative container mx-auto px-6 py-16 md:py-24">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Левая часть: Текст и CTA -->
                <div class="lg:w-1/2">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-xl flex items-center justify-center mr-4">
                            <span class="logo-font text-white text-2xl font-black">Z</span>
                        </div>
                        <div>
                            <h1 class="logo-font text-3xl font-black">ZINWAY</h1>
                            <p class="text-gray-300 text-sm">Your Way to Cars from the East</p>
                        </div>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Премиальные автомобили <br> 
                        <span class="text-red-400">из Китая и Азии</span> для вас
                    </h2>
                    
                    <p class="text-xl text-gray-300 mb-8 max-w-2xl">
                        Мы доставляем лучшие автомобили от ведущих китайских производителей с гарантией 
                        качества и полной юридической безопасностью. Получите консультацию эксперта 
                        в течение 15 минут.
                    </p>
                    
                    <!-- Популярные бренды -->
                    <div class="mb-8">
                        <p class="text-gray-300 mb-3">Популярные китайские бренды:</p>
                        <div class="flex flex-wrap">
                            <span class="brand-badge">Li Auto</span>
                            <span class="brand-badge">Changan</span>
                            <span class="brand-badge">Chery</span>
                            <span class="brand-badge">EXEED</span>
                            <span class="brand-badge">GAC</span>
                            <span class="brand-badge">Geely</span>
                            <span class="brand-badge">Haval</span>
                            <span class="brand-badge">Jaecoo</span>
                            <span class="brand-badge">Jetour</span>
                            <span class="brand-badge">Knewstar</span>
                            <span class="brand-badge">OMODA</span>
                            <span class="brand-badge">Tank</span>
                        </div>
                    </div>
                    
                    <!-- Кнопки CTA -->
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-12">
                        <button class="red-btn text-white font-semibold py-4 px-8 rounded-xl text-lg flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-3"></i> Заказать звонок
                        </button>
                        <button class="outline-btn border-2 border-white text-white font-semibold py-4 px-8 rounded-xl text-lg flex items-center justify-center">
                            <i class="fas fa-car mr-3"></i> Подобрать авто
                        </button>
                    </div>
                    
                    <!-- Преимущества -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div class="feature-item">
                            <div class="w-10 h-10 bg-red-600 bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-red-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Гарантия 2 года</p>
                                <p class="text-sm text-gray-400">На все автомобили</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="w-10 h-10 bg-red-600 bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check-circle text-red-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Проверка 150+ пунктов</p>
                                <p class="text-sm text-gray-400">Перед доставкой</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="w-10 h-10 bg-red-600 bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-red-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Индивидуальный подбор</p>
                                <p class="text-sm text-gray-400">По вашим критериям</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Правая часть: Слайдер -->
                <div class="lg:w-1/2 relative floating-card">
                    <div class="car-slider">
                        <!-- Стрелки навигации -->
                        <div class="slider-arrow left" onclick="prevSlide()">
                            <i class="fas fa-chevron-left text-gray-800 text-xl"></i>
                        </div>
                        <div class="slider-arrow right" onclick="nextSlide()">
                            <i class="fas fa-chevron-right text-gray-800 text-xl"></i>
                        </div>
                        
                        <!-- Контейнер слайдов -->
                        <div class="car-slides-container" id="carSlides">
                            <!-- Слайд 1: Li Auto L7 -->
                            <div class="car-slide active">
                                <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Li Auto L7">
                                <div class="car-info">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <p class="text-sm text-gray-500">Хит продаж 2024</p>
                                            <h3 class="font-bold text-xl text-gray-900">Li Auto L7</h3>
                                        </div>
                                        <span class="bg-red-100 text-red-600 font-bold py-1 px-3 rounded-full text-sm">NEW</span>
                                    </div>
                                    <p class="text-gray-600 mb-3">Премиальный электрический кроссовер с запасом хода 1200 км</p>
                                    <div class="flex justify-between items-center">
                                        <div class="car-stats">
                                            <div class="car-stat">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                <span>2024 г.</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-bolt mr-2"></i>
                                                <span>Электро</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-horse mr-2"></i>
                                                <span>449 л.с.</span>
                                            </div>
                                        </div>
                                        <div class="price-tag">4 890 000 ₽</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Слайд 2: Changan UNI-K -->
                            <div class="car-slide">
                                <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Changan UNI-K">
                                <div class="car-info">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <p class="text-sm text-gray-500">Премиальный SUV</p>
                                            <h3 class="font-bold text-xl text-gray-900">Changan UNI-K</h3>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-3">Технологичный кроссовер с интеллектуальной панелью управления</p>
                                    <div class="flex justify-between items-center">
                                        <div class="car-stats">
                                            <div class="car-stat">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                <span>2023 г.</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-gas-pump mr-2"></i>
                                                <span>Бензин</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-horse mr-2"></i>
                                                <span>233 л.с.</span>
                                            </div>
                                        </div>
                                        <div class="price-tag">3 250 000 ₽</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Слайд 3: Geely Monjaro -->
                            <div class="car-slide">
                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Geely Monjaro">
                                <div class="car-info">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <p class="text-sm text-gray-500">Флагманский кроссовер</p>
                                            <h3 class="font-bold text-xl text-gray-900">Geely Monjaro</h3>
                                        </div>
                                        <span class="bg-blue-100 text-blue-600 font-bold py-1 px-3 rounded-full text-sm">TOP</span>
                                    </div>
                                    <p class="text-gray-600 mb-3">Мощный SUV с системой полного привода и премиальным салоном</p>
                                    <div class="flex justify-between items-center">
                                        <div class="car-stats">
                                            <div class="car-stat">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                <span>2024 г.</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-gas-pump mr-2"></i>
                                                <span>Бензин 2.0T</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-horse mr-2"></i>
                                                <span>254 л.с.</span>
                                            </div>
                                        </div>
                                        <div class="price-tag">4 120 000 ₽</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Слайд 4: Haval Jolion -->
                            <div class="car-slide">
                                <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Haval Jolion">
                                <div class="car-info">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <p class="text-sm text-gray-500">Компактный кроссовер</p>
                                            <h3 class="font-bold text-xl text-gray-900">Haval Jolion</h3>
                                        </div>
                                        <span class="bg-green-100 text-green-600 font-bold py-1 px-3 rounded-full text-sm">ЭКОНОМ</span>
                                    </div>
                                    <p class="text-gray-600 mb-3">Стильный и экономичный городской SUV с передовыми технологиями</p>
                                    <div class="flex justify-between items-center">
                                        <div class="car-stats">
                                            <div class="car-stat">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                <span>2023 г.</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-gas-pump mr-2"></i>
                                                <span>Бензин 1.5T</span>
                                            </div>
                                            <div class="car-stat">
                                                <i class="fas fa-horse mr-2"></i>
                                                <span>150 л.с.</span>
                                            </div>
                                        </div>
                                        <div class="price-tag">2 450 000 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Навигационные точки -->
                        <div class="slider-nav">
                            <div class="nav-dot active" onclick="goToSlide(0)"></div>
                            <div class="nav-dot" onclick="goToSlide(1)"></div>
                            <div class="nav-dot" onclick="goToSlide(2)"></div>
                            <div class="nav-dot" onclick="goToSlide(3)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript для слайдера -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.car-slide');
        const dots = document.querySelectorAll('.nav-dot');
        const slidesContainer = document.getElementById('carSlides');
        const totalSlides = slides.length;
        
        // Функция обновления слайдера
        function updateSlider() {
            // Сдвигаем контейнер слайдов
            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Обновляем активный слайд
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentSlide);
            });
            
            // Обновляем активную точку
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }
        
        // Следующий слайд
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }
        
        // Предыдущий слайд
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }
        
        // Переход к конкретному слайду
        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }
        
        // Автоматическая прокрутка слайдов каждые 5 секунд
        let slideInterval = setInterval(nextSlide, 5000);
        
        // Останавливаем авто-прокрутку при наведении на слайдер
        const slider = document.querySelector('.car-slider');
        slider.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        // Возобновляем авто-прокрутку когда убираем мышь
        slider.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
        
        // Инициализация слайдера
        updateSlider();
    </script>
</body>
</html>

       <!-- Раздел "Наши ценности" -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                Мы ценим наших покупателей
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent"></div>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                Наша миссия — обеспечить вам лучший опыт покупки автомобиля из Азии. 
                Мы строим долгосрочные отношения, основанные на доверии и качестве.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Карточка 1: С градиентным фоном и иконкой в круге -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-gradient-to-br from-red-50 to-red-100 rounded-full opacity-50 group-hover:opacity-70 transition-opacity duration-500"></div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-full mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-friends text-white text-2xl"></i>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Индивидуальный подход</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Каждому клиенту мы подбираем автомобиль по персональным критериям. 
                        Учитываем все пожелания — от технических характеристик до цвета салона.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start group/item">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center group-hover/item:bg-green-200 transition-colors duration-300">
                                    <i class="fas fa-check text-green-600 text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700 group-hover/item:text-gray-900 transition-colors duration-300">Подбор по вашим критериям</span>
                        </div>
                        
                        <div class="flex items-start group/item">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center group-hover/item:bg-blue-200 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700 group-hover/item:text-gray-900 transition-colors duration-300">Полное сопровождение сделки</span>
                        </div>
                        
                        <div class="flex items-start group/item">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center group-hover/item:bg-purple-200 transition-colors duration-300">
                                    <i class="fas fa-check text-purple-600 text-xs"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-gray-700 group-hover/item:text-gray-900 transition-colors duration-300">Консультация на всех этапах</span>
                        </div>
                    </div>
                </div>
                
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            
            <!-- Карточка 2: С боковой акцентной полосой и плавающей иконкой -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-red-500 to-red-600"></div>
                
                <div class="relative">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center transform group-hover:-translate-y-2 transition-transform duration-300">
                                <i class="fas fa-medal text-white text-2xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-star text-white text-xs"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold">ГАРАНТИЯ</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Качество и безопасность</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Все автомобили проходят многоуровневую проверку нашими экспертами. 
                        Мы гарантируем юридическую чистоту и техническую исправность.
                    </p>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-center p-3 bg-gradient-to-r from-gray-50 to-white rounded-lg group/item hover:from-red-50 transition-all duration-300">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-search text-white"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Диагностика 150+ параметров</p>
                                <p class="text-sm text-gray-500">Полная проверка автомобиля</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-3 bg-gradient-to-r from-gray-50 to-white rounded-lg group/item hover:from-blue-50 transition-all duration-300">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-history text-white"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Проверка истории</p>
                                <p class="text-sm text-gray-500">Юридическая чистота гарантирована</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-3 bg-gradient-to-r from-gray-50 to-white rounded-lg group/item hover:from-purple-50 transition-all duration-300">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Гарантия 24 месяца</p>
                                <p class="text-sm text-gray-500">Расширенная гарантия на все авто</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Декоративный элемент -->
                <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-gradient-to-br from-blue-50 to-transparent rounded-full opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
            </div>
            
            <!-- Карточка 3: С фоновым узором и акцентным углом -->
            <div class="group relative overflow-hidden bg-gradient-to-tr from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                <!-- Фоновый узор -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-500 to-transparent rounded-full"></div>
                    <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-blue-500 to-transparent rounded-full"></div>
                </div>
                
                <!-- Акцентный угол -->
                <div class="absolute top-0 right-0 w-20 h-20 overflow-hidden">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-gradient-to-br from-red-500 to-red-600 transform rotate-45 -translate-y-1/2 translate-x-1/2"></div>
                    <i class="absolute top-4 right-4 fas fa-headset text-white z-10"></i>
                </div>
                
                <div class="relative z-10">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Постоянная поддержка</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Наши клиенты получают поддержку даже после покупки автомобиля. 
                            Помогаем с оформлением, сервисным обслуживанием и любыми вопросами.
                        </p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-0 w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-file-contract text-white"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Оформление документов</h4>
                            <p class="text-gray-600 text-sm">Помощь с полным пакетом документов для регистрации</p>
                        </div>
                        
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-0 w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-tools text-white"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Сервисное обслуживание</h4>
                            <p class="text-gray-600 text-sm">Консультации по ТО и ремонту у партнерских СТО</p>
                        </div>
                        
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-0 w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Круглосуточная поддержка</h4>
                            <p class="text-gray-600 text-sm">На связи 24/7 для решения любых вопросов</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-phone-alt text-red-500 mr-2"></i>
                            <span>Горячая линия поддержки: +7 (800) 555-35-35</span>
                        </div>
                    </div>
                </div>
                
                <!-- Индикатор при наведении -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                        <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse delay-150"></div>
                        <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse delay-300"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Дополнительная информация под карточками -->
        <div class="mt-16 text-center">
            <div class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-red-50 to-blue-50 rounded-full">
                <i class="fas fa-award text-red-500 mr-3 text-xl"></i>
                <span class="text-gray-700 font-medium">Более 1500 довольных клиентов по всей России</span>
                <div class="ml-4 flex items-center">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-sm mr-1">
                        <i class="fas fa-star text-yellow-400 text-sm"></i>
                    </div>
                    <span class="font-bold text-gray-900">4.9/5</span>
                    <span class="text-gray-500 ml-1">рейтинг</span>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Галерея автомобилей из Китая -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                Автомобили в наличии из Китая
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent"></div>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                Мы постоянно обновляем наш каталог, чтобы предложить вам лучшие автомобили 
                от ведущих китайских производителей. Подберите свой идеальный автомобиль.
            </p>
        </div>
        
        <!-- Навигация по брендам -->
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            <button class="brand-filter active px-4 py-2 rounded-full bg-red-600 text-white font-medium transition-all duration-300" data-brand="all">
                Все бренды
            </button>
            <button class="brand-filter px-4 py-2 rounded-full bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition-all duration-300" data-brand="li">
                Li Auto
            </button>
            <button class="brand-filter px-4 py-2 rounded-full bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition-all duration-300" data-brand="geely">
                Geely
            </button>
            <button class="brand-filter px-4 py-2 rounded-full bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition-all duration-300" data-brand="changan">
                Changan
            </button>
            <button class="brand-filter px-4 py-2 rounded-full bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition-all duration-300" data-brand="haval">
                Haval
            </button>
        </div>
        
        <!-- Галерея автомобилей -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Автомобиль 1: Li Auto L7 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 car-gallery">
                <div class="relative h-64 overflow-hidden">
                    <div class="car-slides-container h-full" id="carSlide1">
                        <!-- Слайд 1 -->
                        <div class="car-slide active h-full">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Li Auto L7" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 2 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Li Auto L7 интерьер" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 3 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Li Auto L7 салон" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Навигация слайдов -->
                    <div class="absolute bottom-4 right-4 flex gap-2">
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-70 hover:bg-opacity-100 transition-all duration-300" data-car="1" data-slide="0"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="1" data-slide="1"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="1" data-slide="2"></button>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-full text-sm font-semibold shadow-lg">
                            Li Auto
                        </span>
                    </div>
                    
                    <!-- Стрелки навигации -->
                    <button class="car-slide-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="1">
                        <i class="fas fa-chevron-left text-gray-800"></i>
                    </button>
                    <button class="car-slide-next absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="1">
                        <i class="fas fa-chevron-right text-gray-800"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Li Auto L7 Max</h3>
                            <p class="text-gray-500">2024 год, 5 000 км</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold bg-gradient-to-r from-red-600 to-red-700 bg-clip-text text-transparent">4 890 000 ₽</p>
                            <p class="text-sm text-gray-500">от 45 000 ₽/мес</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-bolt text-red-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Электромотор</p>
                            <p class="text-xs text-gray-500">449 л.с.</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-road text-blue-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Запас хода</p>
                            <p class="text-xs text-gray-500">1200 км</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-car text-green-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Привод</p>
                            <p class="text-xs text-gray-500">Полный</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-3">
                        <button class="flex-1 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-info-circle mr-2"></i> Подробнее
                        </button>
                        <button class="w-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl flex items-center justify-center transition-all duration-300 group/heart">
                            <i class="fas fa-heart text-gray-400 group-hover/heart:text-red-500 transition-colors duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Автомобиль 2: Geely Monjaro -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 car-gallery">
                <div class="relative h-64 overflow-hidden">
                    <div class="car-slides-container h-full" id="carSlide2">
                        <!-- Слайд 1 -->
                        <div class="car-slide active h-full">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Geely Monjaro" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 2 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Geely Monjaro интерьер" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 3 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Geely Monjaro детали" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Навигация слайдов -->
                    <div class="absolute bottom-4 right-4 flex gap-2">
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-70 hover:bg-opacity-100 transition-all duration-300" data-car="2" data-slide="0"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="2" data-slide="1"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="2" data-slide="2"></button>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full text-sm font-semibold shadow-lg">
                            Geely
                        </span>
                    </div>
                    
                    <!-- Стрелки навигации -->
                    <button class="car-slide-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="2">
                        <i class="fas fa-chevron-left text-gray-800"></i>
                    </button>
                    <button class="car-slide-next absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="2">
                        <i class="fas fa-chevron-right text-gray-800"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Geely Monjaro Flagship</h3>
                            <p class="text-gray-500">2024 год, 8 000 км</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent">4 120 000 ₽</p>
                            <p class="text-sm text-gray-500">от 38 000 ₽/мес</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-gas-pump text-red-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Бензин 2.0T</p>
                            <p class="text-xs text-gray-500">254 л.с.</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-tachometer-alt text-blue-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Разгон</p>
                            <p class="text-xs text-gray-500">7.8 сек</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-cog text-green-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Коробка</p>
                            <p class="text-xs text-gray-500">8-ст. АКПП</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-3">
                        <button class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-info-circle mr-2"></i> Подробнее
                        </button>
                        <button class="w-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl flex items-center justify-center transition-all duration-300 group/heart">
                            <i class="fas fa-heart text-gray-400 group-hover/heart:text-red-500 transition-colors duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Автомобиль 3: Changan UNI-K -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 car-gallery">
                <div class="relative h-64 overflow-hidden">
                    <div class="car-slides-container h-full" id="carSlide3">
                        <!-- Слайд 1 -->
                        <div class="car-slide active h-full">
                            <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Changan UNI-K" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 2 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Changan UNI-K интерьер" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 3 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Changan UNI-K экстерьер" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Навигация слайдов -->
                    <div class="absolute bottom-4 right-4 flex gap-2">
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-70 hover:bg-opacity-100 transition-all duration-300" data-car="3" data-slide="0"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="3" data-slide="1"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="3" data-slide="2"></button>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-full text-sm font-semibold shadow-lg">
                            Changan
                        </span>
                    </div>
                    
                    <!-- Стрелки навигации -->
                    <button class="car-slide-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="3">
                        <i class="fas fa-chevron-left text-gray-800"></i>
                    </button>
                    <button class="car-slide-next absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="3">
                        <i class="fas fa-chevron-right text-gray-800"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Changan UNI-K Premium</h3>
                            <p class="text-gray-500">2023 год, 12 000 км</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent">3 250 000 ₽</p>
                            <p class="text-sm text-gray-500">от 30 000 ₽/мес</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-gas-pump text-red-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Бензин 2.0</p>
                            <p class="text-xs text-gray-500">233 л.с.</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-car-side text-blue-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Тип кузова</p>
                            <p class="text-xs text-gray-500">Кроссовер</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-snowflake text-green-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Климат</p>
                            <p class="text-xs text-gray-500">3-зонный</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-3">
                        <button class="flex-1 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-semibold py-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-info-circle mr-2"></i> Подробнее
                        </button>
                        <button class="w-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl flex items-center justify-center transition-all duration-300 group/heart">
                            <i class="fas fa-heart text-gray-400 group-hover/heart:text-red-500 transition-colors duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Автомобиль 4: Haval Jolion -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 car-gallery">
                <div class="relative h-64 overflow-hidden">
                    <div class="car-slides-container h-full" id="carSlide4">
                        <!-- Слайд 1 -->
                        <div class="car-slide active h-full">
                            <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Haval Jolion" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 2 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Haval Jolion интерьер" class="w-full h-full object-cover">
                        </div>
                        <!-- Слайд 3 -->
                        <div class="car-slide h-full">
                            <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Haval Jolion детали" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Навигация слайдов -->
                    <div class="absolute bottom-4 right-4 flex gap-2">
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-70 hover:bg-opacity-100 transition-all duration-300" data-car="4" data-slide="0"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="4" data-slide="1"></button>
                        <button class="slide-nav w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-car="4" data-slide="2"></button>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-full text-sm font-semibold shadow-lg">
                            Haval
                        </span>
                    </div>
                    
                    <!-- Стрелки навигации -->
                    <button class="car-slide-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="4">
                        <i class="fas fa-chevron-left text-gray-800"></i>
                    </button>
                    <button class="car-slide-next absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" data-car="4">
                        <i class="fas fa-chevron-right text-gray-800"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Haval Jolion Supreme</h3>
                            <p class="text-gray-500">2023 год, 15 000 км</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent">2 450 000 ₽</p>
                            <p class="text-sm text-gray-500">от 22 000 ₽/мес</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-gas-pump text-red-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Бензин 1.5T</p>
                            <p class="text-xs text-gray-500">150 л.с.</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-cogs text-blue-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Трансмиссия</p>
                            <p class="text-xs text-gray-500">Вариатор</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-sun text-green-500 text-lg"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Расход</p>
                            <p class="text-xs text-gray-500">7.2 л/100км</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-3">
                        <button class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold py-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-info-circle mr-2"></i> Подробнее
                        </button>
                        <button class="w-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl flex items-center justify-center transition-all duration-300 group/heart">
                            <i class="fas fa-heart text-gray-400 group-hover/heart:text-red-500 transition-colors duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Кнопка перехода в каталог -->
        <div class="text-center mt-12">
            <a href="/catalog" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-900 to-gray-800 hover:from-gray-800 hover:to-gray-900 text-white font-semibold rounded-xl text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl group">
                <i class="fas fa-car mr-3 text-xl"></i>
                <span>Смотреть весь каталог (24 авто)</span>
                <i class="fas fa-arrow-right ml-3 transform group-hover:translate-x-2 transition-transform duration-300"></i>
            </a>
            
            <p class="text-gray-600 mt-6">
                Ищете другой бренд? У нас также есть 
                <span class="font-semibold text-red-600">Chery, EXEED, GAC, Jaecoo, Jetour, Knewstar, OMODA, Tank</span> и другие
            </p>
        </div>
    </div>
</section>

<!-- JavaScript для управления слайдерами -->
<script>
    // Инициализация слайдеров для каждой машины
    document.addEventListener('DOMContentLoaded', function() {
        const cars = [1, 2, 3, 4];
        
        cars.forEach(carId => {
            const slidesContainer = document.getElementById(`carSlide${carId}`);
            const slides = slidesContainer.querySelectorAll('.car-slide');
            const dots = document.querySelectorAll(`.slide-nav[data-car="${carId}"]`);
            const prevBtn = document.querySelector(`.car-slide-prev[data-car="${carId}"]`);
            const nextBtn = document.querySelector(`.car-slide-next[data-car="${carId}"]`);
            
            let currentSlide = 0;
            
            // Функция обновления слайдера
            function updateSlider() {
                // Обновляем позицию слайдов
                slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Обновляем активный слайд
                slides.forEach((slide, index) => {
                    slide.classList.toggle('active', index === currentSlide);
                });
                
                // Обновляем точки навигации
                dots.forEach((dot, index) => {
                    const isActive = index === currentSlide;
                    dot.classList.toggle('bg-opacity-70', isActive);
                    dot.classList.toggle('bg-opacity-50', !isActive);
                });
            }
            
            // Переход к следующему слайду
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlider();
            }
            
            // Переход к предыдущему слайду
            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                updateSlider();
            }
            
            // Переход к конкретному слайду
            function goToSlide(index) {
                currentSlide = index;
                updateSlider();
            }
            
            // Добавляем обработчики событий
            if (prevBtn) prevBtn.addEventListener('click', prevSlide);
            if (nextBtn) nextBtn.addEventListener('click', nextSlide);
            
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => goToSlide(index));
            });
            
            // Автоматическая прокрутка для каждого слайдера
            let slideInterval = setInterval(nextSlide, 4000);
            
            // Останавливаем авто-прокрутку при наведении
            const carCard = slidesContainer.closest('.car-gallery');
            if (carCard) {
                carCard.addEventListener('mouseenter', () => {
                    clearInterval(slideInterval);
                });
                
                carCard.addEventListener('mouseleave', () => {
                    slideInterval = setInterval(nextSlide, 4000);
                });
            }
            
            // Инициализация
            updateSlider();
        });
        
        // Фильтрация по брендам
        const brandFilters = document.querySelectorAll('.brand-filter');
        brandFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Удаляем активный класс у всех фильтров
                brandFilters.forEach(f => f.classList.remove('active', 'bg-red-600', 'text-white'));
                brandFilters.forEach(f => f.classList.add('bg-gray-100', 'text-gray-800'));
                
                // Добавляем активный класс текущему фильтру
                this.classList.remove('bg-gray-100', 'text-gray-800');
                this.classList.add('active', 'bg-red-600', 'text-white');
                
                // Здесь можно добавить логику фильтрации автомобилей по бренду
                const brand = this.dataset.brand;
                console.log(`Фильтр: ${brand}`);
                // В реальном проекте здесь будет код для фильтрации карточек автомобилей
            });
        });
    });
</script>

<style>
    .car-slides-container {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
    }
    
    .car-slide {
        min-width: 100%;
        transition: opacity 0.3s ease;
        height: 100%;
    }
    
    .car-slide:not(.active) {
        opacity: 0;
    }
    
    .car-slide.active {
        opacity: 1;
    }
    
    .car-gallery {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .car-gallery:hover {
        transform: translateY(-8px);
    }
    
    .brand-filter {
        transition: all 0.3s ease;
    }
    
    .brand-filter.active {
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
    }
    
    .slide-nav {
        transition: all 0.3s ease;
    }
</style>

       <!-- Гарантия безопасности сделки -->
<section class="py-24 relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-blue-900 text-white">
    <!-- Векторные декоративные элементы -->
    <div class="absolute inset-0 overflow-hidden opacity-10">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-500 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-10 w-60 h-60 bg-blue-500 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 left-1/3 w-100 h-100 bg-purple-500 rounded-full blur-3xl"></div>
    </div>
    
    <!-- Векторные иконки безопасности -->
    <div class="absolute top-10 left-10 opacity-5">
        <svg class="w-32 h-32" viewBox="0 0 100 100">
            <path d="M50,10 L90,30 L90,70 L50,90 L10,70 L10,30 Z" fill="none" stroke="white" stroke-width="2"/>
            <circle cx="50" cy="50" r="20" fill="none" stroke="white" stroke-width="2"/>
            <path d="M40,50 L45,60 L60,40" stroke="white" stroke-width="3" fill="none"/>
        </svg>
    </div>
    
    <div class="absolute bottom-10 right-10 opacity-5">
        <svg class="w-40 h-40" viewBox="0 0 100 100">
            <path d="M20,50 Q50,10 80,50 Q50,90 20,50 Z" fill="none" stroke="white" stroke-width="2"/>
            <circle cx="50" cy="50" r="15" fill="white"/>
        </svg>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold mb-6">
                <span class="bg-gradient-to-r from-red-500 to-red-400 bg-clip-text text-transparent">Гарантия безопасности</span><br>
                вашей сделки
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Мы создали многоуровневую систему защиты, которая обеспечивает полную безопасность 
                при покупке автомобиля из Китая. От первого контакта до передачи ключей.
            </p>
        </div>
        
        <div class="flex flex-col lg:flex-row items-stretch gap-12">
            <!-- Левая часть: Процесс безопасности -->
            <div class="lg:w-1/2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Этап 1 -->
                    <div class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-10 hover:border-opacity-30 transition-all duration-500 hover:transform hover:-translate-y-2">
                        <div class="flex items-start mb-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-search text-white text-lg"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-bold">1</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold pt-2">Тщательный подбор</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Проверка автомобиля на репутационных аукционах Китая с анализом истории</p>
                        <div class="flex items-center text-sm text-gray-400">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>Проверка 25+ параметров онлайн</span>
                        </div>
                    </div>
                    
                    <!-- Этап 2 -->
                    <div class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-10 hover:border-opacity-30 transition-all duration-500 hover:transform hover:-translate-y-2">
                        <div class="flex items-start mb-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-file-contract text-white text-lg"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-bold">2</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold pt-2">Юридическая экспертиза</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Полная проверка юридической чистоты и подготовка всех необходимых документов</p>
                        <div class="flex items-center text-sm text-gray-400">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>Гарантия отсутствия залогов и арестов</span>
                        </div>
                    </div>
                    
                    <!-- Этап 3 -->
                    <div class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-10 hover:border-opacity-30 transition-all duration-500 hover:transform hover:-translate-y-2">
                        <div class="flex items-start mb-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-shield-alt text-white text-lg"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-5 h-5 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-bold">3</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold pt-2">Финансовая защита</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Используем эскроу-счета для безопасных расчетов с поэтапной оплатой</p>
                        <div class="flex items-center text-sm text-gray-400">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>Ваши средства защищены до получения авто</span>
                        </div>
                    </div>
                    
                    <!-- Этап 4 -->
                    <div class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-10 hover:border-opacity-30 transition-all duration-500 hover:transform hover:-translate-y-2">
                        <div class="flex items-start mb-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-clipboard-check text-white text-lg"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-bold">4</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold pt-2">Финальная проверка</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Диагностика автомобиля нашим экспертом в Китае перед отправкой в РФ</p>
                        <div class="flex items-center text-sm text-gray-400">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>150+ пунктов технической проверки</span>
                        </div>
                    </div>
                </div>
                
                <!-- Дополнительные гарантии -->
                <div class="bg-gradient-to-r from-red-900/30 to-blue-900/30 rounded-2xl p-6 border border-white border-opacity-10">
                    <h3 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-award text-red-400 mr-3"></i>
                        Дополнительные гарантии
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-500 bg-opacity-20 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-check text-green-400"></i>
                            </div>
                            <span class="text-sm">Гарантия 24 месяца</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-blue-500 bg-opacity-20 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-check text-blue-400"></i>
                            </div>
                            <span class="text-sm">Страхование груза</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-purple-500 bg-opacity-20 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-check text-purple-400"></i>
                            </div>
                            <span class="text-sm">Юридическое сопровождение</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-yellow-500 bg-opacity-20 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-check text-yellow-400"></i>
                            </div>
                            <span class="text-sm">Поддержка 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Правая часть: Форма и статистика -->
            <div class="lg:w-1/2">
                <div class="bg-white rounded-3xl p-8 text-gray-900 shadow-2xl relative overflow-hidden">
                    <!-- Векторный фон формы -->
                    <div class="absolute -top-20 -right-20 w-60 h-60 bg-gradient-to-br from-red-100 to-blue-100 rounded-full opacity-20"></div>
                    <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full opacity-20"></div>
                    
                    <div class="relative z-10">
                        <div class="text-center mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-red-600 to-red-700 rounded-full mb-4">
                                <i class="fas fa-lock text-white text-2xl"></i>
                            </div>
                            <h3 class="text-3xl font-bold mb-2">Защищенная заявка</h3>
                            <p class="text-gray-600">Получите бесплатную консультацию и расчет стоимости</p>
                        </div>
                        
                        <!-- Индикатор доверия -->
                        <div class="flex items-center justify-center mb-8 p-4 bg-gray-50 rounded-xl">
                            <div class="flex items-center mr-6">
                                <i class="fas fa-user-shield text-red-500 text-2xl mr-3"></i>
                                <div>
                                    <div class="font-bold text-lg">1500+</div>
                                    <div class="text-sm text-gray-500">довольных клиентов</div>
                                </div>
                            </div>
                            <div class="h-10 w-px bg-gray-300"></div>
                            <div class="flex items-center ml-6">
                                <i class="fas fa-car text-blue-500 text-2xl mr-3"></i>
                                <div>
                                    <div class="font-bold text-lg">0</div>
                                    <div class="text-sm text-gray-500">проблемных сделок</div>
                                </div>
                            </div>
                        </div>
                        
                        <form class="space-y-5">
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Ваше имя *</label>
                                <div class="relative">
                                    <input type="text" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-300" placeholder="Иван Иванов" required>
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Номер телефона *</label>
                                <div class="relative">
                                    <input type="tel" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-300" placeholder="+7 (999) 123-45-67" required>
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-phone text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Интересующий бренд</label>
                                <div class="relative">
                                    <select class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent appearance-none transition-all duration-300">
                                        <option value="">Выберите бренд</option>
                                        <option value="li">Li Auto</option>
                                        <option value="geely">Geely</option>
                                        <option value="changan">Changan</option>
                                        <option value="haval">Haval</option>
                                        <option value="chery">Chery</option>
                                        <option value="exeed">EXEED</option>
                                        <option value="other">Другой</option>
                                    </select>
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Ваш бюджет (руб.)</label>
                                <div class="relative">
                                    <input type="range" min="1000000" max="10000000" step="500000" value="3000000" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider">
                                    <div class="flex justify-between text-sm text-gray-500 mt-2">
                                        <span>1 млн</span>
                                        <span id="budgetValue">3 млн</span>
                                        <span>10 млн</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pt-2">
                                <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-5 px-6 rounded-xl text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl group">
                                    <i class="fas fa-paper-plane mr-3 group-hover:rotate-12 transition-transform duration-300"></i> 
                                    Получить безопасное предложение
                                </button>
                            </div>
                            
                            <div class="text-center pt-4 border-t border-gray-100">
                                <div class="flex items-center justify-center text-sm text-gray-500">
                                    <i class="fas fa-lock text-green-500 mr-2"></i>
                                    <span>Ваши данные защищены и не передаются третьим лицам</span>
                                </div>
                                <p class="text-xs text-gray-400 mt-3">
                                    Нажимая кнопку, вы соглашаетесь с 
                                    <a href="#" class="text-red-600 hover:text-red-700 font-medium">политикой конфиденциальности</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Блок дополнительной информации -->
                <div class="mt-8 flex items-center justify-center">
                    <div class="flex items-center bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 border border-white border-opacity-20">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <div class="font-bold">Среднее время доставки</div>
                            <div class="text-sm text-gray-300">45-60 дней от заявки до получения</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>

<script>
    // Обновление значения бюджета в реальном времени
    document.addEventListener('DOMContentLoaded', function() {
        const budgetSlider = document.querySelector('.slider');
        const budgetValue = document.getElementById('budgetValue');
        
        if (budgetSlider && budgetValue) {
            // Форматирование числа с пробелами
            function formatNumber(num) {
                if (num >= 1000000) {
                    return (num / 1000000).toFixed(1).replace('.0', '') + ' млн';
                }
                return num.toLocaleString('ru-RU');
            }
            
            // Обновление значения при изменении слайдера
            budgetSlider.addEventListener('input', function() {
                const value = parseInt(this.value);
                budgetValue.textContent = formatNumber(value);
            });
            
            // Инициализация начального значения
            budgetValue.textContent = formatNumber(parseInt(budgetSlider.value));
        }
        
        // Анимация появления элементов при скролле
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
        
        // Наблюдаем за элементами с анимацией
        document.querySelectorAll('.group').forEach(el => {
            observer.observe(el);
        });
    });
</script>

<style>
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
    
    /* Кастомный стиль для слайдера бюджета */
    .slider::-webkit-slider-thumb {
        appearance: none;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #DC2626, #B91C1C);
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: 3px solid white;
    }
    
    .slider::-moz-range-thumb {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #DC2626, #B91C1C);
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: 3px solid white;
    }
    
    /* Эффект свечения для иконок */
    .group:hover .fa-search,
    .group:hover .fa-file-contract,
    .group:hover .fa-shield-alt,
    .group:hover .fa-clipboard-check {
        filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.5));
        transition: filter 0.3s ease;
    }
    
    /* Плавный градиентный фон */
    section {
        background-size: 200% 200%;
        animation: gradientShift 15s ease infinite;
    }
    
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>
    </main>
</body>
<!-- Мобильное меню (вставить перед закрывающим тегом </body>) -->
<div id="mobileMenu" class="fixed inset-0 z-50 hidden">
    <!-- Затемнение фона -->
    <div class="absolute inset-0 bg-black bg-opacity-70" onclick="closeMobileMenu()"></div>
    
    <!-- Панель меню -->
    <div class="absolute right-0 top-0 bottom-0 w-4/5 max-w-sm bg-white shadow-2xl transform transition-transform duration-300 translate-x-full" id="menuPanel">
        <!-- Заголовок меню -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 p-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mr-3">
                        <span class="logo-font text-red-600 text-xl font-black">Z</span>
                    </div>
                    <div>
                        <h2 class="logo-font text-white text-xl">ZINWAY</h2>
                        <p class="text-xs text-red-100">Your Way to Cars from the East</p>
                    </div>
                </div>
                <button onclick="closeMobileMenu()" class="text-white p-2">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Контакты в меню -->
        <div class="p-4 border-b border-gray-200">
            <div class="space-y-3">
                <a href="tel:+78005553535" class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-phone text-red-600"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">+7 (800) 555-35-35</div>
                        <div class="text-xs text-gray-500">Бесплатный звонок</div>
                    </div>
                </a>
                
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
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
        
        <!-- Основное меню -->
        <div class="flex-1 overflow-y-auto">
            <nav class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 group">
                            <i class="fas fa-home text-gray-400 group-hover:text-red-500 w-6 mr-3"></i>
                            <span class="font-medium">Главная</span>
                            <i class="fas fa-chevron-right ml-auto text-gray-300 text-sm"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 group">
                            <i class="fas fa-car text-gray-400 group-hover:text-red-500 w-6 mr-3"></i>
                            <span class="font-medium">Каталог авто</span>
                            <i class="fas fa-chevron-right ml-auto text-gray-300 text-sm"></i>
                        </a>
                    </li>
                    
                    <li>
                        <div class="accordion-item">
                            <button class="flex items-center justify-between w-full p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 text-left">
                                <div class="flex items-center">
                                    <i class="fas fa-cogs text-gray-400 w-6 mr-3"></i>
                                    <span class="font-medium">Услуги</span>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 text-sm transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content overflow-hidden transition-all duration-300 max-h-0">
                                <div class="pl-11 pr-4 pb-3 space-y-2">
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Подбор авто
                                    </a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Доставка и растаможка
                                    </a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Сервисное обслуживание
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="accordion-item">
                            <button class="flex items-center justify-between w-full p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 text-left">
                                <div class="flex items-center">
                                    <i class="fas fa-flag text-gray-400 w-6 mr-3"></i>
                                    <span class="font-medium">Авто по странам</span>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 text-sm transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content overflow-hidden transition-all duration-300 max-h-0">
                                <div class="pl-11 pr-4 pb-3 space-y-2">
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Китайские автомобили
                                    </a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Корейские автомобили
                                    </a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        Японские автомобили
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 group">
                            <i class="fas fa-building text-gray-400 group-hover:text-red-500 w-6 mr-3"></i>
                            <span class="font-medium">О компании</span>
                            <i class="fas fa-chevron-right ml-auto text-gray-300 text-sm"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 group">
                            <i class="fas fa-comments text-gray-400 group-hover:text-red-500 w-6 mr-3"></i>
                            <span class="font-medium">Отзывы</span>
                            <i class="fas fa-chevron-right ml-auto text-gray-300 text-sm"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center p-4 text-gray-800 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200 group">
                            <i class="fas fa-address-book text-gray-400 group-hover:text-red-500 w-6 mr-3"></i>
                            <span class="font-medium">Контакты</span>
                            <i class="fas fa-chevron-right ml-auto text-gray-300 text-sm"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Социальные сети -->
            <div class="px-4 pb-4">
                <p class="text-sm text-gray-500 mb-3">Мы в социальных сетях:</p>
                <div class="flex space-x-3">
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-store"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-black to-gray-800 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <!-- Кнопки действий -->
            <div class="p-4 border-t border-gray-200 space-y-3">
                <button onclick="closeMobileMenu()" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold py-4 rounded-xl flex items-center justify-center hover:from-red-700 hover:to-red-800 transition-colors duration-300">
                    <i class="fas fa-car mr-3"></i> Подобрать авто
                </button>
                
                <button onclick="closeMobileMenu()" class="w-full border-2 border-red-600 text-red-600 font-semibold py-4 rounded-xl flex items-center justify-center hover:bg-red-50 transition-colors duration-300">
                    <i class="fas fa-headset mr-3"></i> Заказать звонок
                </button>
            </div>
            
            <!-- Бренды -->
            <div class="p-4 border-t border-gray-200">
                <p class="text-sm text-gray-500 mb-3">Работаем с брендами:</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">Li Auto</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">Geely</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">Changan</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">Chery</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">Haval</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Кнопка открытия мобильного меню в header -->
<script>
    // Добавить в header после кнопки "Консультация" (в блоке кнопок действий):
    // <button onclick="openMobileMenu()" class="lg:hidden text-gray-800 p-2">
    //     <i class="fas fa-bars text-xl"></i>
    // </button>
</script>

<style>
    /* Стили для мобильного меню */
    #mobileMenu {
        display: none;
    }
    
    #mobileMenu.show {
        display: block;
    }
    
    #menuPanel.show {
        transform: translateX(0);
    }
    
    /* Аккордеон в меню */
    .accordion-item.active .accordion-content {
        max-height: 500px;
    }
    
    .accordion-item.active button i.fa-chevron-down {
        transform: rotate(180deg);
    }
    
    /* Анимации */
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(100%);
        }
    }
    
    /* Скролл для меню */
    #menuPanel > div:last-child {
        max-height: calc(100vh - 200px);
        overflow-y: auto;
    }
    
    /* Скрыть стандартный скроллбар */
    #menuPanel > div:last-child::-webkit-scrollbar {
        width: 4px;
    }
    
    #menuPanel > div:last-child::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    #menuPanel > div:last-child::-webkit-scrollbar-thumb {
        background: #DC2626;
        border-radius: 10px;
    }
</style>

<script>
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
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.accordion-item button');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const item = this.closest('.accordion-item');
                const isActive = item.classList.contains('active');
                
                // Закрываем все остальные аккордеоны
                document.querySelectorAll('.accordion-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.accordion-content').style.maxHeight = '0';
                    }
                });
                
                // Переключаем текущий аккордеон
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.accordion-content');
                    content.style.maxHeight = content.scrollHeight + 'px';
                } else {
                    item.classList.remove('active');
                    const content = item.querySelector('.accordion-content');
                    content.style.maxHeight = '0';
                }
            });
        });
        
        // Закрытие меню при клике на ссылку
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', function() {
                if (!this.closest('.accordion-content')) {
                    closeMobileMenu();
                }
            });
        });
        
        // Закрытие меню при нажатии Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    });
</script>
 @include('footer')
</html>