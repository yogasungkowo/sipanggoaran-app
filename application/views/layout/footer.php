<!-- Footer -->
<footer class="bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?= base_url('public/assets/img/BADAN_POM.png') ?>" alt="BPOM Logo" class="w-12 h-12 object-contain bg-white rounded-lg p-1">
                    <div>
                        <h3 class="font-bold">SI-PANGGOARAN</h3>
                        <p class="text-xs text-slate-400">BBPOM di Medan</p>
                    </div>
                </div>
                <p class="text-slate-400 text-sm">
                    Sistem Pelaporan Magang Orientasi dan Kunjungan Balai Besar Pengawas Obat dan Makanan di Medan.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="#" data-section="persyaratan" class="nav-link hover:text-white transition-colors">Persyaratan</a></li>
                    <li><a href="#" data-section="kuota" class="nav-link hover:text-white transition-colors">Ketersediaan Kuota</a></li>
                    <li><a href="#" data-section="pengiriman" class="nav-link hover:text-white transition-colors">Pengiriman Berkas</a></li>
                    <li><a href="#" data-section="faq" class="nav-link hover:text-white transition-colors">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Jl. Pemuda No.20, Medan, Sumatera Utara</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>(061) 4555501</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>bbpom_medan@pom.go.id</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-800 mt-8 pt-8 text-center text-sm text-slate-500">
            <p>&copy; <?= date('Y') ?> Balai Besar POM di Medan. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- JavaScript for Navigation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 600,
        easing: 'ease-out-cubic',
        once: false,
        offset: 50
    });

    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');
    const moreMenuBtn = document.getElementById('more-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    
    // Desktop sidebar toggle
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const toggleIconOpen = document.getElementById('toggle-icon-open');
    const toggleIconClose = document.getElementById('toggle-icon-close');
    
    let sidebarOpen = false;

    // Toggle sidebar (Desktop)
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebarOpen = !sidebarOpen;
            
            if (sidebarOpen) {
                sidebar.classList.remove('hidden');
                sidebar.classList.add('flex');
                sidebarOverlay.classList.remove('hidden');
                sidebarOverlay.classList.add('block');
                toggleIconOpen.classList.add('hidden');
                toggleIconClose.classList.remove('hidden');
                sidebarToggle.classList.add('left-[300px]');
            } else {
                sidebar.classList.add('hidden');
                sidebar.classList.remove('flex');
                sidebarOverlay.classList.add('hidden');
                sidebarOverlay.classList.remove('block');
                toggleIconOpen.classList.remove('hidden');
                toggleIconClose.classList.add('hidden');
                sidebarToggle.classList.remove('left-[300px]');
            }
        });
    }

    // Close sidebar when clicking overlay
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            sidebarOpen = false;
            sidebar.classList.add('hidden');
            sidebar.classList.remove('flex');
            sidebarOverlay.classList.add('hidden');
            sidebarOverlay.classList.remove('block');
            toggleIconOpen.classList.remove('hidden');
            toggleIconClose.classList.add('hidden');
            sidebarToggle.classList.remove('left-[300px]');
        });
    }

    // Toggle mobile menu
    if (moreMenuBtn) {
        moreMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenuOverlay.classList.toggle('hidden');
        });
    }

    // Close mobile menu when clicking overlay
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenuOverlay.classList.add('hidden');
        });
    }

    // Section navigation with AOS animation
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionId = this.getAttribute('data-section');
            
            // Hide all sections
            sections.forEach(section => {
                section.classList.remove('active');
            });

            // Show target section with animation
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                // Small delay for animation effect
                setTimeout(() => {
                    targetSection.classList.add('active');
                    // Refresh AOS animations for the new section
                    AOS.refresh();
                }, 50);
            }

            // Update active nav link
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
                if (navLink.getAttribute('data-section') === sectionId) {
                    navLink.classList.add('active');
                }
            });

            // Close sidebar on desktop after navigation
            if (sidebarOpen && window.innerWidth >= 1024) {
                sidebarOpen = false;
                sidebar.classList.add('hidden');
                sidebar.classList.remove('flex');
                sidebarOverlay.classList.add('hidden');
                sidebarOverlay.classList.remove('block');
                toggleIconOpen.classList.remove('hidden');
                toggleIconClose.classList.add('hidden');
                sidebarToggle.classList.remove('left-[300px]');
            }

            // Close mobile menu
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
            if (mobileMenuOverlay) {
                mobileMenuOverlay.classList.add('hidden');
            }

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            
            answer.classList.toggle('hidden');
            if (icon) {
                icon.classList.toggle('rotate-180');
            }
        });
    });
});
</script>

</body>
</html>