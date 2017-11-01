 <?php
            if($pagename == "logincontainer.php"){
                $name = "Login to offersbull";
                $icon = "lock";
            }elseif($pagename == "registercontainer.php"){
                $name = "Register now";
                $icon = "user";
            }elseif($pagename == "changepassword.php"){
                $name = "Change Password";
                $icon = "user";
            }elseif($pagename == "forgot_pass.php"){
                $name = "Reset your password";
                $icon = "key";
            }elseif($pagename == "otp.php"){
                $name = "Verify your account with OTP";
                $icon = "user";
            }
 ?>
 <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-<?php if(isset($icon)){echo $icon;}?>"></i>
                        <h1><?php if(isset($name)){echo $name;}?> / </h1>
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

