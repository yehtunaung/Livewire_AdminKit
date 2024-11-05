<?php

use App\Livewire\Dashboard;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;
use App\Livewire\PostComponent;
use App\Livewire\User;
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

Route::get('/', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/user', User::class)->name('user');
Route::get('/posts', PostComponent::class)->name('posts');
