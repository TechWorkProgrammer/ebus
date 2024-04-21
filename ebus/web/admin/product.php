<?php
$title = 'product';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT w.*, e.name as employee FROM websites as w JOIN employee as e ON e.web_id = w.id';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Products</h4> </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>PIC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $web): ?>
                                <tr>
                                    <td></td>
                                    <td><?= $web['name'] ?></td>
                                    <td>
                                        <?= $web['description'] ?>
                                    </td>
                                    <td><?= $web['price'] ?></td>
                                    <td><?= $web['employee'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
