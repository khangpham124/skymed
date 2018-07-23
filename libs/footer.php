<div id="footerWrap" class="flexBox">
        <div class="leftFoot">
            <h3 class="h3_foot font_play"><?php echo ${'titelFooter_'.$lang_web}; ?></h3>
            <form class="formBlock" id="ajaxform" action="http://www.skymedasia.com/mailer/">
                <div class="flexBox flexBox--between">
                    <input type="text" class="inputText" placeholder="<?php echo ${'phName_'.$lang_web}; ?>" name="form_name" require>
                    <input type="email" class="inputText" placeholder="<?php echo ${'phMail_'.$lang_web}; ?>" name="form_mail" require>
                </div>
                <input type="text" class="inputText inputText_100" placeholder="<?php echo ${'phPhone_'.$lang_web}; ?>" name="form_phone">
                <textarea placeholder="<?php echo ${'phMess_'.$lang_web}; ?>" name="form_mess"></textarea>
                <input type="submit" class="submitForm" id="simple-post" value="<?php echo ${'btnSend_'.$lang_web}; ?>">
                <input type="hidden" name="action" value="send">
            </form>
            <p id="simple-msg"></p>
            <h4 class="h4_footer"><img src="<?php echo APP_URL; ?>common/img/footer/logo@sp.png" class="logo_footer" alt=""></h4>
        </div>
        <div class="rightFoot">
            <div id="map"></div>
        </div>
</div>
<p class="copyright">Copyright © 2018 SKYMED ASIA SERVICES Co., Ltd. All Rights Reserved</p>
<script src="<?php echo APP_URL; ?>common/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo APP_URL; ?>common/js/common.js"></script>
<script src="<?php echo APP_URL; ?>common/js/smoothscroll.js"></script>
<script src="<?php echo APP_URL; ?>common/js/biggerlink.js"></script>
<script src="<?php echo APP_URL; ?>common/js/cookies.js"></script>
<script src="<?php echo APP_URL; ?>common/js/jquery.matchHeight.min.js"></script>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/jquery-scrolltofixed.js"></script>
<script src="<?php echo APP_URL; ?>common/js/wow.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  </script>
<script>
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
          $('.subMenu').slideToggle(200);
        }, false);
      });
    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV7fW4OF5FqFFlLakpTOvf1Kuq_qHXcqY"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo get_field('position_thai',$post_info->ID); ?>), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo get_field('position_thai',$post_info->ID); ?>),
                    map: map,
                });
            }
</script>
<script>
$(document).ready(function()
{

$("#simple-post").click(function()
{
	$("#ajaxform").submit(function(e)
	{
		$("#simple-msg").html("<p class='taC'><img src='http://www.skymedasia.com/common/img/footer/loading.gif'/></p>");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
			//$("#name").value='';	 
            window.location.href = '<?php echo APP_URL; ?>success/';
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});
	    e.preventDefault();	//STOP default action
	    e.unbind();
	});
		
	//$("#ajaxform").submit(); //SUBMIT FORM
});
});
</script>