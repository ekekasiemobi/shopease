<?php 
include 'config.php';
$signerror = '';

if (isset($_POST['submit'])) {
    // echo  $id =$_GET['id'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $signerror = 'incorrect details';

    $sql = "SELECT * FROM student_details WHERE email = '$email' AND pass ='$pass'";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $data  = mysqli_fetch_array($result);
            if (mysqli_query($conn, $sql)) {
                 session_start();
                $_SESSION['email'] = $email;
                header("Location:index2.php");
            }else{
                echo 'erro';
            }  
        
        }else{
            $signerror = 'incorrect details';
        }
    }
}  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <title>Document</title>
</head>
<body>
    <style>
        
        div.main{
        background-image: url(img/office-g2bb012945_1280.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 600px;
       
        /* background-position: 100%; */
        }
    </style>

    <div class="main">
        <div style="width: 100%;height:80px;background-color:#003549">
           

        </div>
        <div class="container">
                <div class="row">
                    <div class="col s12 l3 m3 ">
                        <div style="height:200px; background-color:white; margin-top:-25%; " class="z-depth-2"><br>
                            <div class="container"><a  style="color:black" href="reg.php">register</a></div><br>
                            <button style="background-color: #DE0B36; width:90%;height:45px; color:white; font-size:20px;border:none;margin-left:5%;border-radius:5px;" class="hoverable">Login</button>
                            <div class="container">
                                
                                <p>Forgotten password</p>
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12 m8 l8">
                        <div style="height:520px; background-color:white;margin-top:-5%" class="z-depth-1">
                            <div class="center"> <p style="font-size: 28px;color: #015f61;padding-top:10%;">Login to account</p></div>
                            <div class="row">
                                <div class="col s12 m1 l1">

                                </div>
                                <div class="col s12 l10 m10 ">
                                   
                                   <p style="width: 30%;height:35px;background-color:white;padding:7px;padding-left:17px;"class=" red-text"> <?php echo $signerror; ?> </p>
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col s12 l12 m12">
                                                <label  style="font-weight: bold;color: black; background-color: white;" for="name">Email Address</label><br>
                                                <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" type="email" placeholder="joedavid@gmail.com" name="email" required ><br><br>
                                            </div>

                                            <div class="col s12 l12 m12">
                                                <label  style="font-weight: bold;color: black;" for="name">Enter password</label><br>
                                                <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="repassword" type="password" name="pass" placeholder="Enter password" required><br><br>  
                                            
                                            </div>    
                                          
                                                
                                        </div>    
                                        <div class="center">
                                            <button name="submit" type="submit" style="background-color: #DE0B36; width:100%;height:45px; color:white; font-size:20px;border:none;margin-top:10px;border-radius:5px;" class="hoverable">Login</button>
                                        </div>
                                        
                                        <div class="center">
                                            <p>Do not have an account?<a href="reg.php">Register</a></p>
                                        </div>
                                        
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>    
    </div>    
</body>
</html>