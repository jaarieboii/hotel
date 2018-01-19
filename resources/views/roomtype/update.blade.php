<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
{{$roomtype->name}}
<form method="post" action="/roomtype">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="roomtype">Room Type</label>
        <input type="roomtype" class="form-control" id="roomtype" placeholder="Room Type" name="name" value="{{$roomtype->name}}">
    </div>
    <div class="form-group">
        <label for="maxperson">Max persons</label>
        <input type="number" max="3" class="form-control" id="maxperson" placeholder="Max Persons" name="persons" value="{{$roomtype->persons}}">
    </div>
    <div class="checkbox">
        <label>

            <input type="number" min="0" max="1" name="dog" value="{{$roomtype->dog}}"> Dog
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>