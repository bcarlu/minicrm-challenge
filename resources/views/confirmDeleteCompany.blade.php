<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <p>Esta seguro que desea eliminar la compañia {{$name}} con id {{$id}}?</p>
                <div class="flex">                
                <a href="/dashboard/companys/delete/{{$id}}"><button class="mt-2 p-2 rounded bg-red-500 mr-1">Confirmar</button></a>
                <a href="/dashboard"><button class="mt-2 p-2 rounded bg-yellow-500">Cancelar</button></a>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
    