<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo  link_tag('assets/css/adminLogin.css'); ?>
<?php echo  link_tag('assets/css/bootstrap.min.css'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Login Form</h2>

<?php

echo form_open('admin/loginValidate');
?>
  <div class="imgcontainer">
      <img src="<?= base_url('assets/imgs/img_avatar2.png');?>" alt="Avatar" class="avatar">
  </div>
    <?php  if($this->session->userdata('login_error')){ ?>
    <div class="alert alert-danger  fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?= $this->session->userdata('login_error'); ?></strong>
    </div>
    <?php } ?>
  <div class="container">
      
    <?php 
        echo form_label('<b>Username</b>','name');
        $attr = array(
            'placeholder' => 'Enter Username',
            'name' => 'name',
            'value' => set_value('name'),
//            'required' => 'required',
        );
        echo form_input($attr);
     
        echo form_error('name')
        , br()
        ,form_label('<b>Password</b>','password');
        $attr = array(
            'placeholder' => 'Enter Password',
            'name' => 'password',
            'value' => set_value('password'),
//            'required' => 'required',
        );
        echo form_password($attr)
       
        ,form_error('password')
     
        ,br(); 
        
        $attr = array(
            'name' => 'login',
            'value' => 'Login',
        );
        echo form_submit($attr);
     ?>   
    <label>
        <?php  echo form_checkbox('remember','true',TRUE);?> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <?php 
    $subAtr = array('class'=>'cancelbtn',
        'name'=>'reset',
        'value'=>'Reset',
        'content'=>"Reset");
    
    echo form_reset($subAtr);
    ?>  
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

<?php echo form_close(); ?>

</body>
</html>
