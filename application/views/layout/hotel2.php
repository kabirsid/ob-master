 <?php 
$query1 = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query1);
 ?>
<div class="col-md-12">
		           
		                <h2>Hotels</h2>
		 </div>
	           <div class="col-md-12">
	           	<div class="container">
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
<div class="col-md-3">
  	
	
		<div class="polaroid">
		
		   <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>"> <img  id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>" style="">
		    	<div class="product-hover1">
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

		        	</a></h2>
		        	
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
   

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.slider.js"></script>
	