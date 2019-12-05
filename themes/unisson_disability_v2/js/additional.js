jQuery(document).ready(function() {

		var GMAP_API_KEY = "AIzaSyBajU4dTEtH8BL2ReVe2vIVLbeVfL-HLd4";
		
		jQuery(".team .tab-pane .col").unwrap();
		/*jQuery("section.contact-form input[type='email']").unwrap();
		jQuery("section.contact-form input[type='text']").unwrap();*/
		
		//jQuery("section.contact-form input[type=checkbox]").after("<span></span>");
		
		jQuery("section.contact-form .js-form-item-phone input[type=text]").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    	});
		
		jQuery(".search-mob a").click(function(){
				jQuery(".region-header-search-mobile").toggle("slow");
		});	
		
		
		var prev_href = jQuery('.post-navigation div.prev > a').attr('href');
		var next_href = jQuery('.post-navigation div.next > a').attr('href');
		if(prev_href == next_href) {
			jQuery('.post-navigation div.prev').hide();
		}
		
		
		/*jQuery("section.contact-form .webform-button--submit").on("click", function (e) {
            
            e.preventDefault();
            
            var firstname =jQuery("section.contact-form .js-form-item-first-name input[type=text]"),
                lastname = jQuery("section.contact-form .js-form-item-last-name input[type=text]"),
                email = jQuery("section.contact-form .js-form-item-email input[type=email]")
                phone = jQuery("section.contact-form .js-form-item-phone input[type=text]");
            
            var $form = jQuery('section.contact-form form');
                
            if ($form[0].checkValidity()){
            	jQuery(this).attr("disabled", true);
				jQuery('body').css('cursor', 'wait');
				jQuery('section.contact-form form').submit();
			}
			else {
				isEmpty(firstname);
	            isEmpty(lastname);
	            isEmpty(phone);
	            isEmpty(email);
	            //validateEmail(email);
	        }
		});*/
		
		
		/***************************************************/
		/*-------------- GTRANSLATE CHANGES ---------------*/
		/***************************************************/

		jQuery(".gtranslate select option[value=''], .gtranslate .jcf-select-text").text('Google Translate');


		/******************************************/
		/***********Get Current location***********/
		/******************************************/
		
		/* This code works for https only
		var x = document.getElementById("edit-field-property-geolocation-proximity-source-configuration-origin-address");
		
		jQuery('#current-location a').click(function(){
		  if (navigator.geolocation) { 
			navigator.geolocation.getCurrentPosition(showPosition);
		  } else {
			x.value = "Geolocation is not supported by this browser.";
		  }
		});

		function showPosition(position) { //console.log(position);
		  x.value = "Latitude: " + position.coords.latitude +
		  "<br>Longitude: " + position.coords.longitude;
		}*/
		
		/***************************************************/
		/*----------GMap Code - Current Location-----------*/
		/***************************************************/
		
		var loc_field = '#edit-field-property-geolocation-proximity-source-configuration-origin-address';
		var loc_distance = '#edit-loc-distance';
		var loc_proxdistance = '#edit-field-property-geolocation-proximity-value';
		
		var apiGeolocationSuccess = function(position) {
			//alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
			jQuery.ajax({
				url:'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ position.coords.latitude +','+ position.coords.longitude +'&key=' + GMAP_API_KEY,
				dataType: 'json',
				success: function(json){ 
					console.log(json);//alert("Postal Code:" + json.results[0].address_components[6].long_name);
					var address = json.results[5].formatted_address;
					if(address != ''){
						jQuery(loc_field).val(address);
					
						//Set Distance Value
						var sVal = jQuery(loc_distance). children("option:selected"). val();
						setDistanceLocation(sVal);
					}
					
	   			}
			});
         };

		var tryAPIGeolocation = function() {
				jQuery.post( "https://www.googleapis.com/geolocation/v1/geolocate?key="+ GMAP_API_KEY, function(success) {
				//console.log(success);
				apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
		  })
		  .fail(function(err) {
				alert("API Geolocation error! \n\n"+err);
		  });
		};

		var browserGeolocationSuccess = function(position) {
			alert("Browser geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
		};

		var browserGeolocationFail = function(error) {
		  switch (error.code) {
			case error.TIMEOUT:
			  alert("Browser geolocation error !\n\nTimeout.");
			  break;
			case error.PERMISSION_DENIED:
			  if(error.message.indexOf("Only secure origins are allowed") == 0) {
				tryAPIGeolocation();
			  }
			  break;
			case error.POSITION_UNAVAILABLE:
			  alert("Browser geolocation error !\n\nPosition unavailable.");
			  break;
		  }
		};

		var tryGeolocation = function() {
		  if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(
				browserGeolocationSuccess,
			  browserGeolocationFail,
			  {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true});
		  }
		};

		//Calling Gmap function
		jQuery('#current-location a').click(function(){
			tryGeolocation();
		});


		/***************************************************/
		/*------- End GMap Code - Current Location --------*/
		/***************************************************/
				

		
		/***************************************************/
		/*--------------  PROPERYTY SEARCH  ---------------*/
		/***************************************************/
		//Property All types selection
		
		//jQuery("#edit-field-property-type-target-id a.bef-toggle").wrap('<div id="prop-type-all" class="form-item form-type-checkbox prop-all"><span class="jcf-checkbox jcf-checked"></span></div>');
		//jQuery("#edit-field-property-type-target-id a.bef-toggle").wrap('<div id="prop-type-all" class="form-item form-type-checkbox prop-all"></div>');
		//jQuery( "#edit-field-property-type-target-id #edit-field-property-type-target-id--wrapper" ).prepend(jQuery("#prop-type-all"));
		//jQuery("#prop-type-all").append( "<label>All Types</label>" );
		
		//Assign value to geolocation distance proximity search field
		jQuery( loc_distance ).change(function(){
			var sVal = jQuery(this). children("option:selected"). val();
			setDistanceLocation(sVal);
			
		});

		jQuery( loc_field ).keyup(function() {
		  var sVal = jQuery( loc_distance ). children("option:selected"). val();
		  setDistanceLocation(sVal);
		});
		
		function setDistanceLocation(sVal){
			var lVal = jQuery(loc_field).val();

			if(lVal != '' && sVal != ''){
				jQuery( loc_proxdistance ).val(sVal);
			}else if(lVal != '' && sVal == ''){
				jQuery( loc_proxdistance ).val(1);
			}else{
				jQuery( loc_proxdistance ).val('');
			}
		}
 
		/***************************************************/
		/*------------ END PROPERTY SEARCH  ---------------*/
		/***************************************************/
		
});

/*check data for empty starts here*/
String.prototype.enhancedTrimLeft = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("^[" + charList + "]+"), '');
}
String.prototype.enhancedTrimRight = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("[" + charList + "]+$"), '');
}
String.prototype.enhancedTrim = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.enhancedTrimLeft(charList).enhancedTrimRight(charList);
}


isEmpty = function (theField) {
		if (theField.val().enhancedTrim().length == 0) {
                            theField.after("<div class='message--error'>This is a required field</div>").slideDown(400);
                            return true;
        }
        return false;
};

isSelectval = function (theField, theParent) {
                    	if (theField.val() == 0) {
                            $(""+theParent+"").after("<div class='message--error'>This is a required field</div>").slideDown(400);
                            return true;
                        }
                        return false;
                    };
                    
validateEmail = function (theField) {
                        if (!isEmpty(theField)) {
                            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            if (!re.test(theField.val())) {
                                console.log(theField.parent());
                                theField.parent().after("<div class='message--error message-validate-error'>This email is invalid. Please enter a valid email address.</div>").slideDown(400);
                                return true;
                            }
                        }
    return false;
};

/*check for empty fields ends here*/