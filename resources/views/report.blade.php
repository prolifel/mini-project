<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <p>Ini buat filter periode</p>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Is Late</th>
                <th>Category ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->description }}</td>
                    <td>{{ $r->date }}</td>
                    <td>{{ $r->start_time }}</td>
                    <td>{{ $r->end_time }}</td>
                    <td>{{ $r->is_late }}</td>
                    <td>{{ $r->category_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>
