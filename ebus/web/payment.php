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

<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/output.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>::-webkit-scrollbar {
        width: 8px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1; 
    }
        
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888; 
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555; 
    } body{background: #f5f5f5}.rounded{border-radius: 1rem}.nav-pills .nav-link{color: #555}.nav-pills .nav-link.active{color: white}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}</style>
    </head>
    <body className='snippet-body'>
    <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="">Choose Your Payment</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#order-detail" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Order Detail  </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link  "> <i class="fas fa-credit-card mr-2"></i> Mastercard  </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                                <div id="order-detail" class="tab-pane fade show active pt-3">
                                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                                    <input type="hidden" name="productId" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="fullName" value="<?php echo $_GET['fullName']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                    <input type="hidden" name="city" value="<?php echo $_GET['city']; ?>">
                                    <input type="hidden" name="phoneNumber" value="<?php echo $_GET['phoneNumber']; ?>">
                                    

                                    <?php
                                        // Check if form data exists
                                        if (isset($_GET['fullName']) && isset($_GET['email']) && isset($_GET['city']) && isset($_GET['phoneNumber'])) {
                                            $fullName = $_GET['fullName'];
                                            $email = $_GET['email'];
                                            $city = $_GET['city'];
                                            $phoneNumber = $_GET['phoneNumber'];
                                        ?>
                                            <div class="info bg-gray-100 p-6 rounded-lg shadow-md">
                                                <h2 class="text-2xl font-bold mb-4">Detail Information</h2>
                                                <div class="grid grid-cols-2 gap-6">
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">Full Name:</h3>
                                                        <p class="text-gray-700"><?php echo $fullName; ?></p>
                                                    </div>
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">Email:</h3>
                                                        <p class="text-gray-700"><?php echo $email; ?></p>
                                                    </div>
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">City:</h3>
                                                        <p class="text-gray-700"><?php echo $city; ?></p>
                                                    </div>
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">Phone Number:</h3>
                                                        <p class="text-gray-700"><?php echo $phoneNumber; ?></p>
                                                    </div>
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">Product:</h3>
                                                        <p class="text-gray-700"><?php echo $productName; ?></p>
                                                    </div>
                                                    <div class="border rounded p-4">
                                                        <h3 class="text-xl font-semibold mb-2">Price:</h3>
                                                        <p class="text-gray-700"><?php echo $price; ?></p>
                                                    </div>
                                                </div>
                                            </div>


                                            <?php } else { ?>
                                            <div class="info">
                                                <p>Error: Form data not found.</p>
                                            </div>
                                            <?php } ?>

                                            

                                    </form>
                                </div>

                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show  pt-3">
                                    <form role="form" action="sell.php" method="POST">

                                    <input type="hidden" name="productId" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="fullName" value="<?php echo $_GET['fullName']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                    <input type="hidden" name="city" value="<?php echo $_GET['city']; ?>">
                                    <input type="hidden" name="phoneNumber" value="<?php echo $_GET['phoneNumber']; ?>">
                                    


                                        <div class="form-group"> <label for="username">
                                                <h6>Card Owner</h6>
                                            </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Card number</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Expiration Date</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="submit" class="bg-blue-500 subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button></a>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- bank transfer info -->
                            <div id="net-banking" class="tab-pane fade pt-3">
                                <form role="form" action="sell.php" method="POST">

                                    <input type="hidden" name="productId" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="fullName" value="<?php echo $_GET['fullName']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                    <input type="hidden" name="city" value="<?php echo $_GET['city']; ?>">
                                    <input type="hidden" name="phoneNumber" value="<?php echo $_GET['phoneNumber']; ?>">
                                    


                                    <div class="form-group"> 
                                        <label for="Select Your Bank">
                                            <h6>Select your Bank</h6>
                                        </label> 
                                        <select class="form-control" id="ccmonth">
                                            <option value="" selected disabled>--Please select your Bank--</option>
                                            <option>BCA OneClick</option>
                                            <option>Mandiri</option>
                                            <option>CIMB Niaga</option>
                                        </select> 
                                        <h6 class="pt-2 pb-1">Put your account number</h6> 
                                        <input type="text" required class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <div class="card-footer"> 
                                            <button type="submit" class="bg-blue-500 subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <!-- End -->


                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
   


    </body>
</html>

<?php
    


?>