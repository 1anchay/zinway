<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Example</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-blue-600 text-white text-center py-4">
        <h1 class="text-4xl font-semibold">Welcome to Tailwind CSS</h1>
        <p class="text-lg">A simple, customizable utility-first CSS framework</p>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Tailwind CSS?</h2>
            <p class="text-lg text-gray-600 max-w-prose mx-auto">
                Tailwind CSS is a utility-first CSS framework that allows you to quickly build custom designs without having to leave your HTML.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-blue-600 mb-4">Customizable</h3>
                <p class="text-gray-600">
                    You can easily customize the utility classes in your Tailwind config to fit the needs of your project.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-blue-600 mb-4">Responsive</h3>
                <p class="text-gray-600">
                    Tailwind makes it simple to build responsive designs with its mobile-first approach.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-blue-600 mb-4">Flexible</h3>
                <p class="text-gray-600">
                    With Tailwind's utility classes, you can apply styles directly in your markup, making it incredibly flexible.
                </p>
            </div>
        </section>

        <section class="text-center mt-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">How to Get Started</h2>
            <p class="text-lg text-gray-600 max-w-prose mx-auto">
                To get started, simply install Tailwind CSS via npm or CDN and start using its utility classes in your HTML.
            </p>
            <div class="mt-6">
                <a href="https://tailwindcss.com/docs/installation" class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg hover:bg-blue-700 transition duration-300">Learn More</a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-12">
        <p class="text-lg">Built with <span class="text-red-500">&hearts;</span> by You</p>
    </footer>
</body>
</html>
