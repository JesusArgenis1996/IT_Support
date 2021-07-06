<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class ShowUser extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        if($this->searchTerm==null){
            $users = User::paginate(10);
        }
        if($this->searchTerm!=null){
            $users = User::where('id',$this->searchTerm)->paginate(10);
        }
        return view('livewire.panel.show-user',compact('users'))
            ->layout('layouts.panel');
    }
}
