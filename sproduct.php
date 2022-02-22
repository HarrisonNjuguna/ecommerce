<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
    <?php
        //require functions.php file
        require ('functions.php');

    
    ?>
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active"href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :

            ?>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="<?php echo $item['item_image']?? "img/products/f1.jpg"?>" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6><?php echo $item['item_name']?? "unknown"; ?></h6>
            <h4><?php echo $item['item_brand']?? "Brand"; ?></h4>
            <h2>Ksh.<?php echo $item['item_price']?? 0; ?></h2>
            <select>
              <option>Select Size</option>
              <option>XL</option>
              <option>XXL</option>
              <option>Small</option>
              <option>Large</option>
          </select>
            <input type="number" value="1">
            <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                <?php
                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                    echo '<button type="submit" disabled class="btn btn-success font-size-12"></button>';
                }else{
                    echo ' <button class="normal">Add To Cart</button>';
                }
                ?>

            </form>

            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in a range of colors, it offers it all in the ultimate head-turning package.</span>
        </div>
    </section>
    <?php 
        endif;
        endforeach;
    ?>


    <!-- Featured products PHP intergration commented out -->


    <!--- <section id="product1" class="section-p1">
        <h2>Featured Products </h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <?php
            foreach($product_shuffle as $item) {
            ?>
            <div class="pro">
                <img src="<?php echo $item['item_image']??"img/products/f1.jpg:"?>" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5><?php echo $item['item_name']?? "unknown"; ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Ksh. <?php echo $item['item_price']?? '0';?></h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                <input type="hidden" name="item_id" value="<?php echo 1;?>">
                <button type="submit" name="product_submit" class="fal fa-shopping-cart cart"></button>
            </form>
        </div>
        <?php } //closing for each function ?>
    </section> -->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>


    <script src="script.js"></script>
</body>

</html>