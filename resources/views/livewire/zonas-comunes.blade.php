<div>
    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">
            
            @isset($status)
                {{$status}}
            @endisset

            @foreach ($areasComunes as $key => $val)
            @php
            $descripcion = json_decode($val->descripcion, true);
            $precio = $val->valor;
            $cantidad = $val->cantidad;
            $id = $val->id;
            $img = $val->img;
            @endphp
            @foreach ($descripcion as $valor => $item)
            <x-card :nombre="$item['nombre']" :descripcion="$item['descripcion']" :precio="$precio"
                :horas="$item['costo']['minimo_de_horas']" :$cantidad :detalles="$item['detalles_adicionales']"
                :costo="$item['costo']" :cancelacion="$item['politica_cancelacion']" :cantHoras="$cantHoras"
                :codigoZona="$id" :$respuesta :$img>
            </x-card>
            @endforeach
            @endforeach
        </div>
    </div>
</div>