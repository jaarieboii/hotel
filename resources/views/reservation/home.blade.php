@extends('layouts.app')

@section('content')
    <div class="container">
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phonenumber</th>
        <th>Room type</th>
        <th>Start date</th>
        <th>End date</th>
        <th>Dog</th>
    </tr>
    </thead>
    <tbody>
    {{ Auth::Id() }}

    @foreach($reservation as $res)
        @if(Auth::user()->id == $res->user_id))
        <tr>
            <td>{{$res->firstname}}</td>
            <td>{{$res->lastname}}</td>
            <td>{{$res->number}}</td>
            <td>{{$res->roomtype}}</td>
            <td>{{$res->start}}</td>
            <td>{{$res->end}}</td>
            <td>{{$res->dog}}</td>
            <td>
            <form action="/reservation/{{$res->id}}/edit">
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </td>
            <td>
                <form action="/reservation/{{ $res->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endif
        @endforeach

    </tbody>
</table>
    </div>
@endsection