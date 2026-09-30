@php
    $siteLocale = app()->getLocale();
    $siteName = is_array($business['name'] ?? null) ? ($business['name'][$siteLocale] ?? 'Euro Asia Garage') : ($business['name'] ?? 'Euro Asia Garage');
    $sitePhone = $business['phone'] ?? '011-3751 6627';
    $siteWhatsapp = $business['whatsapp'] ?? '601137516627';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Euro Asia Garage — Professional car repair workshop in Durian Tunggal, Malacca. Engine repair, brake service, periodic maintenance, and diagnostics.">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ $siteName }} — {{ __('Your Trusted Auto Repair Partner') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fbfcfd] text-slate-800 font-sans antialiased pb-16 md:pb-0">

    {{-- Top Announcement / Contact Bar (Matches UI Kit Red Topbar) --}}
    <div class="bg-rust-500 text-white text-xs py-2 px-4 border-b border-rust-600/30">
        <div class="mx-auto max-w-7xl flex flex-col sm:flex-row items-center justify-between gap-2">
            <div class="flex items-center gap-4 flex-wrap justify-center sm:justify-start">
                <a href="tel:{{ $sitePhone }}" class="flex items-center gap-1.5 hover:text-rust-100 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <span class="font-medium">{{ $sitePhone }}</span>
                </a>
                <span class="hidden sm:inline text-rust-300">|</span>
                <span class="flex items-center gap-1 text-rust-100">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Mon - Sat: 9:00 AM – 6:00 PM</span>
                </span>
            </div>

            {{-- Right side: Language Switcher --}}
            <div class="flex items-center gap-2">
                <span class="text-rust-200 text-[11px] uppercase tracking-wider font-medium">Language:</span>
                <div class="flex items-center bg-rust-600/60 rounded-full p-0.5 text-[11px]">
                    <a href="{{ route('locale.switch', 'en') }}"
                       class="px-2.5 py-0.5 rounded-full font-semibold transition-all {{ $siteLocale === 'en' ? 'bg-white text-rust-600 shadow-xs' : 'text-white/80 hover:text-white' }}">
                        EN
                    </a>
                    <a href="{{ route('locale.switch', 'ms') }}"
                       class="px-2.5 py-0.5 rounded-full font-semibold transition-all {{ $siteLocale === 'ms' ? 'bg-white text-rust-600 shadow-xs' : 'text-white/80 hover:text-white' }}">
                        BM
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Navigation Bar (Clean White, Sticky, UI Kit Aesthetic) --}}
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-xs transition-all">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-18 items-center justify-between">
                {{-- Brand Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-rust-500 text-white shadow-md shadow-rust-500/20 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xl font-black tracking-tight text-slate-900 block leading-tight">Euro Asia <span class="text-rust-500">Garage</span></span>
                        <span class="text-[10px] uppercase font-bold tracking-widest text-slate-400 block -mt-0.5">Car Repair & Servicing</span>
                    </div>
                </a>

                {{-- Desktop Nav Links --}}
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="#hero" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Home') ?? 'Home' }}</a>
                    <a href="#about" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Who We Are') }}</a>
                    <a href="#services" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Our Services') }}</a>
                    <a href="#gallery" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Our Gallery') }}</a>
                    <a href="#location" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Find Us') }}</a>
                    <a href="#contact" class="text-sm font-semibold text-slate-700 hover:text-rust-500 transition-colors">{{ __('Contact Us') }}</a>
                </nav>

                {{-- Right Actions --}}
                <div class="hidden sm:flex items-center gap-3">
                    <a href="tel:{{ $sitePhone }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-rust-500 hover:bg-rust-600 text-white font-semibold text-sm shadow-md shadow-rust-500/20 hover:shadow-lg hover:shadow-rust-500/30 transition-all transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>{{ __('Call Us Now') }}</span>
                    </a>
                </div>

                {{-- Mobile Menu Trigger --}}
                <div class="flex items-center gap-2 lg:hidden">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-700 hover:text-rust-500 hover:bg-slate-100 transition-colors" aria-label="Toggle Navigation">
                        <svg id="menu-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 bg-white shadow-xl transition-all">
            <div class="px-4 py-4 space-y-2">
                <a href="#hero" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Home') ?? 'Home' }}</a>
                <a href="#about" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Who We Are') }}</a>
                <a href="#services" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Our Services') }}</a>
                <a href="#gallery" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Our Gallery') }}</a>
                <a href="#location" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Find Us') }}</a>
                <a href="#contact" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-800 hover:bg-rust-50 hover:text-rust-600 transition-colors">{{ __('Contact Us') }}</a>

                <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
                    <a href="tel:{{ $sitePhone }}" class="flex items-center justify-center gap-2 w-full py-3 rounded-lg bg-rust-500 text-white font-semibold text-sm shadow-sm">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>{{ __('Call Us Now') }}: {{ $sitePhone }}</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-navy-900 text-slate-300 pt-16 pb-12 border-t border-navy-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                {{-- Column 1: Brand Info --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-rust-500 text-white shadow-md">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-black tracking-tight text-white">Euro Asia <span class="text-rust-500">Garage</span></span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed mb-4">
                        {{ __('About text') }}
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-navy-800 text-xs font-semibold text-rust-400 border border-navy-700">
                        <span>{{ __('A Certified Workshop') }}</span>
                    </div>
                </div>

                {{-- Column 2: Quick Links --}}
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4">{{ __('Our Services') }}</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#services" class="hover:text-rust-400 transition-colors">{{ __('Fluid Exchange') }}</a></li>
                        <li><a href="#services" class="hover:text-rust-400 transition-colors">{{ __('Engine Diagnostic') }}</a></li>
                        <li><a href="#services" class="hover:text-rust-400 transition-colors">{{ __('Battery Repairs') }}</a></li>
                        <li><a href="#services" class="hover:text-rust-400 transition-colors">{{ __('Car A/C Recharge') }}</a></li>
                        <li><a href="#services" class="hover:text-rust-400 transition-colors">{{ __('Periodic Maintenance & Safety Inspections') }}</a></li>
                    </ul>
                </div>

                {{-- Column 3: Workshop Hours --}}
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4">{{ __('Operating Hours') }}</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li class="flex justify-between items-center text-slate-300">
                            <span>{{ __('Monday – Saturday') }}:</span>
                            <span class="font-semibold text-white">9:00 AM – 6:00 PM</span>
                        </li>
                        <li class="flex justify-between items-center text-slate-400 border-t border-navy-800 pt-2">
                            <span>{{ __('Sunday') }}:</span>
                            <span class="font-semibold text-rust-400">{{ __('Closed') }}</span>
                        </li>
                    </ul>
                    <div class="mt-4 p-3 rounded-lg bg-navy-800 border border-navy-700">
                        <p class="text-xs text-slate-400 leading-snug">
                            {{ __('Durian Tunggal, Malacca') }}
                        </p>
                    </div>
                </div>

                {{-- Column 4: Contact --}}
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white mb-4">{{ __('Contact Us') }}</h4>
                    <div class="space-y-3 text-sm">
                        <p class="text-slate-400 text-xs leading-relaxed">
                            Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Malacca
                        </p>
                        <a href="tel:{{ $sitePhone }}" class="flex items-center gap-2 text-white font-bold hover:text-rust-400 transition-colors">
                            <span class="w-7 h-7 rounded-lg bg-rust-500/20 text-rust-400 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                            </span>
                            <span>{{ $sitePhone }}</span>
                        </a>
                        <a href="https://wa.me/{{ $siteWhatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-emerald-400 font-bold hover:text-emerald-300 transition-colors">
                            <span class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                            </span>
                            <span>WhatsApp Direct</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-navy-800 text-center text-xs text-slate-500 flex flex-col sm:flex-row items-center justify-between gap-2">
                <p>&copy; {{ date('Y') }} Euro Asia Garage. {{ __('All rights reserved.') }}</p>
                <p>Terminal Kenderaan Berat, Durian Tunggal, Melaka</p>
            </div>
        </div>
    </footer>

    {{-- Sticky Bottom Action Bar for Mobile Interface (Crucial for Mobile Conversions) --}}
    <div class="md:hidden fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200 px-3 py-2.5 flex items-center gap-2 shadow-2xl">
        {{-- Call Button --}}
        <a href="tel:{{ $sitePhone }}" class="flex-1 flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 font-bold text-xs shadow-xs transition-colors">
            <svg class="w-4 h-4 text-rust-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
            <span>{{ __('Call Now') }}</span>
        </a>

        {{-- WhatsApp Button --}}
        <a href="https://wa.me/{{ $siteWhatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="flex-1 flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm transition-colors">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
            </svg>
            <span>WhatsApp</span>
        </a>

        {{-- Directions Button --}}
        <a href="#location" class="flex items-center justify-center p-2.5 rounded-lg border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 transition-colors" aria-label="Location">
            <svg class="w-4 h-4 text-rust-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
        </a>
    </div>

    {{-- Mobile Menu & Interactive Scripts --}}
    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });

            document.querySelectorAll('.mobile-nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    iconOpen.classList.remove('hidden');
                    iconClose.classList.add('hidden');
                });
            });
        }
    </script>
</body>
</html>
