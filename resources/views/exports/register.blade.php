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
             <th>Order Id</th>
            <th>Date</th>
             <th>Price</th>
             <th>Title</th>
             <th>Status</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($registers as $key => $register)
            <tr> 
            <td>{{ ++$key }}</td>
            <td>{{ $register->name }}</td>
            <td>{{ $register->surname }}</td>
            <td>{{ $register->email }}</td>
            <td>{{ $register->phone }}</td>
            <td>{{ $register->work }}</td>
            <td>{{ $register->profession }}</td>
            <td>{{ $register->order_id }}</td>
            <td>{{ $register->date }}</td>
             <td>{{ $register->price }}</td>
            <td>{{ $register->title }}</td>
            <td>
                @if($register->status == 0)
                Odenis Olunmayib
                @else
                Odenis Olunub 
                @endif
            
            </td>
            </tr>
        @endforeach
    </tbody>
</table>