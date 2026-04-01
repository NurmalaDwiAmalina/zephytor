<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyzeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZephyToolController;
use App\Http\Controllers\PaymentProofController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin;

// ── Public routes ────────────────────────────────────────
Route::get('/', function () {
    $packages = \App\Models\Package::where('is_active', true)->orderBy('sort_order')->get();
    return view('welcome', compact('packages'));
});

Route::get('/analyze', [AnalyzeController::class, 'index']);
Route::post('/analyze', [AnalyzeController::class, 'analyze']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/syarat-ketentuan', function () {
    return view('syarat-ketentuan');
});

// ── Payment (DOKU) ───────────────────────────────────────
Route::get('/payment/finish', [PaymentController::class, 'finish'])->name('payment.finish');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::post('/payment/notification', [PaymentController::class, 'notification'])->name('payment.notification');

// ── Auth routes ──────────────────────────────────────────
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ── User dashboard routes (requires auth) ────────────────
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/orders', [DashboardController::class, 'orders']);
    Route::get('/orders/create', [DashboardController::class, 'createOrder']);
    Route::post('/orders', [DashboardController::class, 'storeOrder']);
    Route::get('/invoices', [DashboardController::class, 'invoices']);
    Route::get('/invoices/{invoice}', [DashboardController::class, 'showInvoice']);
    Route::post('/invoices/{invoice}/upload-proof', [PaymentProofController::class, 'upload']);
    Route::get('/invoices/{invoice}/proof', [PaymentProofController::class, 'view']);
    Route::post('/invoices/{invoice}/pay', [PaymentController::class, 'pay'])->name('payment.pay');
    Route::get('/zephytool', [ZephyToolController::class, 'index']);
    Route::post('/zephytool/generate', [ZephyToolController::class, 'generate']);
});

// ── Admin routes ─────────────────────────────────────────
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index']);

    Route::resource('/packages', Admin\PackageController::class)->except(['show']);

    Route::get('/orders', [Admin\OrderController::class, 'index']);
    Route::get('/orders/create', [Admin\OrderController::class, 'create']);
    Route::post('/orders', [Admin\OrderController::class, 'store']);
    Route::get('/orders/{order}', [Admin\OrderController::class, 'show']);
    Route::put('/orders/{order}', [Admin\OrderController::class, 'update']);
    Route::post('/orders/{order}/generate-sow', [Admin\OrderController::class, 'generateSow']);
    Route::post('/orders/{order}/agreement', [Admin\OrderController::class, 'storeAgreement']);
    Route::post('/orders/{order}/link-user', [Admin\OrderController::class, 'linkUser']);

    Route::get('/invoices', [Admin\InvoiceController::class, 'index']);
    Route::get('/invoices/create', [Admin\InvoiceController::class, 'create']);
    Route::post('/invoices', [Admin\InvoiceController::class, 'store']);
    Route::get('/invoices/{invoice}', [Admin\InvoiceController::class, 'show']);
    Route::put('/invoices/{invoice}/status', [Admin\InvoiceController::class, 'updateStatus']);
    Route::get('/invoices/{invoice}/proof', [PaymentProofController::class, 'view']);
});
