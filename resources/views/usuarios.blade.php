<x-layouts.app titulo="Usuarios">
    <h1>Usuarios</h1>

    {{-- @dump($users) --}}

    @foreach ($users as $usuario)
        {{ $usuario->usuario}}
    @endforeach

</x-layouts.app>