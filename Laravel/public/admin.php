
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>
  
  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span><strong><center>Welcome Admin!</center></strong></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Admin Page
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Add Products</h1>
            </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="products" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <label>Upload Image File:</label>
                        <input type="file" name="image">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="product_name" type="text" class="form-control" id="product_name" placeholder="Product Name" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="product_description" rows="6" class="form-control" id="description" placeholder="Product Description" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <label>Material: </label>
                        <select name="material" id="material">
                            <option value="choose"> Choose material </option>
                            <option value="plastic">Plastic </option>
                            <option value="fabric">Fabric </option>
                            <option value="resin">Resin </option>
                            <option value="metal">Metal </option>
                        </select>
                      </fieldset>
                    <div class="col-md-12">
                      <fieldset>
                        <label>Category: </label>
                        <select name="category" id="category">
                            <option value="choose"> Choose Category </option>
                            <option value="unisex">Unisex </option>
                            <option value="mens">Men's Apparel </option>
                            <option value="mens">Men's Shoes</option>
                            <option value="mens">Men's Bags & Accessories</option>
                            <option value="womens">Women's Apparel </option>
                            <option value="womens">Women's Shoes </option>
                            <option value="womens">Women's Bags & Accessories</option>
                            <option value="kids">Kids Apparel</option>
                            <option value="kids">Kids Shoes</option>
                            <option value="toys">Toys & Collectibles</option>
                            <option value="home">Home & Living</option>
                            <option value="health">Health & Personal Care</option>
                        </select>
                      </fieldset>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="product_price" type="number" class="form-control" id="price" placeholder="(PHP) Product Price" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter product quantity" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="product_weight" type="number" class="form-control" id="weight" placeholder="Enter product weight (grams)" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="product_size" type="text" class="form-control" id="size" placeholder="Enter product size">
                      </fieldset>
                    </div>
                    
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="form-submit" id="form-submit" class="button" value="Insert">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Add Vouchers</h1>
            </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="products" action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <label>Upload Image File:</label>
                        <input type="file" name="voucher_image">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="voucher_name" type="text" class="form-control" id="product_name" placeholder="Voucher Value" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="description" rows="6" class="form-control" id="description" placeholder="Voucher Description" required=""></textarea>
                      </fieldset>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="upload" id="form-submit" class="button" value="Upload Image">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->
    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/logo.png" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2020 Goodstyle.inc 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
      $(document).ready(function(){
        $('#form-submit').click(function(){
          var image_name = $('#form-submit').val();
          if(image_name == '')
          {
            alert("Please Select Image");
            return false;
          }
          else
          {
            var extension $('#form-submit').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
            {
              alert('Invalid Image File');
              $('#form-submit').val('');
              return false;
            }
          }
        })
      })
    </script>

    <?php
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '');
    // Check connection
    if (!$conn) {
      echo "Not connected to database";
    }

    if(!mysqli_select_db($conn,'goodstyledb')) {
      echo 'Database Not Selected';
    }
    //Insert image to database
    // If file upload form is submitted 
        

    //Insert form into database
      $product_name = isset($_POST['product_name']) ? $_POST['product_name']: '';
      $product_description = isset($_POST['product_description']) ? $_POST['product_description']: '';
      $material = isset($_POST['material']) ? $_POST['material']: '';
      $category = isset($_POST['category']) ? $_POST['category']: '';
      $quantity = isset($_POST['quantity']) ? $_POST['quantity']: '';
      $product_price = isset($_POST['product_price']) ? $_POST['product_price']: '';
      $product_weight = isset($_POST['product_weight']) ? $_POST['product_weight']: '';
      $product_size = isset($_POST['product_size']) ? $_POST['product_size']: '';
      if($product_name !='' || $product_description !='' || $material !='' || $category !='' || $product_price !='' 
      || $quantity !='' || $product_weight !='' || $product_size !='') {
        
        //Insert Query of SQL
        $sql = "INSERT INTO products (product_name, product_description, product_material, product_category, quantity, product_price, product_weight, product_size)
                VALUES ('$product_name', '$product_description', '$material', '$category', '$quantity', '$product_price', '$product_weight', '$product_size')";
        if($conn->query($sql)==TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      //Insert voucher form into database
      if(isset($_POST['upload']))
    {
      $name = $_FILES['voucher_image']['name'];
      $temp_name = $_FILES['voucher_image']['tmp_name'];
      $voucher_name = $_POST['voucher_name'];
      $description = $_POST['description'];

      $sql = "INSERT INTO vouchers (voucher_name, description) VALUES ('$name', '$voucher_name', '$description')";
      mysqli_query($conn, $sql);

      // move the uploaded image into folder: dbimages
      if(isset($name) and !empty($name)) {
        $target = 'Laravel/public/assets/dbimages/'; 
        echo realpath($target);
        if(move_uploaded_file($temp_name, $target.$name)){
          echo 'Image uploaded successfully';
        }
      } else {
        echo 'There was a problem uploading image';
      }
    }
      // $voucher_name = isset($_POST['voucher_name']) ? $_POST['voucher_name']: '';
      // $description = isset($_POST['description']) ? $_POST['description']: '';
      
      // if($voucher_name !='' || $description !='') {
        
      //   //Insert Query of SQL
      //   $sql = "INSERT INTO vouchers (voucher_name, description)
      //           VALUES ('$voucher_name', '$description')";
      //   if($conn->query($sql)==TRUE) {
      //     echo "New record created successfully";
      //   } else {
      //     echo "Error: " . $sql . "<br>" . $conn->error;
      //   }
      // }
  ?>

  

  </body>
</html>