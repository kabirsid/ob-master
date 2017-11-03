 <?php
// LATEST POSTS
$query = "(SELECT realestate.realid as id,realestate.title,realestate.`name`,realestate.type, real_img.path,realestate.price,realestate.city,realestate.area,realestate.date,realestate.category, realestate.visits FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid GROUP BY realestate.realid ) UNION
(SELECT tution.tutid as id,tution.title,tution.`name`,'' as type,tut_img.path,'' as price, tution.city,tution.area,tution.date,tution.category,	tution.visits FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid GROUP BY tution.tutid) UNION 
(SELECT hotel.hotelid as id,hotel.title,hotel.`name`,hotel.type,hotel_img.path,'' as price,hotel.city,hotel.area, hotel.date,hotel.category,hotel.visits FROM hotel_img INNER JOIN hotel ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid) UNION 
(SELECT travelling.travelid as id,travelling.title,travelling.`name`,'' as type,travelling_img.path,travelling.price, travelling.city,travelling.area,travelling.date,travelling.category,travelling.visits FROM travelling_img INNER JOIN travelling ON travelling.travelid = travelling_img.travelid GROUP BY travelling.travelid) UNION 
(SELECT automobile.autoid as id,automobile.title,automobile.`name`,automobile.type,automobile_img.path,'' as price,automobile.city,automobile.area,automobile.date,automobile.category,automobile.visits FROM automobile INNER JOIN automobile_img ON automobile.autoid = automobile_img.autoid GROUP BY automobile.autoid) UNION 
(SELECT other.otherid as id,other.title,other.`name`,'' as type ,other_img.path,'' as price, other.city,other.area,other.date,other.category,other.visits FROM other INNER JOIN other_img ON other.otherid = other_img.otherid GROUP BY other.otherid) ORDER BY date DESC LIMIT 8";
	//LatestPosts
	$LatestPosts = $this->db->query($query);
	$LatestPostsArray = $LatestPosts->result_array();
	$LatestPostsArrayChunked = array_chunk($LatestPostsArray, 4);
?>

<html>
<body style="background-color: #ededed;">
 <div class="portfolio-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <strong><h2 style="background-color:#fae6e6">Latest posts</h2></strong>
		            </div>
	            </div>
	            <div class="row">
	            	<?php if(!$isMobile){ ?>
	            	<div class="noMobile">
	            		<div id="myCarousel" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							    	<?php 
							    		foreach ($LatestPostsArrayChunked[0] as $LatestPostsRow) {
							    			$category = $LatestPostsRow['category'];
							    			if($category==0){
							    				$category = 'Realestate';
							    			}elseif ($category == 1) {
							    				$category = 'tuition';
							    			}
							    			elseif ($category == 2) {
							    				$category = 'Hotel';
							    			}elseif ($category == 3) {
							    				$category = 'Travelling';
							    			}elseif ($category == 4) {
							    				$category = 'Automobile';
							    			}elseif ($category == 5) {
							    				$category = 'Other';
							    			}
							    	?>
			      	<div class="col-sm-3">
		                
		                <div class="single-product">
		                	

                              <div class="product-f-image">
		                	         <img id="postimg" src="<?php echo $LatestPostsRow['path'];?>" alt="<?php echo $LatestPostsRow['title'];?>">
		                		 <div class="product-hover">
                                          <a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>

							                	
			                		<h2><a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>">
			                		<?php
			                			$title = $LatestPostsRow['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			
			                			?>
			                		</a></h2>
			                	</div>
			               
			               
						</div>
					<?php
			    		}
			    	?>
			    </div>
							    <div class="item">
							    <?php 
							    	foreach ($LatestPostsArrayChunked[0] as $LatestPostsRow2) {
							    		$category = $LatestPostsRow2['category'];
							    			if($category==0){
							    				$category = 'Realestate';
							    			}elseif ($category == 1) {
							    				$category = 'tuition';
							    			}
							    			elseif ($category == 2) {
							    				$category = 'Hotel';
							    			}elseif ($category == 3) {
							    				$category = 'Travelling';
							    			}elseif ($category == 4) {
							    				$category = 'Automobile';
							    			}elseif ($category == 5) {
							    				$category = 'Other';
							    			}
							    ?>	
							      	<div class="col-sm-3">
						                
						                <div class="single-product">
                                                 <div class="product-f-image">
							                	<img id="postimg" src="<?php echo $LatestPostsRow2['path'];?>" alt="<?php echo $LatestPostsRow2['title'];?>">
							                        <div class="product-hover">
                                                  <a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                   </div>
                                                     </div>
							                	
							                		<h2><a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>">
							                		<?php
							                			$title = $LatestPostsRow2['title'];
							                			if(strlen($title)>30){
							                				$title = substr($title,0,30)." ...";
							                				echo $title;
							                			}else{
							                				echo $title;
							                			}
							                			
							                			?>
							                		</a></h2>
							                	</div>
							              
							             
									</div>
									<?php }?>
							    </div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
                    </div>
                    <?php 
                	} 
                    else{
                    ?>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							  <?php 
							  	$counter = 0;
							  	foreach ($LatestPostsArrayChunked[0] as $LatestPostsRow) {
							  		$category = $LatestPostsRow['category'];
							    			if($category==0){
							    				$category = 'Realestate';
							    			}elseif ($category == 1) {
							    				$category = 'tuition';
							    			}
							    			elseif ($category == 2) {
							    				$category = 'Hotel';
							    			}elseif ($category == 3) {
							    				$category = 'Travelling';
							    			}elseif ($category == 4) {
							    				$category = 'Automobile';
							    			}elseif ($category == 5) {
							    				$category = 'Other';
							    			}
							  		if($counter == 0){
							  ?>
							    <div class="item active">
							      <div class="col-sm-3">
					                 <div class="single-product">
                                         <div class="product-f-image">
					                    
					                    	<img id="postimg" src="<?php echo $LatestPostsRow['path'];?>" alt="<?php echo $LatestPostsRow['title'];?>"></a>
							                	<div class="product-hover">
                                               <a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                   </div>
                                                     </div>

							                	
							                		<h2><a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>">
							                			<?php
							                			$title = $LatestPostsRow['title'];
							                			if(strlen($title)>30){
							                				$title = substr($title,0,30)." ...";
							                				echo $title;
							                			}else{
							                				echo $title;
							                			}
							                			
							                			?>
							                		</a></h2>
							                	</div>
					              
									</div>	
							 	</div>
							 	<?php $counter++; }else{?>
							 	<div class="item">
							      <div class="col-sm-3">
					                <div class="single-product">
                                       <div class="product-f-image">
					                  
					                   	<img id="postimg" src="<?php echo $LatestPostsRow['path'];?>" alt="<?php echo $LatestPostsRow['title'];?>"></a>
							                <div class="product-hover">
                                           <a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                  </div>	
                                                  </div>
							                	
							                		<h2><a href="<?php base_url();echo 'index.php/'.$category;?>/view/<?php echo $LatestPostsRow['id'];?>">
							                			<?php
							                			$title = $LatestPostsRow['title'];
							                			if(strlen($title)>30){
							                				$title = substr($title,0,30)." ...";
							                				echo $title;
							                			}else{
							                				echo $title;
							                			}
							                			
							                			?>
							                		</a></h2>
							                	</div>
					                </div>
									</div>
							    </div>
							 	 <?php	
							 	 		}	
							  		}
							  	  ?>
							  </div>
							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
                    <?php }?>
                    <!-- End of noMobile class -->
	            </div>
	        </div>
        </div>




</body>