<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #e2e2e2, #ffffff);
            color: #333;
        }
        #payment-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #444;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .form-row {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-row label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            font-weight: 500;
            font-size: 16px;
        }
        .form-row input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .form-row input:focus {
            border-color: #007bff;
            outline: none;
        }
        #submit-button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            margin-bottom: 20px;
            transition: background 0.3s;
        }
        #submit-button:hover {
            background: #0056b3;
        }
        #qr-button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            margin-bottom: 20px;
            transition: background 0.3s;
        }
        #qr-button:hover {
            background: #218838;
        }
        #qr-code img {
            max-width: 100%;
            height: auto;
            display: none;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: opacity 0.3s ease-in-out;
        }
        #qr-code img.show {
            display: block;
            opacity: 1;
        }
    </style>
</head>
<body>
    <div id="payment-form">
        <h2>Payment Portal</h2>
        <form id="paymentForm" action="../php/process_payment.php" method="POST">
            <div class="form-row">
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter Card Number" required>
            </div>
            <div class="form-row">
                <label for="cardExpiry">Card Expiry Date:</label>
                <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM/YY" required>
            </div>
            <div class="form-row">
                <label for="cardCVC">CVC:</label>
                <input type="text" id="cardCVC" name="cardCVC" placeholder="Enter CVC" required>
            </div>
            <div class="form-row">
                <label for="cardHolderName">Card Holder Name:</label>
                <input type="text" id="cardHolderName" name="cardHolderName" placeholder="Enter Card Holder Name" required>
            </div>
            <button type="submit" id="submit-button">Submit Payment</button>
            <button type="button" id="qr-button">Display QR Code</button>
            <div id="qr-code">
                <img src="../php/QR.jpeg" alt="QR Code">
            </div>
        </form>
    </div>

    <script>
        document.getElementById('qr-button').addEventListener('click', function() {
            var qrCodeImage = document.getElementById('qr-code').querySelector('img');
            qrCodeImage.classList.toggle('show');
        });
    </script>
</body>
</html>
