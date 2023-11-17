<x-layouts.app titulo="Principal" meta-description='Página principal' :suma="2+3">

    <form action="" method="GET">
        <h2>Log In</h2>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="" id="name">
        </div>
        <div>
            <label for="pass">Password: </label>
            <input type="text" name="" id="password">
        </div>
        <div> 
            <a href="{{ route('tab') }}"><input type="submit" value="Log In" /></a>
            <p>No tienes cuenta? <a href='{{ route('reg') }}'>Create an account</a></p>
        </div>
    </form>

</x-layouts.app>