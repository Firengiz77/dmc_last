<table>
    <thead>
        <tr>
            <th>Sira</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subscribes as $key => $subscribe)
            <tr> <td>{{ ++$key }}</td>
            <td>{{ $subscribe->email }}</td>
        @endforeach
    </tbody>
</table>