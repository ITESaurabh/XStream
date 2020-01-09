

<?php if($this->session->userdata('user') == '') { ?>
<li class="nav-item">
            <a type="button" class="btn space btn-info" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("index.php/Signup"); ?>">Sign Up</a>
          </li>
          <li class="nav-item">
            <a type="button" class="btn space btn-success" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('index.php/login'); ?>">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <?php
    } else {
 ?>


  <li class="nav-item">
            <a type="button" class="btn space btn-info" aria-haspopup="true" aria-expanded="flase" href="#">Welcome User</a>
          </li>
          <li class="nav-item">
            <a type="button" class="btn space btn-danger" aria-haspopup="true" aria-expanded="flase" href="#">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php

 }?>

  