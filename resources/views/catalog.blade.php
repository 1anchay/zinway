<!DOCTYPE html>
<html lang="ru">
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог автомобилей из Китая | Zinway</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .logo-font {
            font-family: 'Montserrat', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #0A1A3A 0%, #1E3A8A 100%);
        }
        .car-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e5e7eb;
        }
        .car-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #dc2626;
        }
        .filter-panel {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        .price-tag {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .checkbox-label {
            transition: all 0.2s ease;
        }
        .checkbox-label:hover {
            background-color: #fef2f2;
            color: #dc2626;
        }
        .checkbox-label input:checked + span {
            color: #dc2626;
            font-weight: 600;
        }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 6px;
            border-radius: 3px;
            background: #e5e7eb;
            outline: none;
        }
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #dc2626;
            cursor: pointer;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(220, 38, 38, 0.3);
        }
        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #dc2626;
            cursor: pointer;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(220, 38, 38, 0.3);
        }
        .brand-tag {
            transition: all 0.2s ease;
        }
        .brand-tag.active {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            border-color: #dc2626;
        }
        .pagination-btn {
            transition: all 0.2s ease;
        }
        .pagination-btn:hover:not(.disabled) {
            background-color: #fef2f2;
            color: #dc2626;
        }
        .pagination-btn.active {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
        }
        .fuel-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
        }
        .fuel-electric {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        .fuel-petrol {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }
        .fuel-hybrid {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }
        .fuel-diesel {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        }
        .car-feature {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-radius: 8px;
            font-size: 0.875rem;
            color: #4b5563;
        }
        .no-results {
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .car-image {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .car-card:hover .car-image {
            transform: scale(1.05);
        }
        .status-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 10;
        }
        .favorite-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 10;
            background: rgba(255, 255, 255, 0.9);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .favorite-btn:hover {
            background: white;
            transform: scale(1.1);
        }
        .favorite-btn.active {
            color: #dc2626;
        }
        
        /* Мобильная адаптация */
        .mobile-filter-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 40;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(220, 38, 38, 0.3);
            transition: all 0.3s ease;
        }
        
        .mobile-filter-btn:hover {
            transform: scale(1.1);
        }
        
        .mobile-filter-panel {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: 90%;
            max-width: 400px;
            background: white;
            z-index: 50;
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow-y: auto;
            box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
        }
        
        .mobile-filter-panel.active {
            transform: translateX(0);
        }
        
        .mobile-filter-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 45;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .mobile-filter-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .filter-header {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
            border-bottom: 1px solid #e5e7eb;
        }
        
        /* Адаптивные стили */
        @media (max-width: 768px) {
            .hero-gradient {
                padding-top: 80px;
                padding-bottom: 80px;
            }
            
            .hero-gradient h1 {
                font-size: 2rem;
            }
            
            .hero-gradient p {
                font-size: 1rem;
            }
            
            .car-image {
                height: 180px;
            }
            
            .car-feature {
                padding: 6px 8px;
                font-size: 0.8rem;
            }
            
            .price-tag {
                font-size: 1.5rem;
            }
            
            .banner-content h3 {
                font-size: 1.5rem;
            }
            
            .banner-content button {
                width: 100%;
            }
            
            .cars-grid {
                gap: 16px;
            }
        }
        
        @media (max-width: 640px) {
            .hero-gradient h1 {
                font-size: 1.75rem;
            }
            
            .car-card {
                margin-bottom: 16px;
            }
            
            .car-image {
                height: 160px;
            }
            
            .price-tag {
                font-size: 1.25rem;
            }
            
            .car-feature {
                font-size: 0.75rem;
            }
        }
        
        @media (max-width: 480px) {
            .car-image {
                height: 140px;
            }
            
            .hero-gradient {
                padding: 60px 20px;
            }
            
            .cars-count {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero секция каталога -->
    <section class="hero-gradient text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Каталог автомобилей из Китая
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Более 8 премиальных моделей от ведущих китайских производителей. 
                    Подберите свой идеальный автомобиль по параметрам.
                </p>
                <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full">
                    <i class="fas fa-car mr-3 text-red-300"></i>
                    <span class="font-medium">Акция: Бесплатная доставка при покупке от 3 млн ₽</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Основной контент -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Панель фильтров для десктопа -->
                <div class="hidden lg:block lg:w-1/4">
                    <div class="filter-panel p-6 sticky top-24">
                        <h2 class="text-xl font-bold mb-6 flex items-center">
                            <i class="fas fa-filter mr-3 text-red-500"></i>
                            Фильтры
                        </h2>
                        
                        <!-- Цена -->
                        <div class="mb-8">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold text-gray-900">Цена, ₽</h3>
                                <span id="priceRange" class="text-red-600 font-bold">1M - 10M</span>
                            </div>
                            <div class="space-y-4">
                                <input type="range" min="1000000" max="10000000" value="1000000" class="slider" id="minPrice">
                                <input type="range" min="1000000" max="10000000" value="10000000" class="slider" id="maxPrice">
                                <div class="flex justify-between text-sm text-gray-500">
                                    <span>1 млн</span>
                                    <span>10 млн</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Бренды -->
                        <div class="mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Бренды</h3>
                            <div class="space-y-2">
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="all" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Все бренды
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="changan" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Changan
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="chery" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Chery
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="exeed" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        EXEED
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="geely" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Geely
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="haval" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Haval
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="jetour" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Jetour
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-brand="tank" checked>
                                    <span class="flex items-center">
                                        <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                                        Tank
                                    </span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Тип кузова -->
                        <div class="mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Тип кузова</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                                    <input type="checkbox" class="hidden" data-body="suv">
                                    <i class="fas fa-car-side text-2xl mb-2 text-gray-400"></i>
                                    <span class="text-sm">Внедорожник</span>
                                </label>
                                <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                                    <input type="checkbox" class="hidden" data-body="sedan">
                                    <i class="fas fa-car text-2xl mb-2 text-gray-400"></i>
                                    <span class="text-sm">Седан</span>
                                </label>
                                <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                                    <input type="checkbox" class="hidden" data-body="hatchback">
                                    <i class="fas fa-car-alt text-2xl mb-2 text-gray-400"></i>
                                    <span class="text-sm">Хэтчбек</span>
                                </label>
                                <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                                    <input type="checkbox" class="hidden" data-body="minivan">
                                    <i class="fas fa-van-shuttle text-2xl mb-2 text-gray-400"></i>
                                    <span class="text-sm">Минивэн</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Тип топлива -->
                        <div class="mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Тип топлива</h3>
                            <div class="space-y-2">
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-fuel="petrol" checked>
                                    <span class="flex items-center">
                                        <div class="fuel-icon fuel-petrol mr-3">
                                            <i class="fas fa-gas-pump text-white text-xs"></i>
                                        </div>
                                        Бензин
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-fuel="diesel" checked>
                                    <span class="flex items-center">
                                        <div class="fuel-icon fuel-diesel mr-3">
                                            <i class="fas fa-oil-can text-white text-xs"></i>
                                        </div>
                                        Дизель
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-fuel="electric" checked>
                                    <span class="flex items-center">
                                        <div class="fuel-icon fuel-electric mr-3">
                                            <i class="fas fa-bolt text-white text-xs"></i>
                                        </div>
                                        Электро
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-fuel="hybrid" checked>
                                    <span class="flex items-center">
                                        <div class="fuel-icon fuel-hybrid mr-3">
                                            <i class="fas fa-leaf text-white text-xs"></i>
                                        </div>
                                        Гибрид
                                    </span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Год выпуска -->
                        <div class="mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Год выпуска</h3>
                            <div class="space-y-2">
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-year="2024">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                                        2024
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-year="2023">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                                        2023
                                    </span>
                                </label>
                                <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                                    <input type="checkbox" class="hidden" data-year="2022">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                                        2022 и старше
                                    </span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Кнопки -->
                        <div class="space-y-3">
                            <button onclick="applyFilters()" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 rounded-lg transition-all duration-300 flex items-center justify-center">
                                <i class="fas fa-filter mr-2"></i>
                                Применить фильтры
                            </button>
                            <button onclick="resetFilters()" class="w-full border-2 border-gray-300 hover:border-red-600 hover:text-red-600 text-gray-700 font-semibold py-3 rounded-lg transition-all duration-300 flex items-center justify-center">
                                <i class="fas fa-redo mr-2"></i>
                                Сбросить фильтры
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Основной контент с автомобилями -->
                <div class="lg:w-3/4">
                    <!-- Информационная строка -->
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                                Найдено <span id="carsCount" class="text-red-600">8</span> автомобилей
                            </h2>
                            <p class="text-gray-600">Подобранные по вашим критериям</p>
                        </div>
                        
                        <!-- Сортировка -->
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-600 hidden sm:inline">Сортировать:</span>
                            <select id="sortSelect" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent w-full sm:w-auto">
                                <option value="price-asc">По цене (дешевле)</option>
                                <option value="price-desc">По цене (дороже)</option>
                                <option value="year-desc">По году (новые)</option>
                                <option value="power-desc">По мощности</option>
                            </select>
                            
                            <!-- Кнопка фильтров для мобильных -->
                            <button onclick="openMobileFilters()" class="lg:hidden border border-gray-300 hover:border-red-600 hover:text-red-600 text-gray-700 font-semibold py-2 px-4 rounded-lg transition-all duration-300 flex items-center justify-center">
                                <i class="fas fa-filter mr-2"></i>
                                Фильтры
                            </button>
                        </div>
                    </div>
                    
                    <!-- Сетка автомобилей -->
                    <div id="carsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- Автомобили будут загружены через JavaScript -->
                    </div>
                    
                    <!-- Пагинация -->
                    <div class="mt-12 flex justify-center">
                        <div class="flex items-center space-x-2">
                            <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="pagination-btn active w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center">1</button>
                            <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center">2</button>
                            <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center">3</button>
                            <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Баннер -->
                    <div class="mt-12 bg-gradient-to-r from-blue-900 to-blue-800 rounded-2xl p-8 text-white">
                        <div class="flex flex-col lg:flex-row items-center justify-between">
                            <div class="mb-6 lg:mb-0 lg:mr-8 banner-content">
                                <h3 class="text-2xl font-bold mb-3">Нужна помощь в выборе?</h3>
                                <p class="text-blue-100 mb-4">Наши эксперты подберут автомобиль по вашим критериям и бюджету</p>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-blue-300 mr-2"></i>
                                    <span>Бесплатная консультация в течение 15 минут</span>
                                </div>
                            </div>
                            <button class="bg-white text-blue-900 hover:bg-blue-50 font-bold py-3 px-8 rounded-lg transition-all duration-300 flex items-center whitespace-nowrap">
                                <i class="fas fa-headset mr-3"></i>
                                Получить консультацию
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Мобильное меню фильтров -->
    <div class="mobile-filter-overlay" id="mobileFilterOverlay" onclick="closeMobileFilters()"></div>
    
    <div class="mobile-filter-panel" id="mobileFilterPanel">
        <div class="filter-header p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold flex items-center">
                    <i class="fas fa-filter mr-3 text-red-500"></i>
                    Фильтры
                </h2>
                <button onclick="closeMobileFilters()" class="text-gray-500 hover:text-red-600">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <!-- Цена для мобильных -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-gray-900">Цена, ₽</h3>
                    <span id="mobilePriceRange" class="text-red-600 font-bold">1M - 10M</span>
                </div>
                <div class="space-y-4">
                    <input type="range" min="1000000" max="10000000" value="1000000" class="slider" id="mobileMinPrice">
                    <input type="range" min="1000000" max="10000000" value="10000000" class="slider" id="mobileMaxPrice">
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>1 млн</span>
                        <span>10 млн</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="p-6 pt-0 overflow-y-auto max-h-[calc(100vh-200px)]">
            <!-- Бренды для мобильных -->
            <div class="mb-8">
                <h3 class="font-semibold text-gray-900 mb-4">Бренды</h3>
                <div class="grid grid-cols-2 gap-2">
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="all" id="mobileAllBrands" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Все бренды
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="changan" id="mobileChangan" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Changan
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="chery" id="mobileChery" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Chery
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="exeed" id="mobileExeed" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            EXEED
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="geely" id="mobileGeely" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Geely
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="haval" id="mobileHaval" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Haval
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="jetour" id="mobileJetour" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Jetour
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-3 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-brand="tank" id="mobileTank" checked>
                        <span class="flex items-center">
                            <i class="fas fa-check-circle mr-3 text-gray-400"></i>
                            Tank
                        </span>
                    </label>
                </div>
            </div>
            
            <!-- Тип кузова для мобильных -->
            <div class="mb-8">
                <h3 class="font-semibold text-gray-900 mb-4">Тип кузова</h3>
                <div class="grid grid-cols-2 gap-2">
                    <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-body="suv" id="mobileSuv">
                        <i class="fas fa-car-side text-2xl mb-2 text-gray-400"></i>
                        <span class="text-sm">Внедорожник</span>
                    </label>
                    <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-body="sedan" id="mobileSedan">
                        <i class="fas fa-car text-2xl mb-2 text-gray-400"></i>
                        <span class="text-sm">Седан</span>
                    </label>
                    <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-body="hatchback" id="mobileHatchback">
                        <i class="fas fa-car-alt text-2xl mb-2 text-gray-400"></i>
                        <span class="text-sm">Хэтчбек</span>
                    </label>
                    <label class="checkbox-label flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="checkbox" class="hidden" data-body="minivan" id="mobileMinivan">
                        <i class="fas fa-van-shuttle text-2xl mb-2 text-gray-400"></i>
                        <span class="text-sm">Минивэн</span>
                    </label>
                </div>
            </div>
            
            <!-- Тип топлива для мобильных -->
            <div class="mb-8">
                <h3 class="font-semibold text-gray-900 mb-4">Тип топлива</h3>
                <div class="space-y-2">
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-fuel="petrol" id="mobilePetrol" checked>
                        <span class="flex items-center">
                            <div class="fuel-icon fuel-petrol mr-3">
                                <i class="fas fa-gas-pump text-white text-xs"></i>
                            </div>
                            Бензин
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-fuel="diesel" id="mobileDiesel" checked>
                        <span class="flex items-center">
                            <div class="fuel-icon fuel-diesel mr-3">
                                <i class="fas fa-oil-can text-white text-xs"></i>
                            </div>
                            Дизель
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-fuel="electric" id="mobileElectric" checked>
                        <span class="flex items-center">
                            <div class="fuel-icon fuel-electric mr-3">
                                <i class="fas fa-bolt text-white text-xs"></i>
                            </div>
                            Электро
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-fuel="hybrid" id="mobileHybrid" checked>
                        <span class="flex items-center">
                            <div class="fuel-icon fuel-hybrid mr-3">
                                <i class="fas fa-leaf text-white text-xs"></i>
                            </div>
                            Гибрид
                        </span>
                    </label>
                </div>
            </div>
            
            <!-- Год выпуска для мобильных -->
            <div class="mb-8">
                <h3 class="font-semibold text-gray-900 mb-4">Год выпуска</h3>
                <div class="space-y-2">
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-year="2024" id="mobileYear2024">
                        <span class="flex items-center">
                            <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                            2024
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-year="2023" id="mobileYear2023">
                        <span class="flex items-center">
                            <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                            2023
                        </span>
                    </label>
                    <label class="checkbox-label flex items-center p-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="hidden" data-year="2022" id="mobileYear2022">
                        <span class="flex items-center">
                            <i class="fas fa-calendar-alt mr-3 text-gray-400"></i>
                            2022 и старше
                        </span>
                    </label>
                </div>
            </div>
            
            <!-- Кнопки для мобильных -->
            <div class="space-y-3 sticky bottom-0 bg-white pt-4 pb-6">
                <button onclick="applyMobileFilters()" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 rounded-lg transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-check mr-2"></i>
                    Применить фильтры
                </button>
                <button onclick="resetMobileFilters()" class="w-full border-2 border-gray-300 hover:border-red-600 hover:text-red-600 text-gray-700 font-semibold py-3 rounded-lg transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-redo mr-2"></i>
                    Сбросить фильтры
                </button>
            </div>
        </div>
    </div>

    <!-- Плавающая кнопка фильтров для мобильных -->
    <button onclick="openMobileFilters()" class="mobile-filter-btn lg:hidden">
        <i class="fas fa-filter text-xl"></i>
    </button>

    <script>
        // Данные автомобилей
        const carsData = [
            {
                id: 1,
                brand: "Changan",
                model: "UNI-K Premium",
                price: 3250000,
                year: 2023,
                body: "suv",
                fuel: "petrol",
                power: 233,
                mileage: 12000,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Премиальный кроссовер с интеллектуальной панелью управления",
                features: ["Панорамная крыша", "Кожаный салон", "Беспроводная зарядка"],
                status: "available"
            },
            {
                id: 2,
                brand: "Chery",
                model: "Tiggo 8 Pro Max",
                price: 2850000,
                year: 2024,
                body: "suv",
                fuel: "petrol",
                power: 254,
                mileage: 0,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "7-местный флагманский SUV с передовыми технологиями",
                features: ["7 мест", "Массажный сиденья", "Датчики 360°"],
                status: "new"
            },
            {
                id: 3,
                brand: "EXEED",
                model: "VX 2024",
                price: 4850000,
                year: 2024,
                body: "suv",
                fuel: "hybrid",
                power: 389,
                mileage: 5000,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Люксовый гибридный кроссовер премиум-класса",
                features: ["Гибрид", "Премиум звук", "Ночное видение"],
                status: "available"
            },
            {
                id: 4,
                brand: "Geely",
                model: "Monjaro Flagship",
                price: 4120000,
                year: 2024,
                body: "suv",
                fuel: "petrol",
                power: 254,
                mileage: 8000,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Мощный SUV с системой полного привода и премиальным салоном",
                features: ["4WD", "Вентиляция сидений", "Хай-тек салон"],
                status: "available"
            },
            {
                id: 5,
                brand: "Haval",
                model: "Jolion Supreme",
                price: 2450000,
                year: 2023,
                body: "suv",
                fuel: "petrol",
                power: 150,
                mileage: 15000,
                transmission: "Вариатор",
                drive: "Передний",
                image: "https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Стильный и экономичный городской SUV",
                features: ["Экономичный", "Мультимедиа", "Круиз-контроль"],
                status: "available"
            },
            {
                id: 6,
                brand: "Jetour",
                model: "X90 Plus",
                price: 2950000,
                year: 2024,
                body: "suv",
                fuel: "petrol",
                power: 197,
                mileage: 3000,
                transmission: "Робот",
                drive: "Передний",
                image: "https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Просторный семейный кроссовер с современным дизайном",
                features: ["Просторный", "Умный ключ", "Климат-контроль"],
                status: "new"
            },
            {
                id: 7,
                brand: "Tank",
                model: "500 Luxury",
                price: 5890000,
                year: 2024,
                body: "suv",
                fuel: "diesel",
                power: 299,
                mileage: 2000,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Настоящий внедорожник премиум-класса с роскошным салоном",
                features: ["Блокировка дифф.", "Пневмоподвеска", "Люк"],
                status: "available"
            },
            {
                id: 8,
                brand: "Hongqi",
                model: "H9 Executive",
                price: 6250000,
                year: 2024,
                body: "sedan",
                fuel: "hybrid",
                power: 333,
                mileage: 1000,
                transmission: "Автомат",
                drive: "Полный",
                image: "https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
                description: "Представительский седан для ценителей роскоши",
                features: ["Массажные сиденья", "Климат 4-зонный", "HD экраны"],
                status: "new"
            }
        ];

        // Фильтры
        let activeFilters = {
            minPrice: 1000000,
            maxPrice: 10000000,
            brands: ['all', 'changan', 'chery', 'exeed', 'geely', 'haval', 'jetour', 'tank'],
            bodyTypes: [],
            fuelTypes: ['petrol', 'diesel', 'electric', 'hybrid'],
            years: []
        };

        // Избранное
        let favorites = JSON.parse(localStorage.getItem('carFavorites')) || [];

        // Функция форматирования цены
        function formatPrice(price) {
            if (price >= 1000000) {
                return (price / 1000000).toFixed(1).replace('.0', '') + ' млн ₽';
            }
            return price.toLocaleString('ru-RU') + ' ₽';
        }

        // Функция отображения статуса
        function getStatusBadge(status) {
            const badges = {
                'new': '<span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">НОВЫЙ</span>',
                'available': '<span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold">В НАЛИЧИИ</span>',
                'reserved': '<span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold">БРОНЬ</span>',
                'sold': '<span class="bg-gray-500 text-white px-3 py-1 rounded-full text-xs font-semibold">ПРОДАНО</span>'
            };
            return badges[status] || '';
        }

        // Функция отображения автомобилей
        function displayCars(cars) {
            const grid = document.getElementById('carsGrid');
            const countElement = document.getElementById('carsCount');
            
            if (cars.length === 0) {
                grid.innerHTML = `
                    <div class="col-span-full no-results text-center py-16">
                        <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-car text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Автомобили не найдены</h3>
                        <p class="text-gray-600 max-w-md mx-auto mb-8">
                            Попробуйте изменить параметры фильтрации или сбросить фильтры
                        </p>
                        <button onclick="resetFilters()" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300">
                            <i class="fas fa-redo mr-2"></i>
                            Сбросить фильтры
                        </button>
                    </div>
                `;
                countElement.textContent = '0';
                return;
            }
            
            grid.innerHTML = '';
            cars.forEach(car => {
                const isFavorite = favorites.includes(car.id);
                const carElement = document.createElement('div');
                carElement.className = 'car-card bg-white rounded-2xl overflow-hidden';
                carElement.innerHTML = `
                    <div class="relative overflow-hidden">
                        <div class="status-badge">
                            ${getStatusBadge(car.status)}
                        </div>
                        <button class="favorite-btn ${isFavorite ? 'active' : ''}" onclick="toggleFavorite(${car.id})">
                            <i class="fas fa-heart ${isFavorite ? 'fas' : 'far'}"></i>
                        </button>
                        <img src="${car.image}" alt="${car.brand} ${car.model}" class="car-image w-full">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white font-bold text-lg">${car.brand} ${car.model}</h3>
                            <p class="text-gray-300 text-sm">${car.year} год, ${car.mileage.toLocaleString('ru-RU')} км</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">${car.description}</p>
                            </div>
                            <div class="text-right">
                                <div class="price-tag text-2xl font-bold">${formatPrice(car.price)}</div>
                                <p class="text-gray-500 text-sm">от 25 000 ₽/мес</p>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="car-feature">
                                <i class="fas fa-horse-head text-red-500 mr-2"></i>
                                <span>${car.power} л.с.</span>
                            </div>
                            <div class="car-feature">
                                <i class="fas fa-cogs text-blue-500 mr-2"></i>
                                <span>${car.transmission}</span>
                            </div>
                            <div class="car-feature">
                                <i class="fas fa-car text-green-500 mr-2"></i>
                                <span>${car.drive} привод</span>
                            </div>
                            <div class="car-feature">
                                <div class="fuel-icon ${car.fuel === 'electric' ? 'fuel-electric' : car.fuel === 'diesel' ? 'fuel-diesel' : car.fuel === 'hybrid' ? 'fuel-hybrid' : 'fuel-petrol'} mr-2">
                                    <i class="fas ${car.fuel === 'electric' ? 'fa-bolt' : car.fuel === 'diesel' ? 'fa-oil-can' : car.fuel === 'hybrid' ? 'fa-leaf' : 'fa-gas-pump'} text-white text-xs"></i>
                                </div>
                                <span>${car.fuel === 'electric' ? 'Электро' : car.fuel === 'diesel' ? 'Дизель' : car.fuel === 'hybrid' ? 'Гибрид' : 'Бензин'}</span>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Особенности:</h4>
                            <div class="flex flex-wrap gap-2">
                                ${car.features.map(feature => `
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">${feature}</span>
                                `).join('')}
                            </div>
                        </div>
                        
                        <div class="flex gap-3">
                            <button class="flex-1 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 rounded-lg transition-all duration-300">
                                <i class="fas fa-info-circle mr-2"></i> Подробнее
                            </button>
                            <button class="px-6 border-2 border-red-600 text-red-600 hover:bg-red-50 font-semibold py-3 rounded-lg transition-all duration-300">
                                <i class="fas fa-credit-card mr-2"></i> Купить
                            </button>
                        </div>
                    </div>
                `;
                grid.appendChild(carElement);
            });
            
            countElement.textContent = cars.length;
        }

        // Функция фильтрации автомобилей
        function filterCars() {
            let filteredCars = carsData.filter(car => {
                // Фильтр по цене
                if (car.price < activeFilters.minPrice || car.price > activeFilters.maxPrice) {
                    return false;
                }
                
                // Фильтр по бренду
                if (!activeFilters.brands.includes('all') && !activeFilters.brands.includes(car.brand.toLowerCase())) {
                    return false;
                }
                
                // Фильтр по типу кузова
                if (activeFilters.bodyTypes.length > 0 && !activeFilters.bodyTypes.includes(car.body)) {
                    return false;
                }
                
                // Фильтр по типу топлива
                if (activeFilters.fuelTypes.length > 0 && !activeFilters.fuelTypes.includes(car.fuel)) {
                    return false;
                }
                
                // Фильтр по году
                if (activeFilters.years.length > 0) {
                    let yearMatch = false;
                    activeFilters.years.forEach(yearFilter => {
                        if (yearFilter === '2024' && car.year === 2024) yearMatch = true;
                        if (yearFilter === '2023' && car.year === 2023) yearMatch = true;
                        if (yearFilter === '2022' && car.year <= 2022) yearMatch = true;
                    });
                    if (!yearMatch) return false;
                }
                
                return true;
            });
            
            // Сортировка
            const sortValue = document.getElementById('sortSelect').value;
            switch (sortValue) {
                case 'price-asc':
                    filteredCars.sort((a, b) => a.price - b.price);
                    break;
                case 'price-desc':
                    filteredCars.sort((a, b) => b.price - a.price);
                    break;
                case 'year-desc':
                    filteredCars.sort((a, b) => b.year - a.year);
                    break;
                case 'power-desc':
                    filteredCars.sort((a, b) => b.power - a.power);
                    break;
            }
            
            displayCars(filteredCars);
        }

        // Функция применения фильтров
        function applyFilters() {
            // Обновляем цену
            activeFilters.minPrice = parseInt(document.getElementById('minPrice').value);
            activeFilters.maxPrice = parseInt(document.getElementById('maxPrice').value);
            
            // Обновляем бренды
            activeFilters.brands = [];
            document.querySelectorAll('input[data-brand]:checked').forEach(checkbox => {
                activeFilters.brands.push(checkbox.dataset.brand);
            });
            
            // Обновляем тип кузова
            activeFilters.bodyTypes = [];
            document.querySelectorAll('input[data-body]:checked').forEach(checkbox => {
                activeFilters.bodyTypes.push(checkbox.dataset.body);
            });
            
            // Обновляем тип топлива
            activeFilters.fuelTypes = [];
            document.querySelectorAll('input[data-fuel]:checked').forEach(checkbox => {
                activeFilters.fuelTypes.push(checkbox.dataset.fuel);
            });
            
            // Обновляем год выпуска
            activeFilters.years = [];
            document.querySelectorAll('input[data-year]:checked').forEach(checkbox => {
                activeFilters.years.push(checkbox.dataset.year);
            });
            
            filterCars();
        }

        // Функция сброса фильтров
        function resetFilters() {
            // Сбрасываем слайдеры цены
            document.getElementById('minPrice').value = 1000000;
            document.getElementById('maxPrice').value = 10000000;
            updatePriceRange();
            
            // Сбрасываем все чекбоксы
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                if (checkbox.dataset.brand === 'all' || 
                    checkbox.dataset.brand && ['changan', 'chery', 'exeed', 'geely', 'haval', 'jetour', 'tank'].includes(checkbox.dataset.brand) ||
                    checkbox.dataset.fuel) {
                    checkbox.checked = true;
                } else {
                    checkbox.checked = false;
                }
            });
            
            // Сбрасываем сортировку
            document.getElementById('sortSelect').value = 'price-asc';
            
            // Сбрасываем фильтры
            activeFilters = {
                minPrice: 1000000,
                maxPrice: 10000000,
                brands: ['all', 'changan', 'chery', 'exeed', 'geely', 'haval', 'jetour', 'tank'],
                bodyTypes: [],
                fuelTypes: ['petrol', 'diesel', 'electric', 'hybrid'],
                years: []
            };
            
            filterCars();
        }

        // Функция обновления отображения диапазона цен
        function updatePriceRange() {
            const minPrice = parseInt(document.getElementById('minPrice').value);
            const maxPrice = parseInt(document.getElementById('maxPrice').value);
            document.getElementById('priceRange').textContent = formatPrice(minPrice) + ' - ' + formatPrice(maxPrice);
        }

        // Функция добавления/удаления из избранного
        function toggleFavorite(carId) {
            const index = favorites.indexOf(carId);
            if (index === -1) {
                favorites.push(carId);
            } else {
                favorites.splice(index, 1);
            }
            
            localStorage.setItem('carFavorites', JSON.stringify(favorites));
            
            // Обновляем иконку
            const favoriteBtn = document.querySelector(`.favorite-btn[onclick="toggleFavorite(${carId})"]`);
            const icon = favoriteBtn.querySelector('i');
            
            if (index === -1) {
                favoriteBtn.classList.add('active');
                icon.classList.remove('far');
                icon.classList.add('fas');
            } else {
                favoriteBtn.classList.remove('active');
                icon.classList.remove('fas');
                icon.classList.add('far');
            }
        }

        // Мобильные фильтры
        function openMobileFilters() {
            document.getElementById('mobileFilterOverlay').classList.add('active');
            document.getElementById('mobileFilterPanel').classList.add('active');
            document.body.style.overflow = 'hidden';
            
            // Синхронизируем значения с десктопными фильтрами
            syncMobileFilters();
        }
        
        function closeMobileFilters() {
            document.getElementById('mobileFilterOverlay').classList.remove('active');
            document.getElementById('mobileFilterPanel').classList.remove('active');
            document.body.style.overflow = '';
        }
        
        function syncMobileFilters() {
            // Синхронизация цен
            document.getElementById('mobileMinPrice').value = activeFilters.minPrice;
            document.getElementById('mobileMaxPrice').value = activeFilters.maxPrice;
            updateMobilePriceRange();
            
            // Синхронизация брендов
            const brandIds = ['all', 'changan', 'chery', 'exeed', 'geely', 'haval', 'jetour', 'tank'];
            brandIds.forEach(brand => {
                const checkbox = document.getElementById('mobile' + brand.charAt(0).toUpperCase() + brand.slice(1));
                if (checkbox) {
                    checkbox.checked = activeFilters.brands.includes(brand);
                }
            });
            
            // Синхронизация типа кузова
            const bodyIds = ['suv', 'sedan', 'hatchback', 'minivan'];
            bodyIds.forEach(body => {
                const checkbox = document.getElementById('mobile' + body.charAt(0).toUpperCase() + body.slice(1));
                if (checkbox) {
                    checkbox.checked = activeFilters.bodyTypes.includes(body);
                }
            });
            
            // Синхронизация типа топлива
            const fuelIds = ['petrol', 'diesel', 'electric', 'hybrid'];
            fuelIds.forEach(fuel => {
                const checkbox = document.getElementById('mobile' + fuel.charAt(0).toUpperCase() + fuel.slice(1));
                if (checkbox) {
                    checkbox.checked = activeFilters.fuelTypes.includes(fuel);
                }
            });
            
            // Синхронизация года выпуска
            const yearIds = ['2024', '2023', '2022'];
            yearIds.forEach(year => {
                const checkbox = document.getElementById('mobileYear' + year);
                if (checkbox) {
                    checkbox.checked = activeFilters.years.includes(year);
                }
            });
        }
        
        function updateMobilePriceRange() {
            const minPrice = parseInt(document.getElementById('mobileMinPrice').value);
            const maxPrice = parseInt(document.getElementById('mobileMaxPrice').value);
            document.getElementById('mobilePriceRange').textContent = formatPrice(minPrice) + ' - ' + formatPrice(maxPrice);
        }
        
        function applyMobileFilters() {
            // Обновляем цену из мобильных фильтров
            activeFilters.minPrice = parseInt(document.getElementById('mobileMinPrice').value);
            activeFilters.maxPrice = parseInt(document.getElementById('mobileMaxPrice').value);
            
            // Обновляем бренды
            activeFilters.brands = [];
            const brandIds = ['all', 'changan', 'chery', 'exeed', 'geely', 'haval', 'jetour', 'tank'];
            brandIds.forEach(brand => {
                const checkbox = document.getElementById('mobile' + brand.charAt(0).toUpperCase() + brand.slice(1));
                if (checkbox && checkbox.checked) {
                    activeFilters.brands.push(brand);
                }
            });
            
            // Обновляем тип кузова
            activeFilters.bodyTypes = [];
            const bodyIds = ['suv', 'sedan', 'hatchback', 'minivan'];
            bodyIds.forEach(body => {
                const checkbox = document.getElementById('mobile' + body.charAt(0).toUpperCase() + body.slice(1));
                if (checkbox && checkbox.checked) {
                    activeFilters.bodyTypes.push(body);
                }
            });
            
            // Обновляем тип топлива
            activeFilters.fuelTypes = [];
            const fuelIds = ['petrol', 'diesel', 'electric', 'hybrid'];
            fuelIds.forEach(fuel => {
                const checkbox = document.getElementById('mobile' + fuel.charAt(0).toUpperCase() + fuel.slice(1));
                if (checkbox && checkbox.checked) {
                    activeFilters.fuelTypes.push(fuel);
                }
            });
            
            // Обновляем год выпуска
            activeFilters.years = [];
            const yearIds = ['2024', '2023', '2022'];
            yearIds.forEach(year => {
                const checkbox = document.getElementById('mobileYear' + year);
                if (checkbox && checkbox.checked) {
                    activeFilters.years.push(year);
                }
            });
            
            // Синхронизируем десктопные фильтры
            syncDesktopFilters();
            
            // Закрываем мобильные фильтры
            closeMobileFilters();
            
            // Применяем фильтры
            filterCars();
        }
        
        function resetMobileFilters() {
            // Сбрасываем мобильные фильтры
            document.getElementById('mobileMinPrice').value = 1000000;
            document.getElementById('mobileMaxPrice').value = 10000000;
            updateMobilePriceRange();
            
            // Сбрасываем все чекбоксы
            const mobileCheckboxes = document.querySelectorAll('#mobileFilterPanel input[type="checkbox"]');
            mobileCheckboxes.forEach(checkbox => {
                if (checkbox.id.includes('Brand') || checkbox.id.includes('fuel')) {
                    checkbox.checked = true;
                } else {
                    checkbox.checked = false;
                }
            });
        }
        
        function syncDesktopFilters() {
            // Синхронизируем десктопные фильтры с активными фильтрами
            document.getElementById('minPrice').value = activeFilters.minPrice;
            document.getElementById('maxPrice').value = activeFilters.maxPrice;
            updatePriceRange();
            
            // Синхронизируем чекбоксы брендов
            document.querySelectorAll('input[data-brand]').forEach(checkbox => {
                checkbox.checked = activeFilters.brands.includes(checkbox.dataset.brand);
            });
            
            // Синхронизируем чекбоксы типа кузова
            document.querySelectorAll('input[data-body]').forEach(checkbox => {
                checkbox.checked = activeFilters.bodyTypes.includes(checkbox.dataset.body);
            });
            
            // Синхронизируем чекбоксы типа топлива
            document.querySelectorAll('input[data-fuel]').forEach(checkbox => {
                checkbox.checked = activeFilters.fuelTypes.includes(checkbox.dataset.fuel);
            });
            
            // Синхронизируем чекбоксы года выпуска
            document.querySelectorAll('input[data-year]').forEach(checkbox => {
                checkbox.checked = activeFilters.years.includes(checkbox.dataset.year);
            });
        }

        // Инициализация
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализируем слайдеры цены
            updatePriceRange();
            
            // Добавляем обработчики для десктопных слайдеров
            document.getElementById('minPrice').addEventListener('input', function() {
                const maxSlider = document.getElementById('maxPrice');
                if (parseInt(this.value) > parseInt(maxSlider.value)) {
                    maxSlider.value = this.value;
                }
                updatePriceRange();
            });
            
            document.getElementById('maxPrice').addEventListener('input', function() {
                const minSlider = document.getElementById('minPrice');
                if (parseInt(this.value) < parseInt(minSlider.value)) {
                    minSlider.value = this.value;
                }
                updatePriceRange();
            });
            
            // Добавляем обработчики для мобильных слайдеров
            document.getElementById('mobileMinPrice').addEventListener('input', function() {
                const maxSlider = document.getElementById('mobileMaxPrice');
                if (parseInt(this.value) > parseInt(maxSlider.value)) {
                    maxSlider.value = this.value;
                }
                updateMobilePriceRange();
            });
            
            document.getElementById('mobileMaxPrice').addEventListener('input', function() {
                const minSlider = document.getElementById('mobileMinPrice');
                if (parseInt(this.value) < parseInt(minSlider.value)) {
                    minSlider.value = this.value;
                }
                updateMobilePriceRange();
            });
            
            // Добавляем обработчик для сортировки
            document.getElementById('sortSelect').addEventListener('change', applyFilters);
            
            // Добавляем обработчики для чекбоксов
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const label = this.closest('label');
                    if (this.checked) {
                        label.style.backgroundColor = '#fef2f2';
                        label.style.color = '#dc2626';
                        const icon = label.querySelector('i.fa-check-circle, i.fas');
                        if (icon) icon.style.color = '#dc2626';
                    } else {
                        label.style.backgroundColor = '';
                        label.style.color = '';
                        const icon = label.querySelector('i.fa-check-circle, i.fas');
                        if (icon) icon.style.color = '#9ca3af';
                    }
                });
            });
            
            // Отображаем автомобили
            filterCars();
            
            // Закрытие мобильных фильтров при нажатии Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMobileFilters();
                }
            });
        });
    </script>
</body>
@include('footer')
</html>