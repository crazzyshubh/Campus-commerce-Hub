<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Page</title>
    <link rel="stylesheet" href="home_c.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="notch">
        <div class="image">
            <a href="front.html"><img src="zone.png" width="200" height="80" style="margin: 15px 10px"></a>
        </div>
        <div class="top">
            <ul>
                <li><a href="home.html"><b>HOME</b></a></li>
                <li><a href="about.html"><b>ABOUT</b></a></li>
                <li><a href="contact_us.html"><b>CONTACT US</b></a></li>
            </ul>
        </div>
        <div class="box"><a href="signup.html"><b>SIGNUP/LOGIN</b></a></div>
    </div>

    <?php
    // Database Connection Configuration
    $db_host = "localhost";      // Change to your database host
    $db_user = "root";           // Change to your database username
    $db_pass = "";               // Change to your database password
    $db_name = "tradezone";     // Change to your database name

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Handle form submission
    if (isset($_POST['buy_now'])) {
        $productId = $_POST['product_id']; // Assuming you have a hidden input in your form with product_id
        $productName = $_POST['product_name'];
        $productDetails = $_POST['product_details'];

        // Insert the selected item into the "cart" table
        $insertCartSQL = "INSERT INTO cart (product_id, product_name, product_details) VALUES ('$productId', '$productName', '$productDetails')";
        if (mysqli_query($conn, $insertCartSQL)) {
            echo "<script>alert('Item added to the cart successfully');</script>";
        } else {
            echo "Error: " . $insertCartSQL . "<br>" . mysqli_error($conn);
        }
    }

    // Fetch products from the "selling" table
    $selectProductsSQL = "SELECT * FROM selling";
    $result = mysqli_query($conn, $selectProductsSQL);

    if ($result->num_rows > 0) {
        // Output data in a card
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<form method="post" action="">'; // Added a form for each product
            echo '<div class="card mb-3">';
            echo '<img class="card-img-top" src="iphone.jpg" alt="Card image cap" style="width: 200px; height: 200px;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["product_name"] . '</h5>';
            echo '<p class="card-text">' . $row["product_details"] . '</p>';
            echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
            echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
            echo '<input type="hidden" name="product_name" value="' . $row["product_name"] . '">';
            echo '<input type="hidden" name="product_details" value="' . $row["product_details"] . '">';
            echo '<button type="submit" name="buy_now" class="btn btn-primary">Buy Now</button>';
            echo '</div>';
            echo '</div>';
            echo '</form>';
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>

</body>

</html>
