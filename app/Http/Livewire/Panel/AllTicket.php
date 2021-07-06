<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;
use App\Models\Ticket;
use Livewire\WithPagination;
class AllTicket extends Component
{
    use WithPagination;

    public $filter=false;
    public $order,$type;
    public $searchTerm;
    public $selected=false;

    public function data($type,$order)
    {
        $this->filter = true;
        $this->type = $type;
        $this->order = $order;
    }
    public function render()
    {
        if($this->filter==false){
            $tickets = Ticket::paginate(10);
        }
        if($this->searchTerm!=null){
            $tickets = Ticket::where('id',$this->searchTerm)->paginate(10);
            $this->filter=false;
        }
        if($this->filter==true){
            if($this->type=="date"){
                $tickets = Ticket::orderBy($this->type,$this->order)->paginate(10);
            }else{
                $tickets = Ticket::where($this->type,$this->order)->paginate(10);
            }
        }
        return view('livewire.panel.all-ticket',compact('tickets'))
            ->layout('layouts.panel');
    }
}
