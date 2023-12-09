<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ZonasComunes extends Component
{
    /* #[Layout('layouts.app')] */
    public function render()
    {
        return view('livewire.zonas-comunes');
    }
}
