<!--<div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-web-design">Hotels</a> / 
	            		<a href="#" class="filter-print-design">Restaurants</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
	            	<?php foreach($Hotel->result_array() as $row){
	            	?>	
		                <?php if($row['type']=='Hotel'){?>
		                <div class="portfolio-box web-design">
		                <?php }else{?>
		                <div class="portfolio-box print-design">
		                <?php }?>
		                	<div class="portfolio-box-container">
			                	<img id="postimg" src="<?php echo base_url().$row['path']; ?>" alt="<?php echo $row['title'];?>" data-at2x="<?php $row['path'];?>">
			                	<a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $row['hotelid'];?>">
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
			                	</div>
			                	</a>
			                </div>
		                </div>
	                <?php 
	                	} 
	                ?>
	                </div>
	            </div>
	            <hr>
	            <?php echo $this->pagination->create_links();?>
	        </div>
        </div>-->


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

<div class="container">
<div class="row">
<div class="col-md-3" style="margin-left: -10%;margin-top: 10px;">
<input type="checkbox"><label><strong>Option1</strong></label>
<br>
<input type="checkbox"><label><strong>Option2</strong></label>
<br>
<input type="checkbox"><label><strong>Option3</strong></label>
<br>
<input type="checkbox"><label><strong>Option4</strong></label>
<br>

</div>
<div class="col-md-9 col-md-offset-3">
<?php 
$query = "SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4";            
    $Realestate = $this->db->query($query);
 ?>

 <?php foreach ($Realestate->result_array() as $RealestateRow) {
                    ?>
<div class="col-md-3">
 <h3> <a href="<?php echo base_url();?>index.php/Hotel/view/<?php echo $RealestateRow['hotelid'];?>">
 <?php
        $title = $RealestateRow['title'];
             if(strlen($title)>30){
                $title = substr($title,0,30)." ...";
                    echo $title;
                }else{
                        echo $title;
                       }
        ?>
</h3>
</div>
<?php } ?>
</div>
</div>
</div>




    
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </body>
  </html>