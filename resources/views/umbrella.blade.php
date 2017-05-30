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
                <div class="panel-heading">共傘服務
                  <a class="btn navbar-btn btn-primary" href="{{ URL::to('createumbrella') }}">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                      送出需求
                  </a>
                </div>

                <div class="panel-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
      function initMap() {
        var bounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: markers
        });
    // Info Window Content
        var infoWindowContent = [
        @foreach($services as $service)
        @if($service->trans_mode == 'umbrella')
            ['<div class="info_content">' +
            '<h3>發出需求者：{{$service->request_account}}</h3>' +
            '<p></p>' +        '</div>'],
            @endif
            @endforeach
        ];
        var markers = [
        @foreach($services as $service)
        @if($service->trans_mode == 'umbrella')
            ['{{$service->start_name}}', {{$service->start_lat}},{{$service->start_lng}}],
        @endif
        @endforeach
        ];
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Loop through our array of markers & place each one on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(
                markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });
            
            // Allow each marker to have an info window    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD3dx9SWCOCYzQIeAmoanw61V7Tr4BRuE&callback=initMap">
    </script>
@endsection
