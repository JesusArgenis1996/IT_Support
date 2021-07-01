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
