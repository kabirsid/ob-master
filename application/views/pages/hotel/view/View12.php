
<!--
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
-->

    



<script type="text/javascript">
        $(window).load(function(){
        setTimeout(function() {
                $('#enquirypopup').modal('show');
        }, 3000);
            });

     
</script>
</head>
<body style="background-color: white;">





     <?php 
$query = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";            
    $Realestate = $this->db->query($query);
 ?>

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
        $services = $ViewRow['services'];
        $postdate = strtotime($ViewRow['date']);
        $postdate = date(' F d, Y | h:i a',$postdate);

        $offersmenu = $ViewRow['offersmenu'];
        //$offersdescription = $ViewRow['offersdescription'];
        $offersdiscount = $ViewRow['offersdiscount'];
        $offerend = $ViewRow['offerend'];
        $category = $ViewRow['category'];
        $userid = $ViewRow['userid'];
        $visits = $ViewRow['visits'];
        array_push($pathArray, $ViewRow['path']);
    }
 ?>    



<div class="navbar opaque-navbar page-title-container" style="height: 30px;">
  <div class="container">
    <div class="navbar-header">
     
    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"; alt=""></a>
    </div>
    <div class="col-md-10">
            
                <div class="product-bit-title text-center">
                        <h2><?php echo $title;?></h2>
                </div>
           
        </div>
    
  </div>
</div>






<div class="container">
    <div class="row">
        <div class="col-md-12">
        
            <div class="polaroid" style="width:auto;">
            <div class="panel-body" >
              <div class="col-sm-4" style="padding-bottom: 00px;margin-bottom: 00px;">  

            <div class="thumbnail text-left" style="padding:0px; margin-bottom: 00px;">
                <img style="opacity:0.9;height:30%;width:100%;" src="<?php echo base_url();?><?php echo $path?>" alt="<?php echo $path;?>"> 
            </div>
        </div>
         <h3 style="text-align: left;">Posted by : <span class="post_title"><?php echo $name;?></span></h3>
            <p style="font-size: 16px;">
              
              <div class="col-sm-4" style="text-align: left;"> 
               <span style="font-size: 16px; text-align: left;"><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                <?php echo $address;?><br>
                <?php if($price!=null){?>
               
            </p>
        </span>
        </div>
    </div>

    <div class="panel-footer" style="background-color: #808080; margin-left: 0px; margin-bottom: 5px; margin-top:10px;padding: 5px 5px;">
        
                <p class="textcent">
                   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-map-marker" style="font-size:30px;" aria-hidden="true"></i>
                      &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-mobile" style="font-size:30px;" aria-hidden="true"></i>
                        <?php echo $mobile;?>
                    &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope" style="font-size:30px;" aria-hidden="true"></i>
                        <?php echo $email;?>

  
    
  
                </p>
    </div>

          

</div>
       </div> 
   </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="polaroid" style="width:auto;">
        
            <div class="panel-default">
                <div class="panel-heading">
            <h4 style="padding-top: 5px;">Hotels:</h4></div>
                    <?php foreach ($Realestate->result_array() as $RealestateRow) {
                    ?>
                    
                            <div class="panel-body">
                                <h4>
                                    <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>">
                                        <?php
                                        $title = $RealestateRow['title'];
                                        if(strlen($title)>30){
                                            $title = substr($title,0,30)." ...";
                                            echo $title;
                                        }else{
                                            echo $title;
                                        }
                                        
                                        ?>
                                   
                                    </a>
                                     </h4>
                                 </div>
                               </li>

                        </ul>
                        <div>
                            <?php } ?>
                          <a href="<?php echo base_url();?>index.php/Hotel"><h4>More...</h4></a>
                        </div>
                    </div>
                
                </div>
                </div>
            </div>
           </div> 
        </div>        
        
            <div class="col-md-8" style="padding-right: 20px;">

                <div class="col-md-12" style="text-align: left;">
              
                   <div class="polaroid" style="width:auto; ">
                    </br>
                        <h3>Description :</h3>
                            <p style="font-size: 16px;">
                                <?php echo $description; ?>
                            </p>
                            <?php
                            if($amenities!=null){?>
                        <h3>Facilities :</h3>
                            <p style="font-size: 16px;">
                                <?php echo $amenities; ?>
                            </p>
                                <?php }?> 
                                </div>
                        <hr>  
                        
                </div>
                                    
                <div class="col-md-12">
                    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Services</a></li>
                            <li role="presentation"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a></li>
                            <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                      <li role="presentation"><a href="#address" aria-controls="address" role="tab" data-toggle="tab">Address</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade " id="address">
                       <!-- <div class="jumbotron"> -->
                        <div class="polaroid" style="width:auto;">
                            <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
                                <p style="font-size: 16px;">
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
                        </div>
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <div class="row">
                   
                    <div class="polaroid" style="width:auto;">
                        <?php 
                                echo $services;
                                       // $b=explode(",",$services);
                                       // echo $b;
                                    ?>
                                    </div>
                                    </div>
                    </div>
                                   
                                            
        



                    <div role="tabpanel" class="tab-pane fade" id="gallery">
                        <div class="col-sm-12" id="Div4">
                            
                        <form action="#" methode="post" ectype="multipart/form-data">
                            <div class="polaroid" style="width:auto;">
                        <div class="portfolio-box web-design">
                                <img style="height:148px; width: 230px;" src="<?php echo base_url();?><?php echo $path?>">
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="menu"> 
                        <div class="col-md-12">
                  
                        <div class="polaroid" style="width:auto;">
                            <h4><strong><?php echo $offersmenu; ?></strong></span></h4>ddd
 
 <div class="container" style="text-align: left;">
    <div class="row">
        <h2>Working Star Ratings for Bootstrap 3 <small>Hover and click on a star</small></h2>
    </div>
    <div class="row lead">
        <div id="hearts" class="starrr"></div>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
        You gave a rating of <span id="count">0</span> star(s)
    </div>
    
    <div class="row lead">
        <p>Also you can give a default rating by adding attribute data-rating</p>
        <div id="hearts-existing" class="starrr" data-rating='4'></div>
        You gave a rating of <span id="count-existing">4</span> star(s)
    </div>
dd</div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
      
    

 <div class="col-md-2">
    <div class="polaroid" style="width:200px;">
     
            <div class="panel panel-default">
              <div class="panel-heading">Review</div>
              <div class="panel-body">
                <input name="name" type="text"></div></br>
                <input name="email" type="email" style="width:80%"></br>
                <input type="submit" name="">

             </div>
            </div>
                        
  

    </div>
    </div>
    </div>
        
    </div>
</div> 
</div>

</div>

    
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