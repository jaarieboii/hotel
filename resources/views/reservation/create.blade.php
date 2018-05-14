@extends('layouts.app')
@section('content')
    <div class="container">
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
<form method="post" action="/reservation">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="firstname">First name</label>
        <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
    </div>
    <div class="form-group">
        <label for="phonenumber">Phone number</label>
        <input type="text" class="form-control" id="phonenumber" placeholder="Phone number" name="number">
    </div>
    <div class="form-group">
        <label for="dog">Dog</label>
        <input type="number" max="1" min="0" class="form-control" id="dog" placeholder="Dog" name="dog">
    </div>

    <div class="form-group">
        <label for="roomtype">Room Type</label>
        <select type="text" max="4" class="form-control" id="roomtype" placeholder="Select Room type" name="roomtype">
            @foreach($roomtype as $type)
            <option>{{$type->name}}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label for="start">Start date</label>
        <input type="date" class="form-control" id="start" placeholder="Start date" name="start">
    </div>
    <div class="form-group">
        <label for="end">End date</label>
        <input type="date" class="form-control" id="end" placeholder="End date" name="end">
    </div>
    <div class="form-group">
        <label for="persons">Max Persons</label>
        <input type="number" max="2" class="form-control" id="persons" placeholder="Max persons" name="persons">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
    </div>
@endsection
