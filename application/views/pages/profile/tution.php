<?php if(isset($_SESSION['userid'])){?>
<div class="col-md-9" style="margin-top: 70px;">
	<span>Tution</span>
<?php 
$userid = $_SESSION['userid'];
$tution_info=$this->db->get_where('register',array('reg_id'=>$userid))->result_array();
foreach ($tution_info as $row){
?>
<div class="col-md-12" id="alert">
	<?php if($this->session->flashdata('message')!=null){?>
	<br>
	<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
	<?php }?>
</div>
<form id=tut_form method="post" action="<?php echo base_url();?>index.php/Basic_Controller/user_tution/create" enctype="multipart/form-data">
	
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
       		 Collapsible Group 1</a>
      </h4>
    </div>
       		 <div id="collapse1" class="panel-collapse collapse in">
       		 	<div class="panel-body">
	<div class="col-md-6">
		
       		  	
	<div class="form-group">
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username']?>"  readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="id">Title:</label><span style="color: red;">*</span> <span class="error" id="title_error"></span>
	  <input type="text" class="form-control" id="title" name="title">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Address">Address:</label><span style="color: red;">*</span> <span class="error" id="address_error"></span>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Description">Description:</label><span style="color: red;">*</span> <span class="error" id="description_error"></span>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>" readonly>
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
	  <label for="City">City:</label><span style="color: red;">*</span> <span class="error" id="city_error"></span>
	  <input type="text" class="form-control" id="city" name="city">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Area">Area:</label><span style="color: red;">*</span> <span class="error" id="area_error"></span>
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
</div>
</div>
<div class="panel panel-default">
   	<div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        services 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
    	  <div class="panel-body">
<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="5 star"> 5 star<br>
        <input type="checkbox" name="services[]" value="Bakery"> Bakery<br>
        <input type="checkbox" name="services[]" value="Bar"> Bar<br>
        <input type="checkbox" name="services[]" value="Barbeque & Grill"> Barbeque & Grill<br>
        <input type="checkbox" name="services[]" value="Birthday Blast"> Birthday Blast<br>
        <input type="checkbox" name="services[]" value="Breakfast"> Breakfast<br>
        <input type="checkbox" name="services[]" value="Breakfast Buffet"> Breakfast Buffet<br>
        <input type="checkbox" name="services[]" value="Branch"> Branch<br>
        <input type="checkbox" name="services[]" value="Buffet"> Buffet<br>
        <input type="checkbox" name="services[]" value="Cafe"> Cafe<br>
        <input type="checkbox" name="services[]" value="Cafeteria"> Cafeteria<br>
        <input type="checkbox" name="services[]" value="Candle night dinner"> Candle night dinner<br>
        <input type="checkbox" name="services[]" value="Casual Dinig"> Casual Dinig<br>
        <input type="checkbox" name="services[]" value="Dance Floor"> Dance Floor<br>
        <input type="checkbox" name="services[]" value="Dineer Buffet"> Dineer Buffet<br>
	</div>
	<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="Dinner For two"> Dinner For two<br>
        <input type="checkbox" name="services[]" value="Family Outing"> Family Outing<br>
        <input type="checkbox" name="services[]" value="Fast Casual dining"> Fast Casual dining<br>
        <input type="checkbox" name="services[]" value="Flat discount"> Flat discount<br>
        <input type="checkbox" name="services[]" value="Food court"> Food court<br>
        <input type="checkbox" name="services[]" value="Happy Hours"> Happy Hours<br>
        <input type="checkbox" name="services[]" value="Hookah"> Hookah<br>
        <input type="checkbox" name="services[]" value="Hot Offer"> Hot Offer<br>
        <input type="checkbox" name="services[]" value="Kids Friendly"> Kids Friendly<br>
        <input type="checkbox" name="services[]" value="Live Music"> Live Music<br>
        <input type="checkbox" name="services[]" value="Lounge"> Lounge<br>
        <input type="checkbox" name="services[]" value="Lunch buffet"> Lunch buffet<br>
        <input type="checkbox" name="services[]" value="Luxury dining"> Luxury dining<br>
        <input type="checkbox" name="services[]" value="Monsoon discount"> Monsoon discount<br>
        <input type="checkbox" name="services[]" value="Newly Opened"> Newly Opened<br>
	</div>
	<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="Nightlife"> Nightlife<br>
        <input type="checkbox" name="services[]" value="Outdoor Collection"> Outdoor Collection<br>
        <input type="checkbox" name="services[]" value="Outdoor Seating"> Outdoor Seating<br>
        <input type="checkbox" name="services[]" value="Pitcher perfect "> Pitcher perfect <br>
        <input type="checkbox" name="services[]" value="Poolside"> Poolside<br>
        <input type="checkbox" name="services[]" value="private dining available"> Private dining available<br>
        <input type="checkbox" name="services[]" value="pub"> Pub<br>
        <input type="checkbox" name="services[]" value="pure veg"> Pure veg<br>
        <input type="checkbox" name="services[]" value="Rsto Bar"> Rsto Bar<br>
        <input type="checkbox" name="services[]" value="Sea food"> Sea food<br>
        <input type="checkbox" name="services[]" value="Tandoori"> Tandoori<br>
        <input type="checkbox" name="services[]" value="Wineday"> Wineday<br>
        
	</div>
    	  </div>
    	</div>
    </div>
    <div class="panel panel-default">
   	<div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        services 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
    	  <div class="panel-body">
<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="5 star"> 5/3 star<br>
        <input type="checkbox" name="services[]" value="Bakery"> Bakery<br>
        <input type="checkbox" name="services[]" value="Bar"> Bar<br>
        <input type="checkbox" name="services[]" value="Barbeque & Grill"> Barbeque & Grill<br>
        <input type="checkbox" name="services[]" value="Birthday Blast"> Birthday Blast<br>
        <input type="checkbox" name="services[]" value="Breakfast"> Breakfast<br>
        <input type="checkbox" name="services[]" value="Breakfast Buffet"> Breakfast Buffet<br>
        <input type="checkbox" name="services[]" value="Branch"> Branch<br>
        <input type="checkbox" name="services[]" value="Buffet"> Buffet<br>
        <input type="checkbox" name="services[]" value="Cafe"> Cafe<br>
        <input type="checkbox" name="services[]" value="Cafeteria"> Cafeteria<br>
        <input type="checkbox" name="services[]" value="Candle night dinner"> Candle night dinner<br>
        <input type="checkbox" name="services[]" value="Casual Dinig"> Casual Dinig<br>
        <input type="checkbox" name="services[]" value="Dance Floor"> Dance Floor<br>
        <input type="checkbox" name="services[]" value="Dineer Buffet"> Dineer Buffet<br>
	</div>
	<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="Dinner For two"> Dinner For two<br>
        <input type="checkbox" name="services[]" value="Family Outing"> Family Outing<br>
        <input type="checkbox" name="services[]" value="Fast Casual dining"> Fast Casual dining<br>
        <input type="checkbox" name="services[]" value="Flat discount"> Flat discount<br>
        <input type="checkbox" name="services[]" value="Food court"> Food court<br>
        <input type="checkbox" name="services[]" value="Happy Hours"> Happy Hours<br>
        <input type="checkbox" name="services[]" value="Hookah"> Hookah<br>
        <input type="checkbox" name="services[]" value="Hot Offer"> Hot Offer<br>
        <input type="checkbox" name="services[]" value="Kids Friendly"> Kids Friendly<br>
        <input type="checkbox" name="services[]" value="Live Music"> Live Music<br>
        <input type="checkbox" name="services[]" value="Lounge"> Lounge<br>
        <input type="checkbox" name="services[]" value="Lunch buffet"> Lunch buffet<br>
        <input type="checkbox" name="services[]" value="Luxury dining"> Luxury dining<br>
        <input type="checkbox" name="services[]" value="Monsoon discount"> Monsoon discount<br>
        <input type="checkbox" name="services[]" value="Newly Opened"> Newly Opened<br>
	</div>
	<div class="col-md-4" style="text-align: left;font-size: 15px;">
		<input type="checkbox" name="services[]" value="Nightlife"> Nightlife<br>
        <input type="checkbox" name="services[]" value="Outdoor Collection"> Outdoor Collection<br>
        <input type="checkbox" name="services[]" value="Outdoor Seating"> Outdoor Seating<br>
        <input type="checkbox" name="services[]" value="Pitcher perfect "> Pitcher perfect <br>
        <input type="checkbox" name="services[]" value="Poolside"> Poolside<br>
        <input type="checkbox" name="services[]" value="private dining available"> Private dining available<br>
        <input type="checkbox" name="services[]" value="pub"> Pub<br>
        <input type="checkbox" name="services[]" value="pure veg"> Pure veg<br>
        <input type="checkbox" name="services[]" value="Rsto Bar"> Rsto Bar<br>
        <input type="checkbox" name="services[]" value="Sea food"> Sea food<br>
        <input type="checkbox" name="services[]" value="Tandoori"> Tandoori<br>
        <input type="checkbox" name="services[]" value="Wineday"> Wineday<br>
        
	</div>
    	  </div>
    	</div>
    </div>
	<div class="col-md-6">
	<button type="submit" class="btn btn-success">Post</button>
	

</div>
</div>
	<?php }?>
</form>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<div class="col-md-3">
	<h3></h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<?php }else{redirect(base_url().'index.php/Login/login');}?>