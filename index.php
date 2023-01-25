<?php 
    include ('config.php');
    

    $sql = "SELECT * FROM product_table";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    if (isset($_GET['id'])) {
        // echo  $id =$_GET['id'];
        $id =$_GET['id'];
        };



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
    <div class="w3-sidebar w3-bar-block w3-collapse z-depth-3" style="width:400px;right:0" id="mySidebar">
    <button class="w3-bar-item w3-button w3-hide-large"
    onclick="w3_close()">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div class="w3-main" style="margin-right:200px">
    <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-right w3-hide-large" onclick="w3_open()">&#9776;</button>
    
    </div>

    </div>
    
    <!-- <a href="#mobile-menu" class="sidenav-trigger">
        <i class="material-icons black-text">menu</i>
    </a> -->
    <nav style="position:fixed;z-index: 5;" class="white">
        <div class="container">
            
                
            <ul>
                 <li><a style="color:black;font-size:small" href="">LOGO</a></li>
                <div class="right">
                    <li><a style="color:black" href="">Home</a></li>
                    <li><a style="color:black" href="">New In</a></li>
                    <li><a style="color:black" href="">Returns and order</a></li>
                    <li><a style="color:black" href="">Contact</a></li>
                    <div style="width: 85px; height: 35px;margin-top:3%; border:1px solid black;" class="right"> <li><a style="margin-top: -25%;margin-left:12%;color:black" href="">Login</a></li></div>
                    <div class="right" ><li><a style="text-transform: none;"  href="" class="btn orange">Sign up</a></li></div>
                    
                </div>
            </ul>
            
        </div>
    </nav>
    <ul class="sidenav" id="mobile-menu">
                <li><a href="">Home</a></li>
            </ul> 

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
                            

                            
                            
         <?php                      
                        }
                      
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


                                <button style="color: red;" data-target="modal1" class="modal-trigger" data-id=<?php echo $datas['id']?>><span style="font-size:10px;cursor:pointer"> View</span></button>
                                <div id="modal1" class="modal">    
                                        <div class="modal-content">
                                            
                                            <?php 
                                                $abc = '<span id="viewId"></span>';
                                                echo $abc;
                                                echo gettype($abc);
                                              
                                                
                                                
                                                // $sql2 = "SELECT * FROM product_table WHERE id = $abc";
                                                // if ($result2 = mysqli_query($conn, $sql2)) {
                                                //     if (mysqli_num_rows($result2) > 0) {
                                                //         $data2  = mysqli_fetch_array($result2);
                                                //       echo $data2['name']; echo "<br/>";
                                                //       echo $data2['price'];
                                                   
                                                //     }
                                            
                                                       
                                                // }

                                            ?>
                                          
                                        </div>
                                </div>

                                <a  href="#mobile-menu" class="sidenav-trigger" style="color: red;">Add to Cart</a>

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
   <script src="https://code.jquery.com/jquery.min.js"></script>
   <script>
        function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }
    </script>   
    <script>
         $(document).on("click",".modal-trigger",function(){
            var prodId = $(this).data('id');
            var prodId = parseInt($('#viewId').html(prodId));
            

         });
    </script>
   
                        
    <script src="materialize/js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script>
        $('.document').ready(function(){

            $('.modal').modal();
            $('.sidenav').sidenav();
            // $('.modal').modal('open'); 
            
        });
    </script>
    
    
</body>
</html>