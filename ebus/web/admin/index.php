<?php
$title = 'dashboard';
require 'functions.php';
require 'layout_header.php';
$query = "SELECT o.*, w.*, u.username, w.name AS web_name, e.name AS employee_name
          FROM orders AS o 
          JOIN users AS u ON o.user_id = u.id 
          JOIN websites AS w ON o.product_id = w.id 
          JOIN employee AS e ON w.id = e.web_id
          ORDER BY o.order_id DESC 
          LIMIT 10";


$data = ambildata($conn, $query);

$query2 = "SELECT * from websites";
$query3 = "SELECT * from orders as o join websites as w on o.product_id = w.id join employee as e on w.id = e.web_id";
$data3 = ambildata($conn, $query3);
$data2 = ambildata($conn, $query2);
$num_rows = count($data);
$website_rows = count($data2);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Sold Product</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= count($data3)?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Website</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $website_rows?></span></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Revenue (*K)</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= count($data3)*300?></span></li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Newest Transaction</h3>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>PIC</th>
                                <th>Buyer</th>
                                <th>Price</th>
                                <th>Order Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $transaksi): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $transaksi['web_name'] ?></td>
                                    <td><?= $transaksi['employee_name'] ?></td>
                                    <td><?= $transaksi['username'] ?></td>
                                    <td><?= $transaksi['price'] ?></td>
                                    <td><?= $transaksi['order_date'] ?></td>
                                    <td>Paid</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'layout_footer.php';
?> 