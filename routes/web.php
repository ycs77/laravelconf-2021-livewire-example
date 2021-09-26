<?php

use App\Http\Livewire\Counter;
use App\Http\Livewire\DataBinding;
use App\Http\Livewire\Polling;
use App\Http\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class);
Route::get('/data-binding', DataBinding::class);
Route::get('/polling', Polling::class);
Route::get('/search', Search::class);
