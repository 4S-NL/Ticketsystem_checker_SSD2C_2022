<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ticket syteem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-2">
      <div class="alert alert-danger">THIS IS THE TESTPROJECT, DO NOT EDIT!</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Order tickets for {{ $event->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="">
        <div class="form-group">
            <label for="">Hoeveel tickets wilt u bestellen?</label>
            <input type="number" class="form-control" name="amount_tickets">
        </div>

        <div class="form-group">
            <label for="">email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="">voornaam</label>
            <input type="text" class="form-control" name="firstname" id="">
        </div>
          <div class="form-group">
            <label for="">tussenvoegsel</label>
            <input type="text" class="form-control" name="insertion" id="">
        </div>

        <div class="form-group">
            <label for="">achternaam</label>
            <input type="text" class="form-control" name="lastname" id="">
        </div>

        <div class="form-group">
            <label for="">adres</label>
            <input type="text" class="form-control" name="address" id="">
        </div>

         <div class="form-group">
            <label for="">woonplaats</label>
            <input type="text" class="form-control" name="city" id="">
        </div>

         <div class="form-group">
            <label for="">postcode</label>
            <input type="text" class="form-control" name="zipcode" id="">
        </div>

        <div class="form-group">
            <label for="">geboortedatum</label>
            <input type="text" class="form-control" name="birth_date" id="">
        </div>

        <div class="form-group">
            <label for="">Telefoon</label>
            <input type="text"class="form-control" name="phone" id="">
        </div>

        <input type="submit" value="Buy tickets!" class="btn btn-primary">
    </form>


</div>
</body>

</html>
