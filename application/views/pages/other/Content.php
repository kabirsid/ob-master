<?php 
$query = "SELECT * FROM other INNER JOIN other_img ON other.otherid = other_img.otherid GROUP BY other.otherid ORDER BY RAND() LIMIT 4";            
    $OtherView = $this->db->query($query);
 ?>

 <?php 
 	$pathArray = array();
 	foreach ($OtherView->result_array() as $ViewRow) {
 		$id = $ViewRow['otherid'];
 		$name = $ViewRow['name'];
 		$title = $ViewRow['title'];
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

    <div class="container">

	            
	            	<?php foreach($Other->result_array() as $row){
	            	?>
		     
	            	<div class="col-md-6">
	            		<div class="panel panel-default">
                         <div class="panel-body">
	            	<div class="col-md-4" style="padding-left: 2px; padding-right: 1px;">

			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>"> </div>		
			                				       


<div class="container">

 <?php foreach($Other->result_array() as $row){
	            	?>

	 
		     
	            	<div class="col-md-6" style="margin-top: 20px;">
	            		
	            		<div class="panel panel-default">
                         <div class="panel-body">
	            	<div class="col-md-4">

			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>"> </div>		
			                	
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

			           
			        
			               <button type="button" data-toggle="modal" data-target="#myModal2">More details..</button> 
		               </div>
		           </div>
		       </div>
		   		

			                	</div>
			           			               <button type="button" data-toggle="modal" data-target="#myModal2">More details..</button> 
		               
		           </div>
		       </div>
		   </div>

		    <?php 
	                	} 
	                ?>
	          
	            <hr>
	            <?php echo $this->pagination->create_links();?>

	      




	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

           <?php if( $otherid=$title){
	            	?>



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
	                    	

	                    	
	                    	<hr>
	                    	<strong>Posted at: </strong><?php echo $postdate;?>
	                    </p>

	                       <?php 
	                	} 
	                ?>
	                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close2</button>

        </div>
      </div>
    </div>
  </div>
</div>
</div>