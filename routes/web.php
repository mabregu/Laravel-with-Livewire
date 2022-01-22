<?php

use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleForm;
use App\Http\Livewire\ArticleShow;
use Illuminate\Support\Facades\Route;

Route::get('/', Articles::class)->name('articles.index');
Route::get('/articles/create', ArticleForm::class)->name('articles.create');
Route::get('/articles/{article}', ArticleShow::class)->name('articles.show');

