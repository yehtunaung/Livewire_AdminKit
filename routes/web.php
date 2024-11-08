<?php

use App\Livewire\Admin\PermissionComponent;
use App\Livewire\Admin\RoleComponent;
use App\Livewire\Admin\UserComponent;
use App\Livewire\Dashboard;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;
use App\Livewire\PostComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::group(['prefix' => 'admin', 'as' => 'admin.',  'middleware' => ['auth']], function () {
    Route::get('/permission', PermissionComponent::class)->name('permission');
    Route::get('/user', UserComponent::class)->name('user');
    Route::get('/posts', PostComponent::class)->name('posts');
    Route::get('/roles', RoleComponent::class)->name('roles');

});