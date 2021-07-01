<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\User;
class ShowTicket extends Component
{
    public $tickets=[];
    public $selectedTicket;
    public $show = false;
    public function select($select)
    {
        $this->selectedTicket = $select;
        $this->show=true;
    }
    public function cancel()
    {
        $val = Ticket::findOrFail($this->selectedTicket);
        $val->status = 'Canceled';
        $val->save();
        
        $this->show = false;
    }
    public function render()
    {
        $this->tickets = \Auth::user()->tickets;
        return view('livewire.show-ticket');
    }
}
