<?php

use Illuminate\Support\Facades\Route;

// Authentication
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login-post');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

$pages = [
    'home',
    '2-step-verification',
    'accordion',
    'activity',
    'auth-lock',
    'blank',
    'cards',
    'carousel',
    'changelog',
    'charts',
    'chat',
    'colorpicker',
    'cookie-banner',
    'datatables',
    'dropzone',
    'error-404',
    'error-500',
    'error-maintenance',
    'faq',
    'flags',
    'forgot-password',
    'form-elements',
    'gallery',
    'inline-player',
    'invoice',
    'job-listing',
    'license',
    'lightbox',
    'lists',
    'logs',
    'markdown',
    'modals',
    'offcanvas',
    'page-loader',
    'payment-providers',
    'photogrid',
    'placeholder',
    'pricing-table',
    'pricing',
    'search-results',
    'settings-plan',
    'settings',
    'sign-in-cover',
    'sign-in-illustration',
    'sign-in-link',
    'sign-in',
    'sign-up',
    'social-icons',
    'steps',
    'tables',
    'tasks',
    'terms-of-service',
    'trial-ended',
    'users',
];

foreach ($pages as $page) {
    Route::get("pages/$page", function () use ($page) {
        return view("pages.$page");
    })->name("$page");
}
