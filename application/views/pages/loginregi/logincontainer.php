

<div class="container">    
        <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"><h4>Sign In</h4></div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        
                            <form role="form" action="<?php echo base_url();?>index.php/Login/sigin" method="post" class="form-horizontal">        
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input type="text" class="form-control" name="email" value="" placeholder="Enter your Email..." id="contact-name" autofocus="">
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  type="password" class="form-control" name="password" placeholder="Your password" id="contact-name">
                           	</div>
                           	<div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn">Login</button>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                         <h6>  <a href="<?php echo base_url();?>index.php/Login/forgotpassword" >Forgot Password? Click to recover</a></h6>
                                        <h6> Not a Member Yet? <a href="<?php echo base_url()?>index.php/Login/newuser">Sign Up Now</a> </h6>
                                        </a>
                                        </div>
                                    </div>
                                </div>   

                                <div class="col-sm-11" id="alert">
		                    <?php if($this->session->flashdata('message')!=null){?>
							<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
							<?php }?>
	                    </div> 
                            </form>     
                        </div>                     
                    </div>  
        </div>
        
    </div>