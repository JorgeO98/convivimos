@props(['nombre','descripcion','precio','horas','cantidad','detalles','costo','cancelacion','cantHoras','codigoZona','respuesta','img'])
<div
    class="m-3 border-2 border-[#22d3ee] hover:shadow-[0px_0px_4px_5px_rgba(34,211,238,1)] relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700">
    <div
        class="relative mx-4 {{-- -mt-6 --}} mt-3 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
        <img src="{{$img}}" alt="img-blur-shadow" layout="fill" />
    </div>
    <div class="p-6">
        <h5
            class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            {{$nombre}}
        </h5>
        <p class="block font-sans mb-2 text-base font-light leading-relaxed text-inherit antialiased">
            {{$descripcion}}
        </p>
        <div class="text-white mt-1 flex flex-wrap">
            <span class="bg-violet-900 m-1 p-2 rounded-lg">{{"$ ".number_format(intval($precio), 0, ',', '.')}}</span>
            <span class="bg-violet-900 m-1 p-2 rounded-lg">{{"Minimo de horas: ".$horas}}</span>
            @if ($cantidad > 0)
            <span class="bg-green-600 m-1 p-2 rounded-lg">Disponible</span>
            @else
            <span class="bg-red-600 m-1 p-2 rounded-lg">Reservado</span>
            @endif
        </div>
    </div>
    <div class="p-6 pt-0">
        <button x-data="" x-on:click.prevent="$dispatch('open-modal', '{{$nombre}}')"
            class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button" data-ripple-light="true">
            Leer más
        </button>
        <x-modal name="{{$nombre}}">
            <div class="p-5 text-black">
                <div class="text-xl">
                    <h2>{{$nombre}}</h2>
                </div>
                <div class="mt-3">
                    {{$descripcion}}
                </div>
                <div class="mt-3">
                    @if (isset($detalles['tamaño']))
                    <p><strong>Tamaño:</strong> {{$detalles['tamaño']}}</p>
                    @endif
                    <p><strong>Horario: </strong>{{$detalles['horario']}}</p>
                    @if (isset($detalles['servicios']))
                    <p><strong>Servicios:</strong></p>
                    <ul class="list-disc ms-5">
                        @foreach ($detalles['servicios'] as $item => $value)
                        <li>
                            {{$value}}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    @if (isset($detalles['reservacion']))
                    <p><strong>Condiciones: </strong></p>
                    @foreach ($detalles['reservacion'] as $item => $value)
                    @if ($item=="Uso")
                    <p><strong>Uso: </strong></p>
                    @elseif($item=="Normas_de_seguridad")
                    <p><strong>Normas de seguridad: </strong></p>
                    @elseif($item=="Sanciones")
                    <p><strong>Sanciones: </strong></p>
                    @endif
                    <ul class="list-disc ms-5">
                        @foreach ($value as $condicion => $valorCond)
                        <li>{{$valorCond}} </li>
                        @endforeach
                    </ul>
                    @endforeach
                    @endif

                    @if (isset($costo))
                    <p><strong>Costo por hora: </strong></p>
                    <ul class="list-disc ms-5">
                        <li>{{$costo['precio_por_hora']}}</li>
                    </ul>
                    <p><strong>Minimo de horas por reserva: </strong></p>
                    <ul class="list-disc ms-5">
                        <li>{{$costo['minimo_de_horas']}}</li>
                    </ul>
                    @endif

                    @if (isset($cancelacion))
                    <p><strong>Términos de cancelación: </strong></p>
                    <p><strong>Cancelación antes de 24 horas: </strong></p>
                    <ul class="list-disc ms-5">
                        <li>{{$cancelacion['cancelacion_24_horas']}}</li>
                    </ul>
                    <p><strong>Cancelación después de 24 horas: </strong></p>
                    <ul class="list-disc ms-5">
                        <li>{{$cancelacion['cancelacion_menos_24_horas']}}</li>
                    </ul>
                    <p><strong>Reserva no cancelada: </strong></p>
                    <ul class="list-disc ms-5">
                        <li>{{$cancelacion['cancelacion_no_canceladas']}}</li>
                    </ul>
                    @endif


                </div>
                <div class="flex justify-end mt-3">
                    <button x-on:click="$dispatch('close')" class="rounded p-3 bg-gray-600 text-white mr-4">
                        Cerrar
                    </button>
                    <button class="rounded p-3 bg-green-600 text-white"
                        x-on:click.prevent="$dispatch('open-modal', 'modalReservar{{$nombre}}')">Reservar</button>
                    <x-modal name="modalReservar{{$nombre}}">
                        <div class="my-4 p-4">
                            <form wire:submit.prevent="save">

                                <div
                                    class="text-xl pb-3 mb-2 border-b-[1px] border-solid border-b-gray-500 flex justify-center">
                                    Confirmación de reserva {{$nombre}}</div>

                                <h2 class="text-lg"><strong>Nombre: </strong> {{ auth()->user()->name }}</h2>

                                <h2 class="text-lg"><strong>Correo electrónico: </strong> {{ auth()->user()->email }}
                                </h2>

                                <label for="fecha" class="font-bold mb-1 block text-lg"><strong>Fecha de reserva:
                                    </strong></label>
                                <input name="fecha" wire:model='date' wire:ignore type="date"
                                    class="border-[1px] rounded border-black" />
                                @error('date')
                                <span class="error text-red-500">{{ "La fecha es obligatoria" }}</span>
                                @enderror

                                <label for="horas" class="font-bold mb-1 block text-lg"><strong>Horas de reserva:
                                    </strong></label>
                                <input name="horas" wire:keyup="darHoras" wire:model="cantHoras" type="number"
                                    value="{{$costo['minimo_de_horas']}}" class="border-[1px] rounded border-black" />
                                @error('cantHoras')
                                <span class="error text-red-500">{{ "La cantidad de horas es obligatoria" }}</span>
                                @enderror

                                @if (isset($respuesta))
                                <div class="flex mt-3 mb-3 "><span class="rounded p-1 bg-green-500 text-white">Se ha
                                        generado la orden de
                                        reserva correctamente</span></div>
                                @endif

                                <div class="flex justify-end mt-3">
                                    <button x-on:click.prevent="$dispatch('close','modalReservar{{$nombre}}')"
                                        class="rounded p-3 bg-gray-600 text-white mr-4">
                                        Cerrar
                                    </button>
                                    <button wire:click="getCodigoZona({{$codigoZona}})"
                                        class="rounded p-3 bg-green-600 text-white" type="submit">
                                        @if ($cantHoras!='' && $cantHoras!=0 )
                                        Reservar por {{"$ ".number_format(intval($precio*$cantHoras), 0, ',', '.')}}
                                        @else
                                        @php
                                        $cantHoras = $costo['minimo_de_horas'];

                                        @endphp
                                        Reservar por {{"$ ".number_format(intval($precio*$cantHoras), 0, ',', '.')}}
                                        @endif
                                        <div wire:loading>
                                            Cargando....
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </x-modal>
                </div>
            </div>
        </x-modal>
    </div>
</div>