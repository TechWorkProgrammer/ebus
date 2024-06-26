<?php
session_start();
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Purchase History</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 ">
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

    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">User Purchase History</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 text-left uppercase">
                        <th class="py-3 px-6">User's Name</th>
                        <th class="py-3 px-6">Product Name</th>
                        <th class="py-3 px-6">Purchase Status</th>
                        <th class="py-3 px-6">Purchase Date</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <?php
                    

                    $username = $_SESSION['login_user'];
                    $stmt = "SELECT id from users where username = '$username'";
                    $result = mysqli_query($conn, $stmt);
                    $row = $result->fetch_assoc();
                    $userId = $row['id'];

                    $sql = "SELECT * FROM orders WHERE user_id = $userId ORDER BY order_date DESC";
                    $resultOrders = $conn->query($sql);

                    if ($resultOrders->num_rows > 0) {
                        while($rowOrder = $resultOrders->fetch_assoc()) {
                            $product_id = $rowOrder['product_id'];

                            $productSql = "SELECT * from websites where id = $product_id";
                            $productResult = $conn->query($productSql);
                            $productRow = $productResult->fetch_assoc();

                            echo "<tr class='border-b border-gray-200 hover:bg-gray-100'>";
                            echo "<td class='py-3 px-6'>$username</td>";
                            echo "<td class='py-3 px-6'>".$productRow['name']."</td>";
                            echo "<td class='py-3 px-6'>Complete/sent</td>";
                            echo "<td class='py-3 px-6'>".$rowOrder["order_date"]."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr class='border-b border-gray-200'>";
                        echo "<td class='py-3 px-6 text-center' colspan='4'>No purchase history found.</td>";
                        echo "</tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
