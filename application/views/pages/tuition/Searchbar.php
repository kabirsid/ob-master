 <div class="page-title-container" style="margin-top: 107px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        
                        
                        <div class="category">
                            <div class="search-form wow fadeInLeft animated">
                                <div class="form-group">
                                    <div class="col-md-8 col-xs-12">
                                    <form method="post" action="<?php echo base_url();?>index.php/tuition/search">
                                    <i class="fa fa-building"></i><h1>Tuition  <?php if(isset($query)){echo $query;}?></h1>
                                    <input type="text" name="q" placeholder="Search for tuition" class="contact-name" id="contact-name" autocomplete="off">
                                    <button type="submit" class="btn">Search</button>
                                    </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
