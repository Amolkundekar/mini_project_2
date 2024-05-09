<?php
    include 'header.php';
?>
!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    
    <link rel="stylesheet" href="pay.css">
    <style>
        body {
        /* font-family: Arial, sans-serif; */
        /* background-color: #f2f2f2; */
        margin: 0;
        padding: 0;
            }

        .container-one {
            width: 60%;
            margin: 50px auto;
            /* background-color: #fff; */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .confirmation-message {
            margin-top: 20px;
        }

        .icon {
            width: 100px;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            /* color: #555; */
        }

    </style>
</head>
<body>
    <div class="container-one">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $payment_method = $_POST['payment_method'];

            // Check the selected payment method
            if ($payment_method == 'cod') {
                // Handle cash-on-delivery payment
                echo '<h2>Payment Confirmation</h2>';
                echo '<div class="confirmation-message">';
                echo '<img src="item.jpg" alt="Delivery Icon" class="icon">';
                echo '<p>Your order is confirmed!</p>';
                echo '<p>A friendly farmer will deliver your fresh produce right to your doorstep.</p>';
                echo '<p>Payment will be collected upon delivery.</p>';
                echo '</div>';
            } elseif ($payment_method == 'online') {
                // Handle online payment (integration with payment gateway required)
                // Redirect to payment gateway or display payment form
                // For demonstration, let's assume a successful payment
                echo '<h2>Payment Confirmation</h2>';
                echo '<div class="confirmation-message">';
                echo '<img src="item.jpg" alt="Online Payment Icon" class="icon">';
                echo '<p>Your online payment is successful!</p>';
                echo '<p>Thank you for supporting local farmers.</p>';
                echo '<p>Your order will be processed, and you will receive a confirmation email shortly.</p>';
                echo '</div>';
            } else {
                // Invalid payment method selected
                echo '<h2>Error</h2>';
                echo '<p>Invalid payment method selected.</p>';
            }
        } else {
            // Payment form not submitted
            echo '<h2>Error</h2>';
            echo '<p>Payment form not submitted.</p>';
        }
        ?>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>
