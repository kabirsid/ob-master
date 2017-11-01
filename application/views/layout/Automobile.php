 <?php 
$query = "SELECT * FROM automobile INNER JOIN automobile_img ON automobile.autoid = automobile_img.autoid GROUP BY automobile.autoid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query);
 ?>
 <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Automobiles</h2>
		            </div>
	            </div>
	        </br>
	            <div class="row">
	            	<?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
			      	<div class="col-xs-12 col-sm-3">
		               <div class="single-product">
                                <div class="product-f-image">

	                    <img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
			                	<div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Automobile/view/<?php echo $RealestateRow['autoid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                    
                                </div>

			                	
			                		<h2> <a href="<?php echo base_url();?>index.php/Automobile/view/<?php echo $RealestateRow['autoid'];?>">
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
					</div>
					<?php } ?>
	            </div>
	        </div>
        </div>
