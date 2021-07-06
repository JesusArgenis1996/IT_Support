<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;
use App\Models\User;
use App\Models\Ticket;
class Home extends Component
{
    public $users,$yourTickets,$allTickets,$allOpen;
    public function render()
    {
        $this->users = User::count();
        $this->allTickets = Ticket::count();
        $this->allOpen = Ticket::where("status","New")->count();
        $this->yourTickets = Ticket::where('asign_to',\Auth::user()->id)->count();
        return view('livewire.panel.home')
            ->layout('layouts.panel');
    }
}
