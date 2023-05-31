<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeSearch extends Component
{
    public $search="";

    public function render()
    {
        return view('livewire.home-search');
    }
}
