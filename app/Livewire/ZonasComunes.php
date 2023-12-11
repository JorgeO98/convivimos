<?php

namespace App\Livewire;

use App\Models\ReservacionesZonasComunes;
use App\Models\ZonasComunes as ModelsZonasComunes;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ZonasComunes extends Component
{

    public $areasComunes = "";
    #[Validate('required|gt:0')]
    public $cantHoras = 0;
    #[Validate('required')]
    public $date;

    public $codigo;

    public $respuesta;

    public function mount()
    {
        $this->areasComunes = ModelsZonasComunes::all();
        $this->date = date('Y-m-d');
    }

    public function darHoras()
    {
        if ($this->cantHoras != "") {
            return $this->cantHoras;
        }
    }

    public function getCodigoZona($codigo)
    {
        return $this->codigo = $codigo;
    }

    public function save()
    {
        $this->validate();

        ReservacionesZonasComunes::create([
            'id_user' => auth()->user()->id,
            'id_zona' => $this->codigo,
            'fecha_reserva' => $this->date,
            'horas' => $this->cantHoras,
            'estado' => '0',
        ]);
        
        $this->respuesta = 1;
    }

    public function render()
    {
        return view('livewire.zonas-comunes');
    }
}
