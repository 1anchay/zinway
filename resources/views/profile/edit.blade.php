<!DOCTYPE html>
<html lang="ru">

@include('hader') <!-- Подключение header -->

<head>
    <meta charset="UTF-8">
    <title>Профиль | ТехноЛаб</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])
    
    <!-- Подключение шрифтов -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Heroicons -->
    <script src="https://unpkg.com/@heroicons/react@1.0.6/outline.js" data-manual></script>
    
    <style>
        :root {
            --primary: #171a21;
            --secondary: #1b2838;
            --accent: #66c0f4;
            --accent-dark: #4b9cd3;
            --text-primary: #e6e6e6;
            --text-secondary: #b8b6b4;
            --tech-blue: #00adee;
            --tech-orange: #f6a821;
            --panel-bg: rgba(23, 26, 33, 0.8);
            --panel-border: rgba(102, 192, 244, 0.2);
        }
        
        body {
            background: linear-gradient(135deg, #0e141b 0%, #1a2a3a 100%);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            min-height: 100vh;
        }

        .tech-font {
            font-family: 'Rajdhani', sans-serif;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--accent);
            text-shadow: 0 0 10px rgba(102, 192, 244, 0.3);
            position: relative;
            display: inline-block;
            width: 100%;
        }

        h1:after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: var(--accent);
            margin: 0.5rem auto 0;
            border-radius: 3px;
        }

        .profile-section {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .profile-card {
            background: var(--panel-bg);
            border-radius: 8px;
            border: 1px solid var(--panel-border);
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            position: relative;
            overflow: hidden;
        }

        .profile-card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--tech-blue), var(--tech-orange));
        }

        .avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .avatar-wrapper {
            position: relative;
            margin-bottom: 1.5rem;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(135deg, var(--tech-blue), var(--tech-orange));
            box-shadow: 0 0 15px rgba(102, 192, 244, 0.4);
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
            display: block;
            transition: all 0.3s ease;
        }

        .avatar-wrapper:hover .avatar {
            transform: rotate(5deg) scale(1.05);
        }

        .avatar-edit {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: var(--accent);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px solid var(--primary);
            transition: all 0.3s ease;
            z-index: 2;
        }

        .avatar-edit:hover {
            transform: scale(1.1) rotate(15deg);
            background: var(--accent-dark);
        }

        .avatar-upload {
            display: none;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input-field {
            width: 100%;
            padding: 0.8rem 1.2rem;
            border: 1px solid rgba(102, 192, 244, 0.3);
            border-radius: 4px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(23, 26, 33, 0.7);
            color: var(--text-primary);
        }

        .input-field:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(102, 192, 244, 0.2);
            background: rgba(23, 26, 33, 0.9);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.8rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-family: 'Rajdhani', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn:after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: all 0.5s ease;
        }

        .btn:hover:after {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--tech-blue), var(--accent-dark));
            color: white;
            box-shadow: 0 2px 10px rgba(102, 192, 244, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--accent-dark), var(--tech-blue));
            transform: translateY(-2px);
        }

        .btn-accent {
            background: var(--tech-orange);
            color: var(--primary);
        }

        .btn-accent:hover {
            background: #f7b239;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--accent);
            color: var(--accent);
        }

        .btn-outline:hover {
            background: rgba(102, 192, 244, 0.1);
        }

        .icon {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.5rem;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            margin: 1.5rem 0;
            opacity: 0.3;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .info-item {
            background: rgba(23, 26, 33, 0.6);
            border: 1px solid rgba(102, 192, 244, 0.1);
            border-radius: 6px;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        .info-item:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
        }

        .info-label {
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-value {
            font-size: 1.1rem;
            font-weight: 500;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.3rem 0.8rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-badge-warning {
            background: rgba(246, 168, 33, 0.2);
            color: var(--tech-orange);
            border: 1px solid var(--tech-orange);
        }

        .status-badge-success {
            background: rgba(0, 173, 238, 0.2);
            color: var(--tech-blue);
            border: 1px solid var(--tech-blue);
        }

        .ai-assistant {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 80px;
            height: 80px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            border: 2px solid var(--accent);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .ai-assistant:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 0 20px rgba(102, 192, 244, 0.6);
        }

        .ai-assistant img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .tech-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://i.imgur.com/JYlZf8r.png') center/cover no-repeat;
            opacity: 0.03;
            z-index: 0;
            pointer-events: none;
        }

        .robot-illustration {
            position: absolute;
            right: -50px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.7;
            z-index: -1;
        }

        .robot-illustration img {
            width: 200px;
            height: auto;
        }

        .progress-bar {
            height: 6px;
            background: rgba(102, 192, 244, 0.2);
            border-radius: 3px;
            margin-top: 1rem;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--tech-blue), var(--tech-orange));
            width: 70%;
            border-radius: 3px;
            transition: width 0.5s ease;
        }

        .achievements {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .achievement {
            background: rgba(23, 26, 33, 0.6);
            border-radius: 6px;
            padding: 0.8rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(102, 192, 244, 0.1);
        }

        .achievement:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(102, 192, 244, 0.2);
        }

        .achievement img {
            width: 50px;
            height: 50px;
            margin-bottom: 0.5rem;
        }

        .achievement-name {
            font-size: 0.7rem;
            color: var(--text-secondary);
        }
    </style>
