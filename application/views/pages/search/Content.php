<div class="portfolio-container">
    <div class="container">
        <div class="row">
        <h2>Dheeraj</h2>
        	<div class="col-sm-12 portfolio-masonry">
	            	<?php
	            		if(isset($realestateResult)){
	            		foreach($realestateResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $row['realid'];?>">
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
			                		<strong><h5>Realestate</h5></strong></p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} }
	                ?>


	                <?php 
	                	if(isset($hotelResult)){
	                	foreach($hotelResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $row['hotelid'];?>">
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
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?><strong><h5>Hotels</h5></strong></p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} }
	                ?>

	                <?php 
	                	if(isset($tuitionResult)){
	                	foreach($tuitionResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
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
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?>
			                			<strong><h5>Tuition</h5></strong>
			                		</p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} }
	                ?>

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

	                <?php 
	                	if(isset($automobileResult)){
	                	foreach($automobileResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Automobile/view/<?php echo $row['autoid'];?>">
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
			                			<strong><h5>Automobile</h5></strong>
			                		</p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} }
	                ?>

	                <?php 
	                	if(isset($otherResult)){
	                	foreach($otherResult as $row){
	            	?>	
		                <div class="portfolio-box print-design">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Other/view/<?php echo $row['otherid'];?>">
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
			                			<strong><h5>Other</h5></strong>
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
</div>