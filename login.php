<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main>
        <div class="form-wrap">
            <form action="./handlers/accounts/h_login.php" method="post" class="form-register">
                <h4><b>Sign In Into Your Account</b></h4>
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
                        }elseif(isset($_GET["err_exist"])){
                            echo '<div class="err">Email already exists in our system</div>';
                        }elseif(isset($_GET["unexist"])){
                            echo '<div class="err">Email Does Not Exist, Create An Account</div>';
                        }elseif(isset($_GET["wrong_password"])){
                            echo '<div class="err">Wrong Password</div>';
                        }elseif(isset($_GET["err_sessn"])){
                            echo '<div class="err">Login Initialization Failed, Try Again</div>';
                        }else {
                            echo '<div class="err">An error occurred</div>'; 
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group forgot-signup-links">
                    <a href="">Forgot Password</a>
                    <a href="">Sign Up</a>
                </div>
                <button type="submit">LOGIN NOW</button>
            </form>
        </div>
    </main>
</body>
</html>
