@extends('layouts.app')

@section('content')
@php
    $locale = app()->getLocale();
    $name = is_array($business['name'] ?? null) ? ($business['name'][$locale] ?? 'Euro Asia Garage') : ($business['name'] ?? 'Euro Asia Garage');
    $tagline = is_array($business['tagline'] ?? null) ? ($business['tagline'][$locale] ?? __('Your Trusted Auto Repair Partner')) : ($business['tagline'] ?? __('Your Trusted Auto Repair Partner'));
    $address = is_array($business['address'] ?? null) ? ($business['address'][$locale] ?? '') : ($business['address'] ?? '');
    $hours = is_array($business['hours'] ?? null) ? ($business['hours'][$locale] ?? '') : ($business['hours'] ?? '');
    $phone = $business['phone'] ?? '011-3751 6627';
    $whatsapp = $business['whatsapp'] ?? '601137516627';
    $mapsEmbedUrl = $business['maps_embed_url'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.393552035965!2d102.26573557496792!3d2.28364199769632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e57fe6ce8a97%3A0xa04bf1ea135e59bc!2sEuroAsia%20Garage!5e1!3m2!1sen!2smy!4v1790037027199!5m2!1sen!2smy';
    $googleMapsUrl = 'https://maps.google.com/?q=' . urlencode('EuroAsia Garage, Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Malacca');
    $wazeUrl = 'https://waze.com/ul?q=' . urlencode('EuroAsia Garage Durian Tunggal');
@endphp

{{-- Hero Section --}}
<section class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden">
    {{-- Ambient Background Glow --}}
    <div class="absolute inset-0 pointer-events-none -z-10">
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-brand-500/10 blur-[130px] rounded-full"></div>
        <div class="absolute bottom-0 right-10 w-[400px] h-[300px] bg-brand-600/5 blur-[100px] rounded-full"></div>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            {{-- Location Badge --}}
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-dark-900/90 border border-dark-800 text-xs font-semibold text-brand-400 mb-6 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-brand-500 animate-pulse"></span>
                <span>{{ __('Durian Tunggal, Malacca') }}</span>
                <span class="text-dark-600">•</span>
                <span class="text-dark-300">{{ __('Professional Workshop') }}</span>
            </div>

            {{-- Main Title --}}
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white mb-6">
                {{ $name }}
            </h1>

            <p class="text-xl sm:text-2xl font-semibold text-brand-400 mb-4">
                {{ $tagline }}
            </p>

            <p class="text-base sm:text-lg text-dark-300 mb-8 leading-relaxed max-w-2xl mx-auto">
                {{ __('We provide professional and reliable auto repair services to keep your vehicle running smoothly.') }}
            </p>

            {{-- Call-To-Action Buttons --}}
            <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
                {{-- Call Now Button --}}
                <a href="tel:{{ $phone }}" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-semibold shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <span>{{ __('Call Us Now') }}: {{ $phone }}</span>
                </a>

                {{-- WhatsApp Button --}}
                <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold shadow-lg shadow-emerald-600/20 transition-all transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
                    </svg>
                    <span>{{ __('WhatsApp Us') }}</span>
                </a>

                {{-- Get Directions Button --}}
                <a href="#location" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-dark-900/90 hover:bg-dark-850 text-dark-200 hover:text-white font-medium border border-dark-800 transition-colors">
                    <svg class="w-5 h-5 text-brand-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span>{{ __('Get Directions') }}</span>
                </a>
            </div>

            {{-- Feature highlights badges --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-6 border-t border-dark-850 text-left">
                <div class="p-3 rounded-xl bg-dark-900/60 border border-dark-800/80">
                    <p class="text-xs text-dark-400 font-medium">{{ __('Operating Hours') }}</p>
                    <p class="text-sm font-semibold text-white mt-1">{{ __('Everyday: 9:00 AM – 6:00 PM') }}</p>
                    <p class="text-xs text-amber-400 mt-0.5">{{ __('Sunday: Closed') }}</p>
                </div>
                <div class="p-3 rounded-xl bg-dark-900/60 border border-dark-800/80">
                    <p class="text-xs text-dark-400 font-medium">{{ __('Workshop') }}</p>
                    <p class="text-sm font-semibold text-white mt-1">{{ __('Experienced Mechanics') }}</p>
                    <p class="text-xs text-brand-400 mt-0.5">Reliable & Honest</p>
                </div>
                <div class="p-3 rounded-xl bg-dark-900/60 border border-dark-800/80">
                    <p class="text-xs text-dark-400 font-medium">{{ __('Spare Parts') }}</p>
                    <p class="text-sm font-semibold text-white mt-1">{{ __('Quality Parts') }}</p>
                    <p class="text-xs text-emerald-400 mt-0.5">Genuine & OEM</p>
                </div>
                <div class="p-3 rounded-xl bg-dark-900/60 border border-dark-800/80">
                    <p class="text-xs text-dark-400 font-medium">{{ __('Cost') }}</p>
                    <p class="text-sm font-semibold text-white mt-1">{{ __('Transparent Pricing') }}</p>
                    <p class="text-xs text-blue-400 mt-0.5">No Hidden Fees</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Section --}}
<section id="services" class="py-20 bg-dark-900/50 border-t border-b border-dark-800/80">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider text-brand-400 bg-brand-500/10 rounded-full mb-3">{{ __('Our Services') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">{{ __('What We Do') }}</h2>
            <p class="mt-3 text-base text-dark-300">{{ __('We provide professional and reliable auto repair services to keep your vehicle running smoothly.') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Service 1: Engine Repair --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.32l-3.232 3.232a.75.75 0 01-1.06 0l-1.061-1.06a.75.75 0 010-1.061l3.232-3.232a4.5 4.5 0 00-6.32 4.486c.048.58.024 1.193-.14 1.743" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Engine Repair & Diagnostics') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Engine repair description') }}</p>
            </div>

            {{-- Service 2: Brake Service --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Brake System & Safety') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Brake service description') }}</p>
            </div>

            {{-- Service 3: Periodic Oil Change --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Periodic Oil & Filter Service') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Oil change description') }}</p>
            </div>

            {{-- Service 4: Suspension & Steering --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.485 3.515l1.414-1.414m12.728 0l1.414 1.414m-14.142 0l-1.414 1.414m16.97 0l-1.414-1.414" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Suspension & Underbody') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Suspension description') }}</p>
            </div>

            {{-- Service 5: Aircond Service --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Aircond & Cooling System') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Aircond description') }}</p>
            </div>

            {{-- Service 6: General Inspection --}}
            <div class="group p-6 rounded-2xl bg-dark-950/80 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-5 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('Pre-Trip & Full Inspection') }}</h3>
                <p class="text-sm text-dark-300 leading-relaxed">{{ __('Inspection description') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- Gallery Section --}}
<section id="gallery" class="py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider text-brand-400 bg-brand-500/10 rounded-full mb-3">{{ __('Gallery') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">{{ __('Workshop Photos') }}</h2>
            <p class="mt-3 text-base text-dark-300">{{ __('A glimpse of our workshop and the work we do.') }}</p>
        </div>

        {{-- Photos Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $galleryItems = [
                    [
                        'title' => __('Workshop Bay'),
                        'subtitle' => 'Durian Tunggal, Malacca',
                        'icon' => 'building',
                    ],
                    [
                        'title' => __('Engine Diagnostics'),
                        'subtitle' => 'High precision troubleshooting',
                        'icon' => 'cpu',
                    ],
                    [
                        'title' => __('Brake & Undercarriage'),
                        'subtitle' => 'Hydraulic lift inspection',
                        'icon' => 'disc',
                    ],
                    [
                        'title' => __('Scheduled Maintenance'),
                        'subtitle' => 'Fluids, filters & safety check',
                        'icon' => 'wrench',
                    ],
                    [
                        'title' => __('Tools & Equipment'),
                        'subtitle' => 'Specialized automotive tooling',
                        'icon' => 'tool',
                    ],
                    [
                        'title' => __('Vehicle Inspection'),
                        'subtitle' => 'Quality assurance guarantee',
                        'icon' => 'check',
                    ],
                ];
            @endphp

            @foreach ($galleryItems as $item)
                <div class="group relative overflow-hidden rounded-2xl bg-dark-900 border border-dark-800 aspect-[4/3] flex flex-col justify-end p-6 hover:border-brand-500/40 transition-all duration-300">
                    {{-- Decorative automotive pattern background --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-dark-850 to-dark-950"></div>
                    <div class="absolute inset-0 opacity-15 bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-brand-400 via-transparent to-transparent group-hover:opacity-30 transition-opacity"></div>
                    
                    {{-- Workshop icon visual --}}
                    <div class="absolute top-6 left-6 w-12 h-12 rounded-xl bg-dark-800/80 border border-dark-700/60 flex items-center justify-center text-brand-400 group-hover:scale-110 group-hover:border-brand-500/50 transition-all">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <span class="text-xs font-semibold text-brand-400 uppercase tracking-wider mb-1 block">{{ __('Photo coming soon') }}</span>
                        <h4 class="text-lg font-bold text-white">{{ $item['title'] }}</h4>
                        <p class="text-xs text-dark-400 mt-0.5">{{ $item['subtitle'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Location & Map Section --}}
<section id="location" class="py-20 bg-dark-900/50 border-t border-b border-dark-800/80">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider text-brand-400 bg-brand-500/10 rounded-full mb-3">{{ __('Find Us') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">{{ __('Workshop Location') }}</h2>
            <p class="mt-3 text-base text-dark-300">Terminal Kenderaan Berat, Durian Tunggal, Malacca</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            {{-- Location Details Cards (5 cols) --}}
            <div class="lg:col-span-5 flex flex-col justify-between gap-6">
                {{-- Address Card --}}
                <div class="p-6 rounded-2xl bg-dark-950 border border-dark-800 shadow-md">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">{{ __('Address') }}</h3>
                            <p class="text-sm text-dark-300 leading-relaxed">{{ $address }}</p>
                        </div>
                    </div>
                </div>

                {{-- Operating Hours Card --}}
                <div class="p-6 rounded-2xl bg-dark-950 border border-dark-800 shadow-md">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="text-lg font-bold text-white mb-2">{{ __('Operating Hours') }}</h3>
                            <div class="space-y-1.5 text-sm">
                                <div class="flex justify-between items-center text-dark-200">
                                    <span>{{ __('Everyday') }}</span>
                                    <span class="font-semibold text-white">9:00 AM – 6:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center text-dark-400 pt-1 border-t border-dark-800">
                                    <span>{{ __('Sunday') }}</span>
                                    <span class="font-semibold text-amber-400">{{ __('Closed') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- External Map Buttons --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="{{ $googleMapsUrl }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-dark-950 hover:bg-dark-900 border border-dark-800 hover:border-brand-500/50 text-white text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 text-brand-400" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span>{{ __('Open in Google Maps') }}</span>
                    </a>
                    <a href="{{ $wazeUrl }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-dark-950 hover:bg-dark-900 border border-dark-800 hover:border-brand-500/50 text-white text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 text-brand-400" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.93V17a1 1 0 0 1-2 0v-.07A8.006 8.006 0 0 1 4.07 11H5a1 1 0 0 1 0-2h-.93A8.006 8.006 0 0 1 11 4.07V5a1 1 0 0 1 2 0v-.93A8.006 8.006 0 0 1 19.93 11H19a1 1 0 0 1 0 2h.93A8.006 8.006 0 0 1 13 16.93z"/>
                        </svg>
                        <span>{{ __('Open in Waze') }}</span>
                    </a>
                </div>
            </div>

            {{-- Google Maps Embed (7 cols) --}}
            <div class="lg:col-span-7 h-[420px] sm:h-[480px] rounded-2xl overflow-hidden border border-dark-800 shadow-xl bg-dark-950">
                <iframe 
                    src="{{ $mapsEmbedUrl }}" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="strict-origin-when-cross-origin"
                    title="Euro Asia Garage Google Maps Location">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-wider text-brand-400 bg-brand-500/10 rounded-full mb-3">{{ __('Contact Us') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">{{ __('Get In Touch') }}</h2>
            <p class="mt-3 text-base text-dark-300">{{ __('Need assistance or want to schedule a repair? Reach out directly via call or WhatsApp.') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            {{-- Phone Card --}}
            <a href="tel:{{ $phone }}" class="group p-6 rounded-2xl bg-dark-900 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 text-center flex flex-col items-center">
                <div class="w-14 h-14 rounded-2xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-4 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">{{ __('Call Directly') }}</h3>
                <p class="text-xs text-dark-400 mb-3">{{ __('Call Us Now') }}</p>
                <span class="text-brand-400 font-bold text-lg group-hover:underline">{{ $phone }}</span>
            </a>

            {{-- WhatsApp Card --}}
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="group p-6 rounded-2xl bg-dark-900 border border-dark-800 hover:border-emerald-500/50 transition-all duration-300 text-center flex flex-col items-center">
                <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">{{ __('Chat on WhatsApp') }}</h3>
                <p class="text-xs text-dark-400 mb-3">Instant Messaging</p>
                <span class="text-emerald-400 font-bold text-lg group-hover:underline">+60 11-3751 6627</span>
            </a>

            {{-- Location Card --}}
            <a href="#location" class="group p-6 rounded-2xl bg-dark-900 border border-dark-800 hover:border-brand-500/50 transition-all duration-300 text-center flex flex-col items-center">
                <div class="w-14 h-14 rounded-2xl bg-brand-500/10 text-brand-400 flex items-center justify-center mb-4 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">{{ __('Visit Our Workshop') }}</h3>
                <p class="text-xs text-dark-400 mb-3">Durian Tunggal, Melaka</p>
                <span class="text-brand-400 font-bold text-sm group-hover:underline">{{ __('Get Directions') }} &rarr;</span>
            </a>
        </div>
    </div>
</section>

{{-- Floating WhatsApp Quick Button for Mobile & Desktop --}}
<div class="fixed bottom-6 right-6 z-40">
    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="flex items-center gap-2 px-4 py-3 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold shadow-2xl shadow-emerald-600/50 hover:scale-105 transition-all"
       aria-label="WhatsApp Us">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
        </svg>
        <span class="hidden sm:inline text-sm font-bold">WhatsApp</span>
    </a>
</div>
@endsection
