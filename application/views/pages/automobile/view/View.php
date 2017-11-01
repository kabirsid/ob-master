 <?php 
 	$pathArray = array();
 	foreach ($AutomobileView as $ViewRow) {
 		$id = $ViewRow['autoid'];
 		$name = $ViewRow['name'];
 		$title = $ViewRow['title'];
 		$type = $ViewRow['type'];
 		$address = $ViewRow['address'];
 		$description = $ViewRow['description'];
 		$mobile = $ViewRow['mobile'];
 		$email = $ViewRow['email'];
 		$city = $ViewRow['city'];
 		$area = $ViewRow['area'];
 		$postdate = strtotime($ViewRow['date']);
		$postdate = date(' F d, Y | h:i a',$postdate);

		$offerend = $ViewRow['offerend'];
		$category = $ViewRow['category'];
		$userid = $ViewRow['userid'];
		$visits = $ViewRow['visits'];
 		array_push($pathArray, $ViewRow['path']);
 	}
 ?>
 <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <h1>Automobile / <?php echo $type;?> /<span class="post_title"><?php echo $title;?></span></h1>
                    </div>
                </div>
            </div>
        </div>
		<div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	           		
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
	            		<?php for($i=0;$i<count($pathArray);$i++){?>
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="<?php echo base_url();?><?php echo $pathArray[$i]?>" alt="" data-at2x="<?php echo $pathArray[0];?>">
	                		</div>
		                </div>
	                	<?php }?>
	                </div>
	            </div>
	        </div>
        </div>
        <div class="services-half-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-6 services-half-width-text wow fadeInLeft">
	                    <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
	                    <p>
	                    	
	                    	<span class="violet"> Address: </span><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
	                    	<?php echo $address;?><br>
	                    	<span class="violet">Mobile: </span><?php echo $mobile;?><br>
	                    	<span class="violet">Email ID: </span><?php echo $email;?><br>
	                    	<hr>
	                    	<strong>Posted at: </strong><?php echo $postdate;?>
	                    </p>
	                </div>
	                <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Description</h3>
	                    <p>
	                    	<?php echo $description; ?>
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	           		<h3>Similar results</h3>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                <?php 
		                foreach ($SimilarResults as $SimilarRow) {
					 		$SimilarRealid = $SimilarRow['autoid'];
					 		$SimilarPath = $SimilarRow['path'];	
							$SimilarTitle = $SimilarRow['title'];
					 		$SimilarCity = $SimilarRow['city'];
					 		$SimilarArea = $SimilarRow['area'];
					 	?>	
		                <div class="portfolio-box web-design">
		                	<a href="<?php echo base_url()."index.php/Automobile/view/"."$SimilarRealid"; ?>">
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url();?><?php echo $SimilarPath ?>" alt="">
		                		<div class="portfolio-box-text">
		                			<h3><?php
		                			if(strlen($SimilarTitle)>30){
				                				$SimilarTitle = substr($SimilarTitle,0,30)." ...";
				                				echo $SimilarTitle;
				                			}else{
				                				echo $SimilarTitle;
				                			}
		                			 ?></h3>
		                			<p><?php echo $SimilarArea.', '; echo $SimilarCity?></p>
		                		</div>
	                		</div>
	                		</a>
		                </div>
		                <?php 
					 		}
					 	?>
	                </div>
	            </div>
	        </div>
        </div>
