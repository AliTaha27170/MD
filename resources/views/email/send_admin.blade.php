<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Order</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Customer</th>
            <th>Email</th>
            <th>Telephone</th>
        </tr>
        <tr>
            <td>{{$customer}}</td>
            <td>{{$email}}</td>
            <td>{{$telephone}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <th>State</th>
            <th>ZipCode</th>
        </tr>
        <tr>
            <td>{{$address}}</td>
            <td>{{$state}}</td>
            <td>{{$zip_code}}</td>
        </tr>
    </table>
    <br><br>
{!! $msg !!}
</body>
</html>