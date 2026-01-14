<!-- Floating Toggle Buttons (Desktop) -->
<div id="floating-buttons" class="hidden lg:flex fixed left-4 top-4 z-[60] gap-2 transition-all duration-300">
    <!-- Sidebar Toggle -->
    <button id="sidebar-toggle"
        class="w-14 h-14 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-full shadow-lg hover:shadow-xl flex items-center justify-center text-white transition-all duration-300 hover:scale-110">
        <svg id="toggle-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="toggle-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Dark Mode Toggle -->
    <button id="theme-toggle-desktop"
        class="theme-toggle w-14 h-14 bg-gradient-to-br from-amber-400 to-orange-500 dark:from-slate-700 dark:to-slate-800 rounded-full shadow-lg hover:shadow-xl flex items-center justify-center text-white transition-all duration-300 hover:scale-110">
        <!-- Sun Icon (shown in dark mode) -->
        <svg id="sun-icon-desktop" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <!-- Moon Icon (shown in light mode) -->
        <svg id="moon-icon-desktop" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
    </button>
</div>

<!-- Sidebar Navigation (Desktop) -->
<aside id="sidebar"
    class="hidden fixed left-0 top-0 h-full w-72 bg-white shadow-2xl z-50 transition-all duration-300 flex-col">
    <!-- Logo -->
    <div class="p-5 border-b flex items-center gap-4">
        <img src="<?= base_url('public/assets/img/BADAN_POM.png') ?>" alt="BPOM Logo" class="w-16 h-16 object-contain">
        <div>
            <h1 class="text-lg font-bold text-blue-800 leading-tight">SI-PANGGOARAN</h1>
            <p class="text-sm text-slate-500">BBPOM di Medan</p>
        </div>
    </div>

    <!-- Navigation Items -->
    <nav class="flex-1 overflow-y-auto py-4 px-3">
        <div class="space-y-2">
            <a href="#" data-section="home"
                class="nav-link active group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-blue-100 group-[.active]:bg-blue-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-blue-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-blue-600">Beranda</span>
            </a>

            <a href="#" data-section="struktur"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-green-100 group-[.active]:bg-green-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-green-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-green-600">Struktur
                    Organisasi</span>
            </a>

            <a href="#" data-section="alur"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-purple-100 group-[.active]:bg-purple-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-purple-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-purple-600">Alur Proses</span>
            </a>

            <a href="#" data-section="persyaratan"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-orange-100 group-[.active]:bg-orange-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-orange-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-orange-600">Persyaratan</span>
            </a>

            <a href="#" data-section="galeri"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-pink-100 group-[.active]:bg-pink-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-pink-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-pink-600">Galeri</span>
            </a>

            <a href="#" data-section="kuota"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-cyan-100 group-[.active]:bg-cyan-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-cyan-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-cyan-600">Kuota</span>
            </a>

            <a href="#" data-section="periode"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-violet-100 group-[.active]:bg-violet-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-violet-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-violet-600">Periode</span>
            </a>

            <a href="#" data-section="pkpa"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-emerald-100 group-[.active]:bg-emerald-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-emerald-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-emerald-600">PKPA</span>
            </a>

            <a href="#" data-section="pengiriman"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-rose-100 group-[.active]:bg-rose-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-rose-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-rose-600">Pengiriman Berkas</span>
            </a>

            <a href="#" data-section="tatatertib"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-red-100 group-[.active]:bg-red-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-red-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-red-600">Tata Tertib</span>
            </a>

            <a href="#" data-section="testimoni"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-indigo-100 group-[.active]:bg-indigo-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-indigo-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-indigo-600">Testimoni</span>
            </a>

            <a href="#" data-section="peserta"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-sky-100 group-[.active]:bg-sky-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-sky-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-sky-600">Peserta</span>
            </a>

            <a href="#" data-section="faq"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-yellow-100 group-[.active]:bg-yellow-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-yellow-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-yellow-600">FAQ</span>
            </a>

            <a href="#" data-section="kontak"
                class="nav-link group flex items-center gap-3 p-3 rounded-2xl transition-all duration-300 hover:bg-blue-50">
                <span
                    class="bubble-icon w-10 h-10 bg-teal-100 group-[.active]:bg-teal-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                    <svg class="w-5 h-5 text-teal-600 group-[.active]:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </span>
                <span class="text-sm font-medium text-slate-700 group-[.active]:text-teal-600">Kontak</span>
            </a>
        </div>
    </nav>
</aside>

<!-- Sidebar Overlay (Desktop) -->
<div id="sidebar-overlay" class="hidden lg:hidden fixed inset-0 bg-black/30 z-40 transition-opacity duration-300"></div>

<!-- Mobile Bottom Navigation -->
<nav id="mobile-nav" class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t shadow-lg z-50">
    <div class="flex justify-around items-center py-2 px-2">
        <a href="#" data-section="home" class="nav-link active flex flex-col items-center p-2 min-w-[60px]">
            <span class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center transition-all">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </span>
            <span class="text-[10px] text-slate-600 mt-1">Home</span>
        </a>
        <a href="#" data-section="persyaratan" class="nav-link flex flex-col items-center p-2 min-w-[60px]">
            <span class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center transition-all">
                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </span>
            <span class="text-[10px] text-slate-600 mt-1">Syarat</span>
        </a>
        <a href="#" data-section="pengiriman" class="nav-link flex flex-col items-center p-2 min-w-[60px]">
            <span
                class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-full flex items-center justify-center shadow-lg -mt-4 transition-all">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </span>
            <span class="text-[10px] text-blue-600 font-semibold mt-1">Daftar</span>
        </a>
        <a href="#" data-section="faq" class="nav-link flex flex-col items-center p-2 min-w-[60px]">
            <span class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center transition-all">
                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <span class="text-[10px] text-slate-600 mt-1">FAQ</span>
        </a>
        <button id="more-menu-btn" class="flex flex-col items-center p-2 min-w-[60px]">
            <span class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center transition-all">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
            <span class="text-[10px] text-slate-600 mt-1">Menu</span>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="lg:hidden fixed inset-0 bg-black/50 z-40 hidden"></div>
<div id="mobile-menu"
    class="lg:hidden fixed bottom-16 left-4 right-4 bg-white rounded-2xl shadow-2xl z-50 hidden max-h-[70vh] overflow-y-auto">
    <div class="p-4 grid grid-cols-4 gap-3">
        <a href="#" data-section="home" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Beranda</span>
        </a>
        <a href="#" data-section="struktur"
            class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Struktur</span>
        </a>
        <a href="#" data-section="alur" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Alur</span>
        </a>
        <a href="#" data-section="persyaratan"
            class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Syarat</span>
        </a>
        <a href="#" data-section="galeri" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Galeri</span>
        </a>
        <a href="#" data-section="kuota" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Kuota</span>
        </a>
        <a href="#" data-section="periode" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-violet-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Periode</span>
        </a>
        <a href="#" data-section="pkpa" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">PKPA</span>
        </a>
        <a href="#" data-section="tatatertib"
            class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Tertib</span>
        </a>
        <a href="#" data-section="testimoni"
            class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Testimoni</span>
        </a>
        <a href="#" data-section="peserta" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Peserta</span>
        </a>
        <a href="#" data-section="kontak" class="nav-link flex flex-col items-center p-3 rounded-xl hover:bg-slate-50">
            <span class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </span>
            <span class="text-xs text-slate-600">Kontak</span>
        </a>
    </div>
</div>