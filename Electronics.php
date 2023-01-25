<?php 
    include ('config.php');
   
    include ('nav1.php');
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
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>  
    <div  class="container center">
        <h4 style="font-weight: bold">Explore Electronics categories</h4>
    </div>
    
   <div style="margin-left: 10%; margin-right:10%;">
        <div>
            <div  class="row">
            
                <?php
                    $sqv = "SELECT * FROM electronicsupload";
    

                    $query = mysqli_query($conn, $sqv);
                    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    foreach ($data as $datas) {
                        ?>
                    <div style="margin-top: 10%;" class="col s12 l3 m3">
                        <div style="height:260px;" class="card hoverable ">

                            <div class="card-img">
                              <a href="detailselectronics.php?id=<?php echo $datas['id']?>"><img src="img/<?php echo $datas['imgname'] ?>" alt=""class="responsive-img"></a>
                            </div>
                            <div style="margin-left:200px;">
                                <img width="30px" style="margin-top:-25px; position: absolute;" src="img/Rectangle 12.png" class="responsive-img" alt="">
                            
                               <a  href="cartlist.php?id=<?php echo $datas['id']?>" > <img style="margin-left: 5px;  margin-top: -17px;position: absolute;width: 20px;" src="https://img.icons8.com/windows/32/FFFFFF/shopping-cart.png"/></a>
                            </div>
                            <div style="margin-top: -5%;" class="card-img">
                                
                                <p style="font-size:12px;padding:10px;color: #FF5F15;"> <?php echo $datas['productname'] ?></p>
                                <p style="font-weight:bold ;font-size:12px;padding:10px;margin-top:-10%;"> &#8358;<?php echo $datas['productprice'] ?></p>
                                <p style="font-size: 10px;margin-top:-10%;padding:10px;"><?php echo $datas['itemleft'] ?> items left</p>
                            
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