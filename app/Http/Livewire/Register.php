<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Session;

class Register extends Component
{
    public $first_name,$last_name,$email,$password,$number,$password_confirmation;
    public $job = 'IT Support';
    
    protected $rules = [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'email' => 'required|unique:users|email',
        'password' => 'required|confirmed|min:8',
        'job' => 'required',
        'number' => 'required|max:255',

    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function register(){

        $this->validate();
        $this->password = Hash::make($this->password);
        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => $this->password,
            'job' => $this->job,
            'number' => $this->number
        ]);

        session()->flash('message', 'You registered successfully, please login to finish the registration');

        return redirect()->to('/login');

    }

    public function render()
    {
        return view('livewire.register');
    }
}
