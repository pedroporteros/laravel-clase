<x-layouts.app titulo="Principal" meta-description='Página principal' :suma="2+3">
    <h2 class="mt-3 text-center">Principal</h2>
    <form action="" method="GET" class="text-center">
        <div class="mt-5">
            <label for="name">Name: </label>
            <input class="ml-4" type="text" name="" id="name">
        </div>
        <div class="mt-3">
            <label for="name">Password: </label>
            <input class="ml-3" type="text" name="" id="password">
        </div>
        <div class="mb-3 mt-3"> 
            <input type="submit" value="Log In" />
            <a>Not register? Create an account</a>
        </div>
    </form>

</x-layouts.app>