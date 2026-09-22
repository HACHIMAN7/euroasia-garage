<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with business data.
     */
    public function __invoke(): View
    {
        $business = config('garage');
        $locale = app()->getLocale();

        return view('home', compact('business', 'locale'));
    }

    /**
     * Switch the application locale.
     */
    public function switchLocale(Request $request, string $locale): RedirectResponse
    {
        if (in_array($locale, ['en', 'ms'])) {
            session(['locale' => $locale]);
            app()->setLocale($locale);
        }

        return redirect()->back();
    }
}
