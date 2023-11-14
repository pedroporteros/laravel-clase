<x-layouts.app titulo="Principal" meta-description='Página principal' :suma="2+3">
    <h1>Principal</h1>
    <form action="" method="GET">
        <div class="mt-5 ml-5">
            <label for="name">Name: </label>
            <input class="ml-4" type="text" name="" id="name">
        </div>
        <div class="mt-3 ml-5">
            <label for="name">Password: </label>
            <input class="ml-3" type="text" name="" id="password">
        </div>
        <div class="mb-3 mt-3 ml-5"> 
            <input type="submit" value="Log In" />
        </div>
    </form>

</x-layouts.app>