<nav class="navbar navbar-default" role="navigation" style="backgaround-color:#1a2732;margin-top: 80px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="background-color:black;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add your add <b class="caret"></b></a>
          <ul class="dropdown-menu">
        
       <li> <a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate_view">My RealEstate</a></li>
        <li style="color:blue;">  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_tution_view">My Tution</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_hotel_view">My Hotels</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_travelling_view">My Travelling</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_automobile_view">My Automobile</a></li>
        <li>  <a href="<?php echo base_url();?>index.php/Basic_Controller/user_other_view">My Other</a></li>
 
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">

                                   <div id="imaginary_container"> 
           <div class="input-group stylish-input-group">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/Hotel">Hotel</a></li>

            <li><a href="<?php echo base_url();?>index.php/Tution">Tution</a></li>
            <li><a href="<?php echo base_url();?>index.php/Realestate">Realestate</a></li>
        
            <li><a href="<?php echo base_url();?>index.php/Automobile">Autromobile</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login name <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/Basic_Controller/user_logout">Logout</a></li>

            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
        
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>










<!--              pages/searchbar   -->
  <ul>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_profile">
        <button class="btn-category">My profile</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_realestate_view"><button class="btn-category">My RealEstate</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_tution_view"><button class="btn-category">My Tution</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_hotel_view"><button class="btn-category">My Hotels</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_travelling_view"><button class="btn-category">My Travelling</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_automobile_view"><button class="btn-category">My Automobile</button></a>
        <a href="<?php echo base_url();?>index.php/Basic_Controller/user_other_view"><button class="btn-category">My Other</button></a>
    </ul>
