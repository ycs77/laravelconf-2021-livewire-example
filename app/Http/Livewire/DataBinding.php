<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = '';
    public $agree = false;
    public $languages = ['Laravel', 'Vue.js'];

    public function render()
    {
        return view('livewire.data-binding');
    }
}
