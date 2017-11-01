<!--<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<!--<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page - Ustora Demo</title>
	
    
    <!-- Google Fonts -->
   <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
   <!-- <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	


<!DOCTYPE html>
<head>
<title>pop up</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<style type="text/css">
 
#enquirypopup .modal-dialog {
    width: 400px;
    padding: 0px ;
    position: relative;
}

#enquirypopup .modal-dialog {
    width: 400px;
    padding: 0px ;
    position: relative;
}
#enquirypopup .modal-dialog:before {
    content: '';
    height: 0px;
    width: 0px;
    border-left: 50px solid #17B6BB;
    border-right: 50px solid transparent;
    border-bottom: 50px solid transparent;
    position: absolute;
    top: 1px;
    left: -14px;
    z-index: 99;
}

.custom-modal-header {
    text-align: center;
    color: #17b6bb;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-top: 4px solid;
}

#enquirypopup .modal-dialog .close {
    z-index: 99999999;
    color: white;
    text-shadow: 0px 0px 0px;
    font-weight: normal;
    top: 4px;
    right: 6px;
    position: absolute;
    opacity: 1;
}

.custom-modal-header .modal-title {
    /* font-weight: bold; */
    font-size: 18px;
}

#enquirypopup .modal-dialog:after {
    content: '';
    height: 0px;
    width: 0px;
    /* border-right: 50px solid rgba(255, 0, 0, 0.98); */
    border-right: 50px solid #17b6bb;
    border-bottom: 50px solid transparent;
    position: absolute;
    top: 1px;
    right: -14px;
    z-index: 999999;
}

.form-group {
    margin-bottom: 15px !important;
}

.form-inline .form-control {
    display: inline-block;
    width: 100%;
    vertical-align: middle;
}
</style>
<script type="text/javascript">
        $(window).load(function(){
        setTimeout(function() {
                $('#enquirypopup').modal('show');
        }, 3000);
            });

</script>
</head>
<body>





	<?php 
    $pathArray = array();
    foreach ($HotelView as $ViewRow) {
        $id = $ViewRow['hotelid'];
        $name = $ViewRow['name'];
        $title = $ViewRow['title'];
        $type = $ViewRow['type'];
        $address = $ViewRow['address'];
        $price = $ViewRow['price'];
        $path=$ViewRow['path'];
        if($price!=null){
            $price = number_format($price);
        }else{
            $price = "NA";
        }

        $description = $ViewRow['description'];
        $mobile = $ViewRow['mobile'];
        $email = $ViewRow['email'];
        $amenities = $ViewRow['amenities'];
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
                        <h1>Hotel / <?php echo $type;?> /<span class="post_title"><?php echo $title;?></span></h1>
                    </div>
                </div>
            </div>
        </div>

<!--
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="slider-area">
      
            
        	<!-- Slider 
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
            
            </div>
                </div>
            </div>
        </div>-->

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                   <!-- <div class="single-sidebar">
                        <h4>Search Hotels:</h4>
                            <form action="">
                                 <div id="custom-search-input">
                                    <div class="input-group">
                                       <input type="text" class="form-control input-lg" placeholder="Search" />
                                          <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="button">
                                               <i class="glyphicon glyphicon-search"></i>
                                           </button>
                                          </span>
                                    </div>
                                 </div>
							<!--<input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                             </form>-->
                                       
                    <div>
                        <h4>Hotels:</h4>
						<ul class="list-group">
						<li class="list-group-item"  style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						<li class="list-group-item" style="padding-bottom:0px;"><h4>Sayaji Hotel</h4></li>
						</ul>
						<div>
						  <a href="#"><h4>More-Hotels</h4></a>
						</div>
					</div>
						
						
                     
                 </div>
            
				
                
				<div class="col-md-8">
				    <div class="product-big-title-area">
				        <div class="product-bit-title text-center">
                             <h2><marquee><?php echo $title;?></marquee></h2>
                        </div>
					</div>
					<div >
					   </br>
				            <img class="img1" src="<?php echo base_url();?><?php echo $path?>" alt="<?php echo $path;?>"/>
				    </div>				       
                    
                     <div class="col-md-12">
                     </br>
                         <h3>Description</h3>
                                                     <p>
                                                               <?php echo $description; ?>
                                                     </p>
                                                     <?php if($amenities!=null){?>
                                                           <h3>Facilities</h3>
                                                            <p>
                                                          <?php echo $amenities; ?>
                                                             </p>
                                                     <?php }?> 
                                                     <hr>  
                                                 </div>

                                         
				<div class="col-md-12">
				<div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#address" aria-controls="address" role="tab" data-toggle="tab">Address</a></li>
                                             <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Service</a></li>
                                            <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
											 <li role="presentation"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a></li>
                                        </ul>
                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane fade in active" id="address">
                                                 <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
                        <p>
                            
                            <span class="violet"> Address: </span><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                            <?php echo $address;?><br>
                            <?php if($price!=null){?>
                            <span class="violet">Price: </span><?php echo $price;?><br>
                            <?php }?>
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
                                             <?php if($amenities!=null){?>
                                            <h3>Facilities</h3>
                                            <p>
                                            <?php echo $amenities; ?>
                                            </p>
                                         <?php }?>   
                                         
                                            </div>
                                            
                                            <div role="tabpanel" class="tab-pane fade" id="gallery">

                                            <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
                        <p>
                            
                            <span class="violet"> Address: </span><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                            <?php echo $address;?><br>
                            <?php if($price!=null){?>
                            <span class="violet">Price: </span><?php echo $price;?><br>
                            <?php }?>
                            <span class="violet">Mobile: </span><?php echo $mobile;?><br>
                            <span class="violet">Email ID: </span><?php echo $email;?><br>
                            <hr>
                            <strong>Posted at: </strong><?php echo $postdate;?>
                        </p>
                        </div>

                                            
                                   
                                              <div role="tabpanel" class="tab-pane fade " id="menu">                                        
                                            <h3>Description</h3>
                                             <p>
                                                <?php echo $description; ?>
                                             </p>
                                             <?php if($amenities!=null){?>
                                            <h3>Facilities</h3>
                                            <p>
                                            <?php echo $amenities; ?>
                                            </p>
                                         <?php }?>   
                                            
                                              
                                            </div>
                                        </div>
                                    
				
				</div>
                </div>
				</div>
				
				<div class="col-md-2">
				
				<div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation class="active"><a href="#" aria-controls="" role="tab" data-toggle="tab" style="background-color:#5a88ca;">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
				
				
				</div>
				
				
				
          
            </div>
        </div>
    </div>
	
    <div class="maincontent-area releted-post">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 style="text-align:center">Releted Products</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>Nokia Lumia 1320</h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Sony microsoft</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$200.00</ins> <del>$225.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
	

    <div id="enquirypopup" class="modal fade in" role="dialog">
        <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Enquire Now</h4>
                </div>
                <div class="modal-body">
                    <form name="info_form" class="form-inline" action="<?php echo base_url();?>index.php/Basic_Controller/userinformation" method="post">
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter Email">
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone">
                        </div>
                        
                    
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
	
	<!-- Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.slider.js"></script>
	
  </body>
</html>