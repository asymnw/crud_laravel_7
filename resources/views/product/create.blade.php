<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<table border="2">
            <th colspan="4" bgcolor="yellow">
                <h3>Form Products</h3>
            </th>
                <tr>
                    <form action="{{ route('products.store') }}" method="POST">
                        {{ csrf_field() }}
                    </tr>
                <tr collspan ="2">
                    <td><label>Product Name: </label></td>
                    <td><input type="string" name="name"></td>
                </tr>
                <tr>
                    <td><label>Categories: </label></td>
                    <td>
                        <select name="categories_id">
                            @foreach ($datacategories as $v)
                                <option value="{{ $v->categories_id }}">{{ $v->categories_name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Price: </label></td>
                    <td><input type="decimal" name="price"></td>
                </tr>
                <tr>
                    <td><label>Stock: </label></td>
                    <td><input type="integer" name="stock"></td>
                </tr>
                <tr>
                    <td><label>Image: </label></td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><label>Status: </label></td>
                    <td>
                        <select name="status">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Description: </label></td>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr align="center">
                    <td><button type="submit">Save</button></td>
                    <td><a href={{ route('product.index') }}>Cancel</a></td>
                </tr>
                </table>
                </form>

