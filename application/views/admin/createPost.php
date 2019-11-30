

  <!-- Header -->
  <header id="portfolio">
   
    <div class="w3-container">
    <h1><b>Create Post</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
      
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <?=form_open_multipart('admin_post/savePost') ?>
  <div class="w3-row-padding">
    <div class=" w3-container w3-margin-bottom ">
      <div class="w3-container w3-white w3-padding-16">
        <?php 
            echo form_hidden("id",(isset($post)?$post->id:''));
            echo form_label('<b>Heading</b>','heading','class=" "');
            echo form_error('headline');
            $attrHead = array(
                "name"=>'heading',
                "class"=>'w3-input w3-border w3-animate-input',
                "value"=>(isset($post)?$post->heading:set_value('heading')),
                "placeholder"=>'Heading',
                "required"=>'required',
//                "style"=>'width:30%',
                    );
            echo form_input($attrHead);
            echo br();
            echo form_label('<b>Post</b>','post','class=" "');
            echo form_error('post');
            $attrPost = array(
                "name"=>'post',
                "class"=>'w3-input w3-border w3-animate-input',
                "value"=>(isset($post)?$post->post:set_value('post')),
                "placeholder"=>'Enter Post',
                "required"=>'required',
//                "style"=>'width:30%',
                    );
            echo form_textarea($attrPost);
            
            echo br();
            echo form_label('<b>Image Upload</b> ','imageUpload','class=" "');
            echo form_error('imageUpload');
            if(isset($uploadErr)){ echo $uploadErr;}
            $attrUpload = array(
                "name" => 'imageUpload',
//                "class" => 'w3-input w3-border w3-button w3-black',
                "required"=>'required',
//                "style"=>'width:30%',
            );
            echo form_upload($attrUpload);
            
            $attrBtn = array(
                "type" => "submit",
                "class" => "w3-button w3-black w3-margin-bottom",
                "content" => "<i class='fa fa-edit w3-margin-right'></i>Create Post",
                
            );
            echo br(2);
            echo form_button($attrBtn);
                ?>
      </div>
    </div>
  </div>
  <?=
form_close();?>





 
  
