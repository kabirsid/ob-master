<?php if(isset($_SESSION['userid'])){?>
<div class="col-md-12" style="margin-top: 70px;">
<?php 
$userid = $_SESSION['userid'];
$realestate_data = $this->db->order_by('date','desc')->get_where('realestate',array('userid' => $userid))->result_array();
?>

<?php if($this->session->flashdata('message')!=null){?>
			<div class="col-md-12" id="alert">
			<br>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
			</div>	
<?php }?>
<div class="col-md-12">
  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate"><button class="btn btn-success">Add Realestate</button></a>
</div>
 <table class="table table-hover">
    <thead>
      <tr>
        <th>Post-ID</th>
        <th>Title</th>
        <th>Post-Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($realestate_data as $row){?>
      <tr>
        <td><?php echo $row['realid'];?></td>
        <td><?php echo $row['title'];?></td>
        <td>
        	<?php 
        		$postdate =  $row['date'];
        		echo date("d F , Y",strtotime(str_replace('-','/', $postdate)));
        	?>
        </td>
        <td><a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate_edit/<?php echo $row['realid'];?>"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate/delete/<?php echo $row['realid'];?>"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<div class="col-md-3">
	<h3></h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
<?php }else{redirect(base_url().'index.php/Login/login');}?>