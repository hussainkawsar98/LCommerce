!function(e){var t={anchor:new google.maps.Point(10,15),url:"images/map-marker.png"},o=document.createElement("div");function a(e,t){e.style.margin="10px",e.className="zoom-control";var o=document.createElement("div");o.className="zoom-in",o.setAttribute("title","Zoom in"),e.appendChild(o);var a=document.createElement("i");a.className="fal fa-plus",o.appendChild(a);var l=document.createElement("div");l.className="zoom-out",l.setAttribute("title","Zoom out"),e.appendChild(l);var n=document.createElement("i");n.className="fal fa-minus",l.appendChild(n),google.maps.event.addDomListener(o,"click",function(){t.setZoom(t.getZoom()+1)}),google.maps.event.addDomListener(l,"click",function(){t.setZoom(t.getZoom()-1)})}o.index=1;var l=document.getElementById("map-single");void 0!==l&&null!=l&&google.maps.event.addDomListener(window,"load",function(){var l=e("#map-single"),n=new google.maps.LatLng({lng:l.data("longitude"),lat:l.data("latitude")}),i={zoom:13,scrollwheel:!1,center:n,mapTypeId:google.maps.MapTypeId.ROADMAP,zoomControl:!1,mapTypeControl:!1,fullscreenControl:!0,streetViewControl:!1,styles:[{featureType:"administrative",elementType:"labels.text",stylers:[{visibility:"on"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"transit.station.rail",elementType:"all",stylers:[{visibility:"simplified"},{saturation:"-100"}]},{featureType:"water",elementType:"all",stylers:[{visibility:"on"}]}]},s=new google.maps.Map(document.getElementById("map-single"),i);new google.maps.Marker({position:n,map:s,icon:t}),new a(o,s),s.controls[google.maps.ControlPosition.LEFT_TOP].push(o)})}(this.jQuery);