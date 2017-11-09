<?php if(isset($_SESSION['userid'])){?>
<div class="col-md-9" style="margin-top: 70px;">
<div class="col-md-12">
	<a href="<?php echo base_url();?>index.php/Basic_Controller/user_automobile"><button class="btn btn-success">Add</button></a>
	<a href="<?php echo base_url();?>index.php/Basic_Controller/user_automobile_view"><button class="btn btn-success">View</button></a>
</div>
	<?php if($this->session->flashdata('message')!=null){?>
	<div class="col-md-9" id="alert">
	<br>
		<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
	</div>
	<?php }?>
<?php 
	$userid = $_SESSION['userid'];
	$query = "SELECT * from automobile WHERE autoid='$autoid' and userid='$userid'";
	$realedit=$this->db->query($query);
	if($this->db->affected_rows()==0){
		$this->session->set_flashdata('message','Record not found !');
		$data['pagename']="automobile_view.php";
		$this->load->view('pages/profile/profile',$data);
	}
	//print_r($realedit);die();
	foreach ($realedit->result_array() as $row){
?>
<form id=auto_form method="post" action="<?php echo base_url();?>index.php/Basic_Controller/user_automobile/update/<?php echo $row['autoid'];?>" enctype="multipart/form-data">
	<div class="col-md-6">
	<input type="hidden" name="realid" value="<?php echo $row['autoid'];?>">
	<div class="form-group">
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>" readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="id">Title:</label><span style="color: red;">*</span>  <span class="error" id="title_error"></span>
	  <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'];?>">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Type">Type:</label>
	  <select name="type" id="type" class="form-control">
	  	<option>Sell</option>
	  	<option>Rent</option>
	  </select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Address">Address:</label><span style="color: red;">*</span>  <span class="error" id="address_error"></span>
	  <textarea class="form-control" id="address" name="address"><?php echo $row['address'];?></textarea>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Description">Description:</label><span style="color: red;">*</span>  <span class="error" id="description_error"></span>
	  <textarea class="form-control" id="description" name="description"><?php echo $row['description'];?></textarea>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile'];?>" readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="City">City:</label><span style="color: red;">*</span>  <span class="error" id="city_error"></span>
	  <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city'];?>">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Area">Area:</label><span style="color: red;">*</span>  <span class="error" id="area_error"></span>
	  <input type="text" class="form-control" id="area" name="area" value="<?php echo $row['area'];?>">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Offerend">Offer end date:</label>
	  <input type="date" class="form-control" id="offerend" name="offerend" value="<?php echo $row['offerend'];?>">
	</div>
	</div>
	<div class="col-md-9">
	<button type="submit" class="btn btn-success">Update</button>
	</div>
</form>
<?php }?>
</div>
<div class="col-md-3">
	<h3></h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<?php }else{redirect(base_url().'index.php/Login/login');}?>