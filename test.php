<?php 
 include ('config.php');
 include ('nav1.php');
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

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
<form id="paymentForm">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email-address" required />
        </div>
        <div class="form-group">
          <!-- <label for="amount">Amount</label> -->
        
          <input type="hidden" id="amount" required value="1000" readonly/>
        </div>
        <div class="form-group">
            <div class="input-field">
                
                <input type="text" id="first-name" />
                <label for="first-name">First Name</label>
            </div>
       
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
          <button type="submit" name="delete" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form>
      
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
