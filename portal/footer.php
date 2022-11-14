<footer class="main-footer sp-two">
    <div class="auto-container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-2 col-md-2 text-center">
                    <img src="../assets/images/logo/footerlogo.png" class="footer-logo" style="height:60px;">
                </div>
                <div class="col-lg-7 col-md-7">
                    <ul class="menu">
                       <li><a href="<?php echo SITE_URL;?>/portal/press-release.php">Press Release</a></li> &nbsp;&nbsp;|
                        <li><a href="<?php echo SITE_URL;?>/portal/faq.php">FAQ </a></li> &nbsp;&nbsp;|
                        <li><a href="<?php echo SITE_URL;?>/portal/policies.php">Policies </a></li> &nbsp;&nbsp;|
                        <li><a href="<?php echo SITE_URL;?>/portal/investor-relations.php">Investor Relations</a></li>&nbsp;&nbsp;|
                        <li><a href="<?php echo SITE_URL;?>/careers.php" class="w-100">Careers</a></li>

                    </ul>
                    <!--Scroll to top Two-->
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget subscribe-widget">
                            <div class="form-group">
                                <input type="text"  class="enteremail error" name="EMAIL" placeholder="Subscribe to Newsletter" id="newsletter_emails" spellcheck="false">
                                <button type="submit" class="theme-btn" id="signup-button"><i class="flaticon-send"></i></button>
                                <label for="subscribe-email" class="subscribe-message error" style="">
                                      <i class="fa fa-warning"></i>
                                      <span class="message-content" style="color:#fff;"></span>
                                    </label>
                            </div>
                       
                    </div>
                </div>
            </div>
              <div class="row">
                 <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 text-center">
                    <p class="footer-mail"><a href="mailto:writeus@raichandgroup.com" style="color:#fff;"><i class="fa fa-envelope" aria-hidden="true"></i> writeus@raichandgroup.com</a></p>
                   
                </div>
                 <div class="col-lg-4 col-md-4"></div>

             </div>

        </div>
        <div class="auto-container">
            <div class="footer-bottom">
              
                <div class="copyright">© 2022 All rights reserved. RAICHAND and its logo are
            trademarks of The Raichand Group.
        </div>
                 
                <ul class="social-links clearfix">
                   
                    
                     <li><a href="https://www.facebook.com/GroupRaichand" target="_blank">
                        <span class="fab fa-facebook-f footer-icons"></span>
                    </a></li>

                    <li><a href="https://www.instagram.com/groupraichand/" target="_blank">
                        <i class='fab fa-instagram footer-icons'></i>
                    </a></li>

                    <li><a href="https://twitter.com/GroupRaichand" target="_blank">
                        <i class='fab fa-twitter-square footer-icons'></i>
                    </a></li>

                    <li><a href="https://www.linkedin.com/company/groupraichand" target="_blank">
                        <i class='fab fa-linkedin footer-icons'></i>
                    </a></li>

                   <li> <a href="https://www.youtube.com/channel/UCTeBTDrTnAZLXooIskScFxg" target="_blank">
                        <i class='fab fa-youtube footer-icons'></i>
                    </a></li>

                    <li><a href="https://www.pinterest.com/groupraichand/" target="_blank">
                        <i class='fab fa-pinterest footer-icons'></i>
                    </a></li>
 <li><a href="https://t.me/groupraichand" target="_blank">
                        <span class="fab fa-tumblr footer-icons"></span>
                    </a></li>
                    <li><a href="https://t.me/groupraichand" target="_blank">
                        <span class="fab fa-telegram footer-icons"></span>
                    </a></li>
                </ul>
            </div>
        </div>
       
    </div>
</footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html" style="display: block;"><span
        class="flaticon-right-arrow"></span></div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-select.min.js"></script>
<script src="../assets/js/jquery.fancybox.js"></script>
<script src="../assets/js/isotope.js"></script>
<script src="../assets/js/owl.js"></script>
<script src="../assets/js/appear.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/lazyload.js"></script>
<script src="../assets/js/scrollbar.js"></script>
<script src="../assets/js/TweenMax.min.js"></script>
<script src="../assets/js/swiper.min.js"></script>
<script src="../assets/js/jquery.lettering.min.js"></script>
<script src="../assets/js/jquery.circleType.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/main.js"></script>





<script>
let i = 2;


$(document).ready(function() {
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
    radius = width / 2.5;

    var height = container.height();
    var angle = 0,
        step = (2 * Math.PI) / fields.length;
    fields.each(function() {
        var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
        var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
        if (window.console) {
            console.log($(this).text(), x, y);
        }

        $(this).css({
            left: x + 'px',
            top: y + 'px'
        });
        angle += step;
    });


    $('.itemDot').click(function() {

        var dataTab = $(this).data("tab");
        $('.itemDot').removeClass('active');
        $(this).addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + dataTab).addClass('active');
        i = dataTab;

        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 1) * 36) + "deg)",
            "transition": "1s"
        });


    });

    setInterval(function() {
        var dataTab = $('.itemDot.active').data("tab");
        if (dataTab > 6 || i > 6) {
            dataTab = 1;
            i = 1;
        }
        $('.itemDot').removeClass('active');
        $('[data-tab="' + i + '"]').addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + i).addClass('active');
        i++;


        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 2) * 36) + "deg)",
            "transition": "1s"
        });

    }, 8000);

});
</script>
<script>
$(document).ready(function() {
    $(".accordion").on("click", function() {
        $(this).toggleClass("active");
        $(this).next().slideToggle(200);
    });
});
</script>
<script>
function sendid()
{
    // alert();
    $('#newsletter_emails').val()
    $.ajax({
        url:'/newsletter_db.php',
        type:'POST',
        data:{
            email:$('#newsletter_emails').val()
        },
        success:function(data){
            $(".message-content").html("Now you are subscribed!");
            $('#newsletter_emails').val('');
        }
    })
}
</script>
<script>
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
$("#signup-button").click(function(e){
  var $email = $("#newsletter_emails").val();
  if(validateEmail($email)){
      sendid();
  }else{
    //alert("Invalid email!");
    $(".message-content").html("E-mail address is not valid.");
  }
  
  $(".subscribe-message").fadeIn(1500).css("display","block").delay(2000).fadeOut(500);
  e.preventDefault();
});
</script>


</body>

</html>