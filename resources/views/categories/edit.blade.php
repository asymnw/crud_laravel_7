<table border="1" align="center" bgcolor="yellow">
    <th colspan="2" bgcolor="pink">
        <h3 align="center">Form Edit Categories</h3>
    </th>
    <tr>
        <form action="{{ route('categories.update', $dataeditcategories->categories_id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
    </tr>
    <tr>
        <td><label>Categorie Name: </label></td>
        <td><input type="text" name="categories_name" value="{{ $dataeditcategories->categories_name }}" required></td>
    </tr>
    </br>
        <td><label>Description: </label></td>
        <td><textarea name="description" required>{{ $dataeditcategories->description }}</textarea></td>
    </br>
        <tr align="center">
            <td><button type="submit">Update</button></td>
            <td><a href={{ route('categories.index') }}>Cancel</a></td>
        </tr>
</form>
</table>


