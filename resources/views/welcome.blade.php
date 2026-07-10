{{-- Welcome page fallback if not authenticated --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaryaSync - Manajemen Karyawan Premium</title>
    <meta name="description" content="Aplikasi Manajemen Karyawan modern dengan fitur Import Excel, Absensi, Penilaian Kinerja, dan Perhitungan Gaji.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-dark-950 text-white overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-grid overflow-hidden">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>

        <div class="relative z-10 container mx-auto px-6 text-center max-w-5xl">
            <!-- Logo -->
            <div class="mb-8 animate-fade-in">
                <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-premium-400 to-accent-500 flex items-center justify-center shadow-2xl shadow-premium-500/30 mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-4">
                    <span class="gradient-text">Karya</span>
                    <span class="text-white">Sync</span>
                </h1>
                <p class="text-xl md:text-2xl text-dark-300 font-light max-w-2xl mx-auto">
                    Solusi Manajemen Karyawan <span class="gradient-text font-semibold">All-in-One</span>
                </p>
            </div>

            <p class="text-dark-400 text-lg mb-12 max-w-xl mx-auto animate-slide-up stagger-1">
                Kelola data karyawan, absensi, penilaian kinerja, dan penggajian dalam satu platform premium.
            </p>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-12 animate-slide-up stagger-2">
                <div class="premium-card p-5 text-left glass-hover">
                    <div class="stat-icon bg-premium-500/10 text-premium-400 mb-3">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-1">Import Excel</h3>
                    <p class="text-xs text-dark-400">Import data karyawan massal dari spreadsheet</p>
                </div>

                <div class="premium-card p-5 text-left glass-hover">
                    <div class="stat-icon bg-success/10 text-success mb-3">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-1">Absensi</h3>
                    <p class="text-xs text-dark-400">Rekam kehadiran karyawan secara digital</p>
                </div>

                <div class="premium-card p-5 text-left glass-hover">
                    <div class="stat-icon bg-warning/10 text-warning mb-3">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-1">Penilaian Kinerja</h3>
                    <p class="text-xs text-dark-400">Evaluasi performa dengan metrik objektif</p>
                </div>

                <div class="premium-card p-5 text-left glass-hover">
                    <div class="stat-icon bg-info/10 text-info mb-3">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-1">Perhitungan Gaji</h3>
                    <p class="text-xs text-dark-400">Otomatis kalkulasi gaji berdasarkan absensi</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="animate-slide-up stagger-3">
                <a href="{{ route('dashboard') }}" class="premium-btn premium-btn-primary text-base px-10 py-4 shadow-2xl shadow-premium-500/30 hover:shadow-premium-500/50">
                    Mulai Sekarang
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <p class="text-dark-500 text-xs mt-4">Gratis试用 • No credit card required</p>
            </div>
        </div>

        <!-- Bottom gradient fade -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-dark-950 to-transparent"></div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
                el.style.opacity = '0';
                const delay = parseInt(el.classList.contains('stagger-1') ? 100 : el.classList.contains('stagger-2') ? 200 : el.classList.contains('stagger-3') ? 300 : 0);
                setTimeout(() => {
                    el.style.transition = 'all 0.6s ease-out';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, delay);
            });
        });
    </script>
</body>
</html>
