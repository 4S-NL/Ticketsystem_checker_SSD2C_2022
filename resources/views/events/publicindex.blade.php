<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket systeem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
    <div class="alert alert-danger">THIS IS THE TESTPROJECT, DO NOT EDIT!</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evenementen</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Evenement</th>
            <th>Naam</th>
            <th>Start datum</th>
            <th>Eind datum</th>
            <th>Aantal tickets</th>
            <th>Prijs</th>
            <th width="280px">Actie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->end_date }}</td>
                <td>{{ $event->capacity }}</td>
                <td>{{ $event->price }}</td>
                <td>
                    <a href="{{ route('publicevents.checkout', $event) }}" class="btn btn-info">Koop Tickets</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
