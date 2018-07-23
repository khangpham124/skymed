<div id="footerWrap" class="footerSub">
    <div class="footerInner flexBox flexBox--center flexBox--between">
        <h4 class="h4_footer"><img src="<?php echo APP_URL; ?>common/img/footer/logo@sp.png" class="logo_footer" alt=""></h4>
        <ul class="footerMenu">
            <li><a href="<?php echo APP_URL; ?>">Home</a></li>
            <li><a href="<?php echo APP_URL; ?>about">About Us</a></li>
            <li><a href="<?php echo APP_URL; ?>services">Services</a></li>
            <li><a href="<?php echo APP_URL; ?>air-ambulance-fleet">Air Ambulance Fleet</a></li>
            <li><a href="<?php echo APP_URL; ?>safety-first">Safety First</a></li>
            <li><a href="<?php echo APP_URL; ?>faq">FAQs</a></li>
        </ul>
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
