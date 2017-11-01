

	<?php if(isset($_SESSION['email'])){?>
 <section>
 
	<div class="container">    
        <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">    		<div class="panel panel-info" >
                <div class="panel-heading">
                <?php $result=$this->db->get_where('register',array('email'=>$email))->result_array();
			foreach ($result as $query){
				?>
                    <div class="panel-title"><h4>Change Password</h4></div>
                </div>     
                <div style="padding-top:30px" class="panel-body" >
                	<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                 <form action="<?php echo  base_url();?>index.php/login/changepassword/<?php echo $query['reg_id'];?>" method="post">
					<div class="form-group">
	                    		
					<input type="password" style="width: 90%;" name="password" placeholder="New Password" required="">
					</div>
					<div class="form-group">
	                    		
					<input type="password" style="width: 90%;" name="confirmpassword" placeholder="Confirm Password" 
					required="">
					</div>
					<button type="submit" class="btn">Change Password</button>
				</form><?php }?>
            </div>                     
        </div>  
    </div>
    </div>
    
    </section><?php }else{ redirect(base_url().'index.php/Login/login');
	$this->session->set_flashdata('message','Login here!!!');
	}?>    
  