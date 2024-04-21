<!-- /.container-fluid -->
<footer class="footer text-center">  </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="../assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../assets/js/dashboard1.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script>
        $('#btn_hapus').on('click',() => {
            return confirm('Yakin Menghapus data ?');
        });
        $(document).ready( function () {
            $('[data-toggle="tooltip"]').tooltip();
            var t = $('#table').DataTable({
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]],
                "language" : {
                    "sProcessing" : "Processing ...",
                    "lengthMenu" : "Show _MENU_ data per page",
                    "zeroRecord" : "No record",
                    "info" : "Page _PAGE_ From _PAGES_",
                    "infoEmpty" : "No data available",
                    "infoFiltered" : "(Filtered from total _MAX_ data)",
                    "sSearch" : "Search",
                    "oPaginate" : {
                        "sFirst" : "First",
                        "sPrevious" : "Previous",
                        "sNext" : "Next",
                        "sLast" : "Last"
                    }
                }
            });
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();

            
        } );
        $('#btn-refresh').on('click',() => {
            $('#ic-refresh').addClass('fa-spin');
            var oldURL = window.location.href;
            var index = 0;
            var newURL = oldURL;
            index = oldURL.indexOf('?');
            if(index == -1){
                window.location = window.location.href;
                
            }
            if(index != -1){
                window.location = oldURL.substring(0,index)
            }
            
        });

    </script>

    <?php if($_GET['crud'] == 'true'):?>
    <script type="text/javascript">
        var title = "<?php echo $_GET['title']?>";
        var msg = "<?php echo $_GET['msg']?>";
        var type = "<?php echo $_GET['type']?>";
        $.toast({
             heading: title,
             text: msg,
             position: 'top-right',
             loaderBg: '#fff',
             icon: type,
             hideAfter: 3500,
             stack: 6
         })
    </script> 
    <?php endif; ?>
</body>

</html>
