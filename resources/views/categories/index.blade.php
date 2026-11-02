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
        <th colspan="4" bgcolor="yellow">
            <h3>View Categories</h3>
        </th>
        <tr>
          <th>No</th>
          <th>Categorie Name</th>
          <th>Description</th>
          <th>
            <a href="{{ route('categories.create') }}">+ Add Categories</a>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $datacategories as $v )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $v->categories_name }}</td>
            <td>{{ $v->description }}</td>
            <td>
                <form action='{{ route('categories.destroy', $v->categories_id) }}' method="POST" style="display: inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('categories.edit', $v->categories_id) }}">Edit</a>
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





