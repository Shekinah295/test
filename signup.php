<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main>
        <div class="form-wrap">
            <form action="./handlers/accounts/h_signup.php" method="post" class="form-register">
                <h4><b>Register Your Account With Us!</b></h4>
                <div class="err-space">
                    <?php 
                    if(!empty($_GET)){
                        if(isset($_GET["err_fullname"])){
                            echo '<div class="err">Fill In The Name Field</div>';
                        }elseif(isset($_GET["err_username"])){
                            echo '<div class="err">Fill In The Username Field</div>'; 
                        }elseif(isset($_GET["err_nickname"])){
                            echo '<div class="err">Fill In The Nickname Field</div>'; 
                        }elseif(isset($_GET["err_password"])){
                            echo '<div class="err">Fill In The Password Field</div>'; 
                        }elseif(isset($_GET["err_email"])){
                            echo '<div class="err">Fill In The Email Field</div>'; 
                        }elseif(isset($_GET["err_gender"])){
                            echo '<div class="err">Select Your Gender</div>'; 
                        }elseif(isset($_GET["err_wardname"])){  
                            echo '<div class="err">Fill In The Ward Name Field</div>'; 
                        }elseif(isset($_GET["successful"])){
                            echo '<div class="err">Successful</div>';
                        }elseif(isset($_GET["failed"])){
                            echo '<div class="err">Failed</div>';
                        }else {
                            echo '<div class="err">An error occurred</div>'; 
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <input type="text" name="fullname" id="fullname" placeholder="fullname">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="text" name="nickname" id="nickname" placeholder="Nickname">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="form-group gender-wrap">
                    <span><input type="radio" name="gender" id="gender" value="1"> Male</span>
                    <span><input type="radio" name="gender" id="gender" value="2"> Female</span>
                </div>
                <div class="form-group">
                    <input type="text" name="wardname" id="wardname" placeholder="Wardname">
                </div>
                <button type="submit">REGISTER NOW</button>
            </form>
        </div>
    </main>
</body>
</html>


<?php


?>