<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">

    <?php
    //require functions.php file
    require ('functions.php');
    ob_start();

    ?>
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"><?php echo count($product->getData('cart')); ?></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
    }
    ?>

    <section id="page-header" class="about-header">

        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70%!</p>
    </section>
        <!-- Shopping cart section  -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['delete-cart-submit'])){
                $deletedrecord = $Cart->deleteCart($_POST['item_id']);
            }

            // save for later
            if (isset($_POST['wishlist-submit'])){
                $Cart->saveForLater($_POST['item_id']);
            }
        }
        ?>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($product->getData('cart') as $item) :
                $cart = $product->getProduct($item['item_id']);
                $subTotal[] = array_map(function ($item){
                    ?>
            <tr>
                <td>
                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                        <button type="submit" name="delete-cart-submit" class="normal">Delete</button>
                    </form>
                </td>
                <td><img src="<?php echo $item['item_image']??"img/products/f1.jpg:" ?>" alt=""></td>
                <td><?php echo $item['item_name'] ?? "Unknown"; ?></td>
                <td>Ksh. <?php echo $item['item_price']?? '0';?></td>
                <td><input type="number" value="1" name="" id=""></td>
                <td>Ksh. <?php echo $item['item_price']?? '0';?></td>
            </tr>
            <?php
            return $item['item_price'];
            }, $cart); // closing array_map function
            endforeach;
            ?>
            </tbody>
        </table>

    </section>

    <section id="cart-add" class="section-p1">
        <div id="cuopon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" name="" id="" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Ksh.<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Ksh.<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
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
            <p>From App Store or Google Play </p>
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


    <script src="script.js"></script>

</body>

</html>