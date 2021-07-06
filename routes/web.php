<?php

use Illuminate\Support\Facades\Route;

//HOME
Route::get('/', App\Http\Livewire\Home::class)->name('home');

//LOGIN REGISTER
Route::get('/login', App\Http\Livewire\Login::class)->middleware('guest')->name('login');
Route::get('/register', App\Http\Livewire\Register::class)->middleware('guest')->name('register');

//TICKET CRUD
Route::get('/list', App\Http\Livewire\ShowTicket::class)->middleware('auth')->name('show.ticket');
Route::get('/ticket', App\Http\Livewire\TicketComponent::class)->middleware('auth')->name('ticket');

//TUTORIAL
Route::get('/tutorial', App\Http\Livewire\Tutorial::class)->name('tutorial');

//PANEL
Route::get('/panel', App\Http\Livewire\Panel\Home::class)->middleware('auth')->name('panel');

Route::get('/panel/all', App\Http\Livewire\Panel\AllTicket::class)->middleware('auth')->name('show.all');
Route::get('/panel/open', App\Http\Livewire\Panel\ShowTicket::class)->middleware('auth')->name('open.ticket');
Route::get('/panel/users', App\Http\Livewire\Panel\ShowUser::class)->middleware('auth')->name('show.user');
Route::get('/panel/work', App\Http\Livewire\Panel\YourTicket::class)->middleware('auth')->name('your.ticket');
Route::get('/panel/ticket/{id}', App\Http\Livewire\Panel\SeeTicket::class)->middleware('auth')->name('see.ticket');