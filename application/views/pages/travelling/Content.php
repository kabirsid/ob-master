
 <?php 
$query = "SELECT * FROM travelling INNER JOIN travelling_img ON travelling.travelid = travelling_img.travelid GROUP BY travelling.travelid ORDER BY RAND() LIMIT 4";            
    $Realestate = $this->db->query($query);
 ?>

<?php 
 	$pathArray = array();
 	foreach ($Realestate->result_array() as $ViewRow) {
 		$id = $ViewRow['travelid'];
 		$name = $ViewRow['name'];
 		$title = $ViewRow['title'];
 		$price = $ViewRow['type'];
 		$address = $ViewRow['address'];
 		$price = $ViewRow['price'];
 		if($price!=null){
 			$price = number_format($price);
 		}else{
 			$price = "NA";
 		}

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



<div class="portfolio-container">
	        <div class="container">
	            <div class="polariod">
	            	<div class="col-md-6">
	            		<div class="panel panel-default">
                         <div class="panel-body">
	            	<div class="col-md-4">

	            		
	            	<?php foreach($Travelling->result_array() as $row){
	            	?>	
		              <div class="single-product">
                              <!--  <div class="product-f-image">-->

			                	
			                <!--	 <div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Travelling/view/<?php echo $row['travelid'];?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                    </div>-->
			                	  </div>
			                  
			             </div>

			                	<div class="col-md-6" style="text-align: left;">
			                		<h2><a href="<?php echo base_url();?>index.php/Travelling/view/<?php echo $row['travelid'];?>">
			                			
			                	</a>	</h2>
			                		
			                		<i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $mobile;?><br>
	                    	<i class="fa fa-envelope"></i>&nbsp;:<?php echo $email;?><br>
	                    	<p><i class="fa fa-home"></i>: <?php echo $row['area'].' ,'.$row['city'];?></p>
			                	</div>
			                	 </div>
			                <div class="panel-footer">
			                	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">More Details...</button>
			                </div>
			           </div>
		               </div>
	                <?php 
	                	} 
	                ?>
	              
	            </div>
	            
	            <?php echo $this->pagination->create_links();?>
	        </div>
        </div>
</div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h3>Owner: <?php echo $name;?></h3>
        </div>
        <div class="modal-body">
        <h3>Description</h3>
	                    <p>
	                    	<?php echo $description; ?>
	                    </p>
	                    
	                    <p>
	                    	
	                    	<span class="violet"> Address: </span><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
	                    	<?php echo $address;?><br>
	                    	<?php if($price!=null){?>
	                    	<span class="violet">Price: </span><?php echo $price;?><br>
	                    	<?php }?>
	                    	
	                    	<hr>
	                    	<strong>Posted at: </strong><?php echo $postdate;?>
	                    </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
