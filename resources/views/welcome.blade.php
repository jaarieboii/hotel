@extends('layouts.app')
        @section('content')
            <div class="container">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="max-height: 400px;" >
                        <div class="item active">
                            <img src="{{ asset("images/maldives-666122_1920.jpg") }}">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset("images/meadow-406514_1920.jpg") }}" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            <div class="row"><br></div>
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <h2 class="center">News</h2>
                    </div>
                    <div class="">
                        @foreach($newsfeed as $news)
                            <h3 class="center">{{$news->title}}</h3>
                            <p class="center">{{$news->newsfeed}} <br>
                            <strong>{{$news->created_at}}</strong></p>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12">
                        <div id="map"></div>
                        <br>
                       <div class="center"> An der Schwefelquelle 20,<br>
                        38707 Altenau,<br>
                           Duitsland</div>
                    </div>
                </div>

            </div>
            </div>
            <script>
                function initMap() {
                    var uluru = {lat: 51.797, lng: 10.437};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 4,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }

            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAayVYTGm2PvurnHlqnmdoz9UKeDMG8MOw&callback=initMap"> </script>


        @endsection
