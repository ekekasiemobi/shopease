<?php 

include 'nav1.php' ;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'config.php';



if (isset($_GET['submite'])) {
// echo  $id =$_GET['id'];
$quantity =$_GET['quantity'];
}

if (isset($_GET['id'])) {
    // echo  $id =$_GET['id'];
    $id =$_GET['id'];
    $sql = "SELECT * FROM shoes_bagsupload WHERE id = '$id'";
   
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $data  = mysqli_fetch_array($result);
           $id = $data['id'];
           $name =  $data['productname']; echo "<br/>";
           $price =  $data['productprice']; echo "<br/>";
           $img =  $data['imgname']; echo "<br/>";


           
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
    <title>Document</title>
</head>
<body>
    <form action="cartlist.php" method="GET"> 
        <div class="container">
            <div class="row">
                <div class="col s12 l6 m6">
                    <img src="img/<?php echo $img ?>" alt=""class="responsive-img">
                </div>
                <div class="col s12 l6 m6">


                <input style="border-bottom-width: 0px;font-size:24px;color:black;font-weight:bold;" locked type="text" name="productname" value="<?php echo $name ?>">

                <input style="border-bottom-width: 0px;font-size:24px;color:black;font-weight:bold;" locked type="text" name="imgname" value="<?php echo $img ?>">

                <input style="border-bottom-width: 0px;font-size:24px;color:black;font-weight:bold;" locked type="text" name="productid" value="<?php echo $id ?>">

                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
            


                <input style="border-bottom-width: 0px;margin-bottom: -20px; font-size:14px; font-weight:bold; color:black;" locked type="text" name="productprice" value="<?php echo $price ?>"> 
                
                
                <label for="points">Quantity:</label> <br>
                <input style="border-bottom-width: 0px; border:1px solid; width:20%; height:15px;"  type="number" id="points" name="quantity" value="1" min="1" step="1"> <br> 

                <div class="row">
                    <div class="col s12 m3 l3">
                        <div style="border: 1px black solid;height: 40px;width: 75px; ">
                            <div class="center">
                                <img src="img/<?php echo $data['imgname'] ?>" alt=""class="responsive-img">
                            </div>  
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div style="border: 1px black solid;height: 40px;width: 75px; ">
                            <div class="center">
                                <img src="img/<?php echo $data['imgname'] ?>" alt=""class="responsive-img">
                            </div>
                        </div>
                    </div>
                </div>
                <p style="font-weight: lighter;font-size: 20px; margin-top: -1px;">colour: <span style="font-weight: bold;">Black/silver</span></p>

                <button  style="text-transform: none;color: white;background-color:#FF5F15;border-radius: 20px;padding: 0px 80px;border: none;" name="submite" class=" btn center" type="submit">Add to cart</button>
                </div>

               
            </div>
        </div> 
    
        
        
       
    </form>
    <script>
        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");
        let a = 1;
        plus.addEventListener("click", ()=>{
        a++;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
        });

        minus.addEventListener("click", ()=>{
        if(a > 1){
            a--;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
        }
        });
    </script>
</body>
</html>