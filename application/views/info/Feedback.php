        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
	                    <?php if(isset($_SESSION['userid'])){
	                    	$userid = $_SESSION['userid'];
	                    	$query = "select email from register where reg_id = $userid";
	                    	$res_email = $this->db->query($query);
	                    	$row_email = $res_email->row();
	                    	$email = $row_email->email;
	                    ?>
	                    <form role="form" action="<?php echo base_url();?>index.php/info/sendfeed" method="post"" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Email</label>
	                        	<input type="text" name="email" value="<?php echo $email;?>" class="contact-name" id="contact-name" autofocus="" readonly="">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-password">Your query</label>
	                        	<textarea class="form-control" id="address" name="query" placeholder="Write us for help/ problems/ suggestion..."></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                    </form>
	                    <div class="col-sm-11" id="alert">
		                    <?php if($this->session->flashdata('message')!=null){?>
							<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
							<?php }?>
	                    </div>
	                    <?php }else{?>
	                    <h4>For sending feedback or any query you need to siginin, click to <a href="<?php echo base_url();?>index.php/Login/login">signin</a> now</h4>
	                    <?php }?>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                	<!-- Place advertisements -->
	                </div>
	            </div>
	        </div>
        </div>