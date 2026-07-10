@extends('layouts.app')

@section('title', 'Karyawan - KaryaSync')
@section('page_title', 'Data Karyawan')
@section('page_subtitle', 'Kelola seluruh data karyawan')

@section('content')
<div class="flex items-center justify-between mb-6 animate-fade-in">
    <div class="flex items-center gap-4">
        <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-dark-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" placeholder="Cari karyawan..." class="premium-input pl-10 w-64">
        </div>
        <button class="premium-btn premium-btn-ghost">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
            Filter
        </button>
    </div>
    <div class="flex gap-3">
        <button class="premium-btn premium-btn-ghost">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>
            Import Excel
        </button>
        <button class="premium-btn premium-btn-primary">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Tambah Karyawan
        </button>
    </div>
</div>

<div class="premium-card animate-slide-up stagger-1">
    <div class="overflow-x-auto">
        <table class="table-premium">
            <thead>
                <tr>
                    <th class="w-8"><input type="checkbox" class="rounded border-white/10 bg-white/5"></th>
                    <th>Karyawan</th>
                    <th>Divisi</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $employees = [
                    ['name' => 'Ahmad Fauzi', 'email' => 'ahmad@perusahaan.com', 'divisi' => 'Teknologi Informasi', 'jabatan' => 'Senior Developer', 'status' => 'Aktif', 'avatar' => 'AF'],
                    ['name' => 'Dewi Lestari', 'email' => 'dewi@perusahaan.com', 'divisi' => 'SDM', 'jabatan' => 'HR Manager', 'status' => 'Aktif', 'avatar' => 'DL'],
                    ['name' => 'Rizky Pratama', 'email' => 'rizky@perusahaan.com', 'divisi' => 'Keuangan', 'jabatan' => 'Finance Staff', 'status' => 'Cuti', 'avatar' => 'RP'],
                    ['name' => 'Sari Indah', 'email' => 'sari@perusahaan.com', 'divisi' => 'Pemasaran', 'jabatan' => 'Marketing Lead', 'status' => 'Aktif', 'avatar' => 'SI'],
                    ['name' => 'Hendra Gunawan', 'email' => 'hendra@perusahaan.com', 'divisi' => 'Operasional', 'jabatan' => 'Operational Manager', 'status' => 'Aktif', 'avatar' => 'HG'],
                    ['name' => 'Nina Permata', 'email' => 'nina@perusahaan.com', 'divisi' => 'Teknologi Informasi', 'jabatan' => 'UI/UX Designer', 'status' => 'Aktif', 'avatar' => 'NP'],
                    ['name' => 'Adi Saputra', 'email' => 'adi@perusahaan.com', 'divisi' => 'SDM', 'jabatan' => 'HR Staff', 'status' => 'Aktif', 'avatar' => 'AS'],
                ];
                @endphp

                @foreach($employees as $emp)
                <tr>
                    <td><input type="checkbox" class="rounded border-white/10 bg-white/5"></td>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar avatar-sm">{{ $emp['avatar'] }}</div>
                            <div>
                                <span class="font-medium text-white block">{{ $emp['name'] }}</span>
                                <span class="text-xs text-dark-400">{{ $emp['email'] }}</span>
                            </div>
                        </div>
                    </td>
                    <td><span class="text-dark-200">{{ $emp['divisi'] }}</span></td>
                    <td><span class="text-dark-200">{{ $emp['jabatan'] }}</span></td>
                    <td><span class="badge {{ $emp['status'] === 'Aktif' ? 'badge-success' : 'badge-warning' }}">{{ $emp['status'] }}</span></td>
                    <td class="text-dark-400">2026-07-01</td>
                    <td>
                        <div class="flex items-center gap-2">
                            <button class="p-1.5 rounded-lg hover:bg-white/5 text-dark-400 hover:text-info transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-white/5 text-dark-400 hover:text-danger transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t border-white/5 flex items-center justify-between">
        <p class="text-xs text-dark-400">Menampilkan 7 dari 248 karyawan</p>
        <div class="flex items-center gap-2">
            <button class="px-3 py-1.5 rounded-lg bg-white/5 text-dark-400 hover:text-white text-sm transition-colors">Prev</button>
            <button class="px-3 py-1.5 rounded-lg bg-premium-500/20 text-white text-sm">1</button>
            <button class="px-3 py-1.5 rounded-lg bg-white/5 text-dark-400 hover:text-white text-sm transition-colors">2</button>
            <button class="px-3 py-1.5 rounded-lg bg-white/5 text-dark-400 hover:text-white text-sm transition-colors">3</button>
            <span class="text-dark-400">...</span>
            <button class="px-3 py-1.5 rounded-lg bg-white/5 text-dark-400 hover:text-white text-sm transition-colors">10</button>
            <button class="px-3 py-1.5 rounded-lg bg-white/5 text-dark-400 hover:text-white text-sm transition-colors">Next</button>
        </div>
    </div>
</div>
@endsection
