var map;
var geocoder;

       function initMap() {
           var vienna = {
               lat: 48.20849,
               lng: 16.37208
           };
           map = new google.maps.Map(document.getElementById('map'), {
               center: vienna,
               zoom: 10
           });
           var pinpoint = new google.maps.Marker({
               position: vienna,
               map: map
           });
           var data=document.getElementById('data').innerHTML;
           
          var cdata=(JSON.parse(data));
               geocoder = new google.maps.Geocoder();
               codeAddress(cdata);
             

       }
  function codeAddress(data) {
    
           var address =data.city;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var point={};
        point.id=data.animal_id;
        point.lat=map.getCenter().lat();
        point.lng=map.getCenter().lng();
        updatelocation(point);

        
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
  function updatelocation(point){
    $.ajax({
      url: "action.php",
       method: "post",
       data: point,
       success:function(res){
         console.log(point);
       }
    })


  }