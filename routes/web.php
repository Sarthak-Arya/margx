<?php

use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('welcome');
})->name('home.index');

Route::get('/index2', function () {
    return view('welcome');
})->name('home.index2');

Route::get('/index3', function () {
    return view('welcome');
})->name('home.index3');

Route::get('/index4', function () {
    return view('welcome');
})->name('home.index4');

Route::get('/index5', function () {
    return view('welcome');
})->name('home.index5');

Route::get('/index6', function () {
    return view('welcome');
})->name('home.index6');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services
Route::get('/services', function () {
    return view('welcome');
})->name('services');

Route::get('/services2', function () {
    return view('welcome');
})->name('services2');

Route::get('/services3', function () {
    return view('welcome');
})->name('services3');

Route::get('/services4', function () {
    return view('welcome');
})->name('services4');

Route::get('/services-icons', function () {
    return view('welcome');
})->name('services.icons');

Route::get('/services-icons2', function () {
    return view('welcome');
})->name('services.icons2');

Route::get('/services-icons3', function () {
    return view('welcome');
})->name('services.icons3');

Route::get('/single-service', function () {
    return view('welcome');
})->name('services.single');

// Sections
Route::get('/intro', function () {
    return view('welcome');
})->name('sections.intro');

Route::get('/intro-slider', function () {
    return view('welcome');
})->name('sections.intro-slider');

Route::get('/image-items', function () {
    return view('welcome');
})->name('sections.image-items');

Route::get('/items-of-numbers', function () {
    return view('welcome');
})->name('sections.items-of-numbers');

Route::get('/icon-items', function () {
    return view('welcome');
})->name('sections.icon-items');

Route::get('/brand-in-numbers', function () {
    return view('welcome');
})->name('sections.brand-in-numbers');

Route::get('/team', function () {
    return view('welcome');
})->name('sections.team');

Route::get('/gallery-classic', function () {
    return view('welcome');
})->name('sections.gallery-classic');

Route::get('/gallery-masonry', function () {
    return view('welcome');
})->name('sections.gallery-masonry');

Route::get('/pricing', function () {
    return view('welcome');
})->name('sections.pricing');

Route::get('/testimonials', function () {
    return view('welcome');
})->name('sections.testimonials');

Route::get('/brands', function () {
    return view('welcome');
})->name('sections.brands');

Route::get('/tabs-and-accordions', function () {
    return view('welcome');
})->name('sections.tabs-accordions');

Route::get('/marquee', function () {
    return view('welcome');
})->name('sections.marquee');

Route::get('/content', function () {
    return view('welcome');
})->name('sections.content');

Route::get('/404', function () {
    return view('welcome');
})->name('sections.404');

// Features
Route::get('/ui', function () {
    return view('welcome');
})->name('features.ui');

Route::get('/docs', function () {
    return view('welcome');
})->name('features.docs');

// News
Route::get('/news', function () {
    return view('welcome');
})->name('news');

Route::get('/news2', function () {
    return view('welcome');
})->name('news2');

Route::get('/news3', function () {
    return view('welcome');
})->name('news3');

Route::get('/news-grid', function () {
    return view('welcome');
})->name('news.grid');

Route::get('/news-post', function () {
    return view('welcome');
})->name('news.post');

// Contact
Route::get('/contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/contact-offices', function () {
    return view('welcome');
})->name('contact.offices');

Route::get('/contact2', function () {
    return view('welcome');
})->name('contact2');

Route::get('/contact2-offices', function () {
    return view('welcome');
})->name('contact2.offices');

Route::get('/contact3', function () {
    return view('welcome');
})->name('contact3');

Route::get('/contact3-offices', function () {
    return view('welcome');
})->name('contact3.offices');

Route::get('/contact4', function () {
    return view('welcome');
})->name('contact4');

Route::get('/contact4-offices', function () {
    return view('welcome');
})->name('contact4.offices');

// Other pages
Route::get('/terms-and-conditions', function () {
    return view('welcome');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('welcome');
})->name('privacy');
