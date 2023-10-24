<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Projects extends Component
{
    public function render()
    {
        return view('projects');
    }
}
