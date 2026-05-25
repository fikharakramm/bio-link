<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Rahkiff</title>

    @vite('resources/css/app.css')

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        ::selection {
            background: white;
            color: black;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #09090b;
        }

        ::-webkit-scrollbar-thumb {
            background: #27272a;
            border-radius: 999px;
        }

        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .fade-in {
            animation: fadeIn 1s ease;
        }

        @keyframes floating {

            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-6px);
            }

            100% {
                transform: translateY(0px);
            }

        }

        .floating {
            animation: floating 4s ease-in-out infinite;
        }
    </style>

</head>

<body
    class="min-h-screen bg-zinc-950 flex items-center justify-center p-6 text-white overflow-x-hidden overflow-y-auto relative">

    <!-- Grid Background -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="
            background-image:
            linear-gradient(white 1px, transparent 1px),
            linear-gradient(90deg, white 1px, transparent 1px);
            background-size: 40px 40px;
    ">
    </div>

    <!-- Logo -->
    <div
        class="absolute top-6 left-1/2 -translate-x-1/2 text-zinc-600 text-xs tracking-[0.4em] uppercase">
        RAHKIFF
    </div>

    <!-- Glow -->
    <div
        class="absolute w-[500px] h-[500px] bg-zinc-800 rounded-full blur-3xl opacity-20 -top-40 -left-40">
    </div>

    <div
        class="absolute w-[500px] h-[500px] bg-zinc-700 rounded-full blur-3xl opacity-20 -bottom-40 -right-40">
    </div>

    <!-- Card -->
    <div
        class="fade-in relative z-10 w-full max-w-md mx-auto hover:-translate-y-1 transition-all duration-500 bg-gradient-to-b from-white/[0.07] to-white/[0.03] border border-white/10 backdrop-blur-2xl rounded-[32px] p-6 md:p-8 shadow-[0_0_80px_rgba(255,255,255,0.03)] overflow-hidden">

        <!-- Reflection -->
        <div
            class="absolute inset-0 rounded-[32px] bg-gradient-to-b from-white/[0.08] to-transparent pointer-events-none">
        </div>

        <!-- Profile -->
        <div class="flex flex-col items-center relative z-10">

            <img src="{{ asset('images/profile.jpg') }}"
                class="floating w-28 h-28 md:w-32 md:h-32 rounded-full object-cover object-top border-2 border-white/20 shadow-xl hover:scale-105 transition-all duration-500">

            <h1
                class="mt-6 text-2xl md:text-3xl font-bold tracking-wide text-center leading-tight">
                Fikhar M Akram
            </h1>

            <p
                class="text-zinc-400 mt-3 text-center leading-relaxed text-sm px-2">
                No passion, no vision. Just a guy who loves to create and share.
            </p>

            <!-- Status -->
            <div
                class="mt-5 inline-flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full text-xs md:text-sm text-zinc-400">

                <div
                    class="w-2 h-2 bg-green-400 rounded-full animate-pulse">
                </div>

                Available for Everyone

            </div>

            <!-- Online -->
            <div
                class="mt-4 flex items-center justify-center gap-3 text-zinc-500 text-xs">

                <div class="flex items-center gap-1">

                    <div
                        class="w-2 h-2 rounded-full bg-green-400 animate-pulse">
                    </div>

                    online

                </div>

                <span>•</span>

                <div>
                    based in indonesia
                </div>

            </div>

            <!-- Stack -->
            <div class="mt-6 flex flex-wrap justify-center gap-2">

                <span
                    class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs text-zinc-400">
                    Laravel
                </span>

                <span
                    class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs text-zinc-400">
                    Tailwind
                </span>

                <span
                    class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs text-zinc-400">
                    UI/UX
                </span>

                <span
                    class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs text-zinc-400">
                    Frontend
                </span>

            </div>

        </div>

        <!-- Terminal -->
        <div
            class="mt-8 bg-black/30 border border-white/10 rounded-2xl p-4 font-mono text-xs text-zinc-400 relative z-10">

            <p>
                > initializing portfolio...
            </p>

            <p class="text-green-400 mt-2">
                ✓ system online
            </p>

            <p class="text-green-400">
                ✓ available for collaboration
            </p>

        </div>

        <!-- Social -->
        <div class="mt-8 space-y-4 relative z-10">

            <!-- Instagram -->
            <a href="https://www.instagram.com/rahkiff"
                target="_blank"
                class="group flex items-center justify-between bg-white/5 hover:bg-white/[0.08] border border-white/10 hover:border-white/20 px-5 py-4 rounded-2xl transition-all duration-300 hover:scale-[1.02] active:scale-95">

                <div class="flex items-center gap-4">

                    <i class="fab fa-instagram text-lg"></i>

                    <div>

                        <p class="font-medium text-sm md:text-base">
                            Instagram
                        </p>

                        <p class="text-xs text-zinc-500">
                            @rahkiff
                        </p>

                    </div>

                </div>

                <i
                    class="fas fa-arrow-right text-sm text-zinc-500 group-hover:translate-x-1 transition-all">
                </i>

            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@rahkiff"
                target="_blank"
                class="group flex items-center justify-between bg-white/5 hover:bg-white/[0.08] border border-white/10 hover:border-white/20 px-5 py-4 rounded-2xl transition-all duration-300 hover:scale-[1.02] active:scale-95">

                <div class="flex items-center gap-4">

                    <i class="fab fa-tiktok text-lg"></i>

                    <div>

                        <p class="font-medium text-sm md:text-base">
                            TikTok
                        </p>

                        <p class="text-xs text-zinc-500">
                            @rahkiff
                        </p>

                    </div>

                </div>

                <i
                    class="fas fa-arrow-right text-sm text-zinc-500 group-hover:translate-x-1 transition-all">
                </i>

            </a>

            <!-- GitHub -->
            <a href="https://github.com/fikharakramm"
                target="_blank"
                class="group flex items-center justify-between bg-white/5 hover:bg-white/[0.08] border border-white/10 hover:border-white/20 px-5 py-4 rounded-2xl transition-all duration-300 hover:scale-[1.02] active:scale-95">

                <div class="flex items-center gap-4">

                    <i class="fab fa-github text-lg"></i>

                    <div>

                        <p class="font-medium text-sm md:text-base">
                            GitHub
                        </p>

                        <p class="text-xs text-zinc-500">
                            fikharakramm
                        </p>

                    </div>

                </div>

                <i
                    class="fas fa-arrow-right text-sm text-zinc-500 group-hover:translate-x-1 transition-all">
                </i>

            </a>

            <!-- Spotify -->
            <a href="https://open.spotify.com/user/4os7b98o4grsmfwjpg7fcfysf?si=cf421a1c6c084707"
                target="_blank"
                class="group flex items-center justify-between bg-white/5 hover:bg-white/[0.08] border border-white/10 hover:border-white/20 px-5 py-4 rounded-2xl transition-all duration-300 hover:scale-[1.02] active:scale-95">

                <div class="flex items-center gap-4">

                    <i class="fab fa-spotify text-lg"></i>

                    <div>

                        <p class="font-medium text-sm md:text-base">
                            Spotify
                        </p>

                        <p class="text-xs text-zinc-500">
                            kiff's
                        </p>

                    </div>

                </div>

                <i
                    class="fas fa-arrow-right text-sm text-zinc-500 group-hover:translate-x-1 transition-all">
                </i>

            </a>

        </div>

        <!-- Music -->
        <div class="mt-8 relative z-10">

            <div
                class="flex items-center gap-2 text-zinc-500 text-sm mb-4">

                <div class="flex gap-1 items-end h-4">

                    <span
                        class="w-1 h-2 bg-green-400 rounded animate-pulse">
                    </span>

                    <span
                        class="w-1 h-4 bg-green-400 rounded animate-pulse">
                    </span>

                    <span
                        class="w-1 h-3 bg-green-400 rounded animate-pulse">
                    </span>

                </div>

                currently listening

            </div>

            <iframe
                style="border-radius:16px"
                src="https://open.spotify.com/embed/track/7D0RhFcb3CrfPuTJ0obrod?si=0e5e5eac5c544a3a"
                width="100%"
                height="152"
                frameBorder="0"
                allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy">
            </iframe>

        </div>

        <!-- Quote -->
        <p
            class="mt-6 text-zinc-500 italic text-sm text-center relative z-10">
            “Less, but better.”
        </p>

        <!-- Clock -->
        <div id="clock"
            class="mt-4 text-center text-zinc-600 text-sm relative z-10">
        </div>

        <!-- Divider -->
        <div class="w-full h-px bg-white/10 mt-8"></div>

        <!-- Footer -->
        <div
            class="mt-6 text-center text-zinc-600 text-xs font-mono relative z-10">

            > built with caffeine ☕

        </div>

    </div>

    <!-- Cursor Glow -->
    <div
        class="pointer-events-none fixed inset-0 z-30 hidden md:block"
        id="cursorGlow">
    </div>

    <script>

        function updateClock() {

            const now = new Date();

            const time = now.toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit'
            });

            document.getElementById('clock').innerHTML = time;

        }

        setInterval(updateClock, 1000);

        updateClock();

        const glow = document.getElementById('cursorGlow');

        document.addEventListener('mousemove', (e) => {

            glow.style.background =
                `radial-gradient(
                300px at ${e.clientX}px ${e.clientY}px,
                rgba(255,255,255,0.05),
                transparent 80%
            )`;

        });

    </script>

</body>

</html>