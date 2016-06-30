		
$(function(){


	/*  Gallery lightBox
 	================================================*/ 

 	if( $(".lightbox").length > 0 ) {

		$(".lightbox").prettyPhoto();
		
	}

	/*  Owl carousel
 	================================================*/ 

 	if( $(".owl-carousel").length > 0 ) {

		$(".owl-carousel").owlCarousel({

			 margin:25,
			 stagePadding: 25,
	   		 nav:true,
	   		 navText: [
		      "<i class='glyphicon glyphicon-chevron-left'></i>",
		      "<i class='glyphicon glyphicon-chevron-right'></i>"
		    ],
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:4
		        },
		        1000:{
		            items:8
		        }
		    }

		});
	}


	 /* Contact form ajax Handler
    ================================================*/
		
$(function(){


	/*  Gallery lightBox
 	================================================*/ 

 	if( $(".lightbox").length > 0 ) {

		$(".lightbox").prettyPhoto();
		
	}

	/*  Owl carousel
 	================================================*/ 

 	if( $(".owl-carousel").length > 0 ) {

		$(".owl-carousel").owlCarousel({

			 margin:25,
			 stagePadding: 25,
	   		 nav:true,
	   		 navText: [
		      "<i class='glyphicon glyphicon-chevron-left'></i>",
		      "<i class='glyphicon glyphicon-chevron-right'></i>"
		    ],
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:4
		        },
		        1000:{
		            items:8
		        }
		    }

		});
	}


	 /* Contact form ajax Handler
    ================================================*/

   



    /*
	On scroll animations
	================================================
	*/


    var $elems = $('.animate-onscroll');

    var winheight = $(window).height();
    var fullheight = $(document).height();
 
    $(window).scroll(function(){
        animate_elems();
    });



    function animate_elems() {

	    wintop = $(window).scrollTop(); // calculate distance from top of window
	 
	    // loop through each item to check when it animates
	    $elems.each(function(){
	    	
	      $elm = $(this);
	 
	      if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
	 
	      topcoords = $elm.offset().top; // element's distance from top of page in pixels
	 
	      if(wintop > (topcoords - (winheight*.75))) {
	        // animate when top of the window is 3/4 above the element
	        $elm.addClass('animated');
	      }

	    });

	  } // end animate_elems()

	


 	/*  Google map Script
 	====================================================*/ 

	function initMap() {

  		
  		var mapLatitude = 31.423308 ; // Google map latitude 
  		var mapLongitude = -8.075145 ; // Google map Longitude  

	    var myLatlng = new google.maps.LatLng( mapLatitude, mapLongitude );

	    var mapOptions = {

	            center: myLatlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
	            zoom: 10,
	            scrollwheel: false
	          };   

	    var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);

	    var marker = new google.maps.Marker({
	    	
	      position: myLatlng,
	      map : map,
	      
	    });

	    // To add the marker to the map, call setMap();
	    marker.setMap(map);

	    // Map Custom style
	    var styles = [
		  {
		    stylers: [
		      { hue: "#1f76bd" },
		      { saturation: 80 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 80 },
		      { visibility: "simplified" }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "off" }
		    ]
		  }
		];

		map.setOptions({styles: styles});

	};

	if( $("#contact-map").length > 0 ) {

		initMap();
		
	}

});



		




    /*
	On scroll animations
	================================================
	*/


    var $elems = $('.animate-onscroll');

    var winheight = $(window).height();
    var fullheight = $(document).height();
 
    $(window).scroll(function(){
        animate_elems();
    });



    function animate_elems() {

	    wintop = $(window).scrollTop(); // calculate distance from top of window
	 
	    // loop through each item to check when it animates
	    $elems.each(function(){
	    	
	      $elm = $(this);
	 
	      if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
	 
	      topcoords = $elm.offset().top; // element's distance from top of page in pixels
	 
	      if(wintop > (topcoords - (winheight*.75))) {
	        // animate when top of the window is 3/4 above the element
	        $elm.addClass('animated');
	      }

	    });

	  } // end animate_elems()

	


 	/*  Google map Script
 	====================================================*/ 

	function initMap() {

  		
  		var mapLatitude = 31.423308 ; // Google map latitude 
  		var mapLongitude = -8.075145 ; // Google map Longitude  

	    var myLatlng = new google.maps.LatLng( mapLatitude, mapLongitude );

	    var mapOptions = {

	            center: myLatlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
	            zoom: 10,
	            scrollwheel: false
	          };   

	    var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);

	    var marker = new google.maps.Marker({
	    	
	      position: myLatlng,
	      map : map,
	      
	    });

	    // To add the marker to the map, call setMap();
	    marker.setMap(map);

	    // Map Custom style
	    var styles = [
		  {
		    stylers: [
		      { hue: "#1f76bd" },
		      { saturation: 80 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 80 },
		      { visibility: "simplified" }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "off" }
		    ]
		  }
		];

		map.setOptions({styles: styles});

	};

	if( $("#contact-map").length > 0 ) {

		initMap();
		
	}

});


$(document).ready(function() {
    // Auto resize input
    function resizeInput() {
        $(this).attr('size', $(this).val().length);
    }

    $('input[type="text"], input[type="email"]')
    // event handler
        .keyup(resizeInput)
        // resize on page load
        .each(resizeInput);
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
    (function(){
        var textareas = document.querySelectorAll('.expanding'),

            resize = function(t) {
                t.style.height = 'auto';
                t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
                t.style.height = (t.scrollHeight + t.offset ) + 'px';
                t.style.overflow = '';
            },

            attachResize = function(t) {
                if ( t ) {
                    console.log('t.className',t.className);
                    t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

                    resize(t);

                    if ( t.addEventListener ) {
                        t.addEventListener('input', function() { resize(t); });
                        t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
                    }

                    t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
                }
            };

        // IE7 support
        if ( !document.querySelectorAll ) {
            function getElementsByClass(searchClass,node,tag) {
                var classElements = new Array();
                node = node || document;
                tag = tag || '*';
                var els = node.getElementsByTagName(tag);
                var elsLen = els.length;
                var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
                for (i = 0, j = 0; i < elsLen; i++) {
                    if ( pattern.test(els[i].className) ) {
                        classElements[j] = els[i];
                        j++;
                    }
                }
                return classElements;
            }
            textareas = getElementsByClass('expanding');
        }

        for (var i = 0; i < textareas.length; i++ ) {
            attachResize(textareas[i]);
        }
    })();

    $('form').submit(function(e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = document.getElementById("email").value,
                sendTo = "zilinxie95@gmail.com",
                subject = "Message from " + sendFrom,
                msg = document.getElementById("your-message").value,
                msgHTML = "<em>" + document.getElementById("your-message").value + "<em>",
                fromName = document.getElementById("your-name").value,
                toName = "Developers' Foundation";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });
            
            var successMsg = thisForm.attr('data-success-msg');
            var errorMsg = thisForm.attr('data-error-msg');
            console.log(successMsg);
            var statusDiv = $(".form-status")[0];

            $.ajax({
                url: 'php/mail.php',
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = data;
                    if (returnData.success) {
                        // Throw success msg
                        document.getElementById("submit").disabled = false;
                        statusDiv.innerHTML = successMsg;
                    } else {
                        // Throw error message
                        document.getElementById("submit").disabled = false;
                        statusDiv.innerHTML = errorMsg;
                    }
                    statusDiv.style = "";
                    //statusDiv.toggle("slow");
                    document.getElementById("email").value = "";
                    document.getElementById("your-message").value = "";
                    document.getElementById("your-name").value = "";
                },
                error: function (error) {
                    console.log(error);
                    // Throw error message
                    statusDiv.innerHTML = errorMsg;
                    statusDiv.style = "";
                    //statusDiv.toggle("slow");
                    document.getElementById("email").value = "";
                    document.getElementById("your-message").value = "";
                    document.getElementById("your-name").value = "";
                }
            });
        }
    });
});

$(document).ready(function () {
	// create a LatLng object containing the coordinate for the center of the map
	var latlng = new google.maps.LatLng(43.663133, -79.394754);

	// prepare the map properties
	var options = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		navigationControl: true,
		mapTypeControl: false,
		scrollwheel: ,
		disableDoubleClickZoom: true
	};

	// initialize the map object
	var map = new google.maps.Map(document.getElementById('google_map'), options);

	// add Marker
	var marker1 = new google.maps.Marker({
		position: latlng, map: map
	});

	// add listener for a click on the pin
	google.maps.event.addListener(marker1, 'click', function () {
		infowindow.open(map, marker1);
	});

	// add information window
	var infowindow = new google.maps.InfoWindow({
		content: '<div class="info"><strong>Borderless</strong><br><br> 12 Hart House Circle<br> Toronto, ON</div>'
	});
});