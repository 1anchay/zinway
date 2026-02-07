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
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 to-gray-800 text-white">
            <div class="hero-pattern absolute inset-0"></div>
            <div class="relative container mx-auto px-6 py-24 md:py-32">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="lg:w-1/2 mb-12 lg:mb-0">
                        <div class="flex items-center mb-6">
                            <div class="yandex-gradient w-10 h-10 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-car text-white text-xl"></i>
                            </div>
                            <h1 class="text-3xl font-bold">Global<span class="text-orange-500">Auto</span></h1>
                        </div>
                        
                        <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                            Премиальные автомобили <br> 
                            <span class="text-orange-400">из-за рубежа</span> для вас
                        </h2>
                        
                        <p class="text-xl text-gray-300 mb-8 max-w-2xl">
                            Мы доставляем лучшие автомобили из Европы, Японии и США с гарантией 
                            качества и полной юридической безопасностью. Оставьте заявку и получите 
                            консультацию от нашего эксперта в течение 15 минут.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <button class="contact-btn bg-orange-500 hover:bg-orange-600 text-white font-semibold py-4 px-8 rounded-lg text-lg shadow-lg">
                                <i class="fas fa-phone-alt mr-2"></i> Заказать звонок
                            </button>
                            <button class="contact-btn bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 font-semibold py-4 px-8 rounded-lg text-lg">
                                <i class="fas fa-car mr-2"></i> Подобрать авто
                            </button>
                        </div>
                        
                        <div class="mt-12 flex flex-wrap gap-8">
                            <div class="flex items-center">
                                <div class="bg-orange-500 bg-opacity-20 p-3 rounded-full mr-4">
                                    <i class="fas fa-shield-alt text-orange-500 text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Гарантия<br>безопасности</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-orange-500 bg-opacity-20 p-3 rounded-full mr-4">
                                    <i class="fas fa-check-circle text-orange-500 text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Проверка<br>перед покупкой</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-orange-500 bg-opacity-20 p-3 rounded-full mr-4">
                                    <i class="fas fa-handshake text-orange-500 text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Индивидуальный<br>подход</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 relative">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                                 alt="Luxury Car" class="rounded-2xl shadow-2xl transform -rotate-3">
                            <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-2xl">
                                <div class="text-gray-800">
                                    <p class="text-sm text-gray-500">Автомобиль недели</p>
                                    <h3 class="font-bold text-xl">Porsche 911 Turbo S</h3>
                                    <p class="text-orange-600 font-bold text-2xl mt-2">8 900 000 ₽</p>
                                    <div class="flex items-center mt-2 text-gray-600">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        <span class="mr-4">2022 г.</span>
                                        <i class="fas fa-tachometer-alt mr-2"></i>
                                        <span>12 000 км</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел "Наши ценности" -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Мы ценим наших покупателей</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Наша миссия — обеспечить вам лучший опыт покупки автомобиля из-за рубежа. 
                        Мы строим долгосрочные отношения, основанные на доверии и качестве.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-md guarantee-card">
                        <div class="text-orange-500 mb-6">
                            <i class="fas fa-user-friends text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Индивидуальный подход</h3>
                        <p class="text-gray-600 mb-6">
                            Каждому клиенту мы подбираем автомобиль по персональным критериям. 
                            Учитываем все пожелания — от технических характеристик до цвета салона.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Подбор по вашим критериям</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Полное сопровождение сделки</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Консультация на всех этапах</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-md guarantee-card">
                        <div class="text-orange-500 mb-6">
                            <i class="fas fa-medal text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Гарантия качества</h3>
                        <p class="text-gray-600 mb-6">
                            Все автомобили проходят многоуровневую проверку нашими экспертами. 
                            Мы гарантируем юридическую чистоту и техническую исправность.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Диагностика 150+ параметров</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Проверка истории автомобиля</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Гарантия 6 месяцев</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-md guarantee-card">
                        <div class="text-orange-500 mb-6">
                            <i class="fas fa-headset text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Постпродажная поддержка</h3>
                        <p class="text-gray-600 mb-6">
                            Наши клиенты получают поддержку даже после покупки автомобиля. 
                            Помогаем с оформлением, сервисным обслуживанием и любыми вопросами.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Помощь с оформлением документов</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Консультации по обслуживанию</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Круглосуточная поддержка</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Галерея автомобилей -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Автомобили в наличии</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Мы постоянно обновляем наш каталог, чтобы предложить вам лучшие автомобили 
                        из Европы, Японии и США. Подберите свой идеальный автомобиль.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <!-- Автомобиль 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg car-card-hover">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 alt="Mercedes-Benz S-Class" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Из Германии
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Mercedes-Benz S-Class</h3>
                                    <p class="text-gray-500">2021 год, 25 000 км</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl font-bold text-orange-600">7 400 000 ₽</p>
                                </div>
                            </div>
                            <div class="flex justify-between text-gray-600 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-gas-pump mr-2"></i>
                                    <span>Бензин</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i>
                                    <span>Автомат</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-horse mr-2"></i>
                                    <span>450 л.с.</span>
                                </div>
                            </div>
                            <button class="w-full bg-gray-900 hover:bg-black text-white font-semibold py-3 rounded-lg transition duration-300">
                                <i class="fas fa-info-circle mr-2"></i> Подробнее
                            </button>
                        </div>
                    </div>
                    
                    <!-- Автомобиль 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg car-card-hover">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" 
                                 alt="BMW X5" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Из США
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">BMW X5 M Competition</h3>
                                    <p class="text-gray-500">2022 год, 15 000 км</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl font-bold text-orange-600">10 200 000 ₽</p>
                                </div>
                            </div>
                            <div class="flex justify-between text-gray-600 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-gas-pump mr-2"></i>
                                    <span>Бензин</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i>
                                    <span>Автомат</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-horse mr-2"></i>
                                    <span>625 л.с.</span>
                                </div>
                            </div>
                            <button class="w-full bg-gray-900 hover:bg-black text-white font-semibold py-3 rounded-lg transition duration-300">
                                <i class="fas fa-info-circle mr-2"></i> Подробнее
                            </button>
                        </div>
                    </div>
                    
                    <!-- Автомобиль 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg car-card-hover">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 alt="Toyota Land Cruiser" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Из Японии
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Toyota Land Cruiser 300</h3>
                                    <p class="text-gray-500">2022 год, 10 000 км</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl font-bold text-orange-600">8 500 000 ₽</p>
                                </div>
                            </div>
                            <div class="flex justify-between text-gray-600 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-gas-pump mr-2"></i>
                                    <span>Дизель</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i>
                                    <span>Автомат</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-horse mr-2"></i>
                                    <span>304 л.с.</span>
                                </div>
                            </div>
                            <button class="w-full bg-gray-900 hover:bg-black text-white font-semibold py-3 rounded-lg transition duration-300">
                                <i class="fas fa-info-circle mr-2"></i> Подробнее
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <button class="bg-transparent border-2 border-orange-500 text-orange-500 hover:bg-orange-50 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300">
                        <i class="fas fa-car mr-2"></i> Смотреть весь каталог (24 авто)
                    </button>
                </div>
            </div>
        </section>

        <!-- Гарантия безопасности -->
        <section class="py-20 bg-gradient-to-r from-gray-900 to-gray-800 text-white">
            <div class="container mx-auto px-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-12 lg:mb-0">
                        <h2 class="text-4xl font-bold mb-6">Гарантия безопасности сделки</h2>
                        <p class="text-xl text-gray-300 mb-8">
                            Мы обеспечиваем полную юридическую и финансовую безопасность при покупке автомобиля из-за рубежа. 
                            Наша система проверки исключает любые риски для клиентов.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-orange-500 p-3 rounded-full mr-4 flex-shrink-0">
                                    <i class="fas fa-file-contract text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Юридическая чистота</h3>
                                    <p class="text-gray-300">Проверяем историю автомобиля, отсутствие залогов, арестов и юридических ограничений.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-orange-500 p-3 rounded-full mr-4 flex-shrink-0">
                                    <i class="fas fa-shield-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Финансовая защита</h3>
                                    <p class="text-gray-300">Используем эскроу-счета для безопасных расчетов. Ваши средства защищены до получения автомобиля.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-orange-500 p-3 rounded-full mr-4 flex-shrink-0">
                                    <i class="fas fa-search text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Техническая экспертиза</h3>
                                    <p class="text-gray-300">Каждый автомобиль проходит диагностику у сертифицированных специалистов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 lg:pl-16">
                        <div class="bg-white rounded-2xl p-8 text-gray-900 shadow-2xl">
                            <h3 class="text-2xl font-bold mb-6 text-center">Свяжитесь с нами</h3>
                            <p class="text-gray-600 mb-6 text-center">Оставьте заявку и наш менеджер свяжется с вами в течение 15 минут</p>
                            
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 mb-2">Ваше имя</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="Иван Иванов">
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2">Номер телефона</label>
                                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="+7 (999) 123-45-67">
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2">Интересующий автомобиль</label>
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                        <option>Не выбрано</option>
                                        <option>Mercedes-Benz S-Class</option>
                                        <option>BMW X5 M Competition</option>
                                        <option>Toyota Land Cruiser 300</option>
                                        <option>Porsche 911 Turbo S</option>
                                        <option>Другой автомобиль</option>
                                    </select>
                                </div>
                                
                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-lg text-lg contact-btn">
                                        <i class="fas fa-paper-plane mr-2"></i> Отправить заявку
                                    </button>
                                </div>
                                
                                <p class="text-gray-500 text-sm text-center mt-4">
                                    Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
 @include('footer')
</html>