<table border="2" align="center">
            <th colspan="4" bgcolor="yellow">
                <h3>Form Categories</h3>
            </th>
                <tr>
                    <form action="{{ route('categories.store') }}" method="POST">
                        {{ csrf_field() }}
                </tr>
                <tr>
                    <td><label>Categorie Name: </label></td>
                    <td><input type="text" name="categories_name"></td>
                </tr>
    </br>
                <tr>
                    <td><label>Description: </label></td>
                    <td><textarea name="description"></textarea></td>
                </tr>
    </br>
                <tr align="center">
                    <td><button type="submit">Save</button></td>
                    <td><a href={{ route('categories.index') }}>Cancel</a></td>
                </tr>
                    </form>
</table>


