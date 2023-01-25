<?php 
    include 'nav1.php';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    include 'config.php';
    
    if (isset($_GET['id'])) {
    // echo  $id =$_GET['id'];
    $id =$_GET['id'];
    $sql = "SELECT * FROM product_table WHERE id = '$id'";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $data  = mysqli_fetch_array($result);
           $name =  $data['productname']; echo "<br/>";
           $img =  $data['imgname']; echo "<br/>";
           $price = $data['productprice'];
           $id = $data['id'];
           
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6">
                <img src="img/<?php echo $data['imgname'] ?>" alt=""class="responsive-img">
            </div>
            <div class="col s12 m6 l6">
                <h6  style="font-weight: bold;"> <?php echo $img =  $data['imgname'];?> </h6>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <span><img style="width: 20px;" src="https://img.icons8.com/material-rounded/24/ff5f15/hand-drawn-star.png"/></span>
                <p style="font-weight: bold;"> <?php echo $price = $data['productprice'];?></p>
                <p style="margin-top: -12px;">quantity</p>
                <div style="width: 150px;height: 25px;border: solid 2px;">
                    <div style="margin-top: -7%;" class="wrapper">
                        <span style="margin-right:20%; margin-left:10%; font-size:24px;font-weight:bold;" class="minus red-text">-</span>
                        <span style="margin-right:20%;" class="num">01</span>
                        <span style="font-size:24px;font-weight:bold;" class="plus green-text;">+</span>
                    </div>
                </div>
                <p style="font-weight: lighter;font-size: 20px; margin-top: -1px;">colour: <span style="font-weight: bold;">Black/silver</span></p>
                <div style="margin-top: -20px;" class="row">
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
                <a href="cartlist.php?id=<?php echo $id ?>" style="text-transform: none;color: white;background-color:#FF5F15;border-radius: 20px;padding: 0px 80px;border: none;" class="btn">
                    Add to cart
                </a>
                
            </div>
        </div>
    </div>

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
