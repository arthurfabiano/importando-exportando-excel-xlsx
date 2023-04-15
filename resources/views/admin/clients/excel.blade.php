<table>
    <thead>
        <tr>
            <th>Nome</th><th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $item)
        <tr>
            <td>{{ $item->nome }}</td><td>{{ $item->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
                          