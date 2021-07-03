<x-app-layout>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 mb-3">
                    <div class="bg-yellow-300 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="text-center">
                            <h3 class="text-base font-semibold">Compañias</h3>
                            <span class="text-3xl font-light">{{ count($companys) }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="/dashboard/companys"><button class="mt-2 p-2 rounded bg-green-500 shadow text-white">Ver compañias</button></a>
                        <a href="/dashboard/companys/create"><button class="mt-2 p-2 rounded bg-green-500 shadow text-white">Crear compañia</button></a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
