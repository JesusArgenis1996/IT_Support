<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class ShowTicket extends Component
{
    public function render()
    {
        return view('livewire.panel.show-ticket')
            ->layout('layouts.panel')  ;
    }
}
