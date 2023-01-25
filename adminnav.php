<?php


include 'config.php';
session_start();
// echo $q = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
    header('Location:login.php');
}else{
    
}


if (isset($_SESSION['email'])) {
    // echo  $id =$_GET['id'];
    $email =$_SESSION['email'];

    $sql = "SELECT * FROM admin WHERE email= '$email'";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $data  = mysqli_fetch_array($result);
        //   echo $fname = $data['fname']; echo "<br/>";
        //   echo $lname =  $data['lname']; echo "<br/>";
        //   echo $email = $data['email'];
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
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a278e9af44.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #F0F3FB;
        }
    </style>
    <section>
        <div style="height:650px;background-color:#FFFFFF;position:fixed;width:30%;" class="col s12 l3 m3 z-depth-2"><br><br>
                            
            <a href="adminallupload.php" style="background-color:#F0F3FB; padding:10px; padding-right:50%;border-radius:5px;">
            <span class="fa-solid fa-house black-text"></span>
            <span  style="color:black;margin-left:5%;">All</span></a><br><br><br>


            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a href="admintrendingupload.php" style="font-size:14px;color:black;margin-left:5%;" >Trending</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="adminelectronicsupload.php">Electronics</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="adminc&aupload.php">Clothing & Accessories</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="adminshoes_bagsupload.php">shoes and bags</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="adminbeautyupload.php"> Beauty</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="admingroceriesupload.php"> Groceries</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="admink_aupload.php">kitchen & Appliancies</a></div><br><br>

            <div style="margin-top: -5%;"><span style="margin-left: 3%;" class="fa-solid fa-house black-text"></span> <a style="font-size:14px;color:black;margin-left:5%;" href="logout.php">Logout</a></div><br><br>


        </div>
    </section>
</body>
</html>