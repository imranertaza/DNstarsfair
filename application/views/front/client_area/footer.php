        

<div class="footer">
<div class="container" id="area_pad">  
    <div class="row">
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-3">
            <div class="costomer_support">Help Center</div><!--end of costomer_support-->
            <div class="footer_menu">
                <ul>
                   <li> <a href="#"><i class="fa fa-chevron-right"></i> Privecy Policy</a></li>
                   <li><a href=""><i class="fa fa-chevron-right"></i> Term Of Use</a></li>
                   <li><a href=""><i class="fa fa-chevron-right"></i> Documentations</a></li>
               </ul>


            </div><!--end of costomer_support_ditals-->
        </div><!--end of footer_left-->
        <div class="col-md-3">
            <div class="footer_menu_write">Quick Links</div> 
            <div class="footer_menu">
               <ul>
                   <li><a href="<?php print base_url(); ?>details/page/about-us/"><i class="fa fa-chevron-right"></i> About Us</a></li>
                   <li><a href="<?php print base_url(); ?>gallery/"><i class="fa fa-chevron-right"></i> Event Gallery</a></li>
                   <li><a href="<?php print base_url(); ?>details/page/contact-us/"><i class="fa fa-chevron-right"></i> Contact Us</a></li>
               </ul>
            </div>
        </div><!--end of footer_midil-->
        <div class="col-md-3">
            <div class="footer_right_icone_write">Follow Us</div><!--end of footer_right_icone_write-->
            <div class="footer_right_icone"><a href="#"><i class="fa fa-facebook-square sosal"></i></a></div><!--end of footer_right_icone-->
            <div class="footer_right_icone"><a href="#"><i class="fa fa-twitter-square sosal"></i></a></div><!--end of footer_right_icone-->
            <div class="footer_right_icone"><a href="#"><i class="fa fa-linkedin-square sosal"></i></a></div><!--end of footer_right_icone-->
            <div class="footer_right_icone"><a href="#"><i class="fa fa-google-plus-square sosal"></i></a></div><!--end of footer_right_icone-->
        </div><!--end of footer_menu_write-->
        <div class="col-md-3">
            <div class="costomer_support"><?php print $footer_widget2_title; ?></div><!--end of costomer_support-->
            <div class="costomer_support_ditals"><?php print $footer_widget2_description; ?></div><!--end of costomer_support_ditals-->
        </div><!--end of footer_left-->
        </div>
        </div>
    </div>
    
</div>
</div>

<div class="short_footer short_footerl">
    <div class="container">  
    <div class="row">
    <div class="col-md-12 short_footer_write">Copyright © 2019 Starsfairbd  | All rights reserved | </div><!--end of short_footer_write-->
    </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/slick/slick.js"></script>

<script>

function get_district(division_id) {
  $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_district=yes',
       type: "POST",
       dataType: "text",
       data: {division_id: division_id},
       beforeSend: function(){
           $('#district').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(msg){
          $('#district').html(msg);
       }
    });
}


function get_thana(district_id) {
  $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_thana=yes',
       type: "POST",
       dataType: "text",
       data: {district_id: district_id},
       beforeSend: function(){
           $('#thana').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(msg){
          $('#thana').html(msg);
       }
    });
}


function get_ward(thana_id) {
  $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_ward=yes',
       type: "POST",
       dataType: "text",
       data: {thana_id: thana_id},
       beforeSend: function(){
           $('#ward').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(msg){
          $('#ward').html(msg);
       }
    });
}



function check_username(uname){
    $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_username=yes',
       type: "POST",
       dataType: "text",
       data: {username: uname},
       beforeSend: function(){
           $('#progress_bar').css( 'color','#238A09');
           $('#progress_bar').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(message){
          //$('#progress_bar').html(msg);
        if (message==0) {
          $('#progress_bar').html('<span style="color:red">Invalid Username</span>');
        }else {
          $('#progress_bar').html('<span style="color:green">Valid Username</span>');
         }
       }
    });
}


function check_spon(uname){
    $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_username=yes',
       type: "POST",
       dataType: "text",
       data: {username: uname},
       beforeSend: function(){
           $('#spon_bar').css( 'color','#238A09');
           $('#spon_bar').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');

       },
       success: function(message){
          //$('#progress_bar').html(msg);
        if (message==0) {
          $('#spon_bar').html('<span style="color:red">Invalid Username</span>');
        }else {
          $('#spon_bar').html('<span style="color:green">Valid Username</span>');
         }
       }
    });
}

function parent_check(uname){
    $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_username=yes',
       type: "POST",
       dataType: "text",
       data: {username: uname},
       beforeSend: function(){
           $('#parent_check').css( 'color','#238A09');
           $('#parent_check').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(msg){
        if (msg==0) {
          $('#parent_check').html('<span style="color:red">Invalid Username</span>');
        }else {
            $('#parent_check').html('<span style="color:green">Valid Username</span>');
          
          $.ajax({
             url: '<?php print base_url(); ?>ajax.html/?check_hand=yes',
             type: "POST",
             dataType: "text",
             data: {username: uname},
             beforeSend: function(){
                 $('#hand').css( 'color','#238A09');
                 $('#hand').html('Progressing...');
             },
             success: function(msg){
                $('#hand').html(msg);
             }
          });
          
        }
       }
    });
    
}



function check_valid_username(uname){
    $.ajax({
       url: '<?php print base_url(); ?>ajax.html/?check_valid_username=yes',
       type: "POST",
       dataType: "text",
       data: {username: uname},
       beforeSend: function(){
           $('#user_valid').css( 'color','#238A09');
           $('#user_valid').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
       },
       success: function(msg){
          $('#user_valid').html(msg);
       }
    });
}







</script>

<script type="application/javascript">
$('.variable-width').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
});
</script>
 
</body>
</html>
