

  <!-- Header -->
  <header id="portfolio">
    
    <div class="w3-container">
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
      <button class="w3-button w3-white"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
      <button class="w3-button w3-white"><i class="fa fa-plus"></i></button>
      <a href="<?=  site_url('admin_post/createPost');?>"><button class="w3-button w3-black w3-right"><i class="fa fa-plus"></i> New Post</button></a>
    </div>
    </div>
  </header>
  
  <?php
    
  if(isset($posts)){
      $sr = 0;
      foreach($posts->result() as $row ){
          
  if($sr % 3 == 0){
  ?>
  <div class="w3-row-padding">
  <?php } ?>
      <div class="w3-third w3-container w3-margin-bottom w3-center  w3-white w3-border w3-padding-small">
      <?=img(array('src'=>  site_url('uploads/'.$row->imagepath), 'alt'=> $row->heading,"class"=>"w3-hover-opacity" ,"style"=>"max-height:160px;width:auto"));?>  
      
      <div class="w3-container w3-white w3-left-align">
        <p><b><?=$row->heading ?></b></p>
        <p><?=  character_limiter($row->post,100) ?></p>
      </div>
          
          <a href="<?=  site_url('admin_post/changePost/'.$row->id);?>"><button class="fa fa-edit w3-button w3-black"></button></a>
          <button onclick="deletePost('<?=  site_url('admin_post/deletePost/'.$row->id);?>')" class="fa fa-trash w3-button w3-black"></button>
    </div>
    
 <?php
 if($sr % 3 == 2){
  ?>     
  </div>
 <?php }
  $sr++;
      }
      
if($sr % 3 !== 0){
  ?>     
  </div>
 <?php }
  }
  ?>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>


  <script >
  function deletePost(link){
      var con = confirm("Delete post?");
      if(con){
          location.href = link;
      }
  }
  </script>
 
  
