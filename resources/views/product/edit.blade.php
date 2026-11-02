<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<table border="2">
            <th colspan="4" bgcolor="yellow">
                <h3>Form Update Products</h3>
            </th>
                <tr>
                    <form action="{{ route('products.update', $dataeditproduct->product_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                </tr>
                <tr collspan ="2">
                    <td><label>Product Name: </label></td>
                    <td><input type="text" name="name" value="{{ $dataeditproduct->name }}"></td>
                </tr>
                <tr>
                    <td><label>Categories: </label></td>
                    <td>
                        <select name="categories_id">
                            <option value="">-- Select Category --</option>
                            @foreach ($datacategories as $v)
                                <option value="{{ $v->categories_id }}" {{ (old('categories_id', $dataeditproduct->categories_id) == $v->categories_id) ? 'selected' : '' }}>
                                    {{ $v->categories_name }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Price: </label></td>
                    <td><input type="number" name="price" value="{{ $dataeditproduct->price }}"></td>
                </tr>
                <tr>
                    <td><label>Stock: </label></td>
                    <td><input type="integer" name="stock" value="{{ $dataeditproduct->stock }}"></td>
                </tr>
                <tr>
                    <td><label>Image: </label></td>
                    <td><input type="number" name="image" value="{{ $dataeditproduct->image }}"></td>
                </tr>
                <tr>
                    <td><label>Status: </label></td>
                    <td>
                        <input type="radio" name="status" value="available" {{ $dataeditproduct->status == 'available' ? 'checked' : '' }}> Available
                        <input type="radio" name="status" value="unavailable" {{ $dataeditproduct->status == 'unavailable' ? 'checked' : '' }}> Unavailable
                    </td>
                </tr>
                <tr align="center">
                    <td><button type="submit">Update</button></td>
                    <td><a href={{ route('product.index') }}>Cancel</a></td>
                </tr>
                </table>
                </form>

