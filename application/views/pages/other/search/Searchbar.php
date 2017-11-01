 <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-search"></i>
                        <h1>Search / <?php if(isset($query)){echo $query;}?></h1>
                        <div class="category">
                            <div class="search-form wow fadeInLeft animated">
                                <div class="form-group">
                                    <div class="col-md-8 col-xs-12">
                                    <form method="post" action="<?php echo base_url();?>index.php/other/search">
                                    <input type="text" name="q" placeholder="Search ..." class="contact-name" id="contact-name" autocomplete="off">
                                    </div>
                                    <div class="col-md-12 col-xs-12">
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