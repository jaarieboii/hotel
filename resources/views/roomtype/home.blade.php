@extends('layouts.app')

@section('content')
    <div class="container">
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>Room type</th>
        <th>Max persons</th>
        <th>Dog</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roomtypes as $roomtype)
        <tr>
            <td>{{$roomtype->id}}</td>
            <td>{{$roomtype->name}}</td>
            <td>{{$roomtype->persons}}</td>
            <td>{{$roomtype->dog}}</td>
            <td>
                <form action="/roomtype/{{$roomtype->id}}/edit">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </td>
            <td>
                <form action="/roomtype/{{ $roomtype->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
    </div>
@endsection