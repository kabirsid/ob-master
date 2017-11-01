 <?php 
$query = "SELECT * FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid GROUP BY tution.tutid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query);
 ?>
 <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Tuition</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
			      	<div class="col-xs-12 col-sm-3">
			      		<a href="<?php echo base_url();?>index.php/Tuition/view/<?php echo $RealestateRow['tutid'];?>">
		                <div class="service wow fadeInUp">
	                    <img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
			                	<div class="portfolio-box-text">
			                		<h3><?php
			                			$title = $RealestateRow['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			
			                			?>
			                		</h3>
			                	</div>
		                </div>
		                </a>
					</div>
					<?php } ?>
	            </div>
	        </div>
        </div>
