<x-layouts.app titulo="Registrar" meta-description='Página de registro'>

    <form action="" method="GET">
        <h2>Registro</h2>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="" id="name">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="" id="email">
        </div>
        <div>
            <label for="pass">Password: </label>
            <input type="text" name="" id="password">
        </div>
        <div>
            <label for="rePass">Repeat Password: </label>
            <input type="text" name="" id="rePassword">
        </div>
        <div> 
            <a href="{{ route('tab') }}"><input type="button" value="Registrarse" /> </a>
        </div>
    </form>

</x-layouts.app>