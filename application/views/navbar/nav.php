<!-- Navigation -->
<?php if($this->session->userdata('theme') != '') { ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top static-top mb-5 shadow">
<?php }else{ ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top static-top mb-5 shadow">
<?php }?>
    <div class="container">
      <a class="navbar-brand" href="#">X-Stream</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          