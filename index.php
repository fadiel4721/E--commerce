<?php
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website gabut</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <!-- Header -->
 <header class="header">
 <nav class="nav">
        <a href="#" class="nav_logo">Websiteperkopian</a>

        <ul class="nav_items">
           <li class="nav_item">
            
           </li> 
        </ul>
    
        <button class="button" id="form-open">Login</button>
    </nav>  
 </header>
 <!-- Home -->
 <section class="home">
    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- login form -->
        <div class=" form login_form">
            <form action="proses_login.php" method="post">
                <h2>Login</h2>
                <div class="input_box">
                    <input type="email" name="email" placeholder="Masukkan email" required>
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="password" name="password" placeholder="Masukkan password" required>
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="option_field">
                    <span class="checkbox">
                        <input type="checkbox" id="check">
                        <label for="check">Remember me</label>
                    </span>
                    <a href="reset_password.php" class="forgot_pw">Forgot Password?</a>
                </div>
                <button class="button" name="kirim">Login Now</button>

                <div class="login_signup">
                    Don't have an account? <a href="#" id="signup">Sign up</a>
                </div>
            </form>
        </div>
        <!-- Sign up From -->
        <div class="form signup_form">
            <form action="proses_daftar.php" method="post">
                <h2>Sign Up</h2>
                <div class="input_box">
                    <input type="email" name="email" placeholder="Masukkan email" required>
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="password" name="password" placeholder="Buat password" required>
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input type="password" name="passwordconfirm" placeholder="Konfirmasi password" required>
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
              
                <button class="button" name="submit" value="submit">Signup Now</button>

                <div class="login_signup">
                    Already have an account? <a href="#" id="login">Login</a>
                </div>
            </form>
        </div> 
    </div>
 </section>
 <script src="js/script.js"></script>
</body>
</html>