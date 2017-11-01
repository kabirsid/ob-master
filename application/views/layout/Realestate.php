 <?php 
$query = "SELECT realestate.realid, realestate.`name`, realestate.title, realestate.type, realestate.address, realestate.builtup, realestate.price, realestate.description, realestate.mobile, realestate.email, realestate.amenities, realestate.city, realestate.area, realestate.date, realestate.offerend, realestate.category, realestate.userid, real_img.path, real_img.id FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid GROUP BY realid ORDER BY RAND() LIMIT 4";          
    $Realestate = $this->db->query($query);
 ?>
 <div class="services-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 services-title wow fadeIn">
                        <h2>Realestate</h2>
                    </div>
                </div>
            </br>
                <div class="row">
                  

                    <?php foreach ($Realestate->result_array() as $RealestateRow) {
                        $realid = $RealestateRow['realid'];
                    ?>
                    <div class="col-xs-12 col-sm-3">
                        
                          <div class="single-product">
                                <div class="product-f-image">
                                    
                        <img id="postimg" src="<?php echo $RealestateRow['path'];?>" alt="<?php echo $RealestateRow['title'];?>">
                                    <div class="product-hover">
                                       
                                        <a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $realid;?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="<?php echo base_url();?>index.php/Realestate/view/<?php echo $realid;?>">
                                    <?php
                                        $title = $RealestateRow['title'];
                                        if(strlen($title)>30){
                                            $title = substr($title,0,30)." ...";
                                            echo $title;
                                        }else{
                                            echo $title;
                                        }
                                        
                                        ?></a></h2>
                                <p>Address : <?php echo $RealestateRow['area'].' ,'.$RealestateRow['city'];?></p>
                              
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
        
        </div>
