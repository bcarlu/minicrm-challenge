<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
            @if ($errors->any())
                <div class="italic text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/dashboard/companys/update" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                
                <input type="hidden" id="id" name="id" value="{{$company->id}}" />
                <div>
                    <label for="logo">logo</label><br>
                    <input type="file" id="logo" name="logo" value="{{$company->logo}}">
                </div>
                <div>
                    <label for="name">Nombre Compañia</label><br>
                    <input type="text" id="name" name="name" value="{{$company->name}}">
                </div>
                
                <button type="submit"class="mt-2 p-2 rounded bg-green-500 text-white">Actualizar</button>                
            </form>            
        </div>
    </x-slot>
</x-app-layout>