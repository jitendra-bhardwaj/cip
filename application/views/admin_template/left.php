<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="https://www.w3schools.com/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    <p class="w3-text-grey">Template by W3.CSS</p>
  </div>
  <div class="w3-bar-block">
    <a href="<?=  site_url('admin/home'); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding <?php if(uri_string() == 'admin/home'){echo 'w3-text-teal';} ?>"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="<?=  site_url('admin/aboutme'); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding <?php if(uri_string() == 'admin/aboutme'){echo 'w3-text-teal';} ?>"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="<?=  site_url('admin/contact'); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding <?php if(uri_string() == 'admin/contact'){echo 'w3-text-teal';} ?>"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="<?=  site_url('admin/logout'); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>
<span  class=" w3-top w3-light-grey w3-bottombar">
<a href="#"><img src="https://www.w3schools.com/w3images/avatar_g2.jpg" style="width:40px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>

</span>
<span class="w3-hide-large ">
   <?=br(3);?>
</span>
