<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
            <!-- Search form -->
            <form action="/dashboard/companys/search">
                <input type="text" id="search" name="search" placeholder="Buscar por nombre">
                <button type="submit" class="mt-2 p-2 rounded bg-green-500 text-white">Buscar</button>
            </form>
            <div class="flex">
                <div class="text-4xl p-2">
                    <h1>Compañias</h1>
                </div> 
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div>
                    <a href="/dashboard/companys/create"><button class="mt-2 p-2 rounded bg-green-500 text-white">Crear compañia</button></a>
                </div>
                <table style="width:100%" class="table-fixed border-collapse border-2 border-indigo-800 my-2">
                    <tr>
                        <th class="border-2 border-indigo-800">Logo</th>
                        <th class="border-2 border-indigo-800">Nombre</th>
                        <th class="border-2 border-indigo-800">Opciones</th>
                    </tr>
                    <!-- Validate and print companys-->
                    @if (count($companys) > 0)
                        @foreach ($companys as $company)
                            <tr>
                                <td><img src="{{ Storage::url($company->logo) }}" alt="Logo" width="100px"></td>
                                <td>{{$company->name}}</td>
                                <td>
                                    <a href="/dashboard/companys/delete/{{$company->name}}/{{$company->id}}" class="text-red-500">Eliminar</a>
                                    <a href="/dashboard/companys/edit/{{$company->id}}" class="text-yellow-500">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        {{ "No tienes compañias creadas. "}}
                    @endif
                </table>
                <!-- Add paginator -->
                {{ $companys->links() }}                
            </div>
        </div>
    </x-slot>
</x-app-layout>