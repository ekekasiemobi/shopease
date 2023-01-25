<?php
include 'config.php';
    $productname ="";
    $productprice ="";
    $itemleft ="";

if(isset($_POST['upload'])){
    $imgname =$_FILES['ImageFile']['name'];
    $productprice =$_POST['price'];
    $productname =$_POST['pname'];
    $itemleft =$_POST['item'];
    $img_dir = "img/";

    $target_file = $img_dir . basename($_FILES['ImageFile']['name']);

    $imgfiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr = array("jpg", "png", "jpeg", "gif");

    if(in_array($imgfiletype,$extensions_arr)){
        if(move_uploaded_file($_FILES['ImageFile']['tmp_name'],$img_dir.$imgname)){
            $sql = "insert into beautyupload(imgname, productprice,productname, itemleft) values('$imgname', '$productprice', '$productname', '$itemleft')";
            if (mysqli_query($conn,$sql)) {
                // echo "<script>alert('Image Uploaded Successfully')</script>";
                header("Location:adminbeautyupload.php");
            }else{
                echo "<script>alert('Something went wrong')</script>";
            }
            
            $sql = "insert into allupload(imgname, productprice,productname, itemleft) values('$imgname', '$productprice', '$productname', '$itemleft')";
            if (mysqli_query($conn,$sql)) {
                // echo "<script>alert('Image Uploaded Successfully')</script>";
                header("Location:adminbeautyupload.php");
            }else{
                echo "<script>alert('Something went wrong')</script>";	
            }
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
    <title>Image Upload Using PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="color:#FF5F15;">File Upload</h2>
<p class="lead">Using <b>PHP</b></p>

<!-- Upload  -->
<form id="file-upload-form" class="uploader" action="" method="POST" enctype="multipart/form-data">
    
    <div class="row">
        <div class="col s12 l6 m6">
            <input id="file-upload" type="file" name="ImageFile" required accept="image/*" />

            <label for="file-upload" id="file-drag" style="cursor:pointer">
            <img id="file-image" src="#" alt="Preview" class="hidden">
            <div id="start">
                <i class="fa fa-download" aria-hidden="true"></i>
                <div>Select a file or drag here</div>
                <div id="notimage" class="hidden">Please select an image</div>
                <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
            </div>
            <div id="response" class="hidden">
                <div id="messages"></div>
                <progress class="progress" id="file-progress" value="0">
                <span>0</span>%
                </progress>
            </div>
            </label>
        </div>
        <div class="col s12 l6 m6">
            <form style="margin-left:20%" action="" enctype="multipart/form-data" method="POST">
                <div class="row">

                    <div class="col s12 m5 l5">
                        <input style="color: black;" type="text"  name="pname" placeholder="imgname">
                    </div>
                    <div class="col s12 m5 l5">
                        <input style="color: black;" type="text"  name="price" placeholder="productprice">
                    </div>
                </div>
                <div class="row">

                    <div class="col s12 m5 l5 ">
                        <input style="color: black;" type="text"   name="item" placeholder="no item left">
                    </div>
                   
                </div>
                
                <button type="submit" name="upload" class="btn btn-upload ">Upload file</button>
                <a href="index.php" class="btn btn-back">Back</a>
                    
            </form>  
        </div>
    </div>
 
  
</form>


<script src="js/script.js"></script>
</body>
</html>