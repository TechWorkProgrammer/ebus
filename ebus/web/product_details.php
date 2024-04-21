<?php
session_start();
include 'config.php';

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $sql = "SELECT * FROM websites WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the selected product
        while($row = $result->fetch_assoc()) {
            $productName = $row["name"];
            $description = $row["description"];
            $price = $row["price"];
            $imageSrc = "assets/web" . $product_id . ".png";
        }
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID is not provided.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $productName; ?> Details</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include custom CSS -->
    <style>
        /* Style for modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100">

 <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="sell.php">Shop</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="index.php">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="sell.php">
                    <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    SHOPIFY
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path
                            d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

                <a class="pl-3 inline-block no-underline hover:text-black" href="orders.php">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>

<!-- Main Content -->
<div class="container mx-auto p-4 flex">
    <!-- Sidebar -->
    <div class="w-1/4 bg-gray-200 p-4 mr-4 rounded-lg">
        <h2 class="text-xl font-semibold mb-2">Popular Categories</h2>
        <ul>
            <li class="mb-2"><a href="product_details.php?id=1" class="text-blue-500 hover:text-blue-700">E-commerce</a></li>
            <li class="mb-2"><a href="product_details.php?id=2" class="text-blue-500 hover:text-blue-700">Gym Promotional</a></li>
            <li class="mb-2"><a href="product_details.php?id=3" class="text-blue-500 hover:text-blue-700">Dogfood Ready-made</a></li>
            <li class="mb-2"><a href="product_details.php?id=4" class="text-blue-500 hover:text-blue-700">Wedding</a></li>
            <li class="mb-2"><a href="product_details.php?id=5" class="text-blue-500 hover:text-blue-700">Travel</a></li>
            <li class="mb-2"><a href="product_details.php?id=6" class="text-blue-500 hover:text-blue-700">Restaurant</a></li>
            <li class="mb-2"><a href="product_details.php?id=7" class="text-blue-500 hover:text-blue-700">Charity</a></li>
            <li class="mb-2"><a href="product_details.php?id=8" class="text-blue-500 hover:text-blue-700">One Page</a></li>
        </ul>
    </div>
    
    <!-- Product Details -->
    <div class="w-3/4 bg-white p-4 rounded-lg shadow-lg border-2 border-gray-300">
        <h1 class="text-3xl font-bold mb-4 text-center"><?php echo $productName; ?> Details <span class="text-lg">😊</span></h1>
        <div class="flex flex-col items-center">
            <!-- Display product image -->
            <img class="w-64 h-auto mb-4 rounded-lg shadow-lg" src="<?php echo $imageSrc; ?>" alt="<?php echo $productName; ?>">
            <h2 class="text-2xl font-semibold mb-2"><?php echo $productName; ?></h2>
            <p class="text-gray-700 mb-4"><?php echo $description; ?></p>
            <p class="text-gray-900 font-semibold text-xl mb-4">Price: <?php echo $price; ?></p>
            <!-- Buy button -->
            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Buy Now</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 class="text-xl font-semibold mb-2">Enter Your Details</h2>
        <form id="orderForm" action="payment.php" method="GET">
            <!-- Hidden input field for product ID -->
            <input type="hidden" name="id" value="<?php echo $product_id; ?>">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="fullName">Full Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullName" name="fullName" type="text" placeholder="Full Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email Address">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" type="text" placeholder="City">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phoneNumber">Phone Number:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phoneNumber" name="phoneNumber" type="text" placeholder="Phone Number">
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Function to open the modal
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>



</body>
</html>

