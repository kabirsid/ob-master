<?php 
	$userid = $_SESSION['adminid'];
	$query = "SELECT * from realestate WHERE realid='$realid'";
	$realedit=$this->db->query($query);
	if($this->db->affected_rows()==0){
		$this->session->set_flashdata('message','Record not found !');
		$data['pagename']="realestate_view.php";
		redirect(base_url().'index.php/Admin/realestate_view');
	}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>REALESTATE / EDIT / ID : <?php echo $realid;?></h2>
            </div>
            <!-- CONTAINER ADD -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Realestate</h2>
                        </div>
                        <div class="body">
                        <?php foreach ($realedit->result_array() as $row){?>	
                        	<form action="<?php echo base_url();?>index.php/Admin/realestate/update/<?php echo $row['realid'];?>" id="frmFileUpload" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
	                                <div class="col-md-4">
	                                    <label for="Name">Name </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="name_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="name" name="name" placeholder="Vendor name" required="required" value="<?php echo $row['name'];?>">
										  </div>	
	                                </div>
	                                <div class="col-md-8">
	                                    <label for="title">Title </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="title_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="title" name="title" placeholder="title" required="required"><?php echo $row['title'];?></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="address">Address</label><span style="color: red;"> * </span><span style="color: red;" class="error" id="address_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="address" name="address" placeholder="Address" required="required" ><?php echo $row['address'];?></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-4">
	                                    <label for="type">Type </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="type_error"></span>
										  <div class="form-line">	
										  	<select required="required" name="type">
	                                            	<option value="">Select</option>
	                                            	<option <?php if($row['type']=="Rent"){ echo 'selected';}?> value="Rent">Rent</option>
	                                            	<option <?php if($row['type']=="Sell"){ echo 'selected';}?> value="Sell">Sell</option>
	                                        </select>
										  </div>	
	                                </div>
	                                <div class="col-md-4">
	                                    <label for="builtup">Builtup area </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="builtup_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="builtup" name="builtup" placeholder="Builtup area (in Sq.ft)" required="required" value="<?php echo $row['builtup'];?>">
										  </div>	
	                                </div>
	                                 <div class="col-md-4">
	                                    <label for="price">Price </label><span style="color: red;">  </span><span style="color: red;" class="error" id="price_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="price" name="price" placeholder="Product price" value="<?php echo $row['price'];?>">
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="description">Description </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="description_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="description" name="description" placeholder="Description" required="required"><?php echo $row['description'];?></textarea>
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="mobile">Mobile </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="mobile_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile no." required="required" value="<?php echo $row['mobile'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-8">
	                                    <label for="mobile">Email </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="email_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="email" name="email" placeholder="Email ID." required="required" value="<?php echo $row['email'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-12">
	                                    <label for="facilities">Facilities </label><span style="color: red;">  </span><span style="color: red;" class="error" id="facilities_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="facilities" name="amenities" placeholder="Facilities" ><?php echo $row['amenities'];?></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-4">
	                                    <label for="city">City </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="city_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="city" name="city" placeholder="City" required="required" value="<?php echo $row['city'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="city">Area </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="area_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="area" name="area" placeholder="Area" required="required" value="<?php echo $row['area'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="offerenddate">Offer end date </label>
										  <div class="form-line">	
										  	<input type="date" class="form-control" id="offerend" name="offerend" placeholder="mm/dd/yyyy" value="<?php echo $row['offerend'];?>">
										  </div>	
	                                </div>
	                                <input type="hidden" name="userid" value="<?php echo $row['userid'];?>">
	                            </div>
	                                <input type="submit" class="btn btn-block btn-lg btn-success waves-effect" value="SUBMIT">
                            </form>
                            <?php }?>
                    </div>
                        </div> <!-- #END# CARD -->
                    </div>
                </div>
                <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit / Delete images</h2>
                        </div>
                        	 <?php 
			                    $query = "SELECT realestate.realid, realestate.`name`, realestate.title, realestate.type, realestate.address, realestate.builtup, realestate.price, realestate.description, realestate.mobile, realestate.email, realestate.amenities, realestate.city, realestate.area, realestate.date, realestate.offerend, realestate.category, realestate.userid, real_img.realid, real_img.path, real_img.id FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid WHERE realestate.realid = $realid";
			                    $realeditimg=$this->db->query($query);
			                    foreach ($realeditimg->result_array() as $row_img){
			                    ?>	
			                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			                    	<hr>
									<img alt="<?php echo $row['title'];?>" src="<?php echo base_url();echo $row_img['path'];?>" width="200" height="200">
					                <form action="<?php echo base_url();?>index.php/Admin/UpdateImage/real" method="post" enctype="multipart/form-data">
					                	<input type="hidden" name="imgid" value="<?php echo $row_img["id"];?>">
					                	<input type="hidden" name="postid" value="<?php echo $row_img["realid"];?>">
					                	<input type="file" name="image" required="required">
					                	<input type="submit" class="btn btn-success" value="Change Image">
					                </form>
					                <br>
					                <a href="<?php echo base_url();?>index.php/Admin/DeleteImage/real/<?php echo $row_img["id"];?>/<?php echo $row_img["realid"];?>"><input type="submit" class="btn btn-danger" value="Delete Image  &nbsp;"></a>
					                <hr>
				                </div>
				                <?php }?>
                	</div> 
                </div>       
           	</div> 
           	<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	 <div class="card">
                        <div class="header">
                            <h2>Add more images to this post</h2>
                        </div>
                     </div>   
                     <!-- Add more imgaes -->
                     <div class="body">
                            <form action="<?php echo base_url();?>index.php/Admin/AddMoreImages" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="realid" value="<?php echo $realid;?>">
                                <input type="hidden" name="category" value="real">
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
	                                <br>
	                                <input type="submit" value="Upload" class="btn btn-success" />
                                </div>
                                
                            </form>
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

    <!-- Select Plugin Js -->

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