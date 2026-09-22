@php
    $siteName = is_array($business['name'] ?? null) ? ($business['name'][app()->getLocale()] ?? 'Euro Asia Garage') : ($business['name'] ?? 'Euro Asia Garage');
    $sitePhone = $business['phone'] ?? '011-3751 6627';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Euro Asia Garage — Professional auto repair and car workshop in Durian Tunggal, Malacca. Engine repair, brake service, oil change, and more.">
    <title>{{ $siteName }} — {{ __('Your Trusted Auto Repair Partner') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-950 text-dark-100 antialiased">
    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-dark-950/90 backdrop-blur-md border-b border-dark-800/50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                {{-- Logo / Brand --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-500 text-white font-bold text-sm">EA</div>
                    <span class="text-lg font-bold text-white tracking-tight">Euro Asia Garage</span>
                </a>

                {{-- Nav Links (Desktop) --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#services" class="text-sm font-medium text-dark-300 hover:text-brand-400 transition-colors">{{ __('Our Services') }}</a>
                    <a href="#gallery" class="text-sm font-medium text-dark-300 hover:text-brand-400 transition-colors">{{ __('Gallery') }}</a>
                    <a href="#location" class="text-sm font-medium text-dark-300 hover:text-brand-400 transition-colors">{{ __('Find Us') }}</a>
                    <a href="#contact" class="text-sm font-medium text-dark-300 hover:text-brand-400 transition-colors">{{ __('Contact Us') }}</a>
                </div>

                {{-- Language Toggle + Call Button --}}
                <div class="flex items-center gap-3">
                    {{-- Language Toggle --}}
                    <div class="flex items-center rounded-full bg-dark-800 p-0.5">
                        <a href="{{ route('locale.switch', 'en') }}"
                           class="rounded-full px-3 py-1 text-xs font-semibold transition-all {{ app()->getLocale() === 'en' ? 'bg-brand-500 text-white' : 'text-dark-400 hover:text-white' }}">
                            {{ __('EN') }}
                        </a>
                        <a href="{{ route('locale.switch', 'ms') }}"
                           class="rounded-full px-3 py-1 text-xs font-semibold transition-all {{ app()->getLocale() === 'ms' ? 'bg-brand-500 text-white' : 'text-dark-400 hover:text-white' }}">
                            {{ __('BM') }}
                        </a>
                    </div>

                    {{-- Call Button --}}
                    <a href="tel:{{ $sitePhone }}" class="hidden sm:inline-flex items-center gap-2 rounded-full bg-brand-500 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-600 transition-colors">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        {{ $sitePhone }}
                    </a>

                    {{-- Mobile Menu Button --}}
                    <button id="mobile-menu-btn" class="md:hidden rounded-lg p-2 text-dark-400 hover:text-white hover:bg-dark-800 transition-colors" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-dark-800">
            <div class="space-y-1 px-4 py-4">
                <a href="#services" class="block rounded-lg px-3 py-2 text-base font-medium text-dark-300 hover:bg-dark-800 hover:text-white">{{ __('Our Services') }}</a>
                <a href="#gallery" class="block rounded-lg px-3 py-2 text-base font-medium text-dark-300 hover:bg-dark-800 hover:text-white">{{ __('Gallery') }}</a>
                <a href="#location" class="block rounded-lg px-3 py-2 text-base font-medium text-dark-300 hover:bg-dark-800 hover:text-white">{{ __('Find Us') }}</a>
                <a href="#contact" class="block rounded-lg px-3 py-2 text-base font-medium text-dark-300 hover:bg-dark-800 hover:text-white">{{ __('Contact Us') }}</a>
                <a href="tel:{{ $sitePhone }}" class="mt-2 flex items-center gap-2 rounded-lg bg-brand-500 px-3 py-2 text-base font-semibold text-white">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                    {{ $sitePhone }}
                </a>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-dark-800 bg-dark-950 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-4 sm:flex-row sm:justify-between">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-500 text-white font-bold text-xs">EA</div>
                    <span class="text-sm font-semibold text-dark-300">Euro Asia Garage</span>
                </div>
                <p class="text-sm text-dark-500">&copy; {{ date('Y') }} Euro Asia Garage. {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>

    {{-- Mobile Menu Script --}}
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Close mobile menu when clicking a nav link
        document.querySelectorAll('#mobile-menu a[href^="#"]').forEach(function(link) {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>
