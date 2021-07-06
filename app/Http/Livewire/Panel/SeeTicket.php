<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;
use App\Models\Ticket;
class SeeTicket extends Component
{
    public $ticket;

    public function mount($id)
    {
        $this->ticket = Ticket::find($id);
    }
    public function render()
    {
        return view('livewire.panel.see-ticket')
            ->layout('layouts.panel');
    }
}
