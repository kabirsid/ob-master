<!--<nav class="navbar  navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-heade navbar-inverse">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>"></a>
				</div>-->
				<!-- Collect the nav links, forms, and other content for toggling -->
		<!--		<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="<?php echo base_url();?>"><i class="fa fa-home"></i><br>Home</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/Hotel"><i class="fa fa-cutlery"></i><br>Hotels</a>
						</li>
						<li class="dropdown">
							<a href="# "><i class="fa fa-building"></i><br>Realestate</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-book"></i><br>Tuition</a>
						</li>

						<li>
							<a href="#"><i class="fa fa-car"></i><br>Automobile</a>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-plane"></i><br>Travelling</a>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-globe"></i><br>Other</a>
						</li>
						<?php if(isset($_SESSION['userid']))
                            {
						?>	<a href="<?php echo base_url();?>index.php/Basic_Controller/user_profile" aria-expanded="false">
							<button class="navbar_btn" id="navbar_btn_black">
							<i class="fa fa-user" aria-hidden="true"></i> My Profile
							</button>
							</a>
							
							<a href="<?php echo base_url();?>index.php/Basic_Controller/user_logout" aria-expanded="false">
							<button class="navbar_btn" id="Button1" >
							<i class="fa fa-sign-out" aria-hidden="true"></i> Logout
							</button>
							</a>

						<?php 
                            }
                            else{?>
							<a href="<?php echo base_url();?>index.php/Login/login">
							<button class="navbar_btn" data-toggle="modal" href="#myModal" id="Button2">
							<i class="fa fa-user"></i> Login
							</button>
							</a>
							<a href="<?php echo base_url();?>index.php/Login/newuser">
							<button class="navbar_btn" id="Button3">
								<i class="fa fa-plus-circle"></i> Register
							</button>
							</a>	
						<?php }?>	
							<a href="<?php echo base_url();?>index.php/info/feedback">
							<button class="navbar_btn" id="Button4">
								<i class="fa fa-question-circle"></i> Help
							</button>
							</a>
					</ul>
				</div>
			</div>
		</nav> -->



<!--
********************************************************************
* Responsive Transparent Navbar
********************************************************************
-->
<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right"></span>
    
  </button>
     <!-- <a class="navbar-brand" href="#">Your Company</a>-->
     <img src="<?php echo base_url();?>assets/img/logo.png"; alt="sorry">
    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url();?>index.php/Hotel">Hotels</a></li>
        <li><a href="<?php echo base_url();?>index.php/Realestate">Realestate</a></li> 
        <li><a href="<?php echo base_url();?>index.php/Tuition">Tuition</a></li> 
        <li><a href="<?php echo base_url();?>index.php/Automobile">Automobile</a></li> 
        <li><a href="<?php echo base_url();?>index.php/Travelling">Travelling</a></li> 
        <li><a href="<?php echo base_url();?>index.php/Other">Other</a></li>

        <?php if(isset($_SESSION['userid']))
                            {
						?>	<a href="<?php echo base_url();?>index.php/Basic_Controller/user_profile" aria-expanded="false">
							<button class="navbar_btn" id="navbar_btn_black">
							<i class="fa fa-user" aria-hidden="true"></i> My Profile
							</button>
							</a>
							
							<a href="<?php echo base_url();?>index.php/Basic_Controller/user_logout" aria-expanded="false">
							<button class="navbar_btn" id="Button1" >
							<i class="fa fa-sign-out" aria-hidden="true"></i> Logout
							</button>
							</a>

						<?php 
                            }
                            else{?>
							<a href="<?php echo base_url();?>index.php/Login/login">
							<button class="navbar_btn" data-toggle="modal" href="#myModal" id="Button2" style="">
							<i class="fa fa-user"></i> Login
							</button>
							</a>
							<a href="<?php echo base_url();?>index.php/Login/newuser">
							<button class="navbar_btn" id="Button3">
								<i class="fa fa-plus-circle"></i> Register
							</button>
							</a>	
						<?php }?>	
							<a href="<?php echo base_url();?>index.php/info/feedback">
							<button class="navbar_btn" id="Button4" style="margin-right: -40px;">
								<i class="fa fa-question-circle"></i> Help
							</button>
							</a>



      </ul>
    </div>
  </div>
</div>

