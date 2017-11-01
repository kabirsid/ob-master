<!--<div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-web-design">Hotels</a> / 
	            		<a href="#" class="filter-print-design">Restaurants</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
	            	<?php foreach($Hotel->result_array() as $row){
	            	?>	
		                <?php if($row['type']=='Hotel'){?>
		                <div class="portfolio-box web-design">
		                <?php }else{?>
		                <div class="portfolio-box print-design">
		                <?php }?>
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
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?></p>
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} 
	                ?>
	                </div>
	            </div>
	            <hr>
	            <?php echo $this->pagination->create_links();?>
	        </div>
        </div>-->


        
<div class="container">
<div class="row">
<div class="col-md-3" style="margin-left: -10%;margin-top: 10px;">
<input type="checkbox"><label><strong>Option1</strong></label>
<br>
<input type="checkbox"><label><strong>Option2</strong></label>
<br>
<input type="checkbox"><label><strong>Option3</strong></label>
<br>
<input type="checkbox"><label><strong>Option4</strong></label>
<br>

</div>
            </br>   <div class="col-md-9">
                 <?php 
                  $query = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";			
	              $Realestate = $this->db->query($query);
                    ?>

                 <?php foreach ($Realestate->result_array() as $RealestateRow) {
	            	?>
                 <div class="col-md-3">

	                     <div class="single-product">
                                <div class="product-f-image">
	                              <img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
			                	<div class="product-hover">
                                         <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                     </div>
                                           <h2><a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>">
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
                                      <p>Address : <?php echo $RealestateRow['area'].' ,'.$RealestateRow['city'];?></p>
                                    </div>
                                  <?php } ?>
                           
                           </div>
                      </div>
                      </div>
                      </div>