<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <form id="paymentForm">
    <label for="cardNumber">Carte Numero:</label>
    <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

    <label for="expiryDate">Date D'expiration:</label>
    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="123" required>

    <button type="button" onclick="submitPayment()">Submit Payment</button>
  </form>

  <script>
    function submitPayment() {
     
      header('location: ../controllers/confirmationPaiment.php')
    }
  </script>

</body>
</html>