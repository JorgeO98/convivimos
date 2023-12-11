<x-app-layout>
    <div class="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <div class="mx-auto bg-white p-16 rounded">
                        <div id="accordion-flush" data-accordion="collapse"
                            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                            data-inactive-classes="text-gray-500 dark:text-gray-400">
                            <h2 id="accordion-flush-heading-1">
                                <button type="button"
                                    class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-900 rounded-t-xl border-b border-gray-200 dark:border-gray-700 dark:text-white"
                                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                    aria-controls="accordion-flush-body-1">
                                    <span>Reservas de areas comunes</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" aria-labelledby="accordion-flush-heading-1">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <livewire:reservas.zonascomunes>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-2">
                                <button type="button"
                                    class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                    aria-controls="accordion-flush-body-2">
                                    <span>Reserva de objetos comunes</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <livewire:reservas.objetoscomunes>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-3">
                                <button type="button"
                                    class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                    aria-controls="accordion-flush-body-3">
                                    <span>Reserva de parqueadero</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <livewire:reservas.parqueadero>
                                </div>
                            </div>
                        </div>
                        <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>