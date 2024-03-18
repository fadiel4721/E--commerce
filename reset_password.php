<?php
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <div class="wrapper">
     <div class="container">
        <div class="title-section">
            <h2 class="title">Reset Password</h2>
            <p class="para">Enter your link mail send link your mail please check and verify if
                your email before accunt create you have a link inbox. Click link & your New Password
            </p>
        </div>
        
        <form action="" class="form">
           <div class="input-group">
            <label for="" class="label-title">Enter your email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <span class="icon">&#9993;</span>
           </div>
           <div class="input-group">
            <button class="submit-btn" type="submit">Send reset Email</button>
           </div>
        </form>

     </div>
    </div>
</body>
</html>