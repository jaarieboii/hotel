@extends('layouts.app')

@section('content')
    <div class="container">
    <form action="" method="GET">
        <select name="category">
            @foreach($activity as $activitys)
                <option>{{$activitys->category}}</option>
            @endforeach
                <option>all</option>
        </select>
        <input type="submit">
    </form>
        @if($_GET['category'] == 'all')
            @foreach($activity as $activitys)

                {{$activitys->activity}}

            @endforeach
        @endif
        @if($_GET['category'] == 'walking')
            @foreach($walking as $walkings)

            {{$walkings->activity}}

            @endforeach
        @endif
        @if($_GET['category'] == 'cycling')
            @foreach($cycling as $cyclings)

                {{$cyclings->activity}}

            @endforeach
        @endif
    </div>
    @endsection