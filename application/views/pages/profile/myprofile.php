<?php if(isset($_SESSION['userid'])){?>
<div class="contact-us-container">
        	<div class="container">
	            <div class="row">
<?php 
	$userid = $_SESSION['userid'];
	$profile_info = $this->db->get_where('register',array('reg_id'=>$userid))->result_array();
	foreach ($profile_info as $row){
?>	
<form id="profile" method="post" action="<?php echo base_url();?>index.php/Basic_Controller/updateprofile">
		<?php if($this->session->flashdata('message')!=null){?>
			<div class="col-md-12" id="alert">
				<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
			</div>	
		<?php }?>
	<div class="col-md-6" style="margin-top: 60px;">
		<div class="form-group">
		  <label for="id">Offers Bull User ID:</label>
		  <input type="text" class="form-control" id="id" value="" disabled>
		</div>
	</div>
	<div class="col-md-6" style="margin-top: 60px;>
		<div class="form-group">
		  <label for="username">Name:</label>
		  <input type="text" class="form-control" id="username" value="<?php echo $row['username']?>" disabled>
		</div>
	</div>	
	<div class="col-md-6">
		<div class="form-group">
		  <label for="emailid">Email ID:</label>
		  <input type="email" class="form-control" id="emailid" value="<?php echo $row['email']?>" disabled>
		</div>
	</div>	
	<div class="col-md-6">
		<div class="form-group">
		  <label for="mobile">Mobile No:</label>
		  <div class="error"><?php echo form_error('mobile'); ?></div>
		  <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row['mobile']?>">
		</div>
		<span class="error" id="mobile_error"></span>
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
		  <label for="address">Address:</label>
		  <div class="error"><?php echo form_error('address'); ?></div>
		  <textarea class="form-control" name="address" id="address"><?php echo $row['address']?></textarea>
		  <span class="error" id="address_error"></span>
		</div>
	</div>
	
	<div class="col-md-9">
		<button type="submit" class="btn" href="<?php echo base_url();?>index.php/Basic_Controller/user_hotel_view">Update Profile</button>
	</div>	
</form>
		</div>
	</div>
</div>
<?php
}
?>
<div class="col-md-3">
	<h3></h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<?php }else{redirect(base_url().'index.php/Login/login');}?>