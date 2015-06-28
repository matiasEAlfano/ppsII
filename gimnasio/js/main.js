/*CARLOS*/




/**/


/*MATIAS*/



/**/


/*MAURO*/
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})



/**/



var myCenter=new google.maps.LatLng(-34.6622848,-58.364506,18);

function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    
    var marker=new google.maps.Marker({
    position:myCenter,
    animation:google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
