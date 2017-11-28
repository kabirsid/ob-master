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
    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"; alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="navMain">
    	<?php if(isset($_SESSION['userid'])){
            $userid=$_SESSION['userid'];
			$query = "SELECT * FROM register where reg_id=$userid";          
    		$Register = $this->db->query($query);
 		?>

 		
    
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="background-color:black;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
  
    <ul class="nav navbar-nav pull-">
        <li style="margin-left: 5px;" data-toggle="modal" data-target="#myModal"><a href="#">POST FREE ADD</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add your add <b class="caret"></b></a>
          <ul class="dropdown-menu">
        
       <li> <a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate_view">My RealEstate</a></li>
        <li style="color:blue;">  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_tution_view">My Tution</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_hotel_view">My Hotels</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_travelling_view">My Services</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_automobile_view">My Automobile</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_other_view">My Other</a></li>
 
          </ul>
        </li>
      </ul>
     

 
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/Hotel">Hotel</a></li>
            <li><a href="<?php echo base_url();?>index.php/Tution">Tution</a></li>
            <li><a href="<?php echo base_url();?>index.php/Realestate">Realestate</a></li>
            <li><a href="<?php echo base_url();?>index.php/Automobile">Autromobile</a></li>
          </ul>
        </li>
        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				
				<?php
				    	

				 foreach ($Register->result_array() as $RealestateRow) {
				
					            
				$username=$RealestateRow['username'];
				echo $username;}
				         	?>
          	<b class="caret"></b></a>
          	
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/Basic_Controller/user_logout">Logout</a></li>

           
        
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->


  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">ADD Free Post</h4>
                </div>
                <div class="modal-body">
                	<?php 
	$userid = $_SESSION['userid'];
	$profile_info = $this->db->get_where('register',array('reg_id'=>$userid))->result_array();
	foreach ($profile_info as $row){
?>	
              
<form id="profile" method="post" action="<?php echo base_url();?>index.php/Basic_Controller/user_freepost/create">
		<?php if($this->session->flashdata('message')!=null){?>
			<div class="col-md-12" id="alert">
				<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
			</div>	
		<?php }?>
	<div class="col-md-6">
		<div class="form-group">
		  <label for="id">Offers Bull User ID:</label>
		  <input type="text" class="form-control" id="id" value="<?php echo $row['reg_id']?>" disabled>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
		  <label for="username">Name:</label>
		  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username']?>">
		</div>
	</div>	
	<div class="col-md-6">
		<div class="form-group">
		  <label for="emailid">Email ID:</label>
		  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>">
		</div>
	</div>	
	<div class="col-md-6">
		<div class="form-group">
		  <label for="mobile">Mobile No:</label>
		  <div class="error"><?php echo form_error('mobile'); ?></div>
		  <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row['mobile']?>" readonly>
		</div>
		<span class="error" id="mobile_error"></span>
	</div>
	<div class="col-md-6">	
		<div class="form-group">
		  <label for="city">Title:</label>
		  <div class="error"><?php echo form_error('title'); ?></div>
		  <input type="text" class="form-control" name="title" id="title" value="">
		  <span class="error" id="title_error"></span>
		</div>
	</div>
	
	<div class="col-md-6">	
		<div class="form-group">
		  <label for="address">Address:</label>
		  <div class="error"><?php echo form_error('address'); ?></div>
		  <textarea class="form-control" name="address" id="address"><?php echo $row['address']?></textarea>
		  <span class="error" id="address_error"></span>
		</div>
	</div>
	<div class="col-md-6">	
		<div class="form-group">
		  <label for="city">City:</label>
		  <div class="error"><?php echo form_error('city'); ?></div>
		  <input type="text" class="form-control" name="city" id="city" value="<?php echo $row['city']?>">
		  <span class="error" id="city_error"></span>
		</div>
	</div>	
	<div class="col-md-6">	
		<div class="form-group">
		  <label for="city">Image:</label>
		  <div class="error"><?php echo form_error('image'); ?></div>
		  <input type="file" class="form-control" name="image[]" id="image" multiple="multiple" required="required">
		  <span class="error" id="image_error"></span>
		</div>
	</div>		
    <div class="col-md-6">	
		<div class="form-group">
		  <label for="city">Description:</label>
		  <div class="error"><?php echo form_error('description'); ?></div>
		  <textarea type="file" class="form-control" name="description" id="description" value=""></textarea>
		  <span class="error" id="description_error"></span>
		</div>
	</div>		           
                         

                        
                        

                       
	<div class="form-group col-sm-12">
        <button type="submit" class="btn btn-default pull-right">Submit</button>
    </div>
</form>
		</div>
	</div>
</div>
<?php
}
?>
                       
                        
                        
		

                </div>
                
            </div>
            
        </div>
    </div>



						<?php 

                            }else{?>
            <ul class="nav navbar-nav pull-right">
				    <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
				    <li><a href="<?php echo base_url();?>index.php/Hotel">Hotels</a></li>
				    <li><a href="<?php echo base_url();?>index.php/Realestate">Realestate</a></li> 
				    <li><a href="<?php echo base_url();?>index.php/Tuition">Tuition</a></li> 
				    <li><a href="<?php echo base_url();?>index.php/Automobile">Automobile</a></li> 
				    <li><a href="<?php echo base_url();?>index.php/Travelling">Services</a></li> 
				    <li><a href="<?php echo base_url();?>index.php/Other">Other</a></li>

    <a href="<?php echo base_url();?>index.php/Basic_Controller/user_profile" aria-expanded="false">
						<!--	<button class="navbar_btn" id="navbar_btn_black">
							<i class="fa fa-user" aria-hidden="true"></i> My Profile
							</button>
							</a>
							
							<a href="<?php echo base_url();?>index.php/Basic_Controller/user_logout" aria-expanded="false">
							<button class="navbar_btn" id="Button1" >
							<i class="fa fa-sign-out" aria-hidden="true"></i> Logout
							</button>
							</a>-->


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


      </ul>
						<?php }?>	
						<!--	<a href="<?php echo base_url();?>index.php/info/feedback">
							<button class="navbar_btn" id="Button4">
								<i class="fa fa-question-circle"></i> Help
							</button>
							</a>-->
    </div>
  </div>
</div>
