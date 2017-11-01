<aside id="leftsidebar" class="sidebar">
<?php $adminid = $_SESSION['adminid'];
	$query = $this->db->get_where('register', array('reg_id' => $adminid));
	foreach ($query->result_array() as $row){
		$admin_name = $row['username'];
		$admin_email = $row['email'];
	}
?>
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>assets_admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $admin_name;?></div>
                    <div class="email"><?php echo $admin_email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Admin/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            
            <!-- Menu -->
           <div class="menu">
                <ul class="list">
                    <li class="header">CATEGORIES </li>
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Admin">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                             <span>Real Estate</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/realestate" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/realestate_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          	<i class="material-icons">school</i>
                            <span>Tutions</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/tution" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/tution_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          	<i class="material-icons">hotel</i>
                            <span>Hotels & restaurents</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/hotel" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/hotel_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          	<i class="material-icons">flight_takeoff</i>
                            <span>Travelling</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/travelling" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/travelling_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          	<i class="material-icons">motorcycle</i>
                            <span>Automobiles</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/automobile" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/automobile_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          	<i class="material-icons">control_point</i>
                            <span>Other</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/other" class="">
                                    <span>Add</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Admin/other_view" class="">
                                    <span>View</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>index.php/Admin/Feedback_view" class="">
                            <i class="material-icons">feedback</i>
                            <span>Feedback</span>
                        </a>
                    </li>
               </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y');?> <a href="javascript:void(0);">Admin - OffersBull</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->