<?php 
    include ('config.php');
    include ('nav.php');

    $sql = "SELECT * FROM product_table";
    

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body> 


<div  class="container">
        <div>
            <div  class="row">
            
                <?php
                    foreach ($data as $datas) {
                        echo $de = $datas['id'];
                        $sql = "SELECT * FROM product_table where id = '$de' ";
    
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                $daa  = mysqli_fetch_array($result);
                              echo $name =  $daa['name']; echo "<br/>";
                              echo $price = $daa['price'];
                              echo $id = $daa['id'];
                            }?>
                            

                            
                            <div id="modal1" class="modal">    
        <div class="modal-content">
            <?php echo $datas['id']?>
            <?php
             echo $name;
            ?>
        </div>
   </div>
         <?php                      
                        }
                        $d = 4;
                    ?>
                   
                  
                    <div style="margin-top: 10%;" class="col s12 l4 m4">
                        <div style="height:280px;" class="card hoverable ">
                            <div class="card-content">
                                <?php echo $name?>
                                <img src="img/<?php echo $datas['img'] ?>" alt=""class="responsive-img">
                                <p > <?php echo $datas['name'] ?></p>
                                <p style="font-weight:bold ;"> <?php echo $datas['price'] ?></p>

                            
                            </div>
                            <div style="font-size: 10px; margin-top:-20px;" class="card-action">
                                <a style="color: red;" data-target="modal1" class=" modal-trigger" href="details.php?id=<?php echo $datas['id']?>"><span style="font-size:10px;cursor:pointer"> View</span></a>
                                <a style="color: red;" href="#!">Add to Cart</a>

                                 <button style="color: red;" type="submit" href="details.php?id=<?php echo $datas['id']?>">details</button>
                                
                                <a style="color: red;"  href="details.php?id=<?php echo $datas['id']?>"> details</a>
                                
                                
                            </div>
                            <!-- <div style="font-size: 10px; margin-top:-20px;" class="card-action">
                                <a style="color: red;"  class="sidenav " id="mobile-menu" href="details.php?id=<?php echo $datas['id']?>"><span style="font-size:10px;cursor:pointer"> View</span></a>
                                <a style="color: red;" href="#!">Add to Cart</a>

                                <button style="color: red;" type="submit" href="details.php?id=<?php echo $datas['id']?>">details</button>
                                
                                <a style="color: red;"  href="details.php?id=<?php echo $datas['id']?>"> details</a>
                                
                                
                            </div> -->
                        </div>
                    </div>
                
                    
                    <?php
                
                    }

                ?>
            
            </div>
        </div>
   </div>
  

<section class="header scrollspy" id="top">
        
        <a href="#mobile-menu" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
        <ul class="sidenav z-depth-3 " id="mobile-menu"><br>
            <div style="margin-left: 88%;"><i class="material-icons white-text sidenav-close" style="color: white; cursor: pointer; border: 1px white solid; border-radius: 8px;" >close</i></div>
               
        </ul>
    </section>

  <script src="materialize/js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script>
        $('.document').ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal();
            // $('.modal').modal('open'); 
            $('.button-collapse').sideNav({
            menuWidth: 400, // Default is 240
            edge: 'right', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
            );
            
        });
    </script>
</body>
</html> 
