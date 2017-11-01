<!DOCTYPE html>
<?php 
	if (!isset($_SESSION["adminid"]))
	{
?>
<html>
<?php $this->load->view('admin/Layout/head');?>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            	<img class="img-responsive" src="<?php echo base_url();?>assets/images/logo.png" style="width: 150px; height: 100px;margin: auto;">
            <hr>
            <small>authorised login only</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo base_url();?>index.php/Admin/loginCheck">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email ID" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
               <?php if($this->session->flashdata('message')!=null){?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <span><?php echo $this->session->flashdata('message');?></span> 
				</div>
				<?php }?>
            </div>
        </div>
    </div>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_admin/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/pages/examples/sign-in.js"></script>
</body>
</html>
<?php 
	}else{
		redirect(base_url().'Admin');
	}
?>