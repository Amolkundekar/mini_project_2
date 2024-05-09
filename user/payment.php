<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
<?php
    $total = $_GET['total'];
    include 'header.php';    
?>
<div class="container col-md-6 ">
    <div class="text-center">
        <button class="btn btn-outline-warning"><h2 class="text-center">Payment Options</h2></button>
    </div>
    <div class="my-5 border px-3 py-3 border-warning rounded shadow p-3 mb-5 bg-white font-monospace">
        <div class="text-center">
            <h4>Total Order Value: <?php echo $total." Rs";?></h4>
        </div>
        <form action="process_payment.php" method="POST" class="form" id="paymentForm">
            <div class="form-group">
                <div class="mb-3">
                    <label for="payment_method" class="my-3 fs-4 fw-bold ">Select Payment Method:</label><br>
                    <select id="payment_method" name="payment_method" class="form-control" required onchange="togglePaymentFields()">
                        <option>Select Payment Method</option>
                        <option value="cod">Cash on Delivery</option>
                        <option value="online">Online Payment</option>
                    </select>
                </div>
                <div id="onlinePaymentFields" style="display: none;">
                    <!-- Fields for online payment -->
                    <div id="additionalFields" style="display: none;">
                        <!-- Dropdown for selecting online payment method -->
                        <label for="online_payment_method">Select Online Payment Method:</label><br>
                        <select id="online_payment_method" name="online_payment_method" class="form-control" required onchange="toggleOnlinePaymentDetails()">
                            <option>Select Online Payment Method</option>
                            <option value="upi">UPI</option>
                            <option value="card">Card</option>
                            <option value="netbanking">Net Banking</option>
                        </select>
                        <!-- Container for additional payment details based on the selected online payment method -->
                        <div id="online_payment_details" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" id="paymentButton" class="btn btn-primary mt-3">Proceed to Payment</button>
            </div>
        </form>
    </div>
</div>

<?php
include 'footer.php';    
?>

<script>
    function togglePaymentFields() {
        var paymentMethod = document.getElementById("payment_method").value;
        var onlinePaymentFields = document.getElementById("onlinePaymentFields");
        var additionalFields = document.getElementById("additionalFields");
        var paymentButton = document.getElementById("paymentButton");

        if (paymentMethod === "cod") {
            onlinePaymentFields.style.display = "none";
            paymentButton.innerText = "Place Order";
        } else {
            onlinePaymentFields.style.display = "block";
            if (paymentMethod === "online") {
                additionalFields.style.display = "block";
            }
            paymentButton.innerText = "Pay Now";
        }
    }

    function toggleOnlinePaymentDetails() {
        var onlinePaymentMethod = document.getElementById("online_payment_method").value;
        var onlinePaymentDetails = document.getElementById("online_payment_details");

        onlinePaymentDetails.innerHTML = ''; // Clear previous details

        if (onlinePaymentMethod === "upi") {
            onlinePaymentDetails.innerHTML = '<label for="upi_id">UPI ID:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="upi_id" name="upi_id" class="form-control"><br>';
        } else if (onlinePaymentMethod === "card") {
            onlinePaymentDetails.innerHTML = '<label for="card_holder_name">Card Holder Name:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="card_holder_name" name="card_holder_name" class="form-control"><br>';
            onlinePaymentDetails.innerHTML += '<label for="card_number">Card Number:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="card_number" name="card_number" class="form-control"><br>';
        } else if (onlinePaymentMethod === "netbanking") {
            onlinePaymentDetails.innerHTML = '<label for="account_number">Account Number:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="account_number" name="account_number" class="form-control"><br>';
            onlinePaymentDetails.innerHTML += '<label for="account_holder_name">Account Holder Name:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="account_holder_name" name="account_holder_name" class="form-control"><br>';
            onlinePaymentDetails.innerHTML += '<label for="ifsc_code">IFSC Code:</label><br>';
            onlinePaymentDetails.innerHTML += '<input type="text" id="ifsc_code" name="ifsc_code" class="form-control"><br>';
        }

        onlinePaymentDetails.style.display = "block";
    }
</script>
</body>
</html>
