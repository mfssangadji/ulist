<?php $__env->startSection('title', 'Maps'); ?>
<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .small-img {
            width: 500px;
            margin-top: 3px;
            border-radius: 10px;
            margin-right: 3px;
        }
    </style>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDs7DDghtxpe7kOIwtCcgkIPNSr5pVgYA4&sensor=false"></script>
        <script type="text/javascript">
          var map;
          var mapOptions = { center: new google.maps.LatLng(0.808419, 127.333481),
                               zoom: 14,
                               mapTypeId: google.maps.MapTypeId.ROADMAP,
                               mapTypeId: 'satellite' };

          function initialize() {
              map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
              google.maps.event.addListener(map, 'click',
                function(event) {
                    document.frm.bujur.value=event.latLng.lng();
                    document.frm.lintang.value=event.latLng.lat();
                    
                }
               );
              <?php
                  $arrz = json_encode($arrz);
                  $mac = str_replace('"', "", $arrz);
              ?>
              var userCoor = <?php echo json_encode(array_values($arrx)); ?>;

              

              var userCoordinate = new google.maps.Polyline({
                /**
                path: userCoorPath,
                strokeColor: "#f4bc42",
                strokeOpacity: 1,
                strokeWeight: 2
                **/
              });

              userCoordinate.setMap(map);
              var infowindow = new google.maps.InfoWindow();
              var marker, i;

              for (i = 0; i < userCoor.length; i++) {  
                marker = new google.maps.Marker({
                  position: new google.maps.LatLng(userCoor[i][1], userCoor[i][2]),
                  map: map
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                    infowindow.setContent(userCoor[i][0]);
                    infowindow.open(map, marker);
                  }
                })(marker, i));
              }
          }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map_canvas" style="width: 100%; height: 500px; border-radius: 10px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/maps.blade.php ENDPATH**/ ?>