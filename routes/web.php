<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ============================================================
// MEDICARE — AUTH
// ============================================================
Route::get('/login', fn() => view('login'))->name('login.page');
Route::get('/logout', fn() => redirect('/login'))->name('logout');

// ============================================================
// MEDICARE — PROTECTED ROUTES (auth + verified)
// ============================================================
Route::middleware(['auth', 'verified'])->group(function () {

    // ---------- OVERVIEW ----------
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // ---------- CLINICAL ----------
    Route::get('/patients',       fn() => view('patients'))->name('patients');
    Route::get('/doctors',        fn() => view('doctors'))->name('doctors');
    Route::get('/departments',    fn() => view('departments'))->name('departments');
    Route::get('/appointments',   fn() => view('appointments'))->name('appointments');
    Route::get('/opd',            fn() => view('opd'))->name('opd');
    Route::get('/ipd',            fn() => view('ipd'))->name('ipd');
    Route::get('/rooms-beds',     fn() => view('rooms-beds'))->name('rooms-beds');
    Route::get('/prescriptions',  fn() => view('prescriptions'))->name('prescriptions');
    Route::get('/laboratory',     fn() => view('laboratory'))->name('laboratory');
    Route::get('/radiology',      fn() => view('radiology'))->name('radiology');
    Route::get('/surgeries',      fn() => view('surgeries'))->name('surgeries');

    // ---------- OPERATIONS ----------
    Route::get('/pharmacy',       fn() => view('pharmacy'))->name('pharmacy');
    Route::get('/billing',        fn() => view('billing'))->name('billing');
    Route::get('/expenses',       fn() => view('expenses'))->name('expenses');
    Route::get('/insurance',      fn() => view('insurance'))->name('insurance');
    Route::get('/blood-bank',     fn() => view('blood-bank'))->name('blood-bank');
    Route::get('/ambulance',      fn() => view('ambulance'))->name('ambulance');
    Route::get('/inventory',      fn() => view('inventory'))->name('inventory');
    Route::get('/suppliers',      fn() => view('suppliers'))->name('suppliers');

    // ---------- PEOPLE ----------
    Route::get('/nurses',         fn() => view('nurses'))->name('nurses');
    Route::get('/employees',      fn() => view('employees'))->name('employees');
    Route::get('/hr',             fn() => view('hr'))->name('hr');
    Route::get('/attendance',     fn() => view('attendance'))->name('attendance');
    Route::get('/leave',          fn() => view('leave'))->name('leave');
    Route::get('/payroll',        fn() => view('payroll'))->name('payroll');

    // ---------- SYSTEM ----------
    Route::get('/reports',        fn() => view('reports'))->name('reports');
    Route::get('/notifications',  fn() => view('notifications'))->name('notifications');
    Route::get('/documents',      fn() => view('documents'))->name('documents');
    Route::get('/users-roles',    fn() => view('users-roles'))->name('users-roles');
    Route::get('/activity-logs',  fn() => view('activity-logs'))->name('activity-logs');
    Route::get('/settings',       fn() => view('settings'))->name('settings');
});

// ============================================================
// PROFILE (Breeze)
// ============================================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';