<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="./css/common.css" />
    <link rel="stylesheet" type="text/css" href="./css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="./css/Homepage.css" />
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>



</head>

<body class="flex-column">
    <main class="homepage main">
        <section class="section1_2">
            <section class="section1_1">
                <section class="section1">
                    <div class="group">
                        <div class="group1">
                            <div class="rect"></div>
                            <div class="text">Login</div>
                        </div>
                        <div class="text1">Home</div>
                    </div>
                    <div class="rect3"></div>
                    <img class="decorator1" src="./assets/4f15c3cbd40d5cd5cd5fbdd49373296b.png" alt="alt text" />
                    <div class="section11">
                        <h4 class="highlight">
                            Welcome to our platform, where your quest for the perfect website ends. Say goodbye to the daunting task
                            of building a website from scratch. We offer a curated selection of pre-built websites, meticulously
                            designed and fully equipped to meet your online needs. From sleek and stylish designs to feature-rich
                            layouts, we have something to suit every taste and purpose.
                        </h4>
                        <h1 class="hero_title">Introducing a way to digitalize your business</h1>
                        <div class="rect1"></div>
                        <h5 class="highlight1"><a href="sell.php" class=" text-white">See Website</a></h5>
                        <div class="rect2"></div>
                        <h5 class="highlight2">Learn More</h5>
                        <h2 class="medium_title">SHOPIFY</h2>
                        <div class="rect4"></div>
                        <div class="info1">Home</div>
                        <div class="info2">About Us</div>
                        <div class="info21">Contact</div>

                        <?php
                            session_start();
                            include('config.php');

                            if(isset( $_SESSION['login_user'])){
                                echo "<div class='info22'>Hello ". $_SESSION['login_user']."</div>";
                                 echo '<div class="info"><a href="logout.php">Sign Out</a></div>';
                            } else {
                                echo "<a href='login.php' class='info22'>Login</a>";
                            }

                        ?>

                        <div class="info23">FaQ</div>
                    </div>
                    <div class="flex_col">
                        <div class="flex_col1">
                            <h1 class="title">Shopify</h1>
                            <h3 class="subtitle">Subscribe</h3>
                        </div>
                        <div class="flex_col2">
                            <h5 class="highlight8">Get 10% off your first order</h5>
                            <div class="box2">
                                <div class="flex_row">
                                    <h5 class="highlight81">Enter your email</h5>
                                    <img class="image12" src="./assets/c4f20c76055bb2f27f3ba3471cea691e.png" alt="alt text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>

        </section>

        <section class="section2_2">
            <section class="section2_1">
                <div class="section2_11">
                    <section class="section2">
                        <div class="group2">
                            <div class="rect6"></div>
                            <div class="group3">
                                <img class="decorator" src="./assets/d1d07d0651a4c8f0bfd162f278c5d300.png" alt="alt text" /><img class="decorator2" src="./assets/ef152267af6cb1002afa7634792d16ef.png" alt="alt text" />
                            </div>
                        </div>
                        <div class="flex_col3">
                            <img class="image1" src="./assets/869a047025ba80e8e16aff3755b6202b.png" alt="alt text" />
                            <h5 class="highlight21">Easy</h5>
                            <p class="desc">Only one click and the website is your to be fully utilized and used</p>
                        </div>
                    </section>

                    <div class="rect5"></div>
                </div>
            </section>

        </section>

        <section class="section3_1">
            <section class="section3">
                <div class="flex_row1">
                    <img class="image" src="./assets/9b2eb9a467202eae87250610f885f208.png" alt="alt text" />
                    <div class="flex_col4">
                        <h1 class="big_title">Diverse Categories</h1>
                        <h5 class="highlight3">
                            Our curated selection ensures that regardless of your industry or purpose, you&#x27;ll find a website
                            perfectly suited to represent your vision. Explore with ease and confidence,  ready-to-use websites
                            crafted to elevate your online presence.
                        </h5>
                        <div class="flex_row2">
                            <div class="flex_row3">
                                <img class="image8" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                                <h5 class="highlight6">Businesses</h5>
                            </div>
                            <div class="flex_row4">
                                <img class="image8" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                                <h5 class="highlight61">Non-profit Organizations</h5>
                            </div>
                            <img class="image81" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                            <h5 class="highlight62">Eco-companies</h5>
                        </div>
                        <div class="flex_row5">
                            <div class="flex_row6">
                                <img class="image8" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                                <h5 class="highlight63">Institutions</h5>
                            </div>
                            <div class="flex_row7">
                                <img class="image8" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                                <h5 class="highlight64">Government</h5>
                                <img class="image8" src="./assets/f70fbc94c56c50dac4530224a6dacd00.png" alt="alt text" />
                                <h5 class="highlight65">Firm</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

        <section class="section4_2">
            <section class="section4_1">
                <div class="rect51"></div>
                <section class="section4">
                    <div class="flex_row8">
                        <div class="group4">
                            <div class="group5">
                                <img class="cover" src="./assets/e31b7c19bc19574e86889ec11f04b94c.png" alt="alt text" /><img class="image10" src="./assets/5311198a88af7c85c2655fb6bce2ae4b.png" alt="alt text" />
                            </div>
                            <img class="image9" src="./assets/9e587cbf29723335a89d42cef6bf6f81.png" alt="alt text" />
                        </div>
                        <div class="flex_col5">
                            <h1 class="big_title1">Multi Platform Webpage</h1>
                            <h5 class="highlight31">
                                Access it from anywhere, on any device, with our multi-platform compatibility. Whether you&#x27;re on
                                a desktop, tablet, or smartphone, your website will adapt seamlessly to provide an optimal viewing
                                experience.
                            </h5>
                        </div>
                    </div>
                </section>

            </section>

        </section>

        <section class="section5_2">
            <section class="section5_1">
                <section class="section5">
                    <div class="box">
                        <img class="image5" src="./assets/9f78829e4ee99794fe7c07ecfea0c22b.png" alt="alt text" />
                        <h5 class="highlight5">Customer</h5>
                    </div>
                    <div class="box1">
                        <div class="flex_row9">
                            <div class="flex_row10">
                                <img class="image7" src="./assets/b7d70b3e461c0843917dccfb693590df.png" alt="alt text" />
                                <h5 class="highlight4">
                                    &quot;As a satisfied customer of [SaaS Provider], I want to share my positive experience with
                                    others. Their software as a service platform has greatly improved the efficiency and productivity of
                                    our business operations. The cloud-based solution is user-friendly and regularly updated to stay
                                    ahead of the technology curve.
                                </h5>
                            </div>
                            <img class="image6" src="./assets/a581d1583c3f4b02d1acad77d77b918b.png" alt="alt text" />
                        </div>
                    </div>
                </section>

            </section>

        </section>

        <section class="section6">
            <div class="wrapper">
                <hr class="line" size="1" />
                <div class="wrapper1">
                    <img class="image11" src="./assets/9d1982df56d1311d03af954236043c0b.png" alt="alt text" />
                    <h5 class="highlight7">Copyright Ngestu 2024. All right reserved</h5>
                </div>
            </div>
            <section class="section6_1">
                <section class="section61">
                    <div class="group6">
                        <div class="group7">
                            <div class="rect10"></div>
                            <div class="wrapper2"></div>
                        </div>
                    </div>
                    <div class="flex_row11">
                        <div class="flex_col6">
                            <h3 class="subtitle1">Support</h3>
                            <h5 class="highlight82">123 Ngestu, Jakarta,   17127, Indonesia.</h5>
                            <h5 class="highlight83">shopify@gmail.com</h5>
                            <h5 class="highlight84">+021-888-999</h5>
                        </div>
                        <div class="flex_col7">
                            <h3 class="subtitle2">Account</h3>
                            <h5 class="highlight85">My Account</h5>
                            <h5 class="highlight86">Login / Register</h5>
                            <h5 class="highlight86">Cart</h5>
                            <h5 class="highlight86">Wishlist</h5>
                            <h5 class="highlight86">Shop</h5>
                        </div>
                        <div class="flex_col8">
                            <h3 class="subtitle">Quick Link</h3>
                            <h5 class="highlight87">Privacy Policy</h5>
                            <h5 class="highlight88">Terms Of Use</h5>
                            <h5 class="highlight89">FAQ</h5>
                            <h5 class="highlight89">Contact</h5>
                        </div>
                        <div class="flex_col9">
                            <div class="flex_col10">
                                <h3 class="subtitle3">Download App</h3>
                                <div class="info3">Save Rp.50.000 with App New User Only</div>
                                <img class="image13" src="./assets/cdc77088e032942caff65e8602c0f199.png" alt="alt text" />
                            </div>
                            <img class="image14" src="./assets/b5a193e688075a398ff43ba59317b852.png" alt="alt text" />
                        </div>
                    </div>
                </section>

            </section>

        </section>

    </main>
    <script type="text/javascript">
        AOS.init();
        new Sticky('.sticky-effect');
    </script>
</body>

</html>


<?php
    if (isset($_SESSION['login_user'])){
        $username = $_SESSION['login_user'];
        $stmt = "SELECT id from users where username = '$username'";
        $result = mysqli_query($conn, $stmt);
        $row = $result->fetch_assoc();
        $userId = $row['id'];
       
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $productId = $_POST['productId'];
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $phoneNumber = $_POST['phoneNumber'];

            // Get product details
            $productQuery = "SELECT * FROM websites WHERE id = $productId";
            $productResult = $conn->query($productQuery);

            if ($productResult->num_rows > 0) {
                $productData = $productResult->fetch_assoc();
                $productName = $productData["name"];
                $price = $productData["price"];

                // Insert order
                $orderQuery = "INSERT INTO orders (user_id, product_id, full_name, email, city, phone_number) VALUES ('$userId', '$productId', '$fullName', '$email', '$city', '$phoneNumber')";
                $orderResult = $conn->query($orderQuery);

                if ($orderResult) {
                    // Insert revenue record
                    $addRevenueQuery = "INSERT INTO revenue_records (amount, description) VALUES ('$price', '$productName')";
                    $addRevenueResult = $conn->query($addRevenueQuery);
                    
                    if ($addRevenueResult) {
                        echo "Order placed successfully.";
                    } else {
                        echo "Failed to add revenue record: " . $conn->error;
                    }
                } else {
                    echo "Failed to place order: " . $conn->error;
                }
            } else {
                echo "Product not found.";
            }
        }
    }
?>
