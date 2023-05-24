<table>
    <thead>
        <tr>
        <th>Sira</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Work Place</th>
            <th>Work</th>
            <th>Sponsor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sponsors as $key => $sponsor)
            <tr> <td>{{ ++$key }}</td>
            <td>{{ $sponsor->name }}</td>
            <td>{{ $sponsor->surname }}</td>
            <td>{{ $sponsor->email }}</td>
            <td>{{ $sponsor->phone }}</td>
            <td>{{ $sponsor->work }}</td>
            <td>{{ $sponsor->profession }}</td>
            <td>{{ $sponsor->experience }}</td>
        @endforeach
    </tbody>
</table>