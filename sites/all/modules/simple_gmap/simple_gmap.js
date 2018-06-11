
(function ($) {
  
  $(document).ready(function(){
      if( $("#content_simple_gmap").length > 0  )
        add_gmap();
  });

  function add_gmap(){
        var myLatlng = new google.maps.LatLng(  $('#content_simple_gmap').attr('lat') , $('#content_simple_gmap').attr('lon') );
        var myOptions = {
            zoom:  parseInt( $('#content_simple_gmap').attr('zoom'), 10),
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map($("#content_simple_gmap").get(0), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });

        if( $("#content_marker_simple_gmap").length ){
          var infowindow = new google.maps.InfoWindow({
            content: $("#content_marker_simple_gmap").html()
          });
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map, marker);
          });
        }
  }
})(jQuery);
