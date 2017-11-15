 <?php
           if($pagename=="myprofile.php"){
                $name = "My Profile";
                $icon = "user";
            }elseif($pagename=="realestate.php"){
                $name = "My Realestate / post";
                $icon = "building";
            }elseif($pagename=="realestate_view.php"){
                $name = "My Realestate / view";
                $icon = "building";
            }elseif($pagename=="tution.php"){
                $name = "My Tuition / post";
                $icon = "book";
            }elseif($pagename=="tution_view.php"){
                $name = "My Tuition / view";
                $icon = "book";
            }elseif($pagename=="hotel.php"){
                $name = "My Hotels / post";
                $icon = "cutlery";
            }elseif($pagename=="hotel_view.php"){
                $name = "My Hotels / view";
                $icon = "cutlery";
            }elseif($pagename=="travelling.php"){
                $name = "My Travelling / post";
                $icon = "plane";
            }elseif($pagename=="travelling_view.php"){
                $name = "My Travelling / view";
                $icon = "plane";
            }elseif($pagename=="automobile.php"){
                $name = "My Automobile / post";
                $icon = "car";
            }elseif($pagename=="automobile_view.php"){
                $name = "My Automobile / view";
                $icon = "car";
            }elseif($pagename=="other.php"){
                $name = "My Other / post";
                $icon = "globe";
            }elseif($pagename=="other_view.php"){
                $name = "My Other / view";
                $icon = "globe";
            }


 ?>
<div class="page-title-container">
            <div class="container">
                <div class="row">
    
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-<?php if(isset($icon)){echo $icon;}?>"></i>
                        <h1><?php if(isset($name)){echo $name;}?> </h1>
                        <div class="category">
                            <div class="search-form wow fadeInLeft animated">
                                <div class="form-group">
                                  
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
</div>
          
