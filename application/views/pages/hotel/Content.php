

        
<div class="container">
<div class="row">

            </br>   <div class="col-md-12">
                 <?php 
                  $query = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	              $Realestate = $this->db->query($query);
                    ?>

                 <?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
                 <div class="col-md-3">
                 	 <div class="polaroid">
	                     <div class="single-product">
                                <div class="product-f-image">
	                              <img id="postimg" src="<?php echo base_url().$RealestateRow['path']; ?>" alt="<?php echo $RealestateRow['title'];?>">
			                	<div class="product-hover">
                                         <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>
                                           <h2><a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>">
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
                      </div>
                      </div>
                      </div>





           