<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <thead>
        <th colspan="8" bgcolor="yellow">
            <h3>View Customers</h3>
        </th>
        <tr>
            <th>No</th>
            <th>customer_name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>member_status</th>
            <th>
            <a href="{{ route('customers.create') }}">+ Add Customers</a>
          </th>
        </tr>
    </thead>
    <tbody>
        <!-- atiati typo -->
        @foreach ( $datacustomers as $v )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $v->customer_name }}</td>
            <td>{{ $v->email}}</td>
            <td>{{ $v->phone }}</td>
            <td>{{ $v->address }}</td>
            <td>{{ ($v->member_status) ? 'Member' : 'Non-Member' }}</td>
            <td>
                <form action='{{ route('customers.destroy', $v->customer_id) }}' method="POST" style="display: inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('customers.edit', $v->customer_id) }}">Edit</a>
                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>





