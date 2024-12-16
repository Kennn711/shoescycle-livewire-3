<?php

use App\Livewire\Page\Dashboard as PageDashboard;
use App\Livewire\Shoes\Data;
use App\Livewire\Shoes\Form;

use Illuminate\Support\Facades\Route;

// CRUD Shoes
Route::get('/shoes', Data::class)->name('shoes.index');
Route::get('/shoes/create', Form::class)->name('shoes.create');

// Dasboard
Route::get('/dashboard', PageDashboard::class)->name('dashboard.index');

Route::get('template', function () {
    return view('layouts-backend.index');
});
