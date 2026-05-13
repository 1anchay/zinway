<!DOCTYPE html>
<html lang="ru">
<head>
    <title>VR КМБ - Курс молодого бойца</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            background: linear-gradient(rgba(17, 24, 39, 0.92), rgba(17, 24, 39, 0.92)),
            url('https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .skill-card {
            background: var(--darker);
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
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
            background: linear-gradient(to bottom, var(--white) 33%, #1e3a8a 33%, #1e3a8a 66%, #b91c1c 66%);
        }

        .glow {
            text-shadow: 0 0 10px rgba(30, 58, 138, 0.7);
        }

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

        @media (max-width: 768px) {
            .header-bg {
                background-attachment: scroll;
            }

            .section-divider,
            .section-divider.reverse {
                height: 55px;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-100">
@include('hader')

<section class="header-bg py-24 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-16 lg:mb-0">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-700 to-green-700 text-white px-6 py-2 rounded-full mb-6 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-vr-cardboard mr-2"></i>
                    Информационно-тренировочное VR-приложение
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                    <span class="text-blue-400 glow">Курс молодого бойца</span><br>
                    <span class="text-green-400">в виртуальной реальности</span>
                </h1>

                <p class="text-lg text-gray-300 mb-8 max-w-lg">
                    Учебное VR-приложение для отработки базовых сценариев подготовки: сборка и разборка автомата, метание гранаты, управление дроном, ориентирование и взаимодействие с тренировочными объектами.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#scenarios" class="px-8 py-3 bg-gradient-to-r from-blue-700 to-green-600 text-white rounded-lg font-bold hover:from-blue-800 hover:to-green-700 transition-all shadow-lg hover:shadow-xl text-center transform hover:-translate-y-1 flex items-center justify-center">
                        <i class="fa-solid fa-play mr-2"></i>
                        Сценарии обучения
                    </a>

                    <a href="#about" class="px-8 py-3 border-2 border-blue-500 text-blue-400 rounded-lg font-bold hover:bg-gray-800 transition-all text-center transform hover:-translate-y-1 flex items-center justify-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        О проекте
                    </a>
                </div>
            </div>

            <div class="lg:w-1/2 flex justify-center relative">
                <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="VR Training" class="w-full max-w-md vr-headset">

                <div class="absolute -bottom-5 -right-5 bg-gray-800 border-4 border-blue-700 w-20 h-20 rounded-full flex items-center justify-center shadow-lg">
                    <i class="fa-solid fa-shield-halved text-3xl text-green-400"></i>
                </div>

                <div class="absolute top-10 left-10 bg-gray-800 border border-blue-500 px-4 py-2 rounded-full text-xs font-bold text-white flex items-center">
                    <i class="fas fa-shield-alt mr-2 text-blue-400"></i>
                    VR TRAINING SYSTEM
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<section id="scenarios" class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="h-1 w-16 bg-blue-500 mr-4"></div>
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    <span class="text-blue-400">Тренировочные</span> <span class="text-green-400">сценарии</span>
                </h2>
                <div class="h-1 w-16 bg-green-500 ml-4"></div>
            </div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Основные модули VR-приложения, реализованные для интерактивной подготовки пользователя
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="skill-card rounded-lg overflow-hidden">
                <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-gun text-6xl text-blue-400 tech-icon"></i>
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                        Базовый модуль
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Сборка и разборка автомата</h3>
                    <p class="text-gray-300 mb-4">
                        Пользователь изучает порядок действий, взаимодействует с деталями оружия и выполняет сборку в виртуальной локации.
                    </p>
                    <span class="text-sm font-medium text-blue-400">Навык: работа с объектами</span>
                </div>
            </div>

            <div class="skill-card rounded-lg overflow-hidden">
                <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-bomb text-6xl text-green-400 tech-icon"></i>
                    <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                        Практический модуль
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Метание гранаты</h3>
                    <p class="text-gray-300 mb-4">
                        Сценарий тренирует бросок, выбор направления, силу движения и оценку попадания по учебной цели.
                    </p>
                    <span class="text-sm font-medium text-green-400">Навык: точность и реакция</span>
                </div>
            </div>

            <div class="skill-card rounded-lg overflow-hidden">
                <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-helicopter text-6xl text-blue-400 tech-icon"></i>
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                        VR-управление
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Управление дроном</h3>
                    <p class="text-gray-300 mb-4">
                        Пользователь берёт пульт управления, переключается на дрон и выполняет полёт по тренировочной зоне.
                    </p>
                    <span class="text-sm font-medium text-blue-400">Навык: навигация и контроль</span>
                </div>
            </div>

            <div class="skill-card rounded-lg overflow-hidden">
                <div class="relative h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-person-running text-6xl text-green-400 tech-icon"></i>
                    <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                        Интерактив
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Передвижение и телепортация</h3>
                    <p class="text-gray-300 mb-4">
                        Реализовано перемещение по VR-локациям, телепорты и взаимодействие с учебными объектами.
                    </p>
                    <span class="text-sm font-medium text-green-400">Навык: ориентация в VR</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider reverse"></div>

<section id="about" class="py-20 bg-gradient-to-b from-gray-900 to-black relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                <div class="inline-flex items-center mb-6">
                    <div class="h-1 w-12 bg-gradient-to-r from-blue-400 to-green-400 mr-4"></div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">VR-КМБ</span> — учебный тренажёр
                    </h2>
                </div>

                <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                    Проект разработан как информационно-тренировочное VR-приложение. Его задача — показать, как технологии виртуальной реальности могут использоваться для безопасной отработки действий, которые в реальных условиях требуют специального оборудования и контроля инструктора.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl border border-gray-700 hover:border-blue-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-3">
                            <div class="h-10 w-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fa-solid fa-vr-cardboard text-white"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white">Безопасная среда</h3>
                        </div>
                        <p class="text-gray-300 text-sm">
                            Пользователь выполняет действия в виртуальной локации без риска для себя и окружающих.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-5 rounded-xl border border-gray-700 hover:border-green-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-3">
                            <div class="h-10 w-10 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fa-solid fa-hand-pointer text-white"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white">Интерактивность</h3>
                        </div>
                        <p class="text-gray-300 text-sm">
                            Реализовано взятие предметов руками, нажатие на элементы, переключение управления и выполнение заданий.
                        </p>
                    </div>
                </div>

                <a href="#tech" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-green-600 text-white font-medium rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300">
                    <span>Технологии разработки</span>
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="lg:w-1/2 relative">
                <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-2xl border border-gray-700 h-96 md:h-[500px]">
                    <model-viewer
                        src="/models/model3.glb"
                        alt="VR Training Simulation"
                        ar
                        environment-image="https://modelviewer.dev/shared-assets/environments/spruit_sunrise_1k_HDR.hdr"
                        exposure="1.2"
                        shadow-intensity="1"
                        auto-rotate
                        camera-controls
                        style="width:100%; height:100%;">
                    </model-viewer>

                    <div class="absolute top-6 right-6 bg-gray-900/80 backdrop-blur-sm px-3 py-1 rounded-full border border-gray-700 flex items-center">
                        <div class="radar-scan w-4 h-4 rounded-full border-2 border-green-400 mr-2"></div>
                        <span class="text-sm text-gray-200 font-mono">VR ACTIVE</span>
                    </div>

                    <div class="absolute bottom-6 left-6 bg-gradient-to-r from-blue-600 to-green-600 p-3 rounded-lg shadow-lg flex items-center">
                        <div class="russian-flag w-8 h-8 rounded-full mr-3"></div>
                        <div class="text-white">
                            <p class="text-xs font-bold uppercase tracking-wider">Разработано в</p>
                            <p class="text-lg font-bold">UNITY 3D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tech" class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="h-1 w-16 bg-blue-500 mr-4"></div>
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    <span class="text-blue-400">Технологии</span> <span class="text-green-400">разработки</span>
                </h2>
                <div class="h-1 w-16 bg-green-500 ml-4"></div>
            </div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Инструменты, использованные при создании VR-приложения и сайта
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="flex flex-col items-center">
                <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/5969/5969346.png" alt="Unity" class="h-10 w-10 object-contain">
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Unity 3D</h3>
                <p class="text-gray-400 text-center text-sm">Создание VR-сцен и логики тренажёра</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="C#" class="h-10 w-10 object-contain">
                </div>
                <h3 class="text-lg font-bold text-white mb-1">C#</h3>
                <p class="text-gray-400 text-center text-sm">Скрипты взаимодействия и управления</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="VR" class="h-10 w-10 object-contain">
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Core VR</h3>
                <p class="text-gray-400 text-center text-sm">Взаимодействие руками и телепортация</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="h-20 w-20 bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-md tech-icon">
                    <i class="fa-brands fa-laravel text-4xl text-red-400"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Laravel</h3>
                <p class="text-gray-400 text-center text-sm">Web-сайт проекта и личный кабинет</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-gray-800 to-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                <span class="text-blue-400">Функции</span> <span class="text-green-400">VR-приложения</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Возможности, которые демонстрируют практическую часть дипломного проекта
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-hand text-6xl text-blue-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Взаимодействие руками</h3>
                    <p class="text-gray-300">Пользователь может брать предметы, удерживать их и выполнять действия в VR-пространстве.</p>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-location-arrow text-6xl text-green-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Телепортация</h3>
                    <p class="text-gray-300">Перемещение между зонами полигона и отдельными учебными локациями.</p>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fa-solid fa-chart-line text-6xl text-blue-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Обучающий сайт</h3>
                    <p class="text-gray-300">Web-часть проекта содержит страницы, регистрацию, профиль пользователя и информационные материалы.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-blue-800 to-green-700">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-3xl mx-auto bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Готовы пройти <span class="text-blue-400">VR</span> <span class="text-green-400">КМБ</span>?
                </h2>
                <p class="text-lg text-gray-300 mb-6">
                    Зарегистрируйтесь на сайте, чтобы получить доступ к профилю обучающегося и материалам проекта.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-gradient-to-r from-blue-700 to-green-600 text-white font-bold rounded-lg hover:from-blue-800 hover:to-green-700 transition-all shadow-lg transform hover:-translate-y-1">
                        Регистрация
                    </a>
                    <a href="{{ route('login') }}" class="px-8 py-3 border-2 border-blue-500 text-blue-400 rounded-lg font-bold hover:bg-gray-900 transition-all">
                        Войти
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
</body>
</html>