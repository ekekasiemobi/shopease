<?php 
    include ('config.php');
    include ('nav.php');
    

    $sql = "SELECT * FROM product_table";
    

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

    

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>  
     

   <div  class="container">
        <div>
            <div  class="row">
            
                <?php
                    foreach ($data as $datas) {
                        ?>
                    <div style="margin-top: 10%;" class="col s12 l4 m4">
                        <div style="height:280px;" class="card hoverable ">
                            <div class="card-content">
                                <img src="img/<?php echo $datas['img'] ?>" alt=""class="responsive-img">
                                <p > <?php echo $datas['name'] ?></p>
                                <p style="font-weight:bold ;"> <?php echo $datas['price'] ?></p>

                            
                            </div>
                            <div style="font-size: 10px; margin-top:-20px;" class="card-action">

                                <a style="color: red;" data-target="modal1" class=" modal-trigger" href="details1.php?id=<?php echo $datas['id']?>"><span style="font-size:10px;cursor:pointer"> View</span></a>

                                <a  href="cartlist.php?id=<?php echo $datas['id']?>" class="sidenav-trigger" style="color: red;">Add to Cart</a>

                                <a style="color: red;"  href="details.php?id=<?php echo $datas['id']?>"> details</a>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                
                    
                    <?php
                
                    }

                ?>
            
            </div>
        </div>
   </div>
</body>
</html>