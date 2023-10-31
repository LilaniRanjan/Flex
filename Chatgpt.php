<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        .quantity-input {
            width: 70px; /* Set the width of the text field */
            padding: 8px; /* Add padding to the text field */
            font-size: 16px; /* Adjust the font size */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="./AdminPanel/uploads/Asian-Noodles-PNG-File.jpg" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Product Name</h1>
                <p>Price: $50.00</p>
                <p>Description of the product goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="form-control mb-2 quantity-input">
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
