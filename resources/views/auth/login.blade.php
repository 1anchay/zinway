<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | IT КМБ - Курс молодого бойца в VR</title>

    <!-- Подключение Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        military: {
                            dark: '#0D1A12',
                            medium: '#1A3325',
                            light: '#274D38',
                            accent: '#3A8D5D'
                        },
                        unity: {
                            dark: '#222C37',
                            primary: '#00AAFF'
                        },
                        yandex: {
                            red: '#FC3F1D'
                        }
                    },
                    fontFamily: {
                        'military': ['"Rajdhani"', 'sans-serif'],
                        'tech': ['"Share Tech"', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Подключение Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Share+Tech&display=swap" rel="stylesheet">

    <!-- Подключение model-viewer для 3D модели -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

    <style>
        body {
            background: linear-gradient(rgba(13, 26, 18, 0.9), rgba(13, 26, 18, 0.95)), 
                        url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        
        .form-input {
            background-color: rgba(255,255,255,0.08);
            border: 1px solid #274D38;
            color: white;
            transition: all 0.3s;
        }
        
        .form-input:focus {
            border-color: #00AAFF;
            box-shadow: 0 0 0 3px rgba(0, 170, 255, 0.2);
            background-color: rgba(0,0,0,0.3);
        }
        
        .btn-military {
            background: linear-gradient(to right, #3A8D5D, #274D38);
            border: 1px solid #3A8D5D;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        
        .btn-military:hover {
            background: linear-gradient(to right, #274D38, #1A3325);
            transform: translateY(-1px);
        }
        
        .tech-border {
            border: 1px solid rgba(58, 141, 93, 0.3);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .model-container {
            height: 200px;
            width: 100%;
            background: rgba(0,0,0,0.2);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .access-badge {
            background: linear-gradient(135deg, #3A8D5D 0%, #00AAFF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="font-military text-gray-200">

    <div id="wrapper" class="min-h-screen flex flex-col">
        <!-- Подключение шапки -->
        @include('hader')

        <!-- Основной контейнер -->
        <div id="content-container" class="flex-grow max-w-6xl mx-auto px-4 py-8 flex items-center">
            <div class="w-full flex flex-col lg:flex-row gap-8 items-center">
                <!-- 3D модель -->
                <div class="lg:w-1/2 w-full">
                    <div class="model-container">
                        <model-viewer 
                            src="/models/model6.glb"
                            alt="VR Шлем"
                            ar
                            ar-modes="webxr scene-viewer quick-look"
                            environment-image="neutral"
                            auto-rotate
                            camera-controls
                            style="width: 100%; height: 100%;"
                        >
                            <div class="progress-bar" slot="progress-bar">
                                <div class="update-bar"></div>
                            </div>
                        </model-viewer>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-bold text-white">VR ОБОРУДОВАНИЕ</h3>
                        <p class="text-military-accent font-tech">3D модель шлема виртуальной реальности</p>
                    </div>
                </div>

                <!-- Форма входа -->
                <div class="lg:w-1/2 w-full">
                    <main id="content" class="bg-military-dark p-8 rounded-lg tech-border">
                        <div id="login-container">
                            <!-- Заголовок -->
                            <div class="text-center mb-8">
                                <h1 class="text-3xl font-bold text-white mb-2">ДОСТУП К <span class="access-badge">IT КМБ</span></h1>
                                <p class="text-military-accent font-tech">Аутентификация в системе подготовки</p>
                                <div class="flex justify-center mt-4">
                                    <div class="w-16 h-1 bg-unity-primary"></div>
                                    <div class="w-16 h-1 bg-yandex-red mx-2"></div>
                                    <div class="w-16 h-1 bg-military-accent"></div>
                                </div>
                            </div>

                            <!-- Форма входа -->
                            <form id="login-form" action="{{ route('login') }}" method="POST">
                                @csrf

                                @if ($errors->any())
                                    <div class="bg-red-900 bg-opacity-50 text-red-200 p-4 rounded mb-6">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="space-y-4">
                                    <div>
                                        <label for="email" class="block text-sm uppercase tracking-wider text-gray-400 mb-1">Идентификатор</label>
                                        <input type="email" name="email" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder="Ваш email" required autofocus value="{{ old('email') }}">
                                    </div>

                                    <div>
                                        <label for="password" class="block text-sm uppercase tracking-wider text-gray-400 mb-1">Код доступа</label>
                                        <input type="password" name="password" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder="Ваш пароль" required>
                                    </div>

                                    <div class="flex items-center justify-between pt-2">
                                        <div class="flex items-center">
                                            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-military-accent focus:ring-unity-primary border-gray-600 rounded bg-gray-800">
                                            <label for="remember" class="ml-2 block text-sm text-gray-400">Запомнить меня</label>
                                        </div>
                                        
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-sm text-unity-primary hover:underline">Забыли пароль?</a>
                                        @endif
                                    </div>

                                    <div class="pt-4">
                                        <button type="submit" class="btn-military w-full px-4 py-3 rounded-lg text-white font-bold tracking-wider focus:outline-none transition-all duration-300">
                                            АВТОРИЗОВАТЬСЯ
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="text-center mt-6">
                                <p class="text-gray-400">Нет доступа? <a href="{{ route('register') }}" class="text-unity-primary hover:underline font-semibold">Запросить учетную запись</a></p>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <!-- Подключение подвала -->
        @include('footer')
    </div>

</body>

</html>