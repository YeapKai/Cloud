<!DOCTYPE html>
<html>
<head>
            <!-- Latest compiled and minified CSS -->
	<title>Payment Page</title>
        <link rel="stylesheet" href="paymentStyle.css">
</head>
<body>
    <form action="cart.php">
         <button type="submit" style="position:absolute; top: 5%;left: 5%; padding: 10px; background-color: lightcyan">
             Back to cart
         </button>
     </form>
          <form action="successfull.php" method="POST">
              <div class="container">
    <div class="" style="margin-right:100px;">
       <!-- Shipping Detail Input Form -->
       <h2>Shipping Detail</h2>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <br>
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required>
          <br>
          <label for="city">City:</label>
          <input type="text" id="city" name="city" required>
          <br>
          <label for="state">State:</label>
          <input type="text" id="state" name="state" required>
          <br>
          <label for="zip">Postcode:</label>
          <input type="text" id="zip" name="zip" required>
          <br><br>

        <!-- Total Price Display -->
        <div class="price">
          Total Price: <span id="total-price"></span>
          <?php
          echo 
          'RM'.$_POST['total'];
          ?>
        </div>
 
    </div>
                  
                 
    
	<div class="">
            
            
		<h2>Payment Detail</h2>
		
			<label for="card_number">Card Number:</label>
			<input type="text" name="card_number" pattern="[0-9]{4}\s?[0-9]{4}\s?[0-9]{4}\s?[0-9]{4}" maxlength="19" oninput="formatCardNumber(event)"  required><br>

                        <script>
                        function formatCardNumber(event) {
                          const input = event.target;
                          const trimmedValue = input.value.replace(/\s+/g, '');
                          const formattedValue = trimmedValue.replace(/(\d{4})/g, '$1 ').trim();
                          input.value = formattedValue;
                        }
                        </script>
                        
			<label for="card_holder_name">Card Holder Name:</label>
			<input type="text" name="card_holder_name" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required><br>

			<label for="expiration_date">Expiration Date:</label>
			<input type="text" name="expiration_date" pattern="[0-9]{2}/[0-9]{2}" maxlength="5" placeholder="MM/YY" onkeyup="addSlash(this)" required><br>

                        <script>                                    
                        function addSlash(input) {
                            if (input.value.length === 2 && input.value.indexOf('/') === -1) {
                              input.value += '/';
                            }
                          }
                         </script>
                        
			<label for="cvv">CVV:</label>
			<input type="number" name="cvv" pattern="[0-9]{3,4}" maxlength="4"  required><br>

			<label for="email">Email:</label>
			<input type="email" name="email" required><br>

			<input type="submit" value="Submit Payment">
		
	</div>
              </div>
          </form>
</body>
</html>
