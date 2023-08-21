<?php

namespace App\Livewire;

use Livewire\Component;

class LoginPage extends Component
{



    public $email;

    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $logged = auth()->attempt(['email' => $this->email, 'password' => $this->password]);
        if (!$logged) {
            session()->flash('error', 'Invalid credentials');
            return;
        }
        return redirect()->to('/');
    }



    public function render()
    {
        return view('livewire.login-page');
    }
}
