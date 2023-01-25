<?php 
    include 'config.php';
    
    session_start();

        if (!isset($_SESSION['email'])) {
            header('Location:login1.php');
        }else{
        
        }


        if (isset($_SESSION['email'])) {
         
        $email =$_SESSION['email'];
        // echo $email;

        $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
        if ($result = mysqli_query($conn, $sql)) {
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
                
        }
        
    }
    $total = count ($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a278e9af44.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav style="position:fixed;z-index: 5;" class="white">
        <div style="margin-left: 12%;">
            <a href="#mobile-menu" class="sidenav-trigger">
                <i class="material-icons black-text">menu</i>
            </a>

                
            <ul>

                <li><a href="index2.php" style="font-size:12px;color: #FF5F15;">All</a></li>
                <li> <a href="Trending.php" style="font-size:12px;color:black;">Trending</a></li>
                <li> <a href="Electronics.php" style="font-size:12px;color:black;">Electronics</a></li>
               
                <li> <a href="c&a.php" style="font-size:12px;color:black;">Clothing & Accessories</a></li>
                <li> <a href="shoes_bags.php" style="font-size:12px;color:black;">Shoes & bags</a></li>
             
                <li> <a href="beauty.php" style="font-size:12px;color:black;">Beauty</a></li>
                <li> <a href="groceries.php" style="font-size:12px;color:black;">Groceries</a></li>
                <li> <a href="kitchen_a.php" style="font-size:12px;color:black;">kitchen & Appliancies</a></li>
                <li><a href="individuallist.php"> <img src="https://img.icons8.com/windows/32/000000/shopping-cart.png"/><span style="width:10px; height:10px; border-radius:5px;margin-left:-5px;" class="orange"><?php echo $total ?></span></a>  </li>
                    <div ><li><a style="text-transform: none;"  href="logout1.php" class="btn orange">logout</a></li></div>
   
            </ul>
            
        </div>
    </nav>
    <ul class="sidenav" id="mobile-menu">
                <li><a href="">Home</a></li>
                
            </ul>

           
</body>
</html>