<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль | Курс молодого бойца VR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

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
            --panel-bg: rgba(23, 26, 33, 0.88);
            --panel-border: rgba(102, 192, 244, 0.2);
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0e141b 0%, #1a2a3a 100%);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .tech-font {
            font-family: 'Rajdhani', sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .profile-page {
            position: relative;
            z-index: 1;
            padding: 2rem 1.5rem 3rem;
        }

        .profile-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .profile-title {
            font-size: 2.2rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--accent);
            text-shadow: 0 0 10px rgba(102, 192, 244, 0.3);
        }

        .profile-title:after {
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
        }

        .profile-card {
            background: var(--panel-bg);
            border-radius: 10px;
            border: 1px solid var(--panel-border);
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.35);
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
            color: #0e141b;
            font-weight: bold;
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
            font-weight: 600;
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
            background: rgba(23, 26, 33, 0.7);
            color: var(--text-primary);
        }

        .input-field:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(102, 192, 244, 0.2);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.8rem;
            border-radius: 4px;
            font-weight: 700;
            cursor: pointer;
            border: none;
            font-family: 'Rajdhani', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--tech-blue), var(--accent-dark));
            color: white;
            width: 100%;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--accent);
            color: var(--accent);
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            margin: 1.5rem 0;
            opacity: 0.3;
        }

        .progress-bar {
            width: 100%;
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
            font-weight: 600;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.3rem 0.8rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
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

        .achievements {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .achievement {
            background: rgba(23, 26, 33, 0.6);
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            border: 1px solid rgba(102, 192, 244, 0.1);
            transition: 0.3s;
        }

        .achievement:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(102, 192, 244, 0.2);
        }

        .achievement img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 0.5rem;
        }

        .achievement-name {
            font-size: 0.85rem;
            color: var(--text-secondary);
            font-weight: 600;
        }

        .ai-assistant {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            border: 2px solid var(--accent);
            z-index: 100;
        }

        .ai-assistant img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .tech-bg {
            position: fixed;
            inset: 0;
            background: url('https://i.imgur.com/JYlZf8r.png') center/cover no-repeat;
            opacity: 0.03;
            z-index: 0;
            pointer-events: none;
        }

        @media (max-width: 900px) {
            .profile-section {
                grid-template-columns: 1fr;
            }

            .profile-page {
                padding: 1.5rem 1rem 2rem;
            }

            .profile-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 600px) {
            .profile-card {
                padding: 1.25rem;
            }

            .avatar {
                width: 120px;
                height: 120px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .achievements {
                grid-template-columns: 1fr;
            }

            .achievement {
                display: flex;
                align-items: center;
                gap: 1rem;
                text-align: left;
            }

            .achievement img {
                width: 58px;
                height: 58px;
                margin-bottom: 0;
            }

            .ai-assistant {
                width: 58px;
                height: 58px;
                right: 18px;
                bottom: 18px;
            }

            .ai-assistant img {
                width: 42px;
                height: 42px;
            }
        }
    </style>
</head>

<body>
    @include('hader')

    <div class="tech-bg"></div>

    <main class="profile-page">
        <div class="profile-container">
            <h1 class="profile-title tech-font">Профиль обучающегося VR-тренажёра</h1>

            <div class="profile-section">
                <div class="profile-card">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="avatar-section">
                            <div class="avatar-wrapper">
                                @if(Auth::user()->avatar)
                                    <img id="current-avatar" class="avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                                @else
                                    <img id="current-avatar" class="avatar" src="{{ asset('images/default-avatar.png') }}" alt="Default Avatar" onerror="this.src='https://via.placeholder.com/150'">
                                @endif

                                <div class="avatar-edit" onclick="document.getElementById('avatar').click()">✎</div>
                                <input type="file" id="avatar" name="avatar" class="avatar-upload" accept="image/*">
                            </div>

                            <div class="progress-bar">
                                <div class="progress-fill"></div>
                            </div>
                            <div class="form-label">Профиль завершён на 70%</div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="form-label">Имя обучающегося</label>
                            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="input-field" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Электронная почта</label>
                            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="input-field" required>
                        </div>

                        @if(Auth::user()->email_verified_at == null)
                            <div style="display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;">
                                <span class="status-badge status-badge-warning">Не подтверждён</span>
                                <button type="button" onclick="sendVerificationEmail()" class="btn btn-outline">Подтвердить</button>
                            </div>
                        @endif

                        <div class="divider"></div>

                        <button type="submit" class="btn btn-primary tech-font">
                            Обновить профиль
                        </button>
                    </form>
                </div>

                <div class="profile-card">
                    <h3 class="tech-font" style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--accent);">
                        Статистика подготовки
                    </h3>

                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-label">Уровень подготовки</div>
                            <div class="info-value">15</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 65%;"></div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Дата регистрации</div>
                            <div class="info-value">{{ Auth::user()->created_at->format('d.m.Y') }}</div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Статус обучения</div>
                            <div class="info-value">
                                @if(Auth::user()->email_verified_at)
                                    <span class="status-badge status-badge-success">Подтверждён</span>
                                @else
                                    <span class="status-badge status-badge-warning">Базовый</span>
                                @endif
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Активность в тренажёре</div>
                            <div class="info-value">Высокая</div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <h4 class="form-label">Учебные достижения</h4>

                    <div class="achievements">
                        <div class="achievement">
                            <img src="{{ asset('images/achievements/novobranec.png') }}" alt="Новобранец" onerror="this.src='https://via.placeholder.com/70'">
                            <div class="achievement-name">Новобранец</div>
                        </div>

                        <div class="achievement">
                            <img src="{{ asset('images/achievements/aktivny-kursant.png') }}" alt="Активный курсант" onerror="this.src='https://via.placeholder.com/70'">
                            <div class="achievement-name">Активный курсант</div>
                        </div>

                        <div class="achievement">
                            <img src="{{ asset('images/achievements/vr-praktika.png') }}" alt="VR-практика" onerror="this.src='https://via.placeholder.com/70'">
                            <div class="achievement-name">VR-практика</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="ai-assistant" onclick="showAIModal()">
        <img src="{{ asset('images/achievements/vr-praktika.png') }}" alt="VR Instructor" onerror="this.src='https://via.placeholder.com/50'">
    </div>

    @include('footer')

    <script>
        const avatarInput = document.getElementById('avatar');

        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        document.getElementById('current-avatar').src = event.target.result;
                    };

                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        }

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
            alert('Привет! Я VR-инструктор. Могу помочь с прохождением курса молодого бойца.');
        }
    </script>
</body>
</html>