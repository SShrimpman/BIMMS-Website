<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenu extends Component
{
    public $isScrolled;

    // Eventos emitidos pela dashboard para alterar os estilos da navbar de acordo com o scroll da página
    protected $listeners = ['scrolled', 'scrollOnTop'];

    // Função para o caso de ter feito scroll na página
    public function scrolled()
    {
        $this->isScrolled = true;
    }

    // Função para o caso de o scroll estar no topo na página
    public function scrollOnTop()
    {
        $this->isScrolled = false;
    }

    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
