<?php 

include 'config.php';
include 'nav1.php';
echo "<br>";
echo "<br>";
echo "<br>";

if(isset($_GET['submit'])){
    $sql = "SELECT * FROM cartlist WHERE userid = '$email'";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $newitemleft =($_GET['newitemleft']);
            $productid =($_GET['productid']);
            echo $newitemleft;
            echo $productid;
            }

            
    }
}

?>