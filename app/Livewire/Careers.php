<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

// Este código define que o layout a ser utilizado é o app.blade.php
#[Layout('layouts.app')]
class Careers extends Component
{
    public function render()
    {
        return view('careers');
    }
}
