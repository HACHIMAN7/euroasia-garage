<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Euro Asia Garage Business Configuration
    |--------------------------------------------------------------------------
    |
    | Edit any business information, prices, phone numbers, and services here.
    | Any changes pushed to GitHub will automatically update your live site!
    |
    */

    'name' => [
        'en' => 'Euro Asia Garage',
        'ms' => 'Euro Asia Garage',
    ],

    'tagline' => [
        'en' => 'Your Trusted Auto Repair Partner',
        'ms' => 'Rakan Pembaikan Kereta Dipercayai Anda',
    ],

    'phone' => '011-3751 6627',
    'whatsapp' => '601137516627',

    'address' => [
        'en' => 'Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Malacca',
        'ms' => 'Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Melaka',
    ],

    'hours' => [
        'en' => 'Monday – Saturday: 9:00 AM – 6:00 PM | Sunday: Closed',
        'ms' => 'Isnin – Sabtu: 9:00 PG – 6:00 PTG | Ahad: Tutup',
    ],

    'maps_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.393552035965!2d102.26573557496792!3d2.28364199769632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e57fe6ce8a97%3A0xa04bf1ea135e59bc!2sEuroAsia%20Garage!5e1!3m2!1sen!2smy!4v1790037027199!5m2!1sen!2smy',

    /*
    |--------------------------------------------------------------------------
    | Workshop Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        [
            'title' => [
                'en' => 'Fluid & Oil Exchange',
                'ms' => 'Tukar Minyak & Bendalir',
            ],
            'description' => [
                'en' => 'Full synthetic engine oil replacement, transmission fluids, and fluid flush.',
                'ms' => 'Penggantian minyak enjin sintetik penuh, minyak transmisi, dan flush bendalir.',
            ],
            'price' => 'Inquire / Best Rate',
            'icon' => 'oil',
        ],
        [
            'title' => [
                'en' => 'Battery & Electrical',
                'ms' => 'Bateri & Elektrikal',
            ],
            'description' => [
                'en' => 'Battery health testing, terminal maintenance, alternator, and starter checks.',
                'ms' => 'Pemeriksaan kesihatan bateri, terminal, alternator, dan motor pemula.',
            ],
            'price' => 'Inquire / Best Rate',
            'icon' => 'battery',
        ],
        [
            'title' => [
                'en' => 'Car Aircond Service',
                'ms' => 'Servis Hawa Dingin (Aircond)',
            ],
            'description' => [
                'en' => 'Gas refilling, compressor servicing, cabin filter cleaning, and leak detection.',
                'ms' => 'Isian gas, servis pemampat, penapis kabin, dan pengesanan kebocoran.',
            ],
            'price' => 'Inquire / Best Rate',
            'icon' => 'aircond',
        ],
        [
            'title' => [
                'en' => 'Engine Diagnostics',
                'ms' => 'Diagnostik Enjin Komputer',
            ],
            'description' => [
                'en' => 'OBD computer scanning, warning light diagnosis, sensor check, and tune-up.',
                'ms' => 'Imbasan komputer OBD, diagnosis lampu amaran, dan tune-up.',
            ],
            'price' => 'Inquire / Best Rate',
            'icon' => 'engine',
        ],
    ],
];
