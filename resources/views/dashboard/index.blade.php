@extends('layouts.app')

@section('title', 'Dashboard - KaryaSync')
@section('meta_description', 'Dashboard manajemen karyawan')

@section('page_title', 'Dashboard')
@section('page_subtitle', 'Overview sistem manajemen karyawan')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="stat-card animate-on-load">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-dark-400 text-xs font-medium uppercase tracking-wider mb-1">Total Karyawan</p>
                <h3 class="text-3xl font-bold text-white">248</h3>
                <p class="text-xs text-success mt-2 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    <span>+12 dari bulan lalu</span>
                </p>
            </div>
            <div class="stat-icon bg-premium-500/10">
                <svg class="w-6 h-6 text-premium-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
        </div>
    </div>

    <div class="stat-card animate-on-load">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-dark-400 text-xs font-medium uppercase tracking-wider mb-1">Hadir Hari Ini</p>
                <h3 class="text-3xl font-bold text-white">186</h3>
                <p class="text-xs text-success mt-2 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    <span>75% kehadiran</span>
                </p>
            </div>
            <div class="stat-icon bg-success/10">
                <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
            </div>
        </div>
    </div>

    <div class="stat-card animate-on-load">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-dark-400 text-xs font-medium uppercase tracking-wider mb-1">Rata-rata Kinerja</p>
                <h3 class="text-3xl font-bold text-white">87<span class="text-lg text-dark-400">/100</span></h3>
                <p class="text-xs text-warning mt-2 flex items-center gap-1">
                    <span>Naik 3 poin</span>
                </p>
            </div>
            <div class="stat-icon bg-warning/10">
                <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
        </div>
    </div>

    <div class="stat-card animate-on-load">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-dark-400 text-xs font-medium uppercase tracking-wider mb-1">Total Penggajian</p>
                <h3 class="text-3xl font-bold text-white">Rp 2.4<span class="text-lg text-dark-400">M</span></h3>
                <p class="text-xs text-dark-400 mt-2">Bulan ini</p>
            </div>
            <div class="stat-icon bg-info/10">
                <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
    </div>
</div>

<!-- Charts & Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Performance Chart Placeholder -->
    <div class="premium-card p-6 lg:col-span-2 animate-on-load">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-white font-semibold">Tren Kinerja</h3>
                <p class="text-xs text-dark-400">6 bulan terakhir</p>
            </div>
            <div class="flex gap-2">
                <span class="badge badge-success">↑ 12%</span>
            </div>
        </div>
        <div class="h-64 flex items-end justify-between gap-2">
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-premium-400 to-premium-300 rounded-lg" style="height: 60%"></div>
                <span class="text-xs text-dark-400">Jan</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-premium-400 to-premium-300 rounded-lg" style="height: 45%"></div>
                <span class="text-xs text-dark-400">Feb</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-premium-400 to-premium-300 rounded-lg" style="height: 70%"></div>
                <span class="text-xs text-dark-400">Mar</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-accent-400 to-accent-300 rounded-lg" style="height: 85%"></div>
                <span class="text-xs text-dark-400">Apr</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-accent-400 to-accent-300 rounded-lg" style="height: 75%"></div>
                <span class="text-xs text-dark-400">Mei</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2">
                <div class="w-full bg-gradient-to-t from-accent-400 to-accent-300 rounded-lg" style="height: 90%"></div>
                <span class="text-xs text-dark-400">Jun</span>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="premium-card p-6 animate-on-load">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-white font-semibold">Aktivitas Terbaru</h3>
                <p class="text-xs text-dark-400">Real-time</p>
            </div>
            <span class="w-2 h-2 bg-success rounded-full animate-pulse"></span>
        </div>
        <div class="space-y-4">
            @php
                $activities = [
                    ['text' => 'Budi Santoso hadir', 'time' => '5 menit lalu', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2', 'color' => 'text-success'],
                    ['text' => 'Data karyawan diupdate', 'time' => '15 menit lalu', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'color' => 'text-info'],
                    ['text' => 'Siti Nurhaliza izin sakit', 'time' => '1 jam lalu', 'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z', 'color' => 'text-warning'],
                    ['text' => 'Gaji bulan Juni digenerate', 'time' => '3 jam lalu', 'icon' => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01', 'color' => 'text-premium-400'],
                    ['text' => 'Review kinerja Q2 selesai', 'time' => '1 hari lalu', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'text-success'],
                ];
            @endphp

            @foreach($activities as $i => $act)
            <div class="flex items-start gap-3 {{ $i > 0 ? 'pt-4 border-t border-white/5' : '' }}">
                <div class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 {{ $act['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $act['icon'] }}"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-white">{{ $act['text'] }}</p>
                    <p class="text-xs text-dark-400">{{ $act['time'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Employee Table Preview -->
<div class="premium-card animate-on-load">
    <div class="px-6 py-4 border-b border-white/5 flex items-center justify-between">
        <div>
            <h3 class="text-white font-semibold">Karyawan Terbaru</h3>
            <p class="text-xs text-dark-400">5 karyawan terakhir yang ditambahkan</p>
        </div>
        <a href="{{ route('employees.index') }}" class="text-xs text-premium-400 hover:text-premium-300 transition-colors flex items-center gap-1">
            Lihat Semua
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="table-premium">
            <thead>
                <tr>
                    <th>Karyawan</th>
                    <th>Divisi</th>
                    <th>Status</th>
                    <th>Bergabung</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $employees = [
                        ['name' => 'Ahmad Fauzi', 'divisi' => 'Teknologi Informasi', 'status' => 'Aktif', 'avatar' => 'AF'],
                        ['name' => 'Dewi Lestari', 'divisi' => 'Sumber Daya Manusia', 'status' => 'Aktif', 'avatar' => 'DL'],
                        ['name' => 'Rizky Pratama', 'divisi' => 'Keuangan', 'status' => 'Cuti', 'avatar' => 'RP'],
                        ['name' => 'Sari Indah', 'divisi' => 'Pemasaran', 'status' => 'Aktif', 'avatar' => 'SI'],
                        ['name' => 'Hendra Gunawan', 'divisi' => 'Operasional', 'status' => 'Aktif', 'avatar' => 'HG'],
                    ];
                @endphp

                @foreach($employees as $emp)
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar avatar-sm">{{ $emp['avatar'] }}</div>
                            <span class="font-medium text-white">{{ $emp['name'] }}</span>
                        </div>
                    </td>
                    <td>{{ $emp['divisi'] }}</td>
                    <td>
                        <span class="badge {{ $emp['status'] === 'Aktif' ? 'badge-success' : 'badge-warning' }}">
                            {{ $emp['status'] }}
                        </span>
                    </td>
                    <td class="text-dark-400">2026-07-01</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
