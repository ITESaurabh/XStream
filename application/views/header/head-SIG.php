<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sign Up</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   
    <!-- Bootstrap CSS --> 
    
    <?php if($this->session->userdata('theme') != '') { ?>
    <link rel="stylesheet" href="<?php echo base_url('framework/bootstrap-4.4.1/css/bootstrap.min.css'); ?>">
    <?php } else {?>
    <link rel="stylesheet" href="<?php echo base_url('framework/bootswatch/bootstrap.min.css'); ?>">
    <?php }?>
 
    <link rel="stylesheet" href="<?php echo base_url('framework/login/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('framework/signup/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/style.css'); ?>">

    <style>
    body {
      background: url('<?php echo base_url('framework/bg.png'); ?>') no-repeat center center fixed;
    }
    </style>

</head>