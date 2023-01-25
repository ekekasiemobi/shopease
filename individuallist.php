<?php 
    include ('config.php');
   
    
    include ('nav1.php');
    echo "<br>";
    echo "<br>";
    echo "<br>";

    if (isset($_SESSION['email'])) {
        // echo  $id =$_GET['id'];
        $email =$_SESSION['email'];
        // echo $email;
        $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
        if ($result = mysqli_query($conn, $sql)) {
            $query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
           
            
        }
       
    }
   $sqr = "SELECT SUM(total) FROM cartlist";
   $result1 = mysqli_query($conn, $sqr);
   $data1 = mysqli_fetch_array($result1);


   if(isset($_POST['del'])){
    $puid=$_POST['p_id'];
    $sqr = "DELETE from cartlist WHERE id = '$puid' ";
    if (mysqli_query($conn, $sqr)) {
        header("Location:individuallist.php");
    }else{
        echo 'Error';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
            <div style="margin-left:10%; margin-right:10%;">
                <div class="row">
                    <?php 
                        foreach ($data as $datas) {
            
                        ?>
                        <div class="col s12 m6 l6">
                            <ul class="collection hoverable">
                                <li class="collection-item avatar">
                                    <img src="img/<?php echo $datas['imgname'] ?>" alt=""class="responsive-img circle">

                                    <!-- <input style="border-bottom-width:0px;" type="text" name="productname" locked value="<?php echo $datas['productname'] ?>"> -->
                                    <!-- <label for="quantity"><?php echo $datas['productname'] ?></label>
                                    <input style=" font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" name="productprice" locked value="<?php echo $datas['productprice'] ?>"> -->

                                   
                                    <div class="row">
                                        <div class="col s12 m4 l4">
                                            <label for="quantity"><?php echo $datas['productname'] ?></label>
                                            <input style=" font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" name="productprice" locked value="<?php echo $datas['productprice'] ?>">
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <label for="quantity">items ordered</label>
                                            <input style="font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" locked name="quantity" value="<?php echo $datas['quantity'] ?>">
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <label for="totalamount">total amount</label>
                                             <input style="font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" locked name="totalamount" value="<?php echo $datas['quantity'] * $datas['productprice'] ?>">
                                        </div>
                                    </div>
                                
                                   

                                    <!-- <label for="itemleft">itemleft</label>
                                    <input style="font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" locked name="itemleft" value="<?php echo $datas['itemleft'] ?>"> -->
                                    
                                    <!-- <label for="newitemleft">newitemleft</label>
                                    <input style="font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" locked name="newitemleft" value="<?php echo $datas['newitemleft'] ?>">

                                   
                                    <input style="font-size: 12px;font-weight:bold;border-bottom-width:0px;" type="text" locked name="productid" value="<?php echo $datas['productid'] ?>"> -->

                                    
                                    <input type="hidden" name="p_id" value="<?php echo $datas['id'] ?>">
                                    <input  type="submit" name="del"  class="secondary-content" value="x"/>
                                  
                                </li>
                            </ul>

                        </div>
                        <?php
                        }
                        ?>
                <div>
                <div  class="row">
                        <?php 
                            $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
                            if ($result = mysqli_query($conn, $sql)) {
                            $query = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            $total = count ($data);
                            // echo $total;
                            if($total>0){
                                ?>
                
                                <div class="col s12 m5 l5">
                                    <div  style="border: 1px black solid;position:fixed; height: 260px;width: 350px;">
                                        <div style="margin-left: 30px;" class="row">
                                            <div style="margin-top:4%;"  class="col s12 l6 m6">
                                                <label  for="subtotal">subtotal (item)</label> <br> <br>
                                                <label for="delivery">Delivery (item)</label> <br><br>
                                                

                                                <label for="ordertotal">ordertotal</label> <br> <br>
                                                
                                            </div>
                                            <div class="col s12 l6 m6">
                                                <input style="border-bottom-width:0px;" type="text" locked name="subtotal" value="<?php echo $data1[0]; ?>">

                                                <input style="border-bottom-width:0px;margin-top:-3%" type="text" locked name="delivery" value="<?php echo  1500 ; ?>">

                                                <input style="border-bottom-width:0px;margin-top:-3%" type="text" locked name="ordertotal" value="<?php echo  $data1[0] + 1500 ; ?> ">

                                            </div>
                                        </div>
                                    </div>            
                                    
                                </div>
                                
                                <?php
                            }else{
                                echo '';
                                
                                
                            };
                            }
                                ?>
                                
                        
                    </div>
                </div>
            </form>
            <form action="checkout.php">
                <button type="submit" class="center" name="submit" style="background-color: #FF5F15; width: 15%;margin-left: 44%;position:absolute;z-index:5;position:fixed; border: none;height: 40px;border-radius: 5px;color: white;font-weight: bold;border-bottom-width:0px;" class="btn">Confirm and Pay</button>
            </form>
        </body>
        </html>