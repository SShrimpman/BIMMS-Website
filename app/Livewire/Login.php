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

        // Validação das minhas credenciais
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); // Redireciona para a dashboard se o login for efetuado
        } else {
            // Irá tratar da falha no login e retornar uma mensagem se as credenciais estiverem erradas
            session()->flash('message', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
