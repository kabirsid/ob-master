  <?php 
$query = "SELECT * FROM automobile INNER JOIN automobile_img ON automobile.autoid = automobile_img.autoid GROUP BY automobile.autoid ORDER BY RAND() LIMIT 4";			
	$Realestate = $this->db->query($query);
 ?>

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
 <div class="container">
 <div class="page-title-container">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4 style="text-align: left;margin-top: 10px;"> <a href="<?php echo base_url();?>">
           <img src="<?php echo base_url();?>assets/img/logo3.png"></a></h4>
            </div>
             
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="product-big-title-area">
                <div class="product-bit-title text-center">
                        <h2><marquee><?php echo $title;?></marquee></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail text-left" style="padding:0px;">
	            		<?php for($i=0;$i<count($pathArray);$i++){?>
		             
			                	<img style="opacity:0.9;height:60%;width:100%;" src="<?php echo base_url();?><?php echo $pathArray[$i]?>" alt="" data-at2x="<?php echo $pathArray[0];?>">
	                		</div>
	                		<div class="caption">
                                 <p class="textcent">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-map-marker" style="font-size:30px;" aria-hidden="true"></i>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-mobile" style="font-size:30px;" aria-hidden="true"></i>
                                 <?php echo $mobile;?>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope" style="font-size:30px;" aria-hidden="true"></i>
                                 <?php echo $email;?>
                                 </p>
                            </div>
		                </div>
	                	<?php }?>
	            </div>
             </div>

<div class="single-product-area">

    
        
       <div class="col-md-2">
            <h4>Automobile:</h4>
                
                        <ul class="list-group">
                            <li class="list-group-item"  style="padding-bottom:0px;">
                              Dheeraj
                                    
                               </li>

                        </ul>
                        <div>
                            
                          <a href="<?php echo base_url();?>index.php/Automobile"><h4>More-Automobile</h4></a>
                        </div>
                </div>
     
   </div>
       
   


 <div class="col-md-8">
				<div class="col-md-12" style="text-align: left;">
					 
                    </br>
                       <h3>Description</h3>
	                    <p>
	                    	<?php echo $description; ?>
	                    </p>
             
                </div>

              


                                         
				<div class="col-md-12">
				    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Service</a></li>
                            <li role="presentation"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a></li>
                            <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                            <li role="presentation"><a href="#address" aria-controls="address" role="tab" data-toggle="tab">Address</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="address">
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
                    <div role="tabpanel" class="tab-pane fade" id="home">
                        <h3>Description</h3>
                            <p>
                                <?php echo $description; ?>
                            </p>
                              
                    </div>
                                            
                    <div role="tabpanel" class="tab-pane fade" id="gallery">
                    	<?php for($i=0;$i<count($pathArray);$i++){?>
		             <div class="portfolio-box web-design">
                        <div class="col-sm-12" id="Div4">
                            <ul class="hide-bullets">
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A1">
                                        <img style="height:148px;" src="http://placehold.it/150x150&text=zero">
                                    </a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A2"><img  style="height:148px;" src="<?php echo base_url();?><?php echo $pathArray[$i]?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A3"><img style="height:148px;" src="http://placehold.it/150x150&text=2"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A4"><img style="height:148px;" src="http://placehold.it/150x150&text=3"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A5"><img style="height:148px;" src="http://placehold.it/150x150&text=4"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A6"><img style="height:148px;" src="http://placehold.it/150x150&text=5"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A7"><img style="height:148px;" src="http://placehold.it/150x150&text=6"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="A8"><img style="height:148px;" src="http://placehold.it/150x150&text=7"></a>
                                </li>
                            </ul>
                             <?php }?>
                                
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>