  <!-- Page Content -->
  <div class="mb-4">
  <div class="container">
    <div class="">

    <div class="card event_h">
  <div class="card-body">
    Available Seriers and Movies
  </div>
</div>
<div class="card event_h">
  <div class="card-body">
    Latest Events
  </div>
</div>

  <div class="row">
    
    <div Class="col-sm-8">

    <!--Post Template-->
    <?php for($i=1;$i<=10;$i=$i+1){ ?>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
        <table><tr>
          <td >
         <div class=""><img src="<?php echo base_url('uploads/').$_SESSION["img_".$i]?>" width="150px" height="150px"/> </div>
          </td>
          <td >
            <div  class="" >
              
              <p align="justified">   <?php echo $_SESSION["dis_".$i]?>
              </p>
            </div>
          </td>
          <td>
          <?php if($this->session->userdata('user') == '') { ?>
          <a type="button" class="btn space btn-success" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('index.php/Login')?>">Play</a>
          <?php }else{?>
          <a type="button" class="btn space btn-success" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('uploads_video/').$_SESSION["vid_".$i]?>">Play</a>
        
        <?php } ?>
          </td>

          </tr></table>
        </div>

        
      </div>

    <?php } ?>
      
      <!-- Loop Here-->

    </div>

    <!--SideBar-->
   
    <div class="col-sm-4">

    <div class="card border-0 shadow mb-4">
        <div class="card-body p-4">
         
          <div style="height: 2rem"></div>
          <?php if($this->session->userdata('r') == '') { ?>
            <img height="250" width="250" src="<?php echo base_url("Assets/img1.jpeg"); ?>">
            <img height="250" width="250" src="<?php echo base_url("Assets/img2.jpeg"); ?>">
            <img height="250" width="250" src="<?php echo base_url("Assets/img3.jpeg"); ?>">
            <img height="250" width="250" src="<?php echo base_url("Assets/img1.jpeg"); ?>">
          <?php }else{?>
            <h3>Recommendation is Turned OFF<h3>
          <?php } ?>
               


        </div>
      </div>
    
    
    </div>
  


  </div>
  </div>
  </div>