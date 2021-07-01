<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    public function logout()
    {
        \Auth::logout();
        session()->flash('message', "Good bye");
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
