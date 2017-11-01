<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <?php
            //Total home page visitors
            $query_homecount = "select count from usercount";
            $result_homecount = $this->db->query($query_homecount);
            foreach ($result_homecount->result_array() as $row){
            	$home_visitors = $row['count'];
            }
             
            /*	FETCHING OF VISITS REALATED DATA */
            //Realestate
            $query1 = "select sum(visits) from realestate";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$real_total_visits = $row['sum(visits)'];
            }
            // Tution
            $query1 = "SELECT sum(visits) from tution";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$tution_total_visits = $row['sum(visits)'];
            }
            //Hotel
            $query1 = "SELECT sum(visits) from hotel";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$hotel_total_visits = $row['sum(visits)'];
            }
            //Travelling
            $query1 = "SELECT sum(visits) from travelling";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$travelling_total_visits = $row['sum(visits)'];
            }
            //Automobile
            $query1 = "SELECT sum(visits) from automobile";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$automobile_total_visits = $row['sum(visits)'];
            }
            //Other
            $query1 = "SELECT sum(visits) from other";
            $result1 = $this->db->query($query1);
            foreach ($result1->result_array() as $row){
            	$other_total_visits = $row['sum(visits)'];
            }
             
            $total_posts_visits = $real_total_visits + $tution_total_visits + $hotel_total_visits + $travelling_total_visits + $automobile_total_visits + $other_total_visits;
            
            /*	FETCHING OF POST REALATED DATA */
            	//Realestate
            	$query1 = "SELECT COUNT(realid) from realestate";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$real_total = $row['COUNT(realid)'];
            	}
            	// Tution
            	$query1 = "SELECT COUNT(tutid) from tution";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$tution_total = $row['COUNT(tutid)'];
            	}
            	//Hotel
            	$query1 = "SELECT COUNT(hotelid) from hotel";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$hotel_total = $row['COUNT(hotelid)'];
            	}
            	//Travelling
            	$query1 = "SELECT COUNT(travelid) from travelling";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$travelling_total = $row['COUNT(travelid)'];
            	}
            	//Automobile
            	$query1 = "SELECT COUNT(autoid) from automobile";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$automobile_total = $row['COUNT(autoid)'];
            	}
            	//Other
            	$query1 = "SELECT COUNT(otherid) from other";
            	$result1 = $this->db->query($query1);
            	foreach ($result1->result_array() as $row){
            		$other_total = $row['COUNT(otherid)'];
            	}
            	
            	$total_posts = $real_total + $tution_total + $hotel_total + $travelling_total + $automobile_total + $other_total;
            ?>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL HOME VISITS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $home_visitors;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total_posts_visits;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <div class="content">
                            <div class="text">Real Estate</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $real_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">school</i>
                        </div>
                        <div class="content">
                            <div class="text">Tutions</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $tution_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">hotel</i>
                        </div>
                        <div class="content">
                            <div class="text">Hotel & Restaurents</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $hotel_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">flight_takeoff</i>
                        </div>
                        <div class="content">
                            <div class="text">Travelling</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $travelling_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">motorcycle</i>
                        </div>
                        <div class="content">
                            <div class="text">Automobiles</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $automobile_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">control_point</i>
                        </div>
                        <div class="content">
                            <div class="text">Other</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $other_total_visits;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Total categorywise posts</div>
                            <ul class="dashboard-stat-list">
                            <hr>
                                <li>
                                    # Realestate  
									 <span class="pull-right">
                                        <?php echo $real_total;?>
                                    </span>
                                </li>
                                <li>
                                    # Tution
                                    <span class="pull-right">
                                        <?php echo $tution_total;?>
                                    </span>
                                </li>
                                <li>
                                	# Hotels
                                	<span class="pull-right">
                                        <?php echo $hotel_total;?>
                                    </span>
                                </li>
                                <li>
                                	# Travelling
                                	<span class="pull-right">
										<?php echo $travelling_total;?>                                        
                                    </span>	
                                </li>
                                <li>
                                    # Automobile
                                    <span class="pull-right">
                                        <?php echo $automobile_total;?>
                                    </span>
                                </li>
                                <li>
                                	# Other
                                	<span class="pull-right">
                                        <?php echo $other_total;?>
                                    </span>	
                                </li>
                                <hr>
                                <li>
                                	# Total Posts 
                                	<span class="pull-right">
                                        <?php echo $total_posts;?>
                                    </span>	
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-pink">
                                 Total registered users
                        <?php 
                        	$regusers = "SELECT COUNT(reg_id) from register";
                        	$regarray = $this->db->query($regusers);
                        	foreach ($regarray->result_array() as $reg_users){
                        		$total_regusers = $reg_users['COUNT(reg_id)'];
                        	}
                        	
                        	$latest_registered = "SELECT username,email from register ORDER BY regdate DESC limit 5";
                        	$latest_registered_array = $this->db->query($latest_registered);
                        ?>         
                                 <hr>
                            <ul class="dashboard-stat-list">
	                            <?php   
	                             	foreach ($latest_registered_array->result_array() as $reg_latest){
	                             ?>
                                <li>
                                   <?php echo $reg_latest['username'];?>
                                    <span class="pull-right"> <?php echo $reg_latest['email']?></span>
                                </li>
								<?php 	}?>
                                <br>
                                <li>
                                   Total
                                    <span class="pull-right"><b><?php echo $total_regusers;?></b> <small>USERS</small></span>
                                </li>
                                <hr>
                            </ul>
                            <a href="<?php echo base_url();?>index.php/Admin/Allusers"><button class="btn btn-primary">All users</button></a>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- #END# Latest Social Trends -->
            </div>
			 <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Paid user promotions</h2>
                        </div>
                        <div class="body">
                        	<form action="<?php echo base_url();?>index.php/Admin/Pramotions" method="post">
                        		 <div class="col-md-2">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Post ID" name="post_id" required="required">
	                                        </div>
	                                    </div>
	                              </div>
	                              <div class="col-md-2">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Subscription Days" name="sub_days" required="required">
	                                        </div>
	                                    </div>
	                              </div>
	                              <div class="col-md-2">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Price" name="price" required="required">
	                                        </div>
	                                    </div>
	                              </div>
	                              <div class="col-md-4">
                                       <div class="form-line">
                                               <select class="form-control show-tick" name="category">
												  <option value="0">Realestate</option>
												  <option value="1">Tution</option>
												  <option value="2">Hotels</option>
												  <option value="3">Travelling</option>
												  <option value="4">Automoblies</option>
												  <option value="5">Other</option>
												</select>
	                                    </div>
	                               </div>
	                               <div class="col-md-2">
	                               		<input type="submit" value="Submit" class="btn btn-success">
	                               </div>	
                            </form>
                            <?php 
                            $query = "select * from pramotion";
                            $promo_result = $this->db->query($query)->result_array();
                           	?>
                                <table class="table table-hover dashboard-task-infos table-responsive">
                                    <thead>
                                        <tr>
                                        	<th>Post ID</th>
                                        	<th>Days Left</th>
                                        	<th>Price</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($promo_result as $promo_row){
                                   		$post_id = $promo_row['post_id'];
                                   		$category = $promo_row['category'];
                                   		if($category == 0){
                                   			$category = "realestate";
                                   			$cat_id = "realid";
                                   		}elseif($category == 1){
                                   			$category = "tution";
                                   			$cat_id = "tutid";
                                   		}elseif($category == 2){
                                   			$category = "hotel";
                                   			$cat_id = "hotelid";
                                   		}elseif($category == 3){
                                   			$category = "travelling";
                                   			$cat_id = "travelid";
                                   		}elseif($category == 4){
                                   			$category = "automobile";
                                   			$cat_id = "autoid";                                   		
                                   		}elseif($category == 5){
                                   			$category = "other";
                                   			$cat_id = "otherid";                                   		
                                   		}
                                   		
                                    	$query = $this->db->get_where($category,array($cat_id=>$post_id));
                                    	$row = $query->row();
                                    ?>	
                                        <tr>
                                         	<td><?php echo $promo_row['post_id'];?></td>
                                         	<td>
                                         		<?php 
                                         			$dnow = date("Y-m-d");
                                         			$sub_end_date = $promo_row['daysleft'];
                                         			$diff = abs(strtotime($dnow) - strtotime($sub_end_date));
                                         			$numberDays = $diff/86400;
                                         			echo $numberDays;
                                         		?>
                                         	</td>
                                         	<td><?php echo $promo_row['price'];?></td>
                                            <td><?php echo $row->name;?></td>
                                            <td><?php echo $row->title;?></td>
                                            <td><?php echo $row->mobile;?></td>
                                            <td><?php echo $row->email;?></td>
                                           <td><a href="<?php echo base_url();?>index.php/Admin/DeletePramotions/<?php echo $promo_row['post_id'];?>"><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    <?php }?>    
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
 <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    