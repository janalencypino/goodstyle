
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie Template - Contact</title>

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
            <span>Welcome Admin!</span>
          </div>
        </div>
      </div>
    </div>

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
                        <input type="file" name="product_image">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
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
                        <input type="checkbox" name="category" value="mens">Men's Apparel</br>
                        <input type="checkbox" name="category" value="mshoes">Men's Shoes</br>
                        <input type="checkbox" name="category" value="mbags">Men's Bags & Accessories</br>

                        <input type="checkbox" name="category" value="womens">Women's Apparel</br>
                        <input type="checkbox" name="category" value="wshoes">Women's Shoes</br>
                        <input type="checkbox" name="category" value="wbags">Women's Bags & Accessories</br>

                        <input type="checkbox" name="category" value="unisex">Unisex</br> 
                        <input type="checkbox" name="category" value="kids">Kids Apparel</br>
                        <input type="checkbox" name="category" value="kidshoes">Kids Shoes</br>
                        
                        <input type="checkbox" name="category" value="toys">Toys & Collectibles</br>
                        
                        <input type="checkbox" name="home" value="home">Home & Living</br>
                        <input type="checkbox" name="health" value="health">Health & Personal Care</br>
                      </fieldset>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="product_price" type="number" class="form-control" id="price" placeholder="Product Price" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter product quantity" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="product_weight" type="number" class="form-control" id="weight" placeholder="Enter product weight" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="product_size" type="number" class="form-control" id="size" placeholder="Enter product size">
                      </fieldset>
                    </div>
                    
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Submit</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>You can also keep in touch on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                      </div>
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

    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Godard four dollar toast prism, authentic heirloom raw denim messenger bag gochujang put a bird on it celiac readymade vice.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
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
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/header-logo.png" alt="">
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
              <p>Copyright &copy; 2019 Company Name 
                
                - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
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

    // //if file upload form is submitted
    // if(isset($_POST['submit'])) {
 
    //   $name = $_FILES['product_image']['product_name'];
    //   $target_dir = "upload/";
    //   $target_file = $target_dir . basename($_FILES["product_image"]["product_name"]);
    
    //   // Select file type
    //   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    //   // Valid file extensions
    //   $extensions_arr = array("jpg","jpeg","png","gif");
    
    //   // Check extension
    //   if( in_array($imageFileType,$extensions_arr) ){
     
    //      // Insert record
    //      $query = "insert into products(product_name) values('".$name."')";
    //      mysqli_query($conn,$query);
      
    //      // Upload file
    //      move_uploaded_file($_FILES['product_image']['tmp_name'],$target_dir.$name);
    
    //   }
     
    // }

    //Insert form into database
      $product_name = $_POST['product_name'];
      $product_description = $_POST['product_description'];
      $material = $_POST['material'];
      $category = $_POST['category'];
      $quantity = $_POST['quantity'];
      $product_price = $_POST['product_price'];
      $product_weight = $_POST['product_weight'];
      $product_size = $_POST['product_size'];
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
  ?>

  </body>
</html>