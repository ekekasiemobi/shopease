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
            if (mysqli_num_rows($result) > 0) {
                $data  = mysqli_fetch_array($result);
               $newitemleft =  $data['newitemleft']; echo "<br/>";
               $productid =  $data['productid']; echo "<br/>";
               
            }
    
               
        }
        $sqr = "UPDATE groceriesupload SET itemleft='$newitemleft' WHERE id = '$productid' ";
        if (mysqli_query($conn, $sqr)) {
            "";
        }
        else{
                echo 'Error';
        }

        $sqd = "UPDATE beautyupload SET itemleft='$newitemleft' WHERE id = '$productid' ";
        if (mysqli_query($conn, $sqd)) {
            "";
        }
        else{
                echo 'Error';
        }
    
        $sqr = "DELETE from cartlist WHERE userid = '$email' ";
        if (mysqli_query($conn, $sqr)) {
            header("Location:index2.php");
        }else{
            echo 'Error';
        }

        
     
    }


?>