<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fikhar Akram</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="min-h-screen bg-gradient-to-br from-pink-300 via-purple-300 to-indigo-400 flex items-center justify-center p-6 overflow-hidden">

    <div class="absolute w-72 h-72 bg-pink-400 rounded-full blur-3xl opacity-30 top-10 left-10"></div>
    <div class="absolute w-72 h-72 bg-purple-400 rounded-full blur-3xl opacity-30 bottom-10 right-10"></div>

    <div class="backdrop-blur-xl bg-white/20 border border-white/30 shadow-2xl rounded-3xl p-8 w-full max-w-md text-center relative z-10">

        <img
            src="https://i.pravatar.cc/200"
            class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg mb-4"
        >

        <h1 class="text-3xl font-bold text-white">
            Fikhar Akram
        </h1>

        <p class="text-white/80 mt-2">
            coding • design • aesthetic
        </p>

        <div class="mt-8 space-y-4">

            <a href="#"
               class="flex items-center justify-center gap-3 bg-white/20 hover:bg-white/30 transition-all duration-300 text-white py-4 rounded-2xl shadow-lg hover:scale-105">

                <i class="fab fa-instagram text-xl"></i>
                <span class="font-semibold">Instagram</span>
            </a>

            <a href="#"
               class="flex items-center justify-center gap-3 bg-white/20 hover:bg-white/30 transition-all duration-300 text-white py-4 rounded-2xl shadow-lg hover:scale-105">

                <i class="fab fa-tiktok text-xl"></i>
                <span class="font-semibold">TikTok</span>
            </a>

            <a href="#"
               class="flex items-center justify-center gap-3 bg-white/20 hover:bg-white/30 transition-all duration-300 text-white py-4 rounded-2xl shadow-lg hover:scale-105">

                <i class="fab fa-github text-xl"></i>
                <span class="font-semibold">GitHub</span>
            </a>

        </div>

        <div class="mt-8 text-white/70 text-sm">
            made with Laravel ❤
        </div>

    </div>

</body>
</html>