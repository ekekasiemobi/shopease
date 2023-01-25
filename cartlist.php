<?php 
    include 'nav1.php';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    include 'config.php';

   

    if (isset($_GET['submite'])) {
        $quantity =$_GET['quantity'];
        $name =$_GET['productname'];
        $price =$_GET['productprice'];
        $img =$_GET['imgname'];
        $id =$_GET['productid'];
        $itemleft =$_GET['itemleft'];
        $total = $quantity *  $price;
        $newitemleft = $itemleft - $quantity;
    };

    if (isset($_GET['id'])) {
        // echo  $id =$_GET['id'];
        $id =$_GET['id'];
           
    }

    $sqr = "INSERT INTO cartlist (productid, imgname, productname, productprice, userid, quantity, total, itemleft, newitemleft) VALUES ('$id', '$img', '$name', '$price', '$email', '$quantity', '$total', '$itemleft', '$newitemleft')";
    if (mysqli_query($conn, $sqr )) {
        header("Location:index2.php");
    }else{
        echo 'Error';
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
    
</body>
</html>
