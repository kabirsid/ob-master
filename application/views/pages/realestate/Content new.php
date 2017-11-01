<div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-web-design">Buy</a> / 
	            		<a href="#" class="filter-print-design">Rent</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 col-md-3 portfolio-masonry">
	            	<div class="col-md-3">
	            	<?php foreach($Realestate->result_array() as $row){
	            	?>	
		                <?php if($row['type']=='Sell'){?>
		                <div class="portfolio-box web-design">
		              
		                <?php }else{?>
		                <div class="portfolio-box print-design">
		                <?php }?>
		                  <div class="single-product">
                                <div class="product-f-image">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	  <div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $row['realid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                  </div>
			                	
			             
			                		<h2><a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $row['realid'];?>">
			                			<?php
			                			$title = $row['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			?>
			                		</a></h2>
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?></p>
			                	</div>
			          </div>  
	                <?php 
	                	} 
	                ?>
	                </div>
	                </div>
	                
	            </div>
	            <hr>
	            <?php echo $this->pagination->create_links();?>
	        </div>
        </div>