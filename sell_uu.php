
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

// ... (Your database connection code)

// Handle form submission
if (isset($_POST['submit'])) {
    $product_name = $_POST["product_name"];
    $product_details = $_POST["product_details"];
    $product_defects = $_POST["product_defects"];
    $hostel = $_POST["hostel"];
    $prod_category = $_POST["prod_category"];
    $roomno = $_POST["roomno"];
    $myFile = $_FILES["myFile"]["name"];

    // Insert data into the sell table
    $sql = "INSERT INTO selling (product_name, product_details, product_defects, hostel, prod_category, roomno, myFile)
            VALUES ('$product_name', '$product_details', '$product_defects', '$hostel', '$prod_category', '$roomno', '$myFile')";

    if (mysqli_query($conn, $sql)) {
        echo "Selling item updated";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// Close the database connection
mysqli_close($conn);
?>
