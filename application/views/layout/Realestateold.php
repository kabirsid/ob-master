 <?php 
$query = "SELECT realestate.realid, realestate.`name`, realestate.title, realestate.type, realestate.address, realestate.builtup, realestate.price, realestate.description, realestate.mobile, realestate.email, realestate.amenities, realestate.city, realestate.area, realestate.date, realestate.offerend, realestate.category, realestate.userid, real_img.path, real_img.id FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid GROUP BY realid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query);
 ?>
 <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Realestate</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            		$realid = $RealestateRow['realid'];
	            	?>
			      	<div class="col-xs-12 col-sm-3">
		                <a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $realid;?>">
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
			                		<p>Address : <?php echo $RealestateRow['area'].' ,'.$RealestateRow['city'];?></p>
			                	</div>
		                </div>
		                </a>
					</div>
					<?php } ?>
	            </div>
	        </div>
        </div>
