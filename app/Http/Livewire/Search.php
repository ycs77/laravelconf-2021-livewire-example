<?php

namespace App\Http\Livewire;

use App\Models\Language;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        return view('livewire.search', [
            'languages' => Language::where('name', 'LIKE', "{$this->search}%")->get(),
        ]);
    }
}
