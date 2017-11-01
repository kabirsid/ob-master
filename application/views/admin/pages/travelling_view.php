<section class="content">
        <div class="container-fluid">
        <div class="block-header">
                <h2>Travelling / View</h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Travelling - DATA
                            </h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                         <?php if(isset($_SESSION['message'])){
                         	?>
                         	<div class="alert alert-warning">
                         		<?php echo $_SESSION['message'];?>
                         	</div>
                         	<?php 	       		
							}
						 ?>
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                    	<th>Userid</th>	
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    	<th>Userid</th>	
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
<?php 
	$userid = $_SESSION['adminid'];
	$realestate_data = $this->db->order_by('date','desc')->get_where('travelling')->result_array();
?>                                
                                     <?php foreach ($realestate_data as $row){?>
								      <tr>
								       <?php if ($row['userid']==0){?>
								        <td style="background-color: rgba(255, 87, 34, 0.37);">
								        <?php }else{?>
								        <td>
								        <?php }?>
								        	<?php echo $row['userid'];?>
								        </td>
								        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo $row['mobile'];?></td>
                                        <td><?php $date = strtotime($row['date']); $date = date("F d, Y",$date); echo $date;?></td>
                                        <td><a href="<?php echo base_url();?>index.php/Admin/travelling_edit/<?php echo $row['travelid'];?>"><button class="btn btn-success">Edit</button></a></td>
								        <td><a href="<?php echo base_url();?>index.php/Admin/travelling/delete/<?php echo $row['travelid'];?>/<?php echo $row['userid'];?>"><button class="btn btn-danger">Delete</button></a></td>
                                       </tr> 
                                       <?php }?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->      </div>
</section> 
<!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_admin/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets_admin/js/demo.js"></script>
