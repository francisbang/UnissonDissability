jQuery(document).ready(function() {
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


		/******************************************/
		/***********Get Current location***********/
		/******************************************/
		var x = document.getElementById("edit-field-property-geolocation-proximity-source-configuration-origin-address");
		function getLocation() { 
		  if (navigator.geolocation) { 
			navigator.geolocation.getCurrentPosition(showPosition);
		  } else {
			x.value = "Geolocation is not supported by this browser.";
		  }
		}

		function showPosition(position) { 
		  x.value = "Latitude: " + position.coords.latitude +
		  "<br>Longitude: " + position.coords.longitude;
		}

		//var cl = jQuery("#current-location").wrap('<p/>').parent().html();
		//jQuery('.form-item-field-property-geolocation-proximity-value').after(cl);
		jQuery( "#current-location" ).insertAfter( jQuery( ".form-item-field-property-geolocation-proximity-value" ) );
		
		jQuery(".gtranslate select option[value=''], .gtranslate .jcf-select-text").text('Google Translate');
		

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