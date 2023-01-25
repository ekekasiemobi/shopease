<?php 
    include ('config.php');
    include ('nav.php');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            
            <div class="row">
                <div class="col s12 l6 m6">
                    <label style="font-weight: bold;color: black;" for="name">Recieve mail</label><br>
                    <input style=" height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" name="firstname" type="text" placeholder="Joe David" required>
                </div>

                <div class="col s12 l6 m6">
                    <label style="font-weight: bold;color: black;" for="name">Title</label><br>
                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" name="lastname" type="text" placeholder="Joe David" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12 l6 m6">
                    <label  style="font-weight: bold;color: black; background-color: white;" for="name">Message</label><br>
                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" type="email" placeholder="joedavid@gmail.com" name="email" required >
                </div>

                <!-- <div class="col s12 l6 m6">
                    <label  style="font-weight: bold;color: black;" for="name">Phone Number</label><br>
                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="password" name="phonenumber" type="text" placeholder="phone Number" required>
                </div> -->
            </div>
            <div class="center">
                <button name="submit" type="submit" style="background-color: #DE0B36; width:50%;height:45px; color:white; font-size:20px;border:none;margin-top:10px;border-radius:5px;" class="hoverable">Register</button>
            </div>
        </form>
    </div>
</body>
</html>