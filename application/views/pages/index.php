<!-- Main Content Wrapper -->
<main class="main-content">

    <!-- SECTION 1: JUMBOTRON / HOME -->
    <section id="home" class="section active">
        <div class="relative min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 flex items-center">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
                </div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 py-20 text-center">
                <!-- BPOM Logo -->
                <img src="<?= base_url('public/assets/img/BADAN_POM.png') ?>" alt="BPOM Logo"
                    class="w-24 h-24 mx-auto mb-6 bg-white rounded-2xl p-2 shadow-xl">

                <div
                    class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-blue-200 text-sm mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    Balai Besar POM di Medan
                </div>

                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 tracking-tight">
                    SI-PANGGOARAN
                </h1>

                <p class="text-xl md:text-2xl text-blue-200 mb-8 max-w-3xl mx-auto">
                    <span class="font-semibold text-white">S</span>istem
                    <span class="font-semibold text-white">P</span>elaporan Magang,
                    <span class="font-semibold text-white">O</span>rientasi dan
                    <span class="font-semibold text-white">K</span>unjungan
                </p>

                <p class="text-blue-300 mb-12 max-w-2xl mx-auto">
                    Portal resmi untuk pendaftaran Praktek Kerja Lapangan (PKL), Magang, PKPA, Penelitian, dan Kunjungan
                    Studi di Balai Besar Pengawas Obat dan Makanan di Medan.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" data-section="persyaratan"
                        class="nav-link inline-flex items-center gap-2 bg-white text-blue-800 px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition-all hover:scale-105 shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Lihat Persyaratan
                    </a>
                    <a href="#" data-section="pengiriman"
                        class="nav-link inline-flex items-center gap-2 bg-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-blue-500 transition-all hover:scale-105 shadow-lg border border-blue-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Daftar Sekarang
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-bold text-white">500+</div>
                        <div class="text-blue-200 text-sm">Peserta Magang</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-bold text-white">50+</div>
                        <div class="text-blue-200 text-sm">Institusi Mitra</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-bold text-white">10+</div>
                        <div class="text-blue-200 text-sm">Bidang Tersedia</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-bold text-white">98%</div>
                        <div class="text-blue-200 text-sm">Kepuasan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: STRUKTUR ORGANISASI -->
    <section id="struktur" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-blue-100 text-blue-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Organisasi</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Struktur Organisasi</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Struktur organisasi Balai Besar Pengawas Obat dan Makanan di
                    Medan</p>
            </div>

            <!-- Org Chart -->
            <div class="flex flex-col items-center">
                <!-- Kepala -->
                <div
                    class="bg-gradient-to-br from-blue-600 to-blue-800 text-white rounded-2xl p-6 text-center shadow-xl mb-8">
                    <div class="w-20 h-20 bg-white/20 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Kepala Balai Besar</h3>
                    <p class="text-blue-200 text-sm">BBPOM di Medan</p>
                </div>

                <!-- Line -->
                <div class="w-0.5 h-8 bg-slate-300"></div>

                <!-- Sub Bagian -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
                    <div
                        class="bg-white rounded-xl p-6 text-center shadow-lg border-t-4 border-blue-500 hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-slate-800 mb-2">Bagian Tata Usaha</h4>
                        <p class="text-slate-500 text-sm">Administrasi & Kepegawaian</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 text-center shadow-lg border-t-4 border-green-500 hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-slate-800 mb-2">Bidang Pengujian</h4>
                        <p class="text-slate-500 text-sm">Laboratorium & Pengujian</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 text-center shadow-lg border-t-4 border-purple-500 hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-slate-800 mb-2">Bidang Pemeriksaan</h4>
                        <p class="text-slate-500 text-sm">Inspeksi & Sertifikasi</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 text-center shadow-lg border-t-4 border-orange-500 hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-slate-800 mb-2">Bidang Infokom</h4>
                        <p class="text-slate-500 text-sm">Informasi & Komunikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: ALUR PROSES -->
    <section id="alur" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-green-100 text-green-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Proses</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Alur Proses Penerimaan</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Langkah-langkah pendaftaran Praktek Kerja Lapangan di BBPOM
                    Medan</p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div
                    class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-500 to-green-500 rounded-full">
                </div>

                <!-- Steps -->
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-3">Langkah
                                    1</span>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Persiapan Dokumen</h3>
                                <p class="text-slate-600">Siapkan surat permohonan dari institusi, proposal kegiatan,
                                    dan
                                    dokumen pendukung lainnya.</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg z-10">
                            1</div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2"></div>
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg z-10">
                            2</div>
                        <div class="md:w-1/2">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-3">Langkah
                                    2</span>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Pengisian Formulir</h3>
                                <p class="text-slate-600">Isi formulir pendaftaran online melalui Google Form yang
                                    tersedia
                                    di website ini.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                <span
                                    class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium mb-3">Langkah
                                    3</span>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Verifikasi Berkas</h3>
                                <p class="text-slate-600">Tim BBPOM akan memverifikasi kelengkapan dan keabsahan dokumen
                                    yang dikirimkan.</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg z-10">
                            3</div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2"></div>
                        <div
                            class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg z-10">
                            4</div>
                        <div class="md:w-1/2">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                <span
                                    class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium mb-3">Langkah
                                    4</span>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Konfirmasi Penerimaan</h3>
                                <p class="text-slate-600">Jika diterima, Anda akan menerima surat konfirmasi dan jadwal
                                    pelaksanaan kegiatan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 md:text-right">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                <span
                                    class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium mb-3">Langkah
                                    5</span>
                                <h3 class="text-xl font-bold text-slate-800 mb-2">Pelaksanaan Kegiatan</h3>
                                <p class="text-slate-600">Laksanakan kegiatan PKL/Magang sesuai dengan jadwal dan
                                    bimbingan
                                    dari pembimbing lapangan.</p>
                            </div>
                        </div>
                        <div
                            class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg z-10">
                            5</div>
                        <div class="md:w-1/2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: PERSYARATAN -->
    <section id="persyaratan" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-orange-100 text-orange-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Dokumen</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Persyaratan Pendaftaran</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Dokumen yang harus disiapkan untuk pendaftaran PKL/Magang
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Surat Permohonan -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow border-l-4 border-blue-500">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-3">Surat Permohonan</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Ditujukan kepada Kepala BBPOM di Medan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Ditandatangani oleh pimpinan institusi</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Mencantumkan nama peserta dan periode</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Menggunakan kop surat resmi institusi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Proposal -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow border-l-4 border-purple-500">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-3">Proposal Kegiatan</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Latar belakang dan tujuan kegiatan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Bidang yang diminati</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Jadwal dan durasi pelaksanaan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Biodata peserta lengkap</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dokumen Pendukung -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow border-l-4 border-green-500">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-3">Dokumen Pendukung</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Fotokopi KTP / Kartu Pelajar</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Pas foto 3x4 (2 lembar)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Curriculum Vitae (CV)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Catatan -->
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 border border-amber-200">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-amber-800 mb-3">Catatan Penting</h3>
                            <ul class="space-y-2 text-amber-700">
                                <li>• Pengajuan minimal 2 minggu sebelum tanggal pelaksanaan</li>
                                <li>• Dokumen dikirim dalam format PDF</li>
                                <li>• Pastikan semua data terisi dengan benar</li>
                                <li>• Konfirmasi akan diberikan maksimal 7 hari kerja</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: GALERI KUNJUNGAN -->
    <section id="galeri" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-pink-100 text-pink-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Galeri</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Kunjungan Studi</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Dokumentasi kunjungan studi dari berbagai sekolah dan
                    perguruan
                    tinggi</p>
            </div>

            <!-- Zigzag Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="space-y-4">
                    <div
                        class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl h-48 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Kunjungan SMK Farmasi</span>
                    </div>
                    <div
                        class="bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl h-64 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Workshop Laboratorium</span>
                    </div>
                </div>
                <div class="space-y-4 mt-8">
                    <div
                        class="bg-gradient-to-br from-green-400 to-green-600 rounded-2xl h-64 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Universitas Sumatera Utara</span>
                    </div>
                    <div
                        class="bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl h-48 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Praktik Pengujian Makanan</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div
                        class="bg-gradient-to-br from-pink-400 to-pink-600 rounded-2xl h-48 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Institut Kesehatan Helvetia</span>
                    </div>
                    <div
                        class="bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-2xl h-64 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Pelatihan Quality Control</span>
                    </div>
                </div>
                <div class="space-y-4 mt-8">
                    <div
                        class="bg-gradient-to-br from-teal-400 to-teal-600 rounded-2xl h-64 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Politeknik Kesehatan Medan</span>
                    </div>
                    <div
                        class="bg-gradient-to-br from-red-400 to-red-600 rounded-2xl h-48 flex items-center justify-center text-white shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <span class="text-center p-4">Sertifikasi Halal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: KETERSEDIAAN KUOTA -->
    <section id="kuota" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-cyan-100 text-cyan-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Kuota</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Ketersediaan Formasi</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Informasi kuota penerimaan PKL dan Magang tahun 2026</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-blue-600 to-blue-800 text-white">
                            <tr>
                                <th class="px-6 py-4 text-left font-semibold">Bidang</th>
                                <th class="px-6 py-4 text-center font-semibold">Kuota</th>
                                <th class="px-6 py-4 text-center font-semibold">Terisi</th>
                                <th class="px-6 py-4 text-center font-semibold">Sisa</th>
                                <th class="px-6 py-4 text-center font-semibold">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bidang Pengujian - Laboratorium Kimia</td>
                                <td class="px-6 py-4 text-center">10</td>
                                <td class="px-6 py-4 text-center">6</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">4</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bidang Pengujian - Laboratorium Mikrobiologi</td>
                                <td class="px-6 py-4 text-center">8</td>
                                <td class="px-6 py-4 text-center">8</td>
                                <td class="px-6 py-4 text-center font-bold text-red-600">0</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Penuh</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bidang Pemeriksaan - Inspeksi</td>
                                <td class="px-6 py-4 text-center">6</td>
                                <td class="px-6 py-4 text-center">3</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">3</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bidang Pemeriksaan - Sertifikasi</td>
                                <td class="px-6 py-4 text-center">5</td>
                                <td class="px-6 py-4 text-center">4</td>
                                <td class="px-6 py-4 text-center font-bold text-amber-600">1</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">Terbatas</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bagian Tata Usaha - Administrasi</td>
                                <td class="px-6 py-4 text-center">4</td>
                                <td class="px-6 py-4 text-center">2</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">2</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium">Bidang Infokom - IT & Multimedia</td>
                                <td class="px-6 py-4 text-center">4</td>
                                <td class="px-6 py-4 text-center">3</td>
                                <td class="px-6 py-4 text-center font-bold text-amber-600">1</td>
                                <td class="px-6 py-4 text-center"><span
                                        class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">Terbatas</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="text-center text-slate-500 mt-6 text-sm">* Data diperbarui secara berkala. Hubungi kami untuk
                informasi terkini.</p>
        </div>
    </section>

    <!-- SECTION 7: PERIODE PKL -->
    <section id="periode" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-violet-100 text-violet-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Jadwal</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Periode PKL/Magang</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Jadwal periode penerimaan peserta PKL dan Magang tahun 2026
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border-t-4 border-blue-500">
                    <div class="text-4xl font-bold text-blue-600 mb-2">Q1</div>
                    <h3 class="font-semibold text-slate-800 mb-3">Januari - Maret</h3>
                    <ul class="text-sm text-slate-600 space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                            Pendaftaran: 1 Nov - 15 Des
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                            Pelaksanaan: 6 Jan - 31 Mar
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <span
                            class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Dibuka</span>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border-t-4 border-green-500">
                    <div class="text-4xl font-bold text-green-600 mb-2">Q2</div>
                    <h3 class="font-semibold text-slate-800 mb-3">April - Juni</h3>
                    <ul class="text-sm text-slate-600 space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                            Pendaftaran: 1 Feb - 15 Mar
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                            Pelaksanaan: 1 Apr - 30 Jun
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <span
                            class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium">Segera</span>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border-t-4 border-orange-500">
                    <div class="text-4xl font-bold text-orange-600 mb-2">Q3</div>
                    <h3 class="font-semibold text-slate-800 mb-3">Juli - September</h3>
                    <ul class="text-sm text-slate-600 space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                            Pendaftaran: 1 Mei - 15 Jun
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                            Pelaksanaan: 1 Jul - 30 Sep
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium">Belum
                            Dibuka</span>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border-t-4 border-purple-500">
                    <div class="text-4xl font-bold text-purple-600 mb-2">Q4</div>
                    <h3 class="font-semibold text-slate-800 mb-3">Oktober - Desember</h3>
                    <ul class="text-sm text-slate-600 space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                            Pendaftaran: 1 Agu - 15 Sep
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                            Pelaksanaan: 1 Okt - 31 Des
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-medium">Belum
                            Dibuka</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: PKPA -->
    <section id="pkpa" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-emerald-100 text-emerald-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Apoteker</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Praktek Kerja Profesi Apoteker</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Program PKPA untuk mahasiswa program profesi Apoteker</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-6">Tentang Program PKPA</h3>
                    <p class="mb-6 opacity-90">
                        Praktek Kerja Profesi Apoteker (PKPA) adalah program wajib bagi mahasiswa Program Studi Profesi
                        Apoteker untuk memperoleh pengalaman praktis di bidang regulasi obat dan makanan.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span>Durasi minimal 4 minggu (100 jam)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span>Bimbingan oleh Apoteker BBPOM</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span>Sertifikat resmi dari BBPOM</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span>Pengalaman di berbagai bidang regulasi</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </span>
                            Kegiatan di Bidang Pengujian
                        </h4>
                        <p class="text-slate-600 text-sm">Praktik pengujian laboratorium, analisis sampel obat dan
                            makanan,
                            validasi metode.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </span>
                            Kegiatan di Bidang Pemeriksaan
                        </h4>
                        <p class="text-slate-600 text-sm">Inspeksi sarana produksi dan distribusi, audit CPPOB,
                            sertifikasi
                            halal.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                            Kegiatan di Bidang Infokom
                        </h4>
                        <p class="text-slate-600 text-sm">Penyuluhan masyarakat, edukasi DAGUSIBU, kampanye keamanan
                            pangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SECTION 9: PENGIRIMAN BERKAS -->
    <section id="pengiriman" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-rose-100 text-rose-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Pendaftaran</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Pengiriman Berkas Permohonan</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">PKL / KKP / Magang / PKPA / Penelitian / Kunjungan Studi</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div
                    class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl p-8 md:p-12 text-white text-center shadow-2xl">
                    <div class="w-20 h-20 bg-white/20 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold mb-4">Siap Mendaftar?</h3>
                    <p class="text-blue-100 mb-8 max-w-lg mx-auto">
                        Klik tombol di bawah ini untuk mengisi formulir pendaftaran online. Pastikan Anda telah
                        menyiapkan
                        semua dokumen persyaratan.
                    </p>

                    <a href="https://forms.google.com" target="_blank"
                        class="inline-flex items-center gap-3 bg-white text-blue-700 px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition-all hover:scale-105 shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                        Klik Disini untuk Mendaftar
                    </a>

                    <p class="text-blue-200 text-sm mt-6">
                        * Anda akan diarahkan ke Google Form
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-4 mt-8">
                    <div class="bg-white rounded-xl p-4 text-center shadow-md">
                        <div class="text-3xl font-bold text-blue-600">1</div>
                        <p class="text-sm text-slate-600 mt-2">Isi Formulir Online</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-md">
                        <div class="text-3xl font-bold text-blue-600">2</div>
                        <p class="text-sm text-slate-600 mt-2">Upload Dokumen</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-md">
                        <div class="text-3xl font-bold text-blue-600">3</div>
                        <p class="text-sm text-slate-600 mt-2">Tunggu Konfirmasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: TATA TERTIB -->
    <section id="tatatertib" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-red-100 text-red-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Peraturan</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Tata Tertib Pelaksanaan</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">PKL / Magang / PKPA</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        Kewajiban Peserta
                    </h3>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Hadir tepat waktu sesuai jadwal yang ditentukan (07.30 - 16.00 WIB)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Berpakaian rapi dan sopan (kemeja/blouse, celana panjang/rok)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Menggunakan jas lab saat berada di laboratorium</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Mengisi daftar hadir setiap hari</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Mematuhi instruksi pembimbing lapangan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span>Menjaga kerahasiaan data dan informasi instansi</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                        Larangan
                    </h3>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Tidak hadir tanpa keterangan atau izin</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Menggunakan fasilitas kantor untuk kepentingan pribadi</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Menyebarkan informasi rahasia instansi</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Meninggalkan tempat kerja tanpa izin</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Melakukan tindakan yang merugikan instansi</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span>Mengambil foto/video tanpa izin</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6 mt-8">
                <p class="text-amber-800 text-center">
                    <strong>⚠️ Peringatan:</strong> Pelanggaran terhadap tata tertib dapat mengakibatkan pembatalan
                    kegiatan
                    dan pelaporan kepada institusi asal.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION 11: TESTIMONI -->
    <section id="testimoni" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-indigo-100 text-indigo-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Testimoni</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Testimoni Peserta</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Pengalaman peserta PKL/Magang di BBPOM Medan</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Rina Safitri</h4>
                        <p class="text-sm text-slate-500">Universitas Sumatera Utara - 2024</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Ahmad Rizky</h4>
                        <p class="text-sm text-slate-500">Politeknik Kesehatan Medan - 2024</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Dewi Lestari</h4>
                        <p class="text-sm text-slate-500">Institut Kesehatan Helvetia - 2023</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Budi Santoso</h4>
                        <p class="text-sm text-slate-500">SMK Farmasi Apipsu - 2024</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Sarah Amelia</h4>
                        <p class="text-sm text-slate-500">Universitas Tjut Nyak Dhien - 2023</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-800">Muhammad Fauzi</h4>
                        <p class="text-sm text-slate-500">Universitas Islam Sumatera Utara - 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 12: PESERTA/LOGO KAMPUS -->
    <section id="peserta" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-sky-100 text-sky-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Mitra</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Peserta PKL/Magang & PKPA</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Institusi pendidikan yang telah bermitra dengan BBPOM di
                    Medan
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-blue-600 font-bold text-xl">USU</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Sumatera Utara</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-green-600 font-bold text-xl">UMI</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Muslim Indonesia</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-purple-600 font-bold text-lg">IKH</span>
                        </div>
                        <p class="text-xs text-slate-500">Inst. Kesehatan Helvetia</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-orange-600 font-bold text-lg">POLTEKKES</span>
                        </div>
                        <p class="text-xs text-slate-500">Poltekkes Medan</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-red-600 font-bold text-xl">UIN</span>
                        </div>
                        <p class="text-xs text-slate-500">UIN Sumatera Utara</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-teal-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-teal-600 font-bold text-lg">UNPRI</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Prima Indonesia</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-indigo-600 font-bold text-lg">SMK</span>
                        </div>
                        <p class="text-xs text-slate-500">SMK Farmasi Apipsu</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-pink-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-pink-600 font-bold text-lg">UISU</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Islam Sumut</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-cyan-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-cyan-600 font-bold text-lg">UMSU</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Muhammadiyah</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-amber-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-amber-600 font-bold text-lg">UNIMED</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Negeri Medan</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-lime-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-lime-600 font-bold text-lg">UNIKA</span>
                        </div>
                        <p class="text-xs text-slate-500">Univ. Katolik St. Thomas</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-slate-600 font-bold text-2xl">+</span>
                        </div>
                        <p class="text-xs text-slate-500">Dan lainnya...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 13: FAQ -->
    <section id="faq" class="section">
        <div class="max-w-4xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-yellow-100 text-yellow-800 px-4 py-1 rounded-full text-sm font-medium mb-4">FAQ</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Pertanyaan Umum</h2>
                <p class="text-slate-600">Jawaban atas pertanyaan yang sering ditanyakan</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Berapa lama proses verifikasi pendaftaran?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-4 text-slate-600">
                        Proses verifikasi membutuhkan waktu maksimal 7 hari kerja setelah dokumen lengkap diterima. Anda
                        akan menerima konfirmasi melalui email.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Apakah ada biaya untuk PKL/Magang?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-4 text-slate-600">
                        Tidak ada biaya yang dikenakan untuk kegiatan PKL/Magang di BBPOM Medan. Semua fasilitas
                        bimbingan
                        disediakan secara gratis.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Berapa minimal durasi PKL/Magang?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-4 text-slate-600">
                        Minimal durasi PKL adalah 2 minggu, sedangkan untuk PKPA minimal 4 minggu (100 jam praktik).
                        Durasi
                        dapat disesuaikan dengan kebutuhan kurikulum institusi.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Apakah disediakan sertifikat?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-4 text-slate-600">
                        Ya, setiap peserta yang menyelesaikan kegiatan akan mendapatkan sertifikat resmi dari BBPOM di
                        Medan
                        sebagai bukti telah menyelesaikan program.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Bagaimana jika kuota sudah penuh?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-4 text-slate-600">
                        Jika kuota sudah penuh, Anda dapat mendaftar untuk periode berikutnya atau menghubungi kami
                        untuk
                        informasi ketersediaan di bidang lain.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 14: KONTAK -->
    <section id="kontak" class="section">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-emerald-100 text-emerald-800 px-4 py-1 rounded-full text-sm font-medium mb-4">Kontak</span>
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Hubungi Kami</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Untuk informasi lebih lanjut, silakan hubungi kami</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Alamat</h4>
                            <p class="text-slate-600">Jalan Willem Iskandar, Pasar V Barat I No. 2, Medan Estate, Medan
                                20371, Sumatera Utara</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Telepon</h4>
                            <p class="text-slate-600">(061) 4555501</p>
                            <p class="text-slate-600">Fax: (061) 4155245</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg flex items-start gap-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Email</h4>
                            <p class="text-slate-600">bbpom_medan@pom.go.id</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg flex items-start gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 mb-1">Jam Operasional</h4>
                            <p class="text-slate-600">Senin - Kamis: 07.30 - 16.00 WIB</p>
                            <p class="text-slate-600">Jumat: 07.30 - 16.30 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0064!2d98.6830!3d3.5890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMzUnMjAuNCJOIDk4wrA0MScwMC4yIkU!5e0!3m2!1sen!2sid!4v1234567890"
                        width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- End Main Content Wrapper -->