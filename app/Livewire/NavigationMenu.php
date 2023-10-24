<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenu extends Component
{

    
    public function mount()
    {
        // $this->emit('removeClasses');
    }

    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
