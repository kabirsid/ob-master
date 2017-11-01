<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>OTHER / ADD</h2>
            </div>
<!-- Notification Message -->
	<?php if($this->session->flashdata('message')!=null){?>
	<div class="alert alert-warning alert-dismissible" role="alert">
		 <?php echo $this->session->flashdata('message');?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
         </button>
	</div>
	<?php }?>
            <!-- CONTAINER ADD -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="header">
                            <h2>
                                Add other data
                            </h2>
                        <div class="body">
                        	<form action="<?php echo base_url();?>index.php/Admin/other/create" id="frmFileUpload" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
	                                <div class="col-md-4">
	                                    <label for="Name">Name </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="name_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="name" name="name" placeholder="Vendor name" required="required">
										  </div>	
	                                </div>
	                                <div class="col-md-8">
	                                    <label for="title">Title </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="title_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="title" name="title" placeholder="title" required="required"></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="address">Address</label><span style="color: red;"> * </span><span style="color: red;" class="error" id="address_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="address" name="address" placeholder="Address" required="required"></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="description">Description </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="description_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="description" name="description" placeholder="Description" required="required"></textarea>
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="mobile">Mobile </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="mobile_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile no." required="required">
										  </div>	
	                                </div>
	                               <div class="col-md-8">
	                                    <label for="mobile">Email </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="email_error" required="required"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="email" name="email" placeholder="Email ID." required="required">
										  </div>	
	                                </div>
	                                <div class="col-md-4">
	                                    <label for="city">City </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="city_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="city" name="city" placeholder="City" required="required">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="city">Area </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="area_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="area" name="area" placeholder="Area" required="required">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="offerenddate">Offer end date </label>
										  <div class="form-line">	
										  	<input type="date" class="form-control" id="offerend" name="offerend" placeholder="mm/dd/yyyy">
										  </div>	
	                                </div>
	                            </div>
	                            <hr>
                                <div class="dropzone"> 
	                                <div class="dz-message">
	                                    <div class="drag-icon-cph">
	                                        <i class="material-icons">touch_app</i>
	                                    </div>
	                                    <h3>Choose image<span style="color: red;">*</span> and submit post </h3>
	                                    <em>To choose multiple images press and hold CTRL key.</em>
	                                </div>
	                                <div class="fallback">
	                                   <input type="file" id="image" multiple="multiple" name="image[]" required="required">
	                                </div>
                                </div>
	                                <input type="submit" class="btn btn-block btn-lg btn-success waves-effect" value="SUBMIT">
                            </form>
                    </div>
                        </div> <!-- #END# CARD -->
                    </div>
                </div>
            </div>
            </div>
            <!-- #END# CONTAINER ADD -->
    </section>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery/jquery.min.js"></script>
	<!-- Validation -->
    <script src="<?php echo base_url();?>assets/js/validation.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_admin/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets_admin/js/demo.js"></script>
   