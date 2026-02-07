<!DOCTYPE html>
<html lang="ru">
     @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сервисное обслуживание | Zinway</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        
        .service-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
        }
        
        .red-gradient {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
        }
        
        .price-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .price-card:hover {
            transform: translateY(-8px);
            border-color: #DC2626;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        
        .price-card.popular {
            position: relative;
            border: 2px solid #DC2626;
            box-shadow: 0 12px 25px rgba(220, 38, 38, 0.15);
        }
        
        .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
            box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
        }
        
        .benefit-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 40px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #DC2626;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 12px;
            width: 2px;
            height: calc(100% + 28px);
            background: #e5e7eb;
        }
        
        .timeline-item:last-child::after {
            display: none;
        }
        
        .service-step {
            transition: all 0.3s ease;
        }
        
        .service-step:hover {
            transform: scale(1.03);
        }
        
        .accordion-item {
            border-bottom: 1px solid #e5e7eb;
            overflow: hidden;
        }
        
        .accordion-header {
            padding: 20px 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #1f2937;
        }
        
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: #6b7280;
            line-height: 1.6;
        }
        
        .accordion-item.active .accordion-content {
            max-height: 500px;
            padding-bottom: 20px;
        }
        
        .accordion-item.active .accordion-icon {
            transform: rotate(180deg);
        }
        
        .accordion-icon {
            transition: transform 0.3s ease;
        }
        
        .tooltip {
            position: relative;
            display: inline-block;
        }
        
        .tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: #1f2937;
            color: white;
            text-align: center;
            border-radius: 6px;
            padding: 8px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.875rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .tooltip .tooltip-text::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #1f2937 transparent transparent transparent;
        }
        
        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        
        @media (max-width: 768px) {
            .price-card {
                margin-bottom: 30px;
            }
            
            .timeline-item {
                padding-left: 25px;
            }
            
            .benefit-icon {
                width: 50px;
                height: 50px;
                margin-bottom: 12px;
            }
            
            .tooltip .tooltip-text {
                width: 160px;
                font-size: 0.75rem;
            }
        }
        
        @media (max-width: 480px) {
            .timeline-item {
                padding-left: 20px;
            }
            
            .benefit-icon {
                width: 45px;
                height: 45px;
                margin-bottom: 10px;
            }
            
            .popular-badge {
                font-size: 0.75rem;
                padding: 5px 15px;
            }
        }
    </style>
</head>
<body>
    
    <!-- Hero секция -->
    <section class="service-gradient text-white py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-tools mr-2"></i>Профессиональный сервис
                </span>
                <h1 class="logo-font text-3xl md:text-5xl font-bold mb-6">
                    Сервисное обслуживание
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Гарантия качества и надежности для вашего автомобиля. Работаем только с оригинальными запчастями и маслами.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#pricing" class="bg-white text-red-600 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-tags mr-2"></i>Смотреть цены
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-lg hover:bg-white/10 transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2"></i>Записаться на сервис
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция преимуществ -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="logo-font text-2xl md:text-4xl font-bold text-gray-900 mb-4">
                    Почему выбирают наш сервис
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Мы гарантируем качество каждого этапа обслуживания вашего автомобиля
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="benefit-icon bg-red-50 mx-auto">
                        <i class="fas fa-certificate text-red-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Только оригинальные материалы</h3>
                    <p class="text-gray-600 text-sm">Используем исключительно оригинальные масла, фильтры и запчасти от производителей</p>
                </div>
                
                <div class="text-center">
                    <div class="benefit-icon bg-blue-50 mx-auto">
                        <i class="fas fa-user-tie text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Профессиональные мастера</h3>
                    <p class="text-gray-600 text-sm">Сертифицированные специалисты с опытом работы от 5 лет</p>
                </div>
                
                <div class="text-center">
                    <div class="benefit-icon bg-green-50 mx-auto">
                        <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Гарантия на все работы</h3>
                    <p class="text-gray-600 text-sm">Предоставляем гарантию 12 месяцев на все виды выполненных работ</p>
                </div>
                
                <div class="text-center">
                    <div class="benefit-icon bg-purple-50 mx-auto">
                        <i class="fas fa-clock text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Экономия вашего времени</h3>
                    <p class="text-gray-600 text-sm">Среднее время ТО — 2 часа. Работаем по предварительной записи</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция цен -->
    <section id="pricing" class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="logo-font text-2xl md:text-4xl font-bold text-gray-900 mb-4">
                    Цены на основные услуги
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Прозрачное ценообразование без скрытых платежей. Цены указаны с учетом оригинальных материалов
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Карточка 1: Техническое обслуживание -->
                <div class="price-card bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-car text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Техническое обслуживание</h3>
                        <div class="text-gray-500 text-sm">Комплексная диагностика и обслуживание</div>
                    </div>
                    
                    <div class="text-center mb-6">
                        <span class="text-3xl font-bold text-gray-900">от 5 900 ₽</span>
                        <div class="text-gray-500 text-sm mt-1">*цена зависит от модели авто</div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Диагностика всех систем</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Замена масла и фильтров</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Проверка тормозной системы</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Диагностика подвески</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Проверка электроники</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 rounded-lg hover:bg-gray-800 transition duration-300">
                        Записаться на ТО
                    </button>
                </div>
                
                <!-- Карточка 2: Замена масел и фильтров (популярная) -->
                <div class="price-card popular bg-white rounded-xl p-6 shadow-lg">
                    <div class="popular-badge">САМЫЙ ПОПУЛЯРНЫЙ</div>
                    
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 red-gradient rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-oil-can text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Замена масел и фильтров</h3>
                        <div class="text-gray-500 text-sm">С оригинальными материалами</div>
                    </div>
                    
                    <div class="text-center mb-6">
                        <span class="text-3xl font-bold text-gray-900">от 3 500 ₽</span>
                        <div class="text-gray-500 text-sm mt-1">*включая стоимость оригинального масла</div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Масло в двигатель <span class="tooltip"><i class="fas fa-info-circle text-blue-500"></i><span class="tooltip-text">Используем только оригинальные масла рекомендованные производителем</span></span></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Масляный фильтр</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Воздушный фильтр</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Салонный фильтр</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span>Проверка уровня технических жидкостей</span>
                        </li>
                    </ul>
                    
                    <button class="w-full red-gradient text-white font-semibold py-3 rounded-lg hover:opacity-90 transition duration-300">
                        Записаться на замену
                    </button>
                </div>
                
                <!-- Карточка 3: Индивидуальные услуги -->
                <div class="price-card bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-cogs text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-2">Индивидуальные услуги</h3>
                        <div class="text-gray-500 text-sm">Работы по конкретным задачам</div>
                    </div>
                    
                    <div class="text-center mb-6">
                        <span class="text-3xl font-bold text-gray-900">Договорная</span>
                        <div class="text-gray-500 text-sm mt-1">*цена определяется после диагностики</div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-wrench text-blue-500 mr-3 mt-1"></i>
                            <span>Ремонт двигателя и КПП</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-wrench text-blue-500 mr-3 mt-1"></i>
                            <span>Ремонт ходовой части</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-wrench text-blue-500 mr-3 mt-1"></i>
                            <span>Ремонт тормозной системы</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-wrench text-blue-500 mr-3 mt-1"></i>
                            <span>Работы с электроникой</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-wrench text-blue-500 mr-3 mt-1"></i>
                            <span>Кузовной ремонт</span>
                        </li>
                    </ul>
                    
                    <button class="w-full border-2 border-gray-800 text-gray-800 font-semibold py-3 rounded-lg hover:bg-gray-800 hover:text-white transition duration-300">
                        Получить консультацию
                    </button>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-6">
                    *Все цены указаны с учетом НДС. Окончательная стоимость может незначительно отличаться в зависимости от модели автомобиля и текущих цен на оригинальные запчасти.
                </p>
                <div class="inline-flex items-center bg-blue-50 text-blue-700 px-4 py-3 rounded-lg">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span class="text-sm">Для точного расчета стоимости пришлите VIN-код вашего автомобиля</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция процесса обслуживания -->
<section class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 md:mb-20">
            <span class="inline-block bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold mb-4 shadow-lg">
                <i class="fas fa-route mr-2"></i>ПРОСТОЙ ПУТЬ К ИДЕАЛЬНОМУ АВТО
            </span>
            <h2 class="logo-font text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                Как проходит обслуживание
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                5 простых шагов от записи до получения автомобиля в идеальном состоянии
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            <!-- Десктоп версия с таймлайном -->
            <div class="hidden lg:block relative">
                <!-- Центральная линия таймлайна -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-1 bg-gradient-to-r from-red-500 via-blue-500 to-green-500 w-4/5 top-20 rounded-full shadow-md"></div>
                
                <!-- Шаги -->
                <div class="relative grid grid-cols-5 gap-6">
                    <!-- Шаг 1 -->
                    <div class="relative">
                        <div class="service-step bg-white rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-red-200 group h-full">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-xl">1</span>
                                </div>
                            </div>
                            <div class="pt-8">
                                <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-red-100 transition-colors duration-300">
                                    <i class="fas fa-calendar-alt text-red-600 text-2xl"></i>
                                </div>
                                <h3 class="font-bold text-xl mb-3 text-gray-900">Запись</h3>
                                <p class="text-gray-600 text-sm mb-4">Выбираете удобное время через сайт или по телефону</p>
                                <div class="text-xs text-red-600 font-medium mt-auto">
                                    <i class="fas fa-clock mr-1"></i>5 минут
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Шаг 2 -->
                    <div class="relative">
                        <div class="service-step bg-white rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-200 group h-full">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-xl">2</span>
                                </div>
                            </div>
                            <div class="pt-8">
                                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-100 transition-colors duration-300">
                                    <i class="fas fa-search text-blue-600 text-2xl"></i>
                                </div>
                                <h3 class="font-bold text-xl mb-3 text-gray-900">Диагностика</h3>
                                <p class="text-gray-600 text-sm mb-4">Мастер проводит полную диагностику всех систем автомобиля</p>
                                <div class="text-xs text-blue-600 font-medium mt-auto">
                                    <i class="fas fa-clock mr-1"></i>30-60 минут
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Шаг 3 -->
                    <div class="relative">
                        <div class="service-step bg-white rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group h-full popular-step">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300 ring-4 ring-purple-100">
                                    <span class="text-white font-bold text-xl">3</span>
                                </div>
                            </div>
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                
                            </div>
                            <div class="pt-10">
                                <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-100 transition-colors duration-300">
                                    <i class="fas fa-handshake text-purple-600 text-2xl"></i>
                                </div>
                                <h3 class="font-bold text-xl mb-3 text-gray-900">Согласование</h3>
                                <p class="text-gray-600 text-sm mb-4">Согласовываем стоимость и план работ, подписываем договор</p>
                                <div class="text-xs text-purple-600 font-medium mt-auto">
                                    <i class="fas fa-clock mr-1"></i>15-20 минут
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Шаг 4 -->
                    <div class="relative">
                        <div class="service-step bg-white rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-green-200 group h-full">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-xl">4</span>
                                </div>
                            </div>
                            <div class="pt-8">
                                <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-green-100 transition-colors duration-300">
                                    <i class="fas fa-tools text-green-600 text-2xl"></i>
                                </div>
                                <h3 class="font-bold text-xl mb-3 text-gray-900">Выполнение работ</h3>
                                <p class="text-gray-600 text-sm mb-4">Сертифицированные мастера выполняют все согласованные работы</p>
                                <div class="text-xs text-green-600 font-medium mt-auto">
                                    <i class="fas fa-clock mr-1"></i>1-3 часа
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Шаг 5 -->
                    <div class="relative">
                        <div class="service-step bg-white rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-yellow-200 group h-full">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-xl">5</span>
                                </div>
                            </div>
                            <div class="pt-8">
                                <div class="w-16 h-16 bg-yellow-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-100 transition-colors duration-300">
                                    <i class="fas fa-car text-yellow-600 text-2xl"></i>
                                </div>
                                <h3 class="font-bold text-xl mb-3 text-gray-900">Выдача авто</h3>
                                <p class="text-gray-600 text-sm mb-4">Вы получаете чистый автомобиль с гарантией на все работы</p>
                                <div class="text-xs text-yellow-600 font-medium mt-auto">
                                    <i class="fas fa-clock mr-1"></i>10 минут
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Стрелки между шагами (десктоп) -->
                <div class="absolute top-20 left-0 right-0 flex justify-between px-12">
                    <div class="w-1/4 text-center">
                        <i class="fas fa-arrow-right text-gray-300 text-xl"></i>
                    </div>
                    <div class="w-1/4 text-center">
                        <i class="fas fa-arrow-right text-gray-300 text-xl"></i>
                    </div>
                    <div class="w-1/4 text-center">
                        <i class="fas fa-arrow-right text-gray-300 text-xl"></i>
                    </div>
                    <div class="w-1/4 text-center">
                        <i class="fas fa-arrow-right text-gray-300 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <!-- Мобильная версия (вертикальный таймлайн) -->
            <div class="lg:hidden">
                <div class="relative">
                    <!-- Вертикальная линия таймлайна -->
                    <div class="absolute left-6 top-0 bottom-0 w-1 bg-gradient-to-b from-red-500 via-blue-500 to-green-500 rounded-full shadow-md"></div>
                    
                    <!-- Шаги для мобильных -->
                    <div class="space-y-10 pl-12">
                        <!-- Шаг 1 - мобильный -->
                        <div class="relative">
                            <div class="absolute -left-9 top-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-sm">1</span>
                                </div>
                            </div>
                            <div class="service-step bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-calendar-alt text-red-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-2 text-gray-900">Запись</h3>
                                        <p class="text-gray-600 text-sm mb-3">Выбираете удобное время через сайт или по телефону</p>
                                        <div class="text-xs text-red-600 font-medium">
                                            <i class="fas fa-clock mr-1"></i>5 минут
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Шаг 2 - мобильный -->
                        <div class="relative">
                            <div class="absolute -left-9 top-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-sm">2</span>
                                </div>
                            </div>
                            <div class="service-step bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-search text-blue-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-2 text-gray-900">Диагностика</h3>
                                        <p class="text-gray-600 text-sm mb-3">Мастер проводит полную диагностику всех систем автомобиля</p>
                                        <div class="text-xs text-blue-600 font-medium">
                                            <i class="fas fa-clock mr-1"></i>30-60 минут
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Шаг 3 - мобильный -->
                        <div class="relative">
                            <div class="absolute -left-9 top-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center shadow-lg ring-2 ring-purple-200">
                                    <span class="text-white font-bold text-sm">3</span>
                                </div>
                            </div>
                            <div class="service-step bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 relative">
                                <div class="absolute -top-2 -right-2">
                                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                   
                                    </span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-handshake text-purple-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-2 text-gray-900">Согласование</h3>
                                        <p class="text-gray-600 text-sm mb-3">Согласовываем стоимость и план работ, подписываем договор</p>
                                        <div class="text-xs text-purple-600 font-medium">
                                            <i class="fas fa-clock mr-1"></i>15-20 минут
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Шаг 4 - мобильный -->
                        <div class="relative">
                            <div class="absolute -left-9 top-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-sm">4</span>
                                </div>
                            </div>
                            <div class="service-step bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-tools text-green-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-2 text-gray-900">Выполнение работ</h3>
                                        <p class="text-gray-600 text-sm mb-3">Сертифицированные мастера выполняют все согласованные работы</p>
                                        <div class="text-xs text-green-600 font-medium">
                                            <i class="fas fa-clock mr-1"></i>1-3 часа
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Шаг 5 - мобильный -->
                        <div class="relative">
                            <div class="absolute -left-9 top-4">
                                <div class="w-8 h-8 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-sm">5</span>
                                </div>
                            </div>
                            <div class="service-step bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-yellow-50 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-car text-yellow-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-2 text-gray-900">Выдача авто</h3>
                                        <p class="text-gray-600 text-sm mb-3">Вы получаете чистый автомобиль с гарантией на все работы</p>
                                        <div class="text-xs text-yellow-600 font-medium">
                                            <i class="fas fa-clock mr-1"></i>10 минут
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .service-step {
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .service-step:hover {
        transform: translateY(-8px);
    }
    
    .popular-step:hover {
        transform: translateY(-10px);
    }
    
    /* Анимация для номеров шагов */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .service-step:hover .absolute.-top-6 > div {
        animation: pulse 1.5s infinite;
    }
    
    /* Адаптивность */
    @media (max-width: 768px) {
        .service-step {
            margin-bottom: 0;
        }
        
        .service-step:hover {
            transform: translateY(-4px);
        }
        
        .space-y-10 > * + * {
            margin-top: 2.5rem;
        }
    }
</style>

    <!-- Секция FAQ -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="logo-font text-2xl md:text-4xl font-bold text-gray-900 mb-4">
                    Частые вопросы
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Ответы на самые популярные вопросы о сервисном обслуживании
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>Какие масла вы используете?</span>
                        <i class="fas fa-chevron-down accordion-icon text-gray-400"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Мы используем исключительно оригинальные масла и технические жидкости, рекомендованные производителем вашего автомобиля. Для китайских автомобилей это оригинальные масла от Li Auto, Geely, Changan, Chery, Haval. Мы никогда не используем аналоги или подделки, так как это влияет на гарантию и долговечность двигателя.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>Сколько длится гарантия на работы?</span>
                        <i class="fas fa-chevron-down accordion-icon text-gray-400"></i>
                    </div>
                    <div class="accordion-content">
                        <p>На все выполненные работы мы предоставляем гарантию 12 месяцев. На оригинальные запчасти действует гарантия производителя. Гарантийные обязательства распространяются на все виды работ, включая замену масла, фильтров, ремонт двигателя, КПП, ходовой части и другие.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>Можно ли привезти свои запчасти?</span>
                        <i class="fas fa-chevron-down accordion-icon text-gray-400"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Да, вы можете привезти свои запчасти, однако в этом случае мы не предоставляем гарантию на выполненные работы. Мы рекомендуем использовать оригинальные запчасти, которые поставляем мы, так как это гарантирует качество и соответствие всем техническим требованиям производителя.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>Как долго длится ТО?</span>
                        <i class="fas fa-chevron-down accordion-icon text-gray-400"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Стандартное техническое обслуживание занимает 2-3 часа в зависимости от модели автомобиля. Если требуются дополнительные работы, время может быть увеличено. Все сроки мы согласовываем с вами заранее. Работаем по предварительной записи, чтобы минимизировать ваше время ожидания.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>Есть ли услуга выездного сервиса?</span>
                        <i class="fas fa-chevron-down accordion-icon text-gray-400"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Да, мы предоставляем услуги выездного сервиса для базового технического обслуживания (замена масла, фильтров, диагностика). Стоимость выезда зависит от вашего местоположения. Для сложных ремонтных работ рекомендуем посещение нашего сервисного центра, где есть все необходимое оборудование.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <div class="inline-flex items-center bg-red-50 text-red-700 px-6 py-4 rounded-xl">
                    <i class="fas fa-question-circle text-xl mr-4"></i>
                    <div class="text-left">
                        <p class="font-semibold">Остались вопросы?</p>
                        <p class="text-sm">Позвоните нам для бесплатной консультации</p>
                    </div>
                    <a href="tel:+78005553535" class="ml-8 bg-red-600 text-white px-5 py-2 rounded-lg hover:bg-red-700 transition duration-300 font-semibold">
                        <i class="fas fa-phone mr-2"></i>+7 (800) 555-35-35
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция записи на сервис -->
    <section id="contact" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 md:p-12 text-white">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-8">
                        <h2 class="logo-font text-2xl md:text-3xl font-bold mb-4">
                            Запишитесь на сервис прямо сейчас
                        </h2>
                        <p class="text-gray-300 mb-6">
                            Оставьте заявку и мы подберем удобное время для обслуживания вашего автомобиля. Первичная диагностика — бесплатно!
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Работаем ежедневно</p>
                                    <p class="text-sm text-gray-300">Пн-Пт: 9:00-20:00, Сб-Вс: 10:00-18:00</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Обслуживаем все марки</p>
                                    <p class="text-sm text-gray-300">Специализируемся на автомобилях из Китая, Японии и Кореи</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2">
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Ваше имя" class="w-full p-4 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500">
                            </div>
                            <div>
                                <input type="tel" placeholder="Номер телефона" class="w-full p-4 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500">
                            </div>
                            <div>
                                <input type="text" placeholder="Марка и модель автомобиля" class="w-full p-4 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500">
                            </div>
                            <div>
                                <select class="w-full p-4 rounded-lg bg-white/10 border border-white/20 text-white focus:outline-none focus:border-red-500">
                                    <option value="" disabled selected>Выберите услугу</option>
                                    <option value="to">Техническое обслуживание</option>
                                    <option value="oil">Замена масел и фильтров</option>
                                    <option value="diagnostic">Диагностика</option>
                                    <option value="other">Другое</option>
                                </select>
                            </div>
                            <button type="submit" class="w-full red-gradient text-white font-bold py-4 rounded-lg hover:opacity-90 transition duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>Отправить заявку
                            </button>
                            <p class="text-xs text-gray-400 text-center">
                                Нажимая кнопку, вы соглашаетесь с <a href="#" class="text-red-300 hover:underline">политикой конфиденциальности</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <script>
        // Аккордеон для FAQ
        function toggleAccordion(element) {
            const item = element.closest('.accordion-item');
            const isActive = item.classList.contains('active');
            
            // Закрываем все остальные элементы
            document.querySelectorAll('.accordion-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Переключаем текущий элемент
            if (!isActive) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        }
        
        // Плавная прокрутка к якорям
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
        
        // Инициализация при загрузке
        document.addEventListener('DOMContentLoaded', function() {
            // Можно добавить дополнительные скрипты по необходимости
        });
    </script>
</body>
 @include('footer')
</html>