@extends('layout')

@section('content')
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">{{ Auth::user()->name }}，你現在的位置</div>

                <div class="panel-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script>
      function initMap() {
        var uluru = {lat: 24.971047, lng: 121.193809};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD3dx9SWCOCYzQIeAmoanw61V7Tr4BRuE&callback=initMap">
    </script>
@endsection
