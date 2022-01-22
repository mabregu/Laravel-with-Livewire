<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Articles extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.articles', [
            'articles' => \App\Models\Article::where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->get()
        ]);
    }
}
