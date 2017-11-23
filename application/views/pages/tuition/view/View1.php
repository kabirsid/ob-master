




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
 $query = "SELECT * FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid GROUP BY tution.tutid ORDER BY RAND() LIMIT 4";            
    $Realestate = $this->db->query($query);
 ?> 


 <?php
      $pathArray = array();
      foreach ($TuitionView as $ViewRow) {
        $id = $ViewRow['tutid'];
        $name = $ViewRow['name'];
        $title = $ViewRow['title'];
        /*$type = $ViewRow['type'];*/
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



<div class="col-md-12" >

<div class="container">
    <div class="row">
        <div class="col-md-12" >
         <!--  <div class="jumbotron"  style="margin-left:-20px;background-color: #ffffff; padding-left: 0px;padding-bottom: 0px;  0px; padding-top: 0px;"> -->
            <div class="polaroid" style="width:auto;">
            <div class="panel-body" >
              <div class="col-sm-4" style="padding-bottom: 00px;margin-bottom: 00px;">  

            <div class="thumbnail text-left" style="padding:0px; margin-bottom: 00px;">
                <?php for($i=0;$i<count($pathArray);$i++){?>
                <img style="opacity:0.9;height:30%;width:100%;" src="<?php echo base_url();?><?php echo $pathArray[$i]?>" alt="<?php echo $pathArray[0];?>"> 
            </div>
        </div>
            
         <h3 style="text-align: left;">Posted by : <span class="post_title"><?php echo $name;?></span>
           </h3>

            <p style="font-size: 16px;">
                <div class="col-sm-1" style="padding-left: 0px;padding-right: 0px;width: 10px;">
                     <i class="fa fa-home"></i>
                </div>
              
              <div class="col-sm-4" style="text-align: left;"> 
                  
               <span style="font-size: 14px; text-align: left;"><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                <?php echo $address;?><br>
                
            </p></span></div>
    </div>
    <div class="panel-footer" style="background-color: #808080; margin-left: 0px; margin-bottom: 5px; margin-top:10px;padding: 5px 5px;">
        
                <p class="textcent">
<i class="fa fa-map-marker" style="font-size:30px;" aria-hidden="true"></i>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" style="font-size:30px; text-align:left;" aria-hidden="true"></i>
                        <?php echo $mobile;?>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" style="font-size:30px;" aria-hidden="true"></i>
                        <?php echo $email;?>

  
    
  
                </p>
    </div>

          
</p>
</div>
       </div> 
       <?php }?>
   </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">.  
            <div class="col-md-2">
                <div class="polaroid" style="width:auto; ">
           <!-- <div class="jumbotron" style="background-color: white; border: red;"> -->
            <div class="panel-default">
                <div class="panel-heading">
            <h4 style="padding-top: 5px;">Tution:</h4></div>
                    <?php foreach ($Realestate->result_array() as $RealestateRow) {
                    ?>
                    
                            <div class="panel-body">
                                <h4>
                                    <a href="<?php echo base_url();?>index.php/Tuition/view/<?php echo $RealestateRow['tutid'];?>">
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
                                     <hr>
                                 </div>
                               </li>

                        </ul>
                        <div>
                            <?php } ?>
                          <a href="<?php echo base_url();?>index.php/Tuition"><h4>More...</h4></a>
                        </div>
                    </div>
                      </div>
                </div>
                </div>
         
           

       

        
            <div class="col-md-8" >

                <div class="col-md-12" style="text-align: left; " >
                <!--    <div class="jumbotron" style="margin-left:-20px;background-color: #ffffff;"> -->
                   <div class="polaroid" style="width:auto; ">
                    </br>
                        <h3>Description :</h3>
                            <p style="font-size: 16px;">
                                <?php echo $description; ?>
                            </p>
                               
                                </div>
                        <hr>  
                        
                </div>
                                    
                <div class="col-md-12">
                    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            
                            <!--<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Services</a></li>
                            <li role="presentation"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a></li>,-->
                            
                      <li role="presentation" class="active"><a href="#address" aria-controls="address" role="tab" data-toggle="tab">Address</a></li>
                      <li role="presentation" ><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="address">
                       <!-- <div class="jumbotron"> -->
                        <div class="polaroid" style="width:auto;">
                            <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
                                <p style="font-size: 16px;">
                                     <i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                                    <?php echo $address;?><br>
                                    
                                    <i class="fa fa-mobile"></i>&nbsp;&nbsp;<?php echo $mobile;?><br>
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $email;?><br>
                                    <hr>
                                    <strong>Posted at: </strong><?php echo $postdate;?>
                                </p>
                                </div>
                        </div>
                   
                                   
                                            
        



                    <div role="tabpanel" class="tab-pane fade" id="gallery">
                        <div class="col-sm-12" id="Div4">
                            
                        <form action="#" methode="post" ectype="multipart/form-data">
                            <div class="polaroid" style="width:auto;">
                        <div class="portfolio-box web-design">
                             <?php for($i=0;$i<count($pathArray);$i++){?>
                                <img style="height:148px; width: 230px;" src="<?php echo base_url();?><?php echo $pathArray[$i]?>">
                            </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
      
    

 <div class="col-md-2">
    <div class="polaroid" style="width:170px;">
     
            <div class="panel panel-default">
              <div class="panel-heading">Review</div>
              <div class="panel-body">
                <input name="name" type="text" placeholder="Name..."  style="width:85%;" ></div></br>
                <input name="email" type="email" placeholder="email.." style="width:70%;"></br></br>
                <input type="submit" name=""></br>

             </div>
            </div>
                        
  

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