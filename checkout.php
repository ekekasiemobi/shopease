<?php
    include ('config.php');
    include ('nav1.php');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $sqr = "SELECT SUM(productprice) FROM cartlist";
    $result1 = mysqli_query($conn, $sqr);
    $data1 = mysqli_fetch_array($result1);

    // if(isset($_GET['submit'])){
    //     $newitemleft =$_GET['newitemleft'];
    //     $itemleft =$_GET['itemleft'];
    //    echo $newitemleft;
    //    echo $itemleft;
       
    // };
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
    <div class="container">

        <form id="paymentForm">
            <div class="row form-group">
                <div class="col s12 m6 l6">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Amount</label><br>
                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" required value="<?php echo  $data1[0] + 2500 ; ?>" readonly id="amount" type="text" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 m6 l6">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Country</label><br>
                    <input style="height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
            </div>
            <div class="row form-group">
                <div class="col s12 m6 l6">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">First Name</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 m6 l6">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Last Name</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
            </div>
            <div class="row form-group">
                <div class="col s12 l4 m4">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">City</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 l4 m4 form-group">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">State</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 l4 m4">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Zip Code</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
            </div>
            <div class="row form-group">
                <div class="col s12 l4 m4">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Email Adress</label><br>
                    <input style="width: 95%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="email-address" type="email" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 l4 m4 form-group">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Confirm Email Address</label><br>
                    <input style="width: 93%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="email-address1" type="email" placeholder="Nigeria" required><br><br>
                </div>
                <div class="col s12 l4 m4 form-group">
                    <label  style="font-weight: bold;color: black; background-color: white;"    for="name">Phone Number</label><br>
                    <input style="width: 93%; height: 35px; border: solid 1px #ECEAE9;padding-left: 15px;border-radius: 5px;" id="Country" type="text" placeholder="Nigeria" required><br><br>
                </div>
            </div>
             
            <div class="form-submit center">
                <button type="submit" onclick="payWithPaystack()" style="background-color: #FF5F15; width: 60%;margin-left: 60px; border: none;height: 30px;border-radius: 20px;color: white;font-weight: bold;">Pay</button><br><br>
            </div>
            <!-- <button type="submit" class="center" name="submit" style="background-color: #FF5F15; width: 60%;margin-left: 100px;margin-top:15%; border: none;height: 40px;border-radius: 20px;color: white;font-weight: bold;border-bottom-width:0px;" class="btn">Test</button> -->
        
        </form>
    </div>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);
        function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
        key: 'pk_test_9a555e42108169ac4b3208b402fb0572f2ae5236', // Replace with your public key
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
        alert('Window closed.');
        },
        callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        alert(message);
        window.location.href="delete.php";
    }
        
    });

    handler.openIframe();
    }
    </script>
</body>
</html>