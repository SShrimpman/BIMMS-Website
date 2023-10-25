<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenu extends Component
{
    public $isScrolled;

    protected $listeners = ['scrolled', 'scrollOnTop'];

    public function scrolled()
    {
        $this->isScrolled = true;
    }

    public function scrollOnTop()
    {
        $this->isScrolled = false;
    }

    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
