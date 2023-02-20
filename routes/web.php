<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Home,
    ShowTweets
};

Route::get('/', Home::class);

Route::get('tweets', ShowTweets::class);