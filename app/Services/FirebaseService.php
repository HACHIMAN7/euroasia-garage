<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FirebaseService
{
    /**
     * Fetch business data from Firebase Realtime Database.
     *
     * Falls back to default data if Firebase is unavailable.
     *
     * @return array<string, mixed>
     */
    public function getBusinessData(): array
    {
        $databaseUrl = config('services.firebase.database_url');

        if (empty($databaseUrl)) {
            return $this->getDefaultData();
        }

        return Cache::remember('firebase_business_data', now()->addMinutes(10), function () use ($databaseUrl) {
            try {
                $response = Http::timeout(5)->get("{$databaseUrl}/business.json");

                if ($response->successful() && $response->json()) {
                    return array_merge($this->getDefaultData(), $response->json());
                }
            } catch (\Throwable $e) {
                Log::warning('Firebase fetch failed, using defaults.', ['error' => $e->getMessage()]);
            }

            return $this->getDefaultData();
        });
    }

    /**
     * Default business data used when Firebase is unavailable.
     *
     * @return array<string, mixed>
     */
    private function getDefaultData(): array
    {
        return [
            'name' => [
                'en' => 'Euro Asia Garage',
                'ms' => 'Euro Asia Garage',
            ],
            'phone' => '011-3751 6627',
            'whatsapp' => '601137516627',
            'address' => [
                'en' => 'Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Malacca',
                'ms' => 'Terminal Kenderaan Berat, Lot 3, IKS, Jalan Automotif, 76100 Durian Tunggal, Melaka',
            ],
            'hours' => [
                'en' => 'Everyday: 9:00 AM – 6:00 PM | Sunday: Closed',
                'ms' => 'Setiap Hari: 9:00 PG – 6:00 PTG | Ahad: Tutup',
            ],
            'maps_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.393552035965!2d102.26573557496792!3d2.28364199769632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e57fe6ce8a97%3A0xa04bf1ea135e59bc!2sEuroAsia%20Garage!5e1!3m2!1sen!2smy!4v1790037027199!5m2!1sen!2smy',
            'tagline' => [
                'en' => 'Your Trusted Auto Repair Partner',
                'ms' => 'Rakan Pembaikan Kereta Dipercayai Anda',
            ],
            'services' => [
                [
                    'name' => ['en' => 'Engine Repair', 'ms' => 'Pembaikan Enjin'],
                    'icon' => 'engine',
                ],
                [
                    'name' => ['en' => 'Brake Service', 'ms' => 'Servis Brek'],
                    'icon' => 'brake',
                ],
                [
                    'name' => ['en' => 'Oil Change', 'ms' => 'Tukar Minyak'],
                    'icon' => 'oil',
                ],
                [
                    'name' => ['en' => 'Suspension & Steering', 'ms' => 'Suspensi & Stereng'],
                    'icon' => 'suspension',
                ],
                [
                    'name' => ['en' => 'Aircond Service', 'ms' => 'Servis Aircond'],
                    'icon' => 'aircond',
                ],
                [
                    'name' => ['en' => 'General Inspection', 'ms' => 'Pemeriksaan Am'],
                    'icon' => 'inspection',
                ],
            ],
        ];
    }
}
