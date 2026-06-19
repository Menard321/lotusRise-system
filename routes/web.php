<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\LotusAIController;

/*
|--------------------------------------------------------------------------
| Public Pages Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/vendors', [PagesController::class, 'vendors'])->name('vendors');
Route::get('/agents', [PagesController::class, 'agents'])->name('agents');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/careers', [PagesController::class, 'careers'])->name('careers');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Lead submissions & Registrations
|--------------------------------------------------------------------------
*/
Route::post('/vendors/register', [VendorController::class, 'register'])->name('vendors.register');
Route::post('/agents/register', [AgentController::class, 'register'])->name('agents.register');
Route::post('/contact/inquire', [LeadController::class, 'inquire'])->name('contact.inquire');
Route::post('/careers/apply', [PagesController::class, 'apply'])->name('careers.apply');
Route::post('/lotus-ai/query', [LotusAIController::class, 'query'])->name('lotus-ai.query');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Vendor Dashboard
    Route::prefix('vendor')->name('vendor.')->middleware('vendor')->group(function () {
        Route::get('/dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
        Route::get('/products', [VendorController::class, 'products'])->name('products');
        Route::post('/products', [VendorController::class, 'saveProduct'])->name('products.store');
        Route::get('/orders', [VendorController::class, 'orders'])->name('orders');
        Route::post('/orders/{id}/status', [VendorController::class, 'updateOrderStatus'])->name('orders.status');
        Route::get('/inventory', [VendorController::class, 'inventory'])->name('inventory');
    });

    // Agent Dashboard
    Route::prefix('agent')->name('agent.')->middleware('agent')->group(function () {
        Route::get('/dashboard', [AgentController::class, 'dashboard'])->name('dashboard');
        Route::get('/subscription', [AgentController::class, 'subscription'])->name('subscription');
        Route::post('/subscription/activate', [AgentController::class, 'activateSubscription'])->name('subscription.activate');
        Route::get('/leads', [AgentController::class, 'leads'])->name('leads');
        Route::post('/leads', [AgentController::class, 'storeLead'])->name('leads.store');
    });

    // Admin Panel
    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        
        // Vendor Management
        Route::get('/vendors', [AdminController::class, 'vendors'])->name('vendors');
        Route::post('/vendors/{id}/status', [AdminController::class, 'updateVendorStatus'])->name('vendors.status');
        
        // Agent Management
        Route::get('/agents', [AdminController::class, 'agents'])->name('agents');
        Route::post('/agents/{id}/status', [AdminController::class, 'updateAgentSubscription'])->name('agents.status');
        
        // Contact Leads
        Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('inquiries');
        Route::post('/inquiries/{id}/resolve', [AdminController::class, 'resolveInquiry'])->name('inquiries.resolve');

        // CRUD Portfolio
        Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('portfolio');
        Route::get('/portfolio/create', [AdminController::class, 'portfolioCreate'])->name('portfolio.create');
        Route::post('/portfolio', [AdminController::class, 'portfolioStore'])->name('portfolio.store');
        Route::get('/portfolio/{id}/edit', [AdminController::class, 'portfolioEdit'])->name('portfolio.edit');
        Route::post('/portfolio/{id}', [AdminController::class, 'portfolioUpdate'])->name('portfolio.update');
        Route::post('/portfolio/{id}/delete', [AdminController::class, 'portfolioDestroy'])->name('portfolio.delete');

        // CRUD Blog
        Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
        Route::get('/blog/create', [AdminController::class, 'blogCreate'])->name('blog.create');
        Route::post('/blog', [AdminController::class, 'blogStore'])->name('blog.store');
        Route::get('/blog/{id}/edit', [AdminController::class, 'blogEdit'])->name('blog.edit');
        Route::post('/blog/{id}', [AdminController::class, 'blogUpdate'])->name('blog.update');
        Route::post('/blog/{id}/delete', [AdminController::class, 'blogDestroy'])->name('blog.delete');
    });

});
