
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeZone</title>
    <link rel="stylesheet" href="home_c.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>Sell Page</title>
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
    <form action="sell_uu.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="product_name">Product name</label>
            <input type="text" class="form-control" id="product_name" name= "product_name" placeholder="write original name with brand">
          </div>
        </div>
        <div class="form-group">
          <label for="product_details">Product Details</label>
          <input type="text" class="form-control" id="product_details" name= "product_details" placeholder="about product">
        </div>
        <div class="form-group">
          <label for="product_defects">Any Defects</label>
          <input type="text" class="form-control" id="product_defects" name="product_defects" placeholder="physical or any">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="hostel">Hostel</label>
            <input type="text" class="form-control" id="hostel" name="hostel">
          </div>
          <div class="form-group col-md-4">
    <label for="prod_category">Category</label>
    <select id="prod_category" name="prod_category" class="form-control">
        <option selected>Electronics</option>
        <option>Clothing</option>
        <option>Footwear</option>
        <option>Furniture</option>
        <option>Food</option>
        <option>Stationary</option>
    </select>
</div>
          <div class="form-group col-md-2">
            <label for="roomno">Room No.</label>
            <input type="number" class="form-control" id="roomno" name="roomno">
          </div>
        </div>
        <div>
            <label for="myFile">Upload product images</label><br>
            <input type="file" id="myFile" name="filename">       
        </div>
        <br><br>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              I accept <a href="terms.html">terms and conditions</a> 
            </label>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>