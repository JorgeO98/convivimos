<div>
    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">
            <div x-data="{cant:0}"
                class="m-3 border-2 border-[#22d3ee] hover:shadow-[0px_0px_4px_5px_rgba(34,211,238,1)] flex w-56 h-80 justify-center content-center flex-col rounded-xl bg-white bg-clip-border text-gray-700">
                <div
                    class=" flex justify-center mx-4 mt-3 h-36 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-xl shadow-blue-gray-500/40">
                    <img src="https://itook.co/962-large_default/kawiyari-20-9-vel-biplato.jpg" class="h-32"
                        alt="img-blur-shadow" layout="fill" />
                </div>

                <div class="text-center my-3 font-bold">Bicicleta</div>
                <div class="text-center  font-bold">Cantidad máxima: 3</div>
                <div class="text-center  font-bold">Cantidad reservada: <span x-text="cant"></span></div>
                <div class="flex justify-around my-3">
                    <button class="rounded-full p-3  bg-red-600 text-white" :disabled="cant <= 0"
                        x-on:click="cant--">-</button>
                    <button class="rounded-full p-3  bg-green-600 text-white" :disabled="cant >= 3"
                        x-on:click="cant++">+</button>
                    <button class="rounded p-2 bg-blue-600 text-white" :disabled="cant <= 0"
                        x-on:click.prevent="$wire.reservar(cant),$dispatch('open-modal', 'reservarModal')">Reservar</button>
                </div>

                <x-modal name="reservarModal">
                        
                </x-modal>

            </div>
        </div>
    </div>
</div>