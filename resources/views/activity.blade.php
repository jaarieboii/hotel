@extends('layouts.app')

@section('content')

    <div class="container">
    <form action="" method="GET">
        <select name="category">
                <option>All</option>
                <option>Car</option>
                <option>Walking</option>
        </select>
        <input type="submit" value="Select">
    </form>
    @if(isset($_GET['category']))
            @foreach($activity as $activitys)
                <div class="col-lg-12">
                    <br>
                    <div class="col-lg-2">
                        {{$activitys->name}}
                    </div>
                    <div class="col-lg-10">
                        {{$activitys->activity}}
                    </div>
                </div>
            @endforeach
        @if($_GET['category'] == 'All')
            
            @foreach($activity as $activitys)
            <div class="col-lg-12">
                <br>
                <div class="col-lg-2">
                    {{$activitys->name}}
                </div>
                <div class="col-lg-10">
                {{$activitys->activity}}
                </div>
            </div>


            @endforeach

        @endif
        @if($_GET['category'] == 'Walking')
            @foreach($walking as $walkings)
                <div class="col-lg-12">
                    <br>
                    <div class="col-lg-2">
                        {{$walkings->name}}
                    </div>
                    <div class="col-lg-10">
            {{$walkings->activity}}
                    </div>
                </div>


            @endforeach
        @endif
        @if($_GET['category'] == 'Car')
            @foreach($cars as $car)
                <div class="col-lg-12">
                    <br>
                    <div class="col-lg-2">
                        {{$car->name}}
                    </div>
                    <div class="col-lg-10">
                {{$car->activity}}
                    </div>
                </div>

            @endforeach
        @endif
        @endif
    </div>
    @endsection