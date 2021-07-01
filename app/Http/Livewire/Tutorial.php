<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public $step = 'register';

    public function render()
    {
        return view('livewire.tutorial');
    }
}
