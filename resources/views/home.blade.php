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

{{-- ========================================================================= --}}
{{-- 1. HERO SECTION (Dark cinematic automotive backdrop matching UI Kit)       --}}
{{-- ========================================================================= --}}
<section id="hero" class="relative bg-navy-950 text-white overflow-hidden pt-12 pb-24 md:pt-20 md:pb-36">
    {{-- Workshop Background Image with Cinematic Dark Gradient Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1613214149922-f1809c99b414?q=80&w=1920&auto=format&fit=crop" 
             alt="Euro Asia Garage Workshop" 
             class="w-full h-full object-cover object-center opacity-25 scale-105 transition-transform duration-1000 ease-out">
        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-navy-900/70"></div>
    </div>

    {{-- Decorative Background Gears / Ambient Glow --}}
    <div class="absolute top-10 right-10 w-96 h-96 bg-rust-500/10 rounded-full blur-3xl pointer-events-none animate-pulse-glow"></div>
    <div class="absolute bottom-10 left-1/3 w-72 h-72 bg-navy-800/40 rounded-full blur-2xl pointer-events-none"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left Column: Hero Text --}}
            <div class="lg:col-span-7 space-y-6 text-left">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rust-500/15 border border-rust-500/30 text-rust-400 text-xs font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-rust-500 animate-ping"></span>
                    <span>{{ __('A Certified Workshop') }}</span>
                    <span class="text-slate-500">•</span>
                    <span class="text-slate-300">Durian Tunggal</span>
                </div>

                {{-- Main Headline matching UI Kit --}}
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight">
                    {{ __('If Your Car') }} <span class="text-rust-500 inline-block transform hover:scale-105 transition-transform">{{ __('Hurts') }}</span><br>
                    {{ __('Bring It To Us!') }}
                </h1>

                {{-- Subtitle --}}
                <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
                    {{ __('Hero subtitle') }}
                </p>

                {{-- Stats Row directly under hero --}}
                <div class="grid grid-cols-3 gap-4 pt-2 pb-2 max-w-lg border-y border-white/10">
                    <div>
                        <span class="text-2xl sm:text-3xl font-black text-white">15+</span>
                        <p class="text-xs text-slate-400 font-medium mt-0.5">{{ __('Years Of Experience') }}</p>
                    </div>
                    <div>
                        <span class="text-2xl sm:text-3xl font-black text-rust-400">5k+</span>
                        <p class="text-xs text-slate-400 font-medium mt-0.5">Vehicles Repaired</p>
                    </div>
                    <div>
                        <span class="text-2xl sm:text-3xl font-black text-emerald-400">100%</span>
                        <p class="text-xs text-slate-400 font-medium mt-0.5">Honest Service</p>
                    </div>
                </div>

                {{-- Call To Action Buttons --}}
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="tel:{{ $phone }}" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-lg bg-rust-500 hover:bg-rust-600 text-white font-bold text-sm shadow-lg shadow-rust-500/30 hover:shadow-rust-500/50 transition-all transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>{{ __('Call Now') }}: {{ $phone }}</span>
                    </a>

                    <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to inquire about car repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-lg bg-navy-800 hover:bg-navy-700 text-white font-semibold text-sm border border-navy-700 hover:border-emerald-500/50 transition-all">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
                        </svg>
                        <span>{{ __('WhatsApp Us') }}</span>
                    </a>
                </div>
            </div>

            {{-- Right Column: Mechanic Photo matching UI Kit --}}
            <div class="lg:col-span-5 relative hidden md:block">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    {{-- Decorative frame --}}
                    <div class="absolute -inset-2 rounded-2xl bg-gradient-to-tr from-rust-500/30 to-transparent blur-lg"></div>
                    <div class="relative rounded-2xl overflow-hidden border-2 border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1486006920555-c77dce18193b?q=80&w=900&auto=format&fit=crop" 
                             alt="Mechanic Inspecting Car Engine" 
                             class="w-full h-[440px] object-cover hover:scale-105 transition-transform duration-700">
                    </div>

                    {{-- Floating Experience Badge (Matches UI Kit floating element) --}}
                    <div class="absolute -bottom-6 -left-6 bg-white text-slate-900 p-4 rounded-xl shadow-2xl border border-slate-100 flex items-center gap-3 animate-float">
                        <div class="w-12 h-12 rounded-lg bg-rust-500 text-white flex items-center justify-center font-black text-xl">
                            EA
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-rust-500">Euro Asia Garage</p>
                            <p class="text-sm font-extrabold text-slate-900">Durian Tunggal, Melaka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 2. FLOATING QUICK SERVICE CARDS (4 white cards overlapping the hero)       --}}
{{-- ========================================================================= --}}
<section class="relative z-20 -mt-12 sm:-mt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        {{-- Card 1: Fluid Exchange --}}
        <div class="group bg-white p-6 rounded-xl shadow-md border border-slate-200/80 hover:border-rust-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-lg bg-rust-50 text-rust-500 flex items-center justify-center mb-4 group-hover:bg-rust-500 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ __('Fluid Exchange') }}</h3>
                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Fluid description') }}</p>
            </div>
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hi Euro Asia Garage, I want to inquire about Fluid Exchange / Oil Service.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-rust-500 mt-4 group-hover:underline">
                <span>Inquire Service</span>
                <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>

        {{-- Card 2: Battery Repairs --}}
        <div class="group bg-white p-6 rounded-xl shadow-md border border-slate-200/80 hover:border-rust-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-lg bg-rust-50 text-rust-500 flex items-center justify-center mb-4 group-hover:bg-rust-500 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ __('Battery Repairs') }}</h3>
                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Battery description') }}</p>
            </div>
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hi Euro Asia Garage, I want to inquire about Battery Check & Repair.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-rust-500 mt-4 group-hover:underline">
                <span>Inquire Service</span>
                <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>

        {{-- Card 3: Car A/C Recharge --}}
        <div class="group bg-white p-6 rounded-xl shadow-md border border-slate-200/80 hover:border-rust-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-lg bg-rust-50 text-rust-500 flex items-center justify-center mb-4 group-hover:bg-rust-500 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ __('Car A/C Recharge') }}</h3>
                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Aircond description') }}</p>
            </div>
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hi Euro Asia Garage, I want to inquire about Car Aircond Servicing.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-rust-500 mt-4 group-hover:underline">
                <span>Inquire Service</span>
                <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>

        {{-- Card 4: Engine Diagnostic --}}
        <div class="group bg-white p-6 rounded-xl shadow-md border border-slate-200/80 hover:border-rust-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-lg bg-rust-50 text-rust-500 flex items-center justify-center mb-4 group-hover:bg-rust-500 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.32l-3.232 3.232a.75.75 0 01-1.06 0l-1.061-1.06a.75.75 0 010-1.061l3.232-3.232a4.5 4.5 0 00-6.32 4.486c.048.58.024 1.193-.14 1.743" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ __('Engine Diagnostic') }}</h3>
                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Diagnostic description') }}</p>
            </div>
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hi Euro Asia Garage, I want to inquire about Engine Diagnostic & Scanning.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-rust-500 mt-4 group-hover:underline">
                <span>Inquire Service</span>
                <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 3. ABOUT US / "INNOVATIVE METHODS" SECTION (Matches UI Kit Left/Right)    --}}
{{-- ========================================================================= --}}
<section id="about" class="py-20 md:py-28 bg-[#fbfcfd]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left Column: Text & Bullets --}}
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-rust-500">{{ __('Who We Are') }}</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-1 leading-tight">
                        {{ __('Innovative Methods Of') }} <span class="text-rust-500">{{ __('Car Repair') }}</span> {{ __('& Servicing') }}
                    </h2>
                </div>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    {{ __('About text') }}
                </p>

                {{-- Checklist with Rust Red Icons (Direct match to UI Kit) --}}
                <div class="space-y-3 pt-2">
                    <div class="flex items-center gap-3">
                        <span class="w-5 h-5 rounded-full bg-rust-100 text-rust-600 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="text-sm font-semibold text-slate-800">{{ __('We Provide Full-Service Car Repairing') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-5 h-5 rounded-full bg-rust-100 text-rust-600 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="text-sm font-semibold text-slate-800">{{ __('Quality Genuine & OEM Spare Parts') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-5 h-5 rounded-full bg-rust-100 text-rust-600 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="text-sm font-semibold text-slate-800">{{ __('Periodic Maintenance & Safety Inspections') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-5 h-5 rounded-full bg-rust-100 text-rust-600 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="text-sm font-semibold text-slate-800">{{ __('Transparent & Honest Workshop Pricing') }}</span>
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-4">
                    <a href="#location" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-semibold text-sm transition-colors">
                        <span>{{ __('Find Us') }}</span>
                        <span>&rarr;</span>
                    </a>
                    <a href="tel:{{ $phone }}" class="inline-flex items-center gap-2 text-sm font-bold text-rust-600 hover:text-rust-700">
                        <span>{{ __('Call Us Now') }}: {{ $phone }}</span>
                    </a>
                </div>
            </div>

            {{-- Right Column: White Car & Mechanic Graphic --}}
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=900&auto=format&fit=crop" 
                         alt="Car Servicing Workshop" 
                         class="w-full h-[380px] object-cover hover:scale-105 transition-transform duration-500">
                    
                    {{-- Overlay Tag --}}
                    <div class="absolute bottom-4 right-4 bg-navy-900/90 backdrop-blur-md text-white px-4 py-2.5 rounded-xl border border-navy-700 flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>
                        <span class="text-xs font-bold">{{ __('Operating Hours') }}: 9AM - 6PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 4. OUR ACHIEVEMENT / DARK STATISTICS BANNER (Matches Dark UI Kit Bar)     --}}
{{-- ========================================================================= --}}
<section class="bg-navy-900 py-16 text-white border-y border-navy-800 relative overflow-hidden">
    {{-- Ambient light effect --}}
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d9442e_1px,transparent_1px)] [background-size:16px_16px]"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-rust-400 block mb-2">{{ __('Our Achievement') }}</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-12">
            {{ __('Auto Repair Technical Statistics') }} <span class="text-rust-400">{{ __('You Must Know') }}</span>
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            {{-- Stat 1 --}}
            <div class="p-6 rounded-xl bg-navy-950/60 border border-navy-800 hover:border-rust-500/50 transition-colors">
                <span class="text-4xl font-black text-white block mb-1">15+</span>
                <p class="text-xs text-slate-400 font-medium">{{ __('Years Of Experience') }}</p>
            </div>

            {{-- Stat 2 --}}
            <div class="p-6 rounded-xl bg-navy-950/60 border border-navy-800 hover:border-rust-500/50 transition-colors">
                <span class="text-4xl font-black text-rust-400 block mb-1">50+</span>
                <p class="text-xs text-slate-400 font-medium">Services Available</p>
            </div>

            {{-- Stat 3 --}}
            <div class="p-6 rounded-xl bg-navy-950/60 border border-navy-800 hover:border-rust-500/50 transition-colors">
                <span class="text-4xl font-black text-emerald-400 block mb-1">98%+</span>
                <p class="text-xs text-slate-400 font-medium">{{ __('Satisfied Customers') }}</p>
            </div>

            {{-- Stat 4 --}}
            <div class="p-6 rounded-xl bg-navy-950/60 border border-navy-800 hover:border-rust-500/50 transition-colors">
                <span class="text-4xl font-black text-white block mb-1">6 Days</span>
                <p class="text-xs text-slate-400 font-medium">{{ __('Open 6 Days Weekly') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 5. PROJECTS / GALLERY ("Some Work Showcase For Your Inspirations")        --}}
{{-- ========================================================================= --}}
<section id="gallery" class="py-20 md:py-28 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-rust-500 block mb-1">{{ __('Our Gallery') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Some Work') }} <span class="text-rust-500">{{ __('Showcase') }}</span> {{ __('For Your') }} <span class="text-rust-500">{{ __('Inspirations') }}</span>
            </h2>
            <p class="mt-3 text-sm text-slate-500">
                A glimpse of our car repair works, diagnostics bay, and workshop facilities in Durian Tunggal, Malacca.
            </p>
        </div>

        {{-- Filter Category Tabs matching UI Kit --}}
        <div class="flex items-center justify-center gap-2 flex-wrap mb-10 overflow-x-auto py-1">
            <button class="gallery-tab active px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-rust-500 text-white shadow-xs" data-filter="all">
                {{ __('All') }}
            </button>
            <button class="gallery-tab px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="engine">
                {{ __('Engine') }}
            </button>
            <button class="gallery-tab px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="brake">
                {{ __('Brake') }}
            </button>
            <button class="gallery-tab px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="oil">
                {{ __('Oil') }}
            </button>
            <button class="gallery-tab px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="suspension">
                {{ __('Suspension') }}
            </button>
        </div>

        {{-- 6-Photo Grid matching UI Kit with Hover Zoom & Magnifier Icon --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $galleryPhotos = [
                    [
                        'title' => 'Engine Overhaul & Diagnostics',
                        'category' => 'engine',
                        'catName' => 'Engine Repair',
                        'image' => 'https://images.unsplash.com/photo-1486006920555-c77dce18193b?q=80&w=700&auto=format&fit=crop',
                    ],
                    [
                        'title' => 'Brake Disc Skimming & Pads',
                        'category' => 'brake',
                        'catName' => 'Brake System',
                        'image' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=700&auto=format&fit=crop',
                    ],
                    [
                        'title' => 'Periodic Lubrication & Filter Change',
                        'category' => 'oil',
                        'catName' => 'Oil Service',
                        'image' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=700&auto=format&fit=crop',
                    ],
                    [
                        'title' => 'Suspension Absorber & Bushing Fix',
                        'category' => 'suspension',
                        'catName' => 'Suspension',
                        'image' => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?q=80&w=700&auto=format&fit=crop',
                    ],
                    [
                        'title' => 'Workshop Hydraulic Lift Bay',
                        'category' => 'engine',
                        'catName' => 'Workshop Bay',
                        'image' => 'https://images.unsplash.com/photo-1613214149922-f1809c99b414?q=80&w=700&auto=format&fit=crop',
                    ],
                    [
                        'title' => '20-Point Safety & Pre-Trip Inspection',
                        'category' => 'oil',
                        'catName' => 'Vehicle Inspection',
                        'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=700&auto=format&fit=crop',
                    ],
                ];
            @endphp

            @foreach ($galleryPhotos as $photo)
                <div class="gallery-item group relative rounded-2xl overflow-hidden shadow-sm border border-slate-200 aspect-[4/3] bg-slate-900" data-cat="{{ $photo['category'] }}">
                    {{-- Image with hover zoom --}}
                    <img src="{{ $photo['image'] }}" 
                         alt="{{ $photo['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-out">
                    
                    {{-- Dark Gradient Overlay on Hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-between p-6">
                        {{-- Top Magnifier Icon (Matches Figma UI kit) --}}
                        <div class="flex justify-end">
                            <span class="w-10 h-10 rounded-full bg-rust-500 text-white flex items-center justify-center shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                        </div>

                        {{-- Bottom Info --}}
                        <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-rust-400 block mb-1">{{ $photo['catName'] }}</span>
                            <h4 class="text-base font-bold text-white">{{ $photo['title'] }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 6. CLIENT REVIEWS / TESTIMONIAL (Matches UI Kit Testimonial Card)         --}}
{{-- ========================================================================= --}}
<section class="py-20 bg-slate-50 border-t border-slate-200/80">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            {{-- Left: Text & Testimonial Box --}}
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-rust-500">{{ __('Client Reviews') }}</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-1">
                        {{ __('What Our') }} <span class="text-rust-500">{{ __('Clients') }}</span> {{ __('Say About Us') }}
                    </h2>
                </div>

                {{-- Testimonial Card matching UI Kit with quotation mark --}}
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-slate-200 relative">
                    {{-- Big Quote Mark Graphic in rust color --}}
                    <div class="text-rust-200 text-6xl font-serif absolute top-4 right-6 select-none pointer-events-none">
                        &ldquo;
                    </div>

                    {{-- Star Rating --}}
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        <span class="text-xs font-bold text-slate-500 ml-2">5.0 Star Service</span>
                    </div>

                    <p class="text-slate-700 text-sm sm:text-base italic leading-relaxed mb-6 relative z-10">
                        &ldquo;{{ __('Testimonial quote') }}&rdquo;
                    </p>

                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                        <div class="w-11 h-11 rounded-full bg-rust-500 text-white font-black flex items-center justify-center text-sm shadow-sm">
                            HR
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">{{ __('Customer Name') }}</h4>
                            <p class="text-xs text-slate-400">{{ __('Customer Location') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Happy Customer with Car Image matching UI Kit --}}
            <div class="lg:col-span-5 relative">
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" 
                         alt="Happy Car Owner" 
                         class="w-full h-[360px] object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========================================================================= --}}
{{-- 7. LOCATION & GOOGLE MAPS SECTION (Exact Google Maps Embed + Addresses)  --}}
{{-- ========================================================================= --}}
<section id="location" class="py-20 bg-white border-t border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-rust-500 block mb-1">{{ __('Find Us') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Workshop Location') }} & {{ __('Directions') }}
            </h2>
            <p class="mt-2 text-sm text-slate-500">Terminal Kenderaan Berat, Durian Tunggal, Malacca</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            {{-- Left side cards (5 cols) --}}
            <div class="lg:col-span-5 flex flex-col justify-between gap-5">
                {{-- Address Card --}}
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-rust-500 text-white flex items-center justify-center shrink-0 shadow-sm">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 mb-1">{{ __('Address') }}</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ $address }}</p>
                        </div>
                    </div>
                </div>

                {{-- Operating Hours Card --}}
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-rust-500 text-white flex items-center justify-center shrink-0 shadow-sm">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="text-base font-bold text-slate-900 mb-2">{{ __('Operating Hours') }}</h3>
                            <div class="space-y-1.5 text-xs sm:text-sm">
                                <div class="flex justify-between items-center text-slate-700">
                                    <span>{{ __('Everyday') }} (Mon - Sat)</span>
                                    <span class="font-bold text-slate-900">9:00 AM – 6:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center text-slate-500 pt-1 border-t border-slate-200">
                                    <span>{{ __('Sunday') }}</span>
                                    <span class="font-bold text-rust-600">{{ __('Closed') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Direct Navigation App Links --}}
                <div class="grid grid-cols-2 gap-3">
                    <a href="{{ $googleMapsUrl }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-white hover:bg-slate-100 border border-slate-300 text-slate-900 text-xs font-bold shadow-xs transition-colors">
                        <svg class="w-4 h-4 text-rust-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span>{{ __('Open in Google Maps') }}</span>
                    </a>
                    <a href="{{ $wazeUrl }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-white hover:bg-slate-100 border border-slate-300 text-slate-900 text-xs font-bold shadow-xs transition-colors">
                        <svg class="w-4 h-4 text-rust-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.93V17a1 1 0 0 1-2 0v-.07A8.006 8.006 0 0 1 4.07 11H5a1 1 0 0 1 0-2h-.93A8.006 8.006 0 0 1 11 4.07V5a1 1 0 0 1 2 0v-.93A8.006 8.006 0 0 1 19.93 11H19a1 1 0 0 1 0 2h.93A8.006 8.006 0 0 1 13 16.93z"/>
                        </svg>
                        <span>{{ __('Open in Waze') }}</span>
                    </a>
                </div>
            </div>

            {{-- Right side: Google Maps Embed (7 cols) --}}
            <div class="lg:col-span-7 h-[380px] sm:h-[450px] rounded-2xl overflow-hidden border border-slate-200 shadow-md bg-slate-100">
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

{{-- ========================================================================= --}}
{{-- 8. CONTACT CTA BANNER                                                     --}}
{{-- ========================================================================= --}}
<section id="contact" class="py-16 bg-rust-500 text-white relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mb-4">
            Need Fast, Honest & Reliable Auto Service?
        </h2>
        <p class="text-rust-100 text-base max-w-2xl mx-auto mb-8">
            Reach out to our team directly. We are ready to assist you with diagnostics, servicing, and repairs.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="tel:{{ $phone }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-white text-rust-600 font-extrabold text-sm shadow-lg hover:bg-rust-50 transition-all">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span>{{ __('Call Now') }}: {{ $phone }}</span>
            </a>
            <a href="https://wa.me/{{ $whatsapp }}?text={{ urlencode('Hello Euro Asia Garage, I would like to bring my car for repair / servicing.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-navy-950 text-white font-extrabold text-sm shadow-lg hover:bg-navy-900 transition-all">
                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
                </svg>
                <span>{{ __('WhatsApp Us') }}</span>
            </a>
        </div>
    </div>
</section>

{{-- Gallery Interactive Filter Script --}}
<script>
    document.querySelectorAll('.gallery-tab').forEach(function(tab) {
        tab.addEventListener('click', function() {
            // Remove active classes
            document.querySelectorAll('.gallery-tab').forEach(function(t) {
                t.classList.remove('bg-rust-500', 'text-white', 'shadow-xs');
                t.classList.add('bg-slate-100', 'text-slate-600');
            });

            // Set active class
            this.classList.remove('bg-slate-100', 'text-slate-600');
            this.classList.add('bg-rust-500', 'text-white', 'shadow-xs');

            const filter = this.getAttribute('data-filter');
            document.querySelectorAll('.gallery-item').forEach(function(item) {
                if (filter === 'all' || item.getAttribute('data-cat') === filter) {
                    item.style.display = 'block';
                    item.classList.add('animate-fadeIn');
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection
