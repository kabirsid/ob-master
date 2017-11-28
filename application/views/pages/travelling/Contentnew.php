
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




	        <div class="container" style="margin-top: 10px;">
	          
	          
	       
                         
	            	

	            		
	            	<?php foreach($Travelling->result_array() as $row){
	            	?>	
	        
                  	<div class="col-md-6">
	           		<div class="panel panel-default">
	            	<div class="panel-body">
	            	<div class="col-md-4" style="padding-left: 2px; padding-right: 1px;">
		           
                             	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">		
			                	
			                
			                  
			             </div>

			                	<div class="col-md-5" style="text-align: left; margin-left: 30px;">
			                		
			                		<i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $mobile;?><br>
	                    	<i class="fa fa-envelope"></i>&nbsp;:<?php echo $email;?><br>
	                    	<p><i class="fa fa-home"></i>: <?php echo $row['area'].' ,'.$row['city'];?></p>
			                	</div>
			                	
			                
			               <button type="button" data-toggle="modal" data-target="#myModal1">More details..</button> 
			                </div>
			           </div>
		               </div>
	                <?php 
	                	} 
	                ?>
	              
	            </div>
	            
	            <?php echo $this->pagination->create_links();?>

  <div class="modal fade" id="myModal1" role="dialog">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Close2</button>
        </div>
      </div>
    </div>
  
