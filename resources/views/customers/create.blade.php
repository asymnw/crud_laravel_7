<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<table border="2">
            <th colspan="4" bgcolor="yellow">
                <h3>Form Customers</h3>
            </th>
                <tr>
                    <form action="{{ route('customers.store') }}" method="POST">
                        {{ csrf_field() }}
                    </tr>
                <tr collspan ="2">
                    <td><label>Customer_name: </label></td>
                    <td><input type="text" name="customer_name"></td>
                </tr>
                <tr>
                    <td><label>Email: </label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label>Phone: </label></td>
                    <td><input type="number" name="phone"></td>
                </tr>
                <tr>
                    <td><label>Address: </label></td>
                    <td><textarea name="address"></textarea></td>
                </tr>
                <tr>
                    <td><label>Member_status: </label></td>
                    <td><input type="radio" name="member_status" value=1>Member</td>
                    <td><input type="radio" name="member_status" value=0 checked>Non-Member</td>
                </tr>

                <tr align="center">
                    <td><button type="submit">Save</button></td>
                    <td><a href={{ route('customers.index') }}>Cancel</a></td>
                </tr>
                </table>
                </form>


