<!DOCTYPE html>
<html>
<head>
    <title>Reports - Asset View List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <p>Opol Community College</p>
        <p>{{ $title }}</p>
        <p>{{ $date }}</p>

    <table class="table table-striped table-sm">
        <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Details </th>
                <th> Serial </th>
                <th> Category </th>
                <th> Status </th>
                <th> Quantity </th>
                <th> Build </th>
                <th> Department </th>
                <th> Created </th>
            </tr>
        @foreach($assets as $asset)
        <tr>
                <td>{{$asset['ID']}}</td>
                <td>{{$asset['Name']}}</td>
                <td>{{$asset['Details']}}</td>
                <td>{{$asset['Serial']}}</td>
                <td>{{$asset['Category']}}</td>
                <td>{{$asset['Status']}}</td>
                <td>{{$asset['Quantity']}}</td>
                <td>{{$asset['Build']}}</td>
                <td>{{$asset['Department']}}</td>
                <td>{{$asset['Created']}}</td>
            </tr>
        @endforeach
    </table>

    </body>
</html>
