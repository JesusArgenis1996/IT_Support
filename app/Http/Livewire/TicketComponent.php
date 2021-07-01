<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Ticket;

class TicketComponent extends Component
{

    public $job = "Everyone";
    public $service = "All";
    public $urgency = "Low";
    public $workers=[];
    public $currentLocation,$asignTo,$shortDescription,$description,$date;

    protected $rules = [
        'currentLocation' => 'required|max:255',
        'date' => 'required',
        'shortDescription' => 'required|max:255',
        'description' => 'required|max:1000',
        'date' => 'required'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function newTicket(){

        $this->validate();

        Ticket::create([
            'user_id' => \Auth::user()->id,
            'current_location' => $this->currentLocation,
            'service' => $this->service,
            'urgency'=> $this->urgency,
            'asign_to' => $this->asignTo,
            'short_description' => $this->shortDescription,
            'description' => $this->description,
            'status' => 'New',
            'date' => Carbon::now()->toDateTimeString()
        ]);

        session()->flash('message', 'Your ticket was updaload');

        return redirect()->to('/');

    }
    public function render()
    {
        if($this->job==='Everyone'){
            $this->workers = User::all();
        }else{
            $this->workers = User::where('job',$this->job)->get();
        }
        return view('livewire.ticket-component');
    }
}
