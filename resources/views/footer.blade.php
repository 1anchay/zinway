<!-- Футер -->
<footer class="bg-gradient-to-r from-gray-900 to-indigo-900 py-12 relative overflow-hidden">
    <!-- Анимированный фон с цифровыми элементами -->
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-0 left-0 w-full h-full bg-grid-pattern"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-circuit-pattern opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            <!-- Блок "О проекте" с эффектом голограммы -->
            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-indigo-900/30 to-gray-800/30 border border-indigo-400/20 hover:border-indigo-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-indigo-400">О проекте</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('first.steps') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Первые шаги в IT
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Наша команда
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mission') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 group-hover:animate-pulse"></span>
                            Миссия и ценности
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Цифровые экскурсии" с 3D эффектом -->
            <div class="transform-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-purple-900/30 to-gray-800/30 border border-purple-400/20 hover:border-purple-400/50 transition-all duration-500 hover:-translate-y-1">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-indigo-400">Навигация</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('curs') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            Скачать IT_КМБ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comments.index') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            Сообщество
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="inline-block w-3 h-3 bg-purple-500 rotate-45 mr-2 transition-transform group-hover:rotate-0"></span>
                            Для преподователей
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Обучение и развитие" с эффектом кода -->
            <div class="code-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-blue-900/30 to-gray-800/30 border border-blue-400/20 hover:border-blue-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-400">Обучение и развитие</h4>
                <ul class="space-y-3 font-mono">
                    <li>
                        <a href="for-organizers.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Обратная связь
                        </a>
                    </li>
                    <li>
                        <a href="partnership.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Партнёрство в IT
                        </a>
                    </li>
                    <li>
                        <a href="training.html" class="flex items-center group text-gray-300 hover:text-white transition-colors">
                            <span class="text-blue-400 mr-2">></span>
                            Огонь
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок "Контакты" с эффектом голограммы -->
            <div class="hologram-card p-6 rounded-xl backdrop-blur-sm bg-gradient-to-br from-teal-900/30 to-gray-800/30 border border-teal-400/20 hover:border-teal-400/50 transition-all duration-500">
                <h4 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-cyan-400">Свяжитесь с нами</h4>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3.5 8.67v8.58a3 3 0 003 3h15v-9.67l-9 4.29-9-4.3zm0-2.67l9 4.29 9-4.29V5.08a3 3 0 00-3-3h-15a3 3 0 00-3 3v.92z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">vtar4a@gmail.com</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"/>
                                <path d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 00-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 00.043-1.391L6.859 3.513a1 1 0 00-1.391-.087l-2.17 1.861a1 1 0 00-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 00.648-.291l1.86-2.171a1 1 0 00-.086-1.391l-4.064-3.696z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">+7 (978) 346-19-85</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 text-teal-400 mr-3 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/>
                            </svg>
                        </div>
                        <p class="text-gray-300">ул. Экскурсионная, д. 5, Севастополь</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижняя часть футера с соцсетями -->
<div class="border-t border-purple-900 pt-8">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start">
                <div class="h-10 w-10 bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400 font-russo">IT_КМБ</span>
            </div>
            <p class="text-sm text-purple-300 mt-2">&copy; 2025 Все права защищены. Курс молодого VR-бойца</p>
        </div>

        <div class="flex space-x-4">
    <!-- ВКонтакте -->
    <a href="https://vk.com/21kenev" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.65 12.18h-.05c-.3.05-.5.2-.6.45-.1.25-.05.55.1.75.15.2.4.3.65.3.25 0 .5-.1.65-.3.15-.2.2-.5.1-.75-.1-.25-.3-.4-.6-.45zm-1.45-1.7c-.2-.25-.5-.4-.85-.4-.35 0-.65.15-.85.4-.2.25-.25.55-.15.85.1.3.35.5.65.6.3.1.65.05.9-.15.25-.2.4-.5.4-.85 0-.15-.05-.3-.1-.45zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.2 14.5h-1.5c-.4 0-.75-.15-1-.4-.25-.25-.4-.6-.4-1v-3.5c0-.4.15-.75.4-1 .25-.25.6-.4 1-.4h1.5c.4 0 .75.15 1 .4.25.25.4.6.4 1v3.5c0 .4-.15.75-.4 1-.25.25-.6.4-1 .4zm-3.5-6.5c-.8 0-1.5.3-2.05.8-.55.5-.85 1.2-.85 2v2.7c0 .8-.7 1.5-1.5 1.5H6.8c-.8 0-1.5-.7-1.5-1.5v-7.4c0-.8.7-1.5 1.5-1.5h1.5c.8 0 1.5.7 1.5 1.5v.5c.35-.2.75-.3 1.15-.3.4 0 .8.1 1.15.3v-.5c0-.8.7-1.5 1.5-1.5h1.5c.8 0 1.5.7 1.5 1.5v7.4c0 .8-.7 1.5-1.5 1.5h-1.5c-.8 0-1.5-.7-1.5-1.5v-2.7c0-.3-.1-.55-.3-.75-.2-.2-.45-.3-.75-.3z"/>
        </svg>
    </a>

    <!-- Телеграм -->
    <a href="https://t.me/KENEV21" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center hover:shadow-lg hover:shadow-blue-400/30 transition-all duration-300 hover:-translate-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8l-1.87 8.65c-.1.5-.4.6-.8.4l-3.1-2.3-1.5 1.4c-.2.2-.3.3-.6.3l.2-3.1 5.7-5.2c.2-.2 0-.3-.3-.1l-7.1 4.5-3-1c-.5-.1-.5-.5.1-.7l11.6-4.5c.2-.1.5 0 .4.4z"/>
        </svg>
    </a>

    <!-- Одноклассники -->
    <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 hover:-translate-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-3.5-7.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm7 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm-3.5 3c-1.93 0-3.5-1.57-3.5-3.5S10.07 8 12 8s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
        </svg>
    </a>

    <!-- Яндекс.Дзен -->
    <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center hover:shadow-lg hover:shadow-red-500/30 transition-all duration-300 hover:-translate-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.5-12.5h-9c-.83 0-1.5.67-1.5 1.5v5c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5v-5c0-.83-.67-1.5-1.5-1.5zm-9 1.5h9v5h-9v-5z"/>
        </svg>
    </a>

    <!-- RuTube -->
    <a href="#" target="_blank" class="social-icon h-12 w-12 rounded-full bg-gradient-to-br from-purple-600 to-red-600 flex items-center justify-center hover:shadow-lg hover:shadow-purple-500/30 transition-all duration-300 hover:-translate-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
        </svg>
    </a>
</div>

    <!-- Анимированные элементы -->
    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 animate-pulse"></div>
</footer>

<style>
    /* Дополнительные стили для футера */
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
        background: linear-gradient(
            to bottom right,
            rgba(99, 102, 241, 0.1),
            rgba(99, 102, 241, 0.3),
            transparent
        );
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
    }
    
    .code-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
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
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    
    .social-icon {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    
    .social-icon:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>