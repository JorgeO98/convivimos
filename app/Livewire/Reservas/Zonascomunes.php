<?php

namespace App\Livewire\Reservas;

use App\Models\ReservacionesZonasComunes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Zonascomunes extends Component
{
    public function render()
    {
        $zonasComunes = ReservacionesZonasComunes::join('zonas_comunes', 'reservaciones_zonas_comunes.id_zona', '=', 'zonas_comunes.id')
            ->where('id_user', Auth::id())->select([
                'reservaciones_zonas_comunes.id as id_reserva',
                'zonas_comunes.nombre as nombre_zona',
                'reservaciones_zonas_comunes.estado as estado'
            ])->get();

        return view('livewire.reservas.zonascomunes', [
            'zonasComunes' => $zonasComunes
        ]);
    }

    public function eliminarReserva($id)
    {
        ReservacionesZonasComunes::where('id', '=', $id)->delete();
    }
}
