
<?php 
// echo $_SERVER['PHP_SELF'];
    include 'config.php';

 
    $fname = "";
    $lname = "";
    $email = "";
    $phone = "";
    $pass = "";
    $cpass = "";
    $signerro = "";
    if(isset($_POST['submit'])){
        $fname =$_POST['firstname'];
        $lname =$_POST['lastname'];
        $email =$_POST['email'];
        $pass =$_POST['pass'];
        $phone =$_POST['phonenumber'];
        $cpass =$_POST['cpass'];
        // $pass =md5($pass); 
       

        $sqr = "SELECT * FROM student_details WHERE email='$email'";
        $result = mysqli_query($conn, $sqr);
        if (mysqli_num_rows($result) > 0) {  
            $signerro = 'email already exist';
        }else{
            $sql = "INSERT INTO student_details (fname, lname, email, phone, pass) VALUES ('$fname', '$lname', '$email','$phone', '$pass')";
            if (mysqli_query($conn, $sql)) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                header("Location:index2.php");
            }else{
                echo 'erro';
            }  
        }  
         
    }; 
    
  
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
                        <div style="height:200px; background-color:white; margin-top:-25%; " class="z-depth-2">
                            <button style="background-color: #DE0B36; width:90%;height:45px; color:white; font-size:20px;border:none;margin-top:10px;margin-left:5%;border-radius:5px;" class="hoverable">Register</button> 
                            <div class="container"><br>
                                
                                
                               <a style="color:black" href="login.php">Login</a>
                                <p>Forgotten password</p>
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12 m8 l8">
                        <div style="height:522px; background-color:white;margin-top:-5%" class="z-depth-1">
                            <div class="center"> <p style="font-size: 28px;color: #015f61;padding-top:3%;">Create account</p></div>
                            <div class="row">
                                <div class="col s12 m1 l1">

                                </div>
                                <div class="col s12 l10 m10 ">
                                    <div style="width: 30%;height:35px;background-color:white;padding:7px;padding-left:17px;"class=" red-text"> <?php echo  $signerro ; ?> </div>
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col s12 l6 m6">
                                                    <label style="font-weight: bold;color: black;" for="name">First Name</label><br>
                                                    <input style=" height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" name="firstname" type="text" placeholder="Joe David" required>
                                                </div>

                                                <div class="col s12 l6 m6">
                                                    <label style="font-weight: bold;color: black;" for="name">Last Name</label><br>
                                                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" name="lastname" type="text" placeholder="Joe David" required>
                                                </div>
                                            </div>
                                           
                                            <div class="row">
                                                <div class="col s12 l6 m6">
                                                    <label  style="font-weight: bold;color: black; background-color: white;" for="name">Email Address</label><br>
                                                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="name" type="email" placeholder="joedavid@gmail.com" name="email" required >
                                                </div>

                                                <div class="col s12 l6 m6">
                                                    <label  style="font-weight: bold;color: black;" for="name">Phone Number</label><br>
                                                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="password" name="phonenumber" type="text" placeholder="phone Number" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                    
                                                <div class="col s12 l6 m6">
                                                    <label  style="font-weight: bold;color: black;" for="name">Enter password</label><br>
                                                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="repassword" type="password" name="pass" placeholder="Enter password" required><br><br>  
                                               
                                                </div>   
                                                <div class="col s12 l6 m6">
                                                    <label  style="font-weight: bold;color: black;" for="name">Re-enter password</label><br>
                                                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="repassword" type="password" name="cpass" placeholder="Enter password" required><br><br>  
                                               
                                                </div>   
                                            </div>
                                            <div class="center">
                                            <button name="submit" type="submit" style="background-color: #DE0B36; width:100%;height:45px; color:white; font-size:20px;border:none;margin-top:10px;border-radius:5px;" class="hoverable">Register</button>
                                            </div>
                                        
                                            <div class="center">
                                                <p>Already have an account?<a href="Llogin.php">Login</a></p>
                                            </div>
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