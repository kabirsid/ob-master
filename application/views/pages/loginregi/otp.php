<!--	 <section>
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
			<h3>Verify your OTP</h3>
				<form action="<?php echo  base_url();?>index.php/Login/verifyotp" method="post">
					<div class="form-group">
	                    		<label for="contact-name">OTP</label>
					<input type="text" name="otp" placeholder="Enter OTP" required="" autofocus="">
					</div>
					<input type="hidden" name="email" value="<?php echo $email;?>"> 
					<div id="alert"><?php if($this->session->flashdata('message')!=null){?>
											<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
											<?php }?></div>
					<button type="submit" class="btn">Verify</button>
				</form>
				<span color="red">Click to <a href="<?php echo base_url();?>index.php/Login/resendotp">Resend OTP</a></span>
			</div>
		</div>
	</div>
</div>		
	</section>-->


    <div class="container">    
        <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Verify your OTP</div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="<?php echo  base_url();?>index.php/Login/verifyotp" method="post">
					<div class="form-group">
	                    		
					<input type="text" style="width: 90%;" name="otp" placeholder="Enter OTP" required="" autofocus="">
					</div>
					<input type="hidden" style="width: 90%;" name="email" value="<?php echo $email;?>"> 
					<div id="alert"><?php if($this->session->flashdata('message')!=null){?>
											<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
											<?php }?></div>
					<button type="submit" class="btn">Verify</button>
				</form>
				<span color="red">Click to <a href="<?php echo base_url();?>index.php/Login/resendotp">Resend OTP</a></span>     



                        </div>                     
                    </div>  
        </div>
        
    </div>
   