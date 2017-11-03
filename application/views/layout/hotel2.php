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
  	
	<div class="jumbotron" style="background-color: white; padding:10px;font-family: 'Times New Roman', sans-serif;">
		
		<div class="col-md-12">
		    <img  id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
		    	<h2 style="color: red; margin:0px 0px 0px 10px;"> 
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
		        	</div>
		        	
		                  

		       
		   <p style="font-size:16px;margin: -3px;font-family: 'Times New Roman', sans-serif;"> <?php echo $RealestateRow['amenities'] ?></p>
		   <hr>
		   <p style="font-size:16px;margin: -10px; "><?php echo $RealestateRow['city'];?></p>
	   </div>
	</div>	
	
		<?php } ?>
     </div>
    </div>
   

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.slider.js"></script>
	