<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Markets extends Component
{
    public function render()
    {
        return view('markets');
    }
}
