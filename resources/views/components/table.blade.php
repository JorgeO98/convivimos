@props(['datos'])
<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Orden
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Descripción de reserva
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Estado
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Cancelar
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datos as $item)
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$item->id_reserva}}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->nombre_zona}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @if ($item->estado == 0)
                                Por aprobar
                                @else
                                Aprobado
                                @endif
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @if ($item->estado == 0)
                                <button class="p-2 text-white bg-red-700 rounded"
                                    x-on:click.prevent="$dispatch('open-modal', 'eliminar{{$item->id_reserva}}')">Cancelar</button>
                                @else
                                @endif
                            </td>
                        </tr>
                        <x-modal name="eliminar{{$item->id_reserva}}">
                            <div class="p-6 flex flex-col justify-center content-center">
                                <h1 class="text-xl text-center">¿Desea cancelar la reserva?</h1>
                                <div class="text-center mt-5 w-full">
                                    <span class="bg-yellow-600 w-full p-2 rounded block font-bold">
                                        Tenga en cuenta que la cancelación será definitiva y puede acarrear sanciones o
                                        multas por parte de la administración.
                                    </span>
                                </div>
                                <div class="flex justify-center content-center mt-6">
                                    <button class="rounded p-2 bg-red-600 text-white mr-5"
                                        wire:click="eliminarReserva('{{$item->id_reserva}}')"
                                        x-on:click.prevent="$dispatch('close', 'eliminar{{$item->id_reserva}}')">Aceptar</button>
                                    <button class="rounded p-2 bg-gray-600 text-white"
                                        x-on:click.prevent="$dispatch('close', 'eliminar{{$item->id_reserva}}')">Cancelar</button>
                                </div>
                            </div>
                        </x-modal>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>