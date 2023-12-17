<?php

namespace App\Livewire;

use Livewire\Component;

class ObjetosComunes extends Component
{
    public $cantidad;

    public function render()
    {
        return view('livewire.objetos-comunes');
    }

    public function reservar($cantidad){
        $this->cantidad = $cantidad; 
    }

    
}
