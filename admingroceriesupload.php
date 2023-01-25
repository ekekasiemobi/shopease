<?php


    include 'config.php';
    include 'adminnav.php';
   
    $sqr = "SELECT * FROM groceriesupload";
    

    $query = mysqli_query($conn, $sqr);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
   
   

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
            
        <div>
            <nav style="background-color:#FFFFFF">
               <div class="container">
                    <div class="row">
                            <div class="col s12 m6 l6">
                                
                                <a href="groceriesupload.php"> <button class="btn white" style="color:#5F6982; margin-left:50%; border-radius:10px; font-weight:600">Upload File</button>  </a>
                            
                            </div>
                            <div class="col s12 m6 l6">
                                <div style="margin-right:3%;color:black;margin-right:-30%;" class="right"><?php  echo $e = $_SESSION['email']; ?></div>
                            </div>
                        </div>
               </div>

            </nav>
           
            <div  class="container">
                
                <div style="margin-left: 30%;"  class="row">
                   
                    <?php
                        foreach ($data as $datas) {
                            ?>
                        <div style="margin-top: 10%;" class="col s12 l4 m4">
                            <div style="height:280px;" class="card hoverable ">
                                <div class="card-img">
                                    <img src="img/<?php echo $datas['imgname'] ?>" alt=""class="responsive-img">
                                </div>
                                <div class="card-content">
                                
                                    <p style="color: #FF5F15;"><?php echo $datas['productname'] ?></p>
                                    <p><?php echo $datas['productprice'] ?></p>
                                    <p><?php echo $datas['itemleft'] ?>item left</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    
                        }

                    ?>
                
                </div>
                
            </div>
               
           
        </div>
    </section>
</body>
</html>