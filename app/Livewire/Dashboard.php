<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Dashboard extends Component
{
    public function mount()
    {
        $this->dispatch('runScript');
    }

    public function updated()
    {
        $this->dispatch('runScript');
    }

    public function render()
    {
        return view('dashboard');
    }
}
