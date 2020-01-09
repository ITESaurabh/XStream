<body>
	
	
	<div class="container-login100" style="background-image: url('../Assets/bg3.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="<?php echo base_url("index.php/Login/verify");?>" method="post">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
                 
					<button  type="submit" class="login100-form-btn">
						Log In
					</button>

				</div>

	
				
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or	
					</span>
				</div>

				
				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	


	


</body>