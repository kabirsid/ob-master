<?php if(isset($_SESSION['userid'])){?>
<div class="col-md-12" id="alert">
<?php  
$userid = $_SESSION['userid'];
$hotel_info=$this->db->get_where('register',array('reg_id'=>$userid))->result_array();
foreach ($hotel_info as $row){
?>
<form id=hotel_form method="post" action="<?php echo base_url();?>index.php/Basic_Controller/user_hotel/create" enctype="multipart/form-data">
	
	<form action="<?php echo base_url();?>index.php/Welcome/insertcheck" method="post">
<input type="checkbox" name="services[]" value="one"/>one</br>
<input type="checkbox" name="services[]" value="two"/>two</br>
<input type="checkbox" name="services[]" value="three"/>three</br>
<input type="checkbox" name="services[]" value="four"/>four</br>
<input type="checkbox" name="services[]" value="five"/>five</br>
<input type="checkbox" name="services[]" value="six"/>six</br>
<input type="checkbox" name="services[]" value="seven"/>seven</br>
<input type="checkbox" name="services[]" value="eight"/>eight</br>
<input type="checkbox" name="services[]" value="nine"/>nine</br>
<input type="checkbox" name="services[]" value="ten"/>ten</br>
<input type="checkbox" name="services[]" value="eleven"/>eleven</br>
<input type="checkbox" name="services[]" value="twelve"/>twelve</br>
<input type="checkbox" name="services[]" value="thirteen"/>thirteen</br>
<input type="checkbox" name="services[]" value="fourteen"/>fourteen</br>
<input type="checkbox" name="services[]" value="fifteen"/>fifteen</br>
<input type="checkbox" name="services[]" value="sixteen"/>sixteen</br>
<input type="checkbox" name="services[]" value="seventeen"/>seventeen</br>
<input type="checkbox" name="services[]" value="eighteen"/>eighteen</br>
<input type="checkbox" name="services[]" value="nineteen"/>nineteen</br>
<input type="checkbox" name="services[]" value="twenty"/>twenty</br>
<input type="checkbox" name="services[]" value="twenty-one"/>twenty-one</br>
<input type="checkbox" name="services[]" value="twenty-two"/>twenty-two</br>
<input type="checkbox" name="services[]" value="twenty-three"/>twenty-three</br>
<input type="checkbox" name="services[]" value="twenty-four"/>twenty-four</br>
<input type="checkbox" name="services[]" value="twenty-five"/>twenty-five</br>
<input type="checkbox" name="services[]" value="twenty-six"/>twenty-six</br>
<input type="checkbox" name="services[]" value="twenty-seven"/>twenty-seven</br>
<input type="checkbox" name="services[]" value="twenty-eight"/>twenty-eight</br>
<input type="checkbox" name="services[]" value="twenty-nine"/>twenty-nine</br>
<input type="checkbox" name="services[]" value="thirty"/>thirty</br>

<input type="submit"/>



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