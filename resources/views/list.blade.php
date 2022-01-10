<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
    <h1>
        Itmes list
    </h1>
    <table>
        <tr>
            <td> Id </td>
            <td> name </td>
            <td> Emale </td>
        </tr>
        @foreach ($Itmes as $item)
        <tr>
            <td> {{$item['id']}} </td>
            <td> {{$item['migration']}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>