@extends('layouts.app')

@section('content')
    <div class="container">
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
<form method="post" action="/roomtype/{{$roomtype->id}}">
    {{ csrf_field() }}
    {{ method_field('post') }}
    <div class="form-group">
        <label for="roomtype">Room Type</label>
        <input type="roomtype" class="form-control" id="roomtype" placeholder="Room Type" name="name" value="{{$roomtype->name}}">
    </div>
    <div class="form-group">
        <label for="maxperson">Password</label>
        <input type="number" max="3" class="form-control" id="maxperson" placeholder="Max Persons" name="persons" value="{{$roomtype->persons}}">
    </div>
    <div class="checkbox">
        <label>

            <input type="number" min="0" max="1" name="dog" value="{{$roomtype->dog}}"> Dog
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
@endsection