<!DOCTYPE html>
<head>
<!--
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
-->

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
.panel-body {
    padding-bottom: 00px;
}
.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
#hearts { color: #ee8b2d;}
#hearts-existing { color: #ee8b2d;}

</style>
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

<div class="page-title-container" style="background-color: grey;">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4 style="text-align: left;margin-top: 10px;margin-left: -45px;"> <a href="<?php echo base_url();?>">
<img src="<?php echo base_url();?>assets/img/logo3.png"></a></h4>
            </div>
            <div class="col-md-10">
            
                <div class="product-bit-title text-center">
                        <h2><?php echo $title;?></h2>
                </div>
           
        </div>
             
        </div>
    </div>
</div>

<!--<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="product-big-title-area">
                <div class="product-bit-title text-center">
                        <h2><marquee><?php echo $title;?></marquee></h2>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container" style="margin-left: 70px;">
    <div class="row">
        <div class="col-md-12">
           <div class="jumbotron"  style="margin-left:-20px;background-color: #ffffff; padding-left: 0px;padding-bottom: 0px; padding-right: 0px; padding-top: 0px;">
            <div class="panel-body" >
              <div class="col-sm-4" style="padding-bottom: 00px;margin-bottom: 00px;">  

            <div class="thumbnail text-left" style="padding:0px; margin-bottom: 00px;">
                <img style="opacity:0.9;height:30%;width:100%;" src="<?php echo base_url();?><?php echo $path?>" alt="<?php echo $path;?>"> 
            </div>
        </div>
         <h3>Posted by : <span class="post_title"><?php echo $name;?></span></h3>
            <p style="font-size: 16px;">
               <!-- <div class="col-sm-1"> 
               <span class="violet" style="text-align: center;font-size: 18px;"> Address: </span></div>-->
              <div class="col-sm-4">  <span style="font-size: 16px; text-align: right;"><?php echo ucfirst(strtolower($area)).', ';?><?php echo ucfirst(strtolower($city));?><br>
                <?php echo $address;?><br>
                <?php if($price!=null){?>
               <!-- <span class="violet">Price: </span><?php echo $price;?><br>
                <?php }?>
                <span class="violet">Mobile: </span><?php echo $mobile;?><br>
                <span class="violet">Email ID: </span><?php echo $email;?><br>
                <hr>
                <strong>Posted at: </strong><?php echo $postdate;?>-->
            </p></span></div>
    </div>
    <div class="panel-footer" style="background-color: #808080; margin-left: 0px; margin-bottom: 0px; padding: 5px 5px;">
        
                <p class="textcent">
                   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-map-marker" style="font-size:30px;" aria-hidden="true"></i>
                      &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-mobile" style="font-size:30px;" aria-hidden="true"></i>
                        <?php echo $mobile;?>
                    &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope" style="font-size:30px;" aria-hidden="true"></i>
                        <?php echo $email;?>

  
    
  
                </p>
    </div>

          
</p>
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
            <div class="jumbotron" style="background-color: white; border: red;">
            <h4 style="margin-top: -25px;">Hotels:</h4>
                    <?php foreach ($Realestate->result_array() as $RealestateRow) {
                    ?>
                        <ul class="list-group">
                            <li style="padding-bottom:0px;">
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
        
            <div class="col-md-8">
                <div class="col-md-12" style="text-align: left;">
                    <div class="jumbotron" style="margin-left:-20px;background-color: #ffffff;">
                    </br>
                        <h3 style="margin-top: -40px; font-family: ">Description :</h3>
                            <p style="font-size: 16px;">
                                <?php echo $description; ?>
                            </p>
                                <?php if($amenities!=null){?>
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
                        <div class="jumbotron">
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
                    <div class="jumbotron" style="font-size: 16px;">
                        <?php 
                                echo $services;
                                       // $b=explode(",",$services);
                                       // echo $b;
                                    ?>
                                    </div>
                                    </div>
                    </div>
                                   
                                            
            <!--        <div role="tabpanel" class="tab-pane fade" id="gallery">
                        <div class="col-sm-12" id="slider-thumbs">
                         <div class="portfolio-box web-design">
                            <ul class="hide-bullets">
                                <li>
                                    
                                        <a class="thumbnail" id="carousel-selector-2"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                   
                                </li>
                               <li>
                                    <a class="thumbnail" id="carousel-selector-1"><img  style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-2"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-3"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-4"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-5"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-6"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-7"><img style="height:148px;" src="<?php echo base_url();?><?php echo $path?>"></a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>-->



                    <div role="tabpanel" class="tab-pane fade" id="gallery">
                        <div class="col-sm-12" id="Div4">
                        <form action="#" methode="post" ectype="multipart/form-data">
                        <div class="portfolio-box web-design">
                                <img style="height:148px; width: 230px;" src="<?php echo base_url();?><?php echo $path?>">
                            </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="menu"> 
                        <div class="col-sm-12">
                        <div class="jumbotron" style="font-size: 16px;">
                            <h4><strong> <?php echo $offersmenu; ?></strong></span></h4>
                            <div class="container">
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
</div>
                            </div>
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
                                           <div id="stars" class="starrr"></div>
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



    
<!--
    <div class="modal fade in" role="dialog">
        <div class="modal-dialog">
            
        --    Modal content -
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Enquire Now</h4>
                </div>
                <div class="modal-body">
                    <form name="info_form" class="form-inline" action="<?php echo base_url();?>index.php/Basic_Controller/userinformation" method="post" id="enquirypopup">
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
  
-->

   <script type="text/javascript">
       // Starrr plugin (https://github.com/dobtco/starrr)
// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#hearts').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#hearts-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
   </script>
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