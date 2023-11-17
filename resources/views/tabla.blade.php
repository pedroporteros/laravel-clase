<x-layouts.app titulo="Tabla" meta-description='Página con tabla'>

    <div class="p-6 text-gray-900">
        <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="th-lg">#</th>
                <th class="th-lg">UserName</th>
                <th class="th-lg">UserEmail</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th>#</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
          </table>
    </div>

</x-layouts.app>