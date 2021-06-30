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
            <form action="/dashboard/companys/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="logo">logo (Opcional)</label><br>
                    <input type="file" id="logo" name="logo">
                </div>
                <div>
                    <label for="name">Nombre Compañia (Obligatorio)</label><br>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="email">Correo (Obligatorio)</label><br>
                    <input type="email" id="email" name="email">
                </div>
                
                <button type="submit"class="mt-2 p-2 rounded bg-green-500 text-white">Crear</button>
                
            </form>
            
        </div>
    </x-slot>
</x-app-layout>