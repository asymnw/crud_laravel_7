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
            <h3>View Products</h3>
        </th>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Categories_id</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Status</th>
            <th>
            <a href="{{ route('products.create') }}">+ Add Products</a>
          </th>
        </tr>
    </thead>
    <tbody>
        <!-- atiati typo -->
        @foreach ( $dataproducts as $v )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $v->name}}</td>
            <td>{{ $v->categories_id}}</td>
            <td>{{ $v->price}}</td>
            <td>{{ $v->stock}}</td>
            <td>{{ $v->image}}</td>
            <td>{{ $v->status}}</td>
            <td>
                <form action='{{ route('products.destroy', $v->product_id) }}' method="POST" style="display: inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('products.edit', $v->product_id) }}">Edit</a>
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





