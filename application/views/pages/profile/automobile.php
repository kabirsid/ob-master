<?php if(isset($_SESSION['userid'])){?>
<div class="col-md-9" style="margin-top: 70px;">
<?php 
$userid = $_SESSION['userid'];
$travelling_info=$this->db->get_where('register',array('reg_id'=>$userid))->result_array();
foreach ($travelling_info as $row){
?>
<?php if($this->session->flashdata('message')!=null){?>
	<div class="col-md-12" id="alert">
		<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
	</div>	 
	<?php }?>
<form id=auto_form method="post" action="<?php echo base_url();?>index.php/Basic_Controller/user_automobile/create" enctype="multipart/form-data">
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username']?>"  readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="id">Title:</label><span style="color: red;">*</span>  <span class="error" id="title_error"></span>
	  <input type="text" class="form-control" id="title" name="title">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Type">Type:</label>
	  <select name="type" class="form-control">
	  	<option>Showroom</option>
	  	<option>Service Center</option>
	  </select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Address">Address:</label><span style="color: red;">*</span>  <span class="error" id="address_error"></span>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	</div>
	<div class="col-md-12">
	<div class="form-group">
	  <label for="Description">Description:</label><span style="color: red;">*</span>  <span class="error" id="description_error"></span>
	   <div class="error"><?php echo form_error('description'); ?></div>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>"  readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']?>"  readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="City">City:</label><span style="color: red;">*</span>  <span class="error" id="city_error"></span>
	  <input type="text" class="form-control" id="city" name="city">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Area">Area:</label><span style="color: red;">*</span>  <span class="error" id="area_error"></span>
	  <input type="text" class="form-control" id="area" name="area">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Offerend">Offer end date:</label>
	  <input type="date" class="form-control" id="offerend" name="offerend">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Image">Image:</label>
	  <input type="file" class="form-control" id="image" name="image[]" multiple="multiple" required="required">
	</div>
	</div>
	<div class="col-md-6">
	<button type="submit" class="btn btn-success">Post</button>
	</div>
	<?php }?>
</form>
</div>
<div class="col-md-3">
	<h3></h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<?php }else{redirect(base_url().'index.php/Login/login');}?>