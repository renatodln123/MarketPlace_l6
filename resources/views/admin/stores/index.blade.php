<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Lojas</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stores as $store)
        <tr>
            <td> {{$store->id}} </td>
            <td> {{$store->name}} </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$stores->links()}}