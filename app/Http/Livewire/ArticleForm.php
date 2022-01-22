<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required|min:3',
        'content' => 'required|min:10',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function save()
    {
        \App\Models\Article::create($this->validate());

        session()->flash('message', __('Article created!'));

        $this->redirectRoute('articles.index');
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
