<div class="portfolio-container">
    <div class="container">
        <div class="row">
        	<div class="col-sm-12 portfolio-masonry">
	            	<?php 
	                	if(isset($travellingResult)){
	                	foreach($travellingResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Travelling/view/<?php echo $row['travelid'];?>">
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
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?>
			                			<strong><h5>Travelling</h5></strong>
			                		</p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} }
	                ?>
	            </div>
        </div>
    </div>
</div>