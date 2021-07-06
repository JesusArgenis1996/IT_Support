<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class SideBar extends Component
{
    public function render()
    {
        return view('livewire.panel.side-bar')
            ->layout('layouts.panel');
    }
}
