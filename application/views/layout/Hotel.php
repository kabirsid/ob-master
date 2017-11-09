 <?php 
$query1 = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query1);
 ?>
 <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Hotels</h2>
		            </div>
	            </div>
	        </br>
	            <div class="row">
	            	<div class="jumbotron" style="background-color: white; padding-left: 0px;padding-bottom: 0px; padding-right: 0px; padding-top: 0px;">
	            
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>

		
  	<div class="col-xs-12 col-sm-3">
  		
       <div class="single-product">
     
       
                   <div class="product-f-image">

	                    <a><img  id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>"></a>
			                	<div class="product-hover">
                                       <h2 style="color: red;"> 
			                			<?php
			                			$title = $RealestateRow['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			
			                			?>
			                		</h2>
                                        <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>

			                	
			                		<!--<h2> <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>">
			                			<?php
			                			$title = $RealestateRow['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			
			                			?>
			                		</a></h2>-->
			                	</div>
		               <p> <?php echo $RealestateRow['amenities'].' ,'.$RealestateRow['city'];?></p>
		                </a>
					</div>
					<?php } ?>
	          </div>
	      </div>

	  </div>
	</div>
	          

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.slider.js"></script>
	