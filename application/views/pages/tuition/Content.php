<!-- <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
	            	<?php foreach($Tuition->result_array() as $row){
	            	?>	
	            	 
		                <div class="portfolio-box web-design">
		                	<div class="polaroid">
		                	<div >
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Tuition/view/<?php echo $row['tutid'];?>">
			                	<div class="portfolio-box-text">
			                		<h3><?php
			                			$title = $row['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			?>
			                		</h3>
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?></p>
			                	</div>
			                	</a>
			                </div>
		                </div>
		            </div>
	                <?php 
	                	} 
	                ?>
	                </div>
	            </div>
	            <hr>
	            <?php echo $this->pagination->create_links();?>
	        </div>
        </div> 

<?php 
                  $query = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	              $Realestate = $this->db->query($query);
                    ?>



    -->



        <div class="container">
<div class="row">

            </br>   <div class="col-md-12">
                 
            		<?php 
                  $query = "SELECT * FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid GROUP BY tution.tutid ORDER BY RAND() LIMIT 4";			
	              $Realestate = $this->db->query($query);
                    ?>



    
                 <?php foreach ($Tuition->result_array() as $RealestateRow) {
	            	?>
                 <div class="col-md-3">
                 	 <div class="polaroid">
	                     <div class="single-product">
                                <div class="product-f-image">
	                              <img id="postimg" src="<?php echo base_url().$RealestateRow['path']; ?>" alt="<?php echo $RealestateRow['title'];?>">
			                	<div class="product-hover">
                                         <a href="<?php echo base_url();?>index.php/Tuition/view/<?php echo $RealestateRow['tutid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>
                                           <h2><a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['tutid'];?>">
                                           	<?php
	                                       	$title = $RealestateRow['title'];
		                                 	 if(strlen($title)>30){
		                             	    $title = substr($title,0,30)." ...";
		                             	 		echo $title;
		                              		}else{
			                                  echo $title;
			                                }
	                                       	?>       
                                          </a></h2>
                                     </div>
                                      <p>Address : <?php echo $RealestateRow['area'].' ,'.$RealestateRow['city'];?></p>
                                    </div>
                                </div>
                                  <?php } ?>
                           
                           </div>
                           <hr>
	            <?php echo $this->pagination->create_links();?>
                      </div>
                      </div>
                      </div>
