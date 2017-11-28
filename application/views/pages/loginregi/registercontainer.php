
	<!-- //sign up form -->


 
<div class="container">    
      <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                    <!--    <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button 

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                      

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        
                                        </div>
                                    </div>
                                </div>    
                            </form>     -->

                            <form action="<?php echo  base_url();?>index.php/login/registration" method="post">
					<div id="alert"><?php if($this->session->flashdata('message')!=null){?>
											<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
											<?php }?></div>
					<div class="error"><?php echo form_error('username'); ?></div>
					<div class="form-group">
                    		
							<input type="text" style="width:90%;" name="username" placeholder="Username" required="" autofocus=""> 
					</div>
					<div class="error"><?php echo form_error('mobile'); ?></div>
					<div class="form-group">
                    		
							<input type="text" style="width:90%;" name="mobile" placeholder="Mobile" required="" maxlength="10">
					</div>		
					<div class="error"><?php echo form_error('email'); ?></div>
					<div class="form-group">
                    		
					<input type="text" style="width:90%;" name="email" placeholder="Your Email" required=""> 
					</div>
					<div class="error"><?php echo form_error('password'); ?></div>
					<div class="form-group">
                    		
					<input type="password" style="width:90%;" name="password" placeholder="Password" required=""> 
					</div>
					<div class="error"><?php echo form_error('cpassword'); ?></div>
					<div class="form-group">
                    		
					<input type="password" style="width:90%;" name="cpassword" placeholder="Confirm Password" required="">
					</div>
					
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox" required="">I agree to your <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Info/terms" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Info/terms" target="_blank">Privacy Policy</a></label>
						</span>
					<button type="submit" class="btn">Register</button>
				</form>
				</div>
				


                        </div>                     
                    </div>  
        </div>
        
    </div>

	
