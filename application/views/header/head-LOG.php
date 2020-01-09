<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <!-- Bootstrap CSS --> 
    
    <?php if($this->session->userdata('theme') != '') { ?>
    <link rel="stylesheet" href="<?php echo base_url('framework/bootstrap-4.4.1/css/bootstrap.min.css'); ?>">
    <?php } else {?>
    <link rel="stylesheet" href="<?php echo base_url('framework/bootswatch/bootstrap.min.css'); ?>">
    <?php }?>
    <link rel="stylesheet" href="<?php echo base_url('framework/fontawesome-5.12.0/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/vendor/animate/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/vendor/animsition/css/animsition.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/vendor/select2/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/vendor/daterangepicker/daterangepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/css/logutil.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/login/css/logmain.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('framework/style.css'); ?>">

    <style>
    body {
      background: url('<?php echo base_url('framework/bg.png'); ?>') no-repeat center center fixed;
    }
    </style>

</head>