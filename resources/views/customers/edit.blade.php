<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<table border="2">
            <th colspan="4" bgcolor="yellow">
                <h3>Form Update Customers</h3>
            </th>
                <tr>
                    <form action="{{ route('customers.update', $dataeditcustomers->customer_id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                    </tr>
                <tr collspan ="2">
                    <td><label>Customer_name: </label></td>
                    <td><input type="text" name="customer_name" value="{{ $dataeditcustomers->customer_name }}"></td>
                </tr>
                <tr>
                    <td><label>Email: </label></td>
                    <td><input type="email" name="email" value="{{ $dataeditcustomers->email }}"></td>
                </tr>
                <tr>
                    <td><label>Phone: </label></td>
                    <td><input type="number" name="phone" value="{{ $dataeditcustomers->phone }}"></td>
                </tr>
                <tr>
                    <td><label>Address: </label></td>
                    <td><textarea name="address">{{ $dataeditcustomers->address }}</textarea></td>
                </tr>
                <tr>
                    <td><label>Member_status: </label></td>
                    <td><input type="radio" name="member_status" value=1 {{ $dataeditcustomers->member_status == 1 ? "checked" : "" }}>Member</td>
                    <td><input type="radio" name="member_status" value=0 {{ $dataeditcustomers->member_status == 0 ? "checked" : "" }}>Non-Member</td>
                </tr>
                <tr align="center">
                    <td><button type="submit">Update</button></td>
                    <td><a href={{ route('customers.index') }}>Cancel</a></td>
                </tr>
                </table>
                </form>