</head>

<body>
    <div class="tech-bg"></div>
    
    <div class="container">
        <h1 class="tech-font">ТехноПрофиль</h1>
        
        <div class="profile-section">
            <div class="profile-card">
                <div class="avatar-section">
                    <div class="avatar-wrapper">
                        @if(Auth::user()->avatar)
                            <img id="current-avatar" class="avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                        @else
                            <img id="current-avatar" class="avatar" src="https://i.imgur.com/JYlZf8r.png" alt="Default Avatar">
                        @endif
                        <div class="avatar-edit" onclick="document.getElementById('avatar').click()">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <input type="file" id="avatar" name="avatar" class="avatar-upload" accept="image/*">
                    </div>
                    
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                    <div class="form-label">Профиль завершен на 70%</div>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Имя пользователя</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="input-field" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Электронная почта</label>
                    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="input-field" required>
                </div>

                @if(Auth::user()->email_verified_at == null)
                    <div class="flex items-center mt-4">
                        <span class="status-badge status-badge-warning">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Не подтвержден
                        </span>
                        <button type="button" onclick="sendVerificationEmail()" class="btn btn-outline ml-auto">
                            Подтвердить
                        </button>
                    </div>
                @endif

                <div class="divider"></div>

                <button type="submit" class="btn btn-primary w-full tech-font">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Обновить профиль
                </button>
            </div>

            <div class="profile-card" style="position: relative;">
                <div class="robot-illustration">
                    <img src="https://i.imgur.com/7QZ4m3x.png" alt="Robot Assistant">
                </div>
                
                <h3 class="tech-font" style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--accent);">Статистика профиля</h3>
                
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Уровень аккаунта</div>
                        <div class="info-value">15</div>
                        <div class="progress-bar" style="margin-top: 0.5rem;">
                            <div class="progress-fill" style="width: 65%;"></div>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Дата регистрации</div>
                        <div class="info-value">{{ Auth::user()->created_at->format('d.m.Y') }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Статус</div>
                        <div class="info-value">
                            @if(Auth::user()->email_verified_at)
                                <span class="status-badge status-badge-success">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Премиум
                                </span>
                            @else
                                <span class="status-badge status-badge-warning">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Базовый
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Активность</div>
                        <div class="info-value">Высокая</div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <h4 class="form-label" style="margin-bottom: 1rem;">Достижения</h4>
                <div class="achievements">
                    <div class="achievement">
                        <img src="https://i.imgur.com/5X5w0Q8.png" alt="Новичок">
                        <div class="achievement-name">Новичок</div>
                    </div>
                    <div class="achievement">
                        <img src="https://i.imgur.com/8Q5ZJ9G.png" alt="Активный">
                        <div class="achievement-name">Активный</div>
                    </div>
                    <div class="achievement">
                        <img src="https://i.imgur.com/3Q5ZJ9G.png" alt="Технарь">
                        <div class="achievement-name">Технарь</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ai-assistant" onclick="showAIModal()">
        <img src="https://i.imgur.com/7QZ4m3x.png" alt="AI Assistant">
    </div>

    @include('footer')

    <script>
        // Обработка изменения аватара
        document.getElementById('avatar').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('current-avatar').src = event.target.result;
                    document.querySelector('.progress-fill').style.width = '85%';
                    document.querySelector('.form-label').textContent = 'Профиль завершен на 85%';
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        function sendVerificationEmail() {
            fetch('{{ route('verification.send') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                }
            }).then(response => {
                if (response.status === 200) {
                    alert('Письмо для подтверждения отправлено на ваш email');
                } else {
                    alert('Ошибка при отправке письма');
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        }

        function showAIModal() {
            alert('Привет! Я ваш AI-ассистент. Чем могу помочь?');
            // Здесь можно реализовать модальное окно с чат-ботом
        }

        // Анимация прогресс-бара
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const targetWidth = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = targetWidth;
                }, 300);
            });
        });
    </script>
</body>
</html>