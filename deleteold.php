<?php 
    include ('config.php');
    // include ('nav1.php');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    session_start();
    if (isset($_SESSION['email'])) {
        
        $email =$_SESSION['email'];
        $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
        if ($result = mysqli_query($conn, $sql)) {
            $query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
            foreach ($data as $datas) {
            
    
                echo $datas['newitemleft']; echo "<br>";
                echo $datas['itemleft'];echo "<br>";
                echo $datas['quantity'];
            };

            
            
        }
    }    
        if(isset($_GET['submit'])){
            $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                $newitemleft =($_GET['newitemleft']);
                $itemleft =($_GET['itemleft']);
                }

        }
        if(isset($_GET['update'])){
            $newitemleft =($_GET['newitemleft']);
            $itemleft =($_GET['itemleft']);
            $sqd = "UPDATE beautyupload SET itemleft='$itemleft' WHERE $userid = '$email' ";
            if (mysqli_query($conn, $sqd)) {
                echo "";
            }else{
                echo 'Error';
            }
       
        

        }
        // $sqr = "DELETE from cartlist WHERE userid = '$email' ";
        // if (mysqli_query($conn, $sqr)) {
        //     header("Location:index2.php");
        // }else{
        //     echo 'Error';
        // }
     
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
<form action="beauty.php" method="GET">
        <div class="container">
            <div class="row">
                <div class="col s12 l2 m2">

                </div>
                <div class="col s12 l8 m8">
                    <div style="width: 100%;height:370px;" class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <input type="text" name="itemleft" value="<?php echo $datas['itemleft'] ?>">  
                                </div>
                                
                            </div>
                            
                            <div style="margin-top: 15%;" class="center">
                                <form action="" method="GET">
                                    <input type="hidden" name ="userid" value="<?php echo $email?>">
                                    <button name="update"  type="submit" style="background-color:blueviolet;" class="btn">
                                            Update This User
                                    </button>
                                   
                                </form>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</body>
</html>