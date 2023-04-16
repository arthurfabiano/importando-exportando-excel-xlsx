<table>
    <thead style="background-color: #4a5568;color: #e2e8f0;">
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $item)
        <tr>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
