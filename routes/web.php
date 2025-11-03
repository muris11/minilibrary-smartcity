<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminController;
use App\Models\TeamMember;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot', [AuthController::class, 'sendForgot'])->name('password.update');

// Public Page Routes
Route::get('/page/{slug}', [App\Http\Controllers\AdminController::class, 'showPage'])->name('page.show');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');
Route::post('/password', [ProfileController::class, 'changePassword'])->middleware('auth')->name('password.change');
Route::get('/setting', [SettingController::class, 'index'])->middleware('auth')->name('setting');
Route::delete('/account', [SettingController::class, 'deleteAccount'])->middleware('auth')->name('account.delete');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('users.delete');

    // Page Management Routes
    Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
    Route::get('/pages/{page}/edit', [AdminController::class, 'editPage'])->name('pages.edit');
    Route::put('/pages/{page}', [AdminController::class, 'updatePage'])->name('pages.update');

    // Partial Management Routes
    Route::get('/partials', [AdminController::class, 'partials'])->name('partials');
    Route::get('/partials/{partial}/edit', [AdminController::class, 'editPartial'])->name('partials.edit');
    Route::put('/partials/{partial}', [AdminController::class, 'updatePartial'])->name('partials.update');

    // Team Members Management Routes
    Route::get('/team-members', [AdminController::class, 'teamMembers'])->name('team-members');
    Route::get('/team-members/create', [AdminController::class, 'createTeamMember'])->name('team-members.create');
    Route::post('/team-members', [AdminController::class, 'storeTeamMember'])->name('team-members.store');
    Route::get('/team-members/{teamMember}/edit', [AdminController::class, 'editTeamMember'])->name('team-members.edit');
    Route::put('/team-members/{teamMember}', [AdminController::class, 'updateTeamMember'])->name('team-members.update');
    Route::delete('/team-members/{teamMember}', [AdminController::class, 'deleteTeamMember'])->name('team-members.delete');
});


