<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
class Login extends Component
{

    public $email,$password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login(){

        $this->validate();

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "Welcome Back");
                return redirect()->to('/');
        }else{
            session()->flash('error', 'Email or password are wrong.');
            return redirect()->to('/login');
        }

    }

    public function render()
    {
        return view('livewire.login');
    }
}
