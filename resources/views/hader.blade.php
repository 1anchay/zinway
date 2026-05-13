<header class="header-container">
    <div class="matrix-rain"></div>
    <div class="scan-line"></div>
    <div class="hud-element hud-corner hud-top-left"></div>
    <div class="hud-element hud-corner hud-top-right"></div>

    <div class="header-inner max-w-7xl mx-auto px-6 h-full flex items-center justify-between">
        <!-- Логотип -->
        <a href="{{ route('main') }}" class="flex items-center space-x-3">
            <span class="logo-text">IT_КМБ</span>
            <div class="hidden sm:flex space-x-1">
                <div class="h-2 w-2 rounded-full bg-green-500 animate-pulse" title="Система активна"></div>
                <div class="h-2 w-2 rounded-full bg-blue-500 animate-pulse" title="VR подключен"></div>
                <div class="h-2 w-2 rounded-full bg-orange-500" title="Unity"></div>
            </div>
        </a>

        <!-- Навигация ПК -->
        <nav class="desktop-nav hidden lg:flex items-center space-x-1">
            <a href="{{ route('main') }}" class="nav-link">Главная</a>
            <a href="{{ route('curs') }}" class="nav-link">Курсы</a>
            <a href="{{ route('comments.index') }}" class="nav-link">Сообщество</a>
            <a href="{{ route('register') }}" class="nav-link">Для преподавателей</a>
            <a href="#" class="nav-link"><span style="color: var(--unity-orange); font-weight: bold;">UNITY</span> VR</a>
        </nav>

        <!-- Авторизация ПК -->
        <div class="desktop-auth hidden lg:flex items-center space-x-4">
            @guest
                <a href="{{ route('login') }}" class="login-btn">Войти</a>
                <a href="{{ route('register') }}" class="register-btn">Регистрация</a>
            @else
                <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3">
                    <div class="profile-img-container">
                        <img src="{{ optional(Auth::user())->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://via.placeholder.com/40' }}"
                             alt="Profile" class="profile-img">
                    </div>
                    <span class="text-sm font-medium" style="color: var(--hud-blue);">
                        USER: {{ Auth::user()->name }}
                    </span>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Выйти</button>
                </form>
            @endguest
        </div>

        <!-- Бургер -->
        <button id="mobile-menu-btn" class="burger-btn lg:hidden" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="mobile-menu lg:hidden">
        <a href="{{ route('main') }}" class="mobile-link">Главная</a>
        <a href="{{ route('curs') }}" class="mobile-link">Курсы</a>
        <a href="{{ route('comments.index') }}" class="mobile-link">Сообщество</a>
        <a href="{{ route('register') }}" class="mobile-link">Для преподавателей</a>
        <a href="#" class="mobile-link"><span style="color: var(--unity-orange); font-weight: bold;">UNITY</span> VR</a>

        <div class="mobile-auth">
            @guest
                <a href="{{ route('login') }}" class="login-btn">Войти</a>
                <a href="{{ route('register') }}" class="register-btn">Регистрация</a>
            @else
                <a href="{{ route('profile.edit') }}" class="mobile-profile">
                    <div class="profile-img-container">
                        <img src="{{ optional(Auth::user())->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://via.placeholder.com/40' }}"
                             alt="Profile" class="profile-img">
                    </div>
                    <span>USER: {{ Auth::user()->name }}</span>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Выйти</button>
                </form>
            @endguest
        </div>
    </div>
</header>

<style>
    :root {
        --hud-green: #00ff88;
        --hud-blue: #00a2ff;
        --hud-red: #ff2d75;
        --unity-orange: #f05a22;
        --neon-blue: #00f0ff;
        --military-gradient: linear-gradient(135deg, var(--hud-green), var(--hud-blue));
    }

    .header-container {
        position: relative;
        background:
            radial-gradient(circle at 20% 30%, rgba(0, 160, 255, 0.06), transparent 40%),
            radial-gradient(circle at 80% 70%, rgba(0, 255, 136, 0.06), transparent 40%),
            linear-gradient(to bottom, rgba(10, 10, 10, 0.98), rgba(20, 20, 20, 0.98));
        box-shadow: 0 0 20px rgba(0, 240, 255, 0.12);
        min-height: 90px;
        z-index: 100;
        border-bottom: 1px solid rgba(0, 240, 255, 0.2);
        overflow: visible;
        font-family: 'Rajdhani', sans-serif;
    }

    .matrix-rain {
        position: absolute;
        inset: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><text x="0" y="15" font-family="monospace" font-size="14" fill="rgba(0,240,255,0.04)">01</text></svg>');
        opacity: 0.45;
        pointer-events: none;
    }

    .scan-line {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(to right, transparent, var(--neon-blue), transparent);
        box-shadow: 0 0 10px var(--neon-blue);
        animation: scanMove 5s linear infinite;
        pointer-events: none;
    }

    @keyframes scanMove {
        0% { top: 0; }
        100% { top: 100%; }
    }

    .hud-element {
        position: absolute;
        pointer-events: none;
    }

    .hud-corner {
        width: 30px;
        height: 30px;
        border: 2px solid var(--neon-blue);
        box-shadow: 0 0 10px rgba(0, 240, 255, 0.25);
    }

    .hud-top-left {
        top: 10px;
        left: 10px;
        border-right: none;
        border-bottom: none;
    }

    .hud-top-right {
        top: 10px;
        right: 10px;
        border-left: none;
        border-bottom: none;
    }

    .header-inner {
        position: relative;
        z-index: 2;
        min-height: 90px;
    }

    .logo-text {
        font-size: 28px;
        font-weight: 700;
        font-family: 'Orbitron', sans-serif;
        color: var(--hud-green);
        text-shadow: 0 0 10px rgba(0, 255, 136, 0.5);
        position: relative;
        padding-right: 15px;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .logo-text::after {
        content: ">";
        position: absolute;
        right: 0;
        color: var(--unity-orange);
        animation: blink 1s step-end infinite;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }

    .nav-link {
        position: relative;
        color: #c0c0c0;
        font-size: 16px;
        font-weight: 500;
        padding: 10px 16px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
    }

    .nav-link::before {
        content: "";
        position: absolute;
        bottom: 5px;
        left: 16px;
        width: 0;
        height: 2px;
        background: var(--military-gradient);
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: white;
        text-shadow: 0 0 10px rgba(0, 240, 255, 0.7);
    }

    .nav-link:hover::before {
        width: calc(100% - 32px);
    }

    .login-btn,
    .register-btn,
    .logout-btn {
        padding: 10px 22px;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 700;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .login-btn {
        color: var(--hud-blue);
        border: 1px solid rgba(0, 240, 255, 0.3);
        background: rgba(0, 162, 255, 0.1);
    }

    .login-btn:hover {
        background: rgba(0, 162, 255, 0.2);
        box-shadow: 0 0 15px rgba(0, 162, 255, 0.3);
        color: white;
    }

    .register-btn {
        background: linear-gradient(135deg, var(--hud-green), var(--hud-blue));
        color: black;
        border: 1px solid var(--hud-green);
        box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
    }

    .register-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 30px rgba(0, 255, 136, 0.5);
        color: black;
    }

    .logout-btn {
        color: var(--hud-red);
        border: 1px solid rgba(255, 45, 117, 0.35);
        background: rgba(255, 45, 117, 0.08);
        cursor: pointer;
    }

    .logout-btn:hover {
        color: white;
        background: rgba(255, 45, 117, 0.18);
    }

    .profile-img-container {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 240, 255, 0.3);
        border: 1px solid rgba(0, 240, 255, 0.4);
    }

    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .burger-btn {
        width: 46px;
        height: 42px;
        border: 1px solid rgba(0, 240, 255, 0.35);
        background: rgba(0, 162, 255, 0.08);
        border-radius: 4px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 6px;
        padding: 0 10px;
        cursor: pointer;
    }

    .burger-btn span {
        display: block;
        height: 2px;
        background: var(--neon-blue);
        box-shadow: 0 0 8px rgba(0, 240, 255, 0.7);
        transition: 0.3s;
    }

    .burger-btn.active span:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .burger-btn.active span:nth-child(2) {
        opacity: 0;
    }

    .burger-btn.active span:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    .mobile-menu {
        display: none;
        position: relative;
        z-index: 5;
        background: rgba(8, 12, 16, 0.98);
        border-top: 1px solid rgba(0, 240, 255, 0.2);
        padding: 15px 20px 20px;
    }

    .mobile-menu.open {
        display: block;
    }

    .mobile-link {
        display: block;
        color: #c0c0c0;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 13px 5px;
        border-bottom: 1px solid rgba(0, 240, 255, 0.12);
        text-decoration: none;
        font-weight: 600;
    }

    .mobile-link:hover {
        color: white;
        text-shadow: 0 0 10px rgba(0, 240, 255, 0.7);
    }

    .mobile-auth {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 15px;
    }

    .mobile-profile {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--hud-blue);
        text-decoration: none;
        margin-bottom: 8px;
    }

    @media (max-width: 1024px) {
        .header-container {
            min-height: 76px;
        }

        .header-inner {
            min-height: 76px;
        }

        .logo-text {
            font-size: 23px;
        }
    }

    @media (max-width: 480px) {
        .logo-text {
            font-size: 19px;
        }

        .header-inner {
            padding-left: 16px;
            padding-right: 16px;
        }

        .login-btn,
        .register-btn,
        .logout-btn {
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', function () {
                btn.classList.toggle('active');
                menu.classList.toggle('open');
            });
        }
    });
</script>