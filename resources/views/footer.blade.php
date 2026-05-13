<footer class="bg-gradient-to-r from-gray-900 to-indigo-900 py-12 relative overflow-hidden">
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-0 left-0 w-full h-full bg-grid-pattern"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-circuit-pattern opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            
            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-indigo-900/30 to-gray-800/30 border border-indigo-400/20 hover:border-indigo-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-indigo-400">О проекте</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('first.steps') }}" class="footer-link"><span class="dot bg-blue-400"></span>Первые шаги в VR</a></li>
                    <li><a href="{{ route('team') }}" class="footer-link"><span class="dot bg-blue-400"></span>Наша команда</a></li>
                    <li><a href="{{ route('mission') }}" class="footer-link"><span class="dot bg-blue-400"></span>Миссия проекта</a></li>
                </ul>
            </div>

            <div class="transform-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-purple-900/30 to-gray-800/30 border border-purple-400/20 hover:border-purple-400/50 transition-all duration-500 hover:-translate-y-1">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-indigo-400">Навигация</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('curs') }}" class="footer-link"><span class="diamond bg-purple-500"></span>Скачать IT_КМБ</a></li>
                    <li><a href="{{ route('comments.index') }}" class="footer-link"><span class="diamond bg-purple-500"></span>Сообщество</a></li>
                    <li><a href="{{ route('register') }}" class="footer-link"><span class="diamond bg-purple-500"></span>Для преподавателей</a></li>
                </ul>
            </div>

            <div class="code-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-blue-900/30 to-gray-800/30 border border-blue-400/20 hover:border-blue-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-400">Обучение и развитие</h4>
                <ul class="space-y-3 font-mono">
                    <li class="footer-static"><span class="text-blue-400 mr-2">></span>VR-инструктаж</li>
                    <li class="footer-static"><span class="text-blue-400 mr-2">></span>Сборка и разборка автомата</li>
                    <li class="footer-static"><span class="text-blue-400 mr-2">></span>Тренировка реакции</li>
                    <li class="footer-static"><span class="text-blue-400 mr-2">></span>Управление дроном</li>
                </ul>
            </div>

            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-teal-900/30 to-gray-800/30 border border-teal-400/20 hover:border-teal-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-cyan-400">Свяжитесь с нами</h4>
                <div class="space-y-4">
                    <p class="contact-line">📧 vtar4a@gmail.com</p>
                    <p class="contact-line">📞 +7 (978) 346-19-85</p>
                    <p class="contact-line">📍 ул. Экскурсионная, д. 5, Севастополь</p>
                </div>
            </div>
        </div>

        <div class="border-t border-purple-900 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="h-10 w-10 bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                            <span class="text-white font-bold">VR</span>
                        </div>
                        <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">IT_КМБ</span>
                    </div>
                    <p class="text-sm text-purple-300 mt-2">&copy; 2025 Все права защищены. Курс молодого VR-бойца</p>
                </div>

                <div class="social-row">
                    <a href="https://vk.com/21kenev" target="_blank" class="social-icon bg-gradient-to-br from-blue-600 to-blue-800">VK</a>
                    <a href="https://t.me/KENEV21" target="_blank" class="social-icon bg-gradient-to-br from-blue-400 to-blue-600">TG</a>
                    <a href="#" target="_blank" class="social-icon bg-gradient-to-br from-orange-500 to-yellow-500">OK</a>
                    <a href="#" target="_blank" class="social-icon bg-gradient-to-br from-red-500 to-red-700">DZ</a>
                    <a href="#" target="_blank" class="social-icon bg-gradient-to-br from-purple-600 to-red-600">RT</a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 animate-pulse"></div>
</footer>

<style>
    .footer-link {
        display: flex;
        align-items: center;
        color: #d1d5db;
        transition: 0.3s;
    }

    .footer-link:hover {
        color: white;
    }

    .dot {
        width: 8px;
        height: 8px;
        border-radius: 999px;
        margin-right: 8px;
    }

    .diamond {
        width: 12px;
        height: 12px;
        transform: rotate(45deg);
        margin-right: 10px;
        display: inline-block;
        transition: 0.3s;
    }

    .footer-link:hover .diamond {
        transform: rotate(0deg);
    }

    .footer-static {
        display: flex;
        align-items: center;
        color: #d1d5db;
    }

    .contact-line {
        color: #d1d5db;
        line-height: 1.5;
    }

    .hologram-card {
        position: relative;
        overflow: hidden;
    }

    .hologram-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(to bottom right, rgba(99, 102, 241, 0.1), rgba(99, 102, 241, 0.3), transparent);
        transform: rotate(30deg);
        animation: hologram 6s infinite linear;
        z-index: -1;
    }

    @keyframes hologram {
        0% { transform: rotate(30deg) translateX(-30%) translateY(-30%); }
        50% { transform: rotate(30deg) translateX(30%) translateY(30%); }
        100% { transform: rotate(30deg) translateX(-30%) translateY(-30%); }
    }

    .transform-card:hover {
        box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.4);
    }

    .code-card {
        position: relative;
        overflow: hidden;
    }

    .code-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background:
            linear-gradient(135deg, transparent 95%, rgba(56, 182, 255, 0.3) 95%),
            linear-gradient(225deg, transparent 95%, rgba(56, 182, 255, 0.3) 95%);
        background-size: 20px 20px;
        opacity: 0.3;
        z-index: -1;
    }

    .bg-grid-pattern {
        background-image:
            linear-gradient(to right, rgba(99, 102, 241, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(99, 102, 241, 0.1) 1px, transparent 1px);
        background-size: 20px 20px;
    }

    .bg-circuit-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
    }

    .social-row {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .social-icon {
        height: 48px;
        width: 48px;
        border-radius: 999px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        transition: 0.3s;
        text-decoration: none;
    }

    .social-icon:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }

    @media (max-width: 768px) {
        footer {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        footer .grid {
            grid-template-columns: 1fr !important;
            gap: 1.25rem;
        }

        footer .hologram-card,
        footer .transform-card,
        footer .code-card {
            padding: 1.25rem;
        }

        footer h4 {
            font-size: 1.1rem;
        }

        .social-icon {
            width: 44px;
            height: 44px;
            font-size: 0.85rem;
        }

        .social-row {
            gap: 0.75rem;
        }
    }
</style>