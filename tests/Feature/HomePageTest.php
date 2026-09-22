<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and displays business information.
     */
    public function test_homepage_loads_and_displays_business_details(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Euro Asia Garage');
        $response->assertSee('011-3751 6627');
        $response->assertSee('Terminal Kenderaan Berat');
        $response->assertSee('Durian Tunggal');
    }

    /**
     * Test that the language switcher redirects and sets session locale.
     */
    public function test_language_switcher_updates_locale(): void
    {
        $response = $this->from('/')->get('/locale/ms');

        $response->assertRedirect('/');
        $this->assertEquals('ms', session('locale'));

        // Visit homepage with ms locale in session
        $pageResponse = $this->withSession(['locale' => 'ms'])->get('/');
        $pageResponse->assertStatus(200);
        $pageResponse->assertSee('Perkhidmatan Kami');
        $pageResponse->assertSee('Hubungi Kami Sekarang');
    }
}
