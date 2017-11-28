 <?php 
$query1 = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query1);
 ?>
<!-- 
	 <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Hotel</h2>
		            </div>

<div class="col-md-12">
    <div class="container">
		<?php foreach ($Realestate->result_array() as $RealestateRow) {
		?>
		<div class="col-md-3">	
			<div class="polaroid">
				<div class="single-product">
                	<div class="product-f-image">
                		<img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
                            <div class="product-hover">
                               <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details
                               </a>
                               <h2 style="color: blue; margin:145px 0px 0px 10px;">
                               		<?php
                                        $title = $RealestateRow['title'];
                                        if(strlen($title)>30){
                                            $title = substr($title,0,30)." ...";
                                            echo $title;
                                        }else{
                                            echo $title;
                                        }
                                        
                                    ?>
                                </a>
                                </h2>
                            </div>
                    </div>              
                </div>		       
		   			<p style="font-size:16px;font-family: 'Times New Roman', sans-serif;background-color: white;">
		        		<?php
		        			$amenities = $RealestateRow['amenities'];
		        			if(strlen($amenities)>30){
		        				$amenities = substr($amenities,0,50)." ...";
		        				echo $amenities;
		        			}else{
		        				echo $amenities;
		        			}
		        		?>
		        	</p>
		        	<hr style="margin-top: 0px;margin-bottom: 2px;">
		   			<p style="font-size:16px;background-color: white;"><?php echo $RealestateRow['city'];?></p>
			</div>
	   </div>
		<?php } ?>
    </div>
</div>
</div> -->
   

<div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Hotels</h2>
		            </div>
	            </div>
	        </br>
	            <div class="row">
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
			      	<div class="col-xs-12 col-sm-3">
		                <div class="polaroid">
                          <div class="single-product">
                                <div class="product-f-image">

		                  <img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
			                	  <div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>
			                	
			                		<h2><a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" >
			                			<?php
			                			$title = $RealestateRow['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			
			                			?>
			                		   </a> </h2>
			                	</div>
		                <p>Address : <?php echo $RealestateRow['area'].' ,'.$RealestateRow['city'];?></p>
		                </a>
					</div>
				</div>
					<?php } ?>
	            </div>
	        </div>
        </div>
	