<div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-3">
	            	<?php foreach($Travelling->result_array() as $row){
	            	?>	
		              <div class="single-product">
                                <div class="product-f-image">

			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	 <div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Travelling/view/<?php echo $row['travelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                    </div>
			                	
			                	
			                		<h2><a href="<?php echo base_url();?>index.php/Travelling/view/<?php echo $row['travelid'];?>">
			                			<?php
			                			$title = $row['title'];
			                			if(strlen($title)>30){
			                				$title = substr($title,0,30)." ...";
			                				echo $title;
			                			}else{
			                				echo $title;
			                			}
			                			?>
			                		</h2>
			                		<p>Address : <?php echo $row['area'].' ,'.$row['city'];?></p>
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
        </div>