<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function submit()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); // Redirect to dashboard after login
        } else {
            // Handle failed login
            session()->flash('message', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
