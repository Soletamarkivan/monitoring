<?php
session_start();


if ($_SESSION['access_id'] == '1') {
} else {
    header('location: index.php');
}
?>



<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>Monitoring</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <?php
        include "includes/admin_header.php";

        ?>

        <!--**********************************
            Sidebar start
        ***********************************-->

        <?php
        include "includes/admin_sidebar.php";
        ?>

        <!--**********************************
            Sidebar end
        ***********************************-->




        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">



                <!-- Total of Borrowed -->

                <!-- Tables -->

                <!-- USER MANAGEMENT TABLE -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">LIST OF ITEMS</h4>
                                    <!-- ADD BUTTON  -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>ITEM CODE</th>
                                                    <th>QUANTITY</th>
                                                    <th>UNIT</th>
                                                    <th>ITEM DESCRIPTION</th>
                                                    <th>AVAILABILITY</th>
                                                    <th>ACTION</th>


                                                </tr>
                                            </thead>
                                            <tbody class="">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- END OF USER MANAGEMENT TABLE -->



                <!-- COMPUTER MANAGEMENT TABLE -->

                <!-- END OF COMPUTER MANAGEMENT TABLE -->

                <!-- End of Tables -->

            </div>


        </div>


    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <?php
    include "includes/admin_footer.php";
    ?>

    <!--**********************************
            Footer end
        ***********************************-->







    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="js/dashboard/dashboard-1.js"></script>

    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->


    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>



    <script>
        $(document).ready(function() {

            var table2 = $('#example2').DataTable({


                "ajax": {
                    "url": "json_item.php",
                    "dataSrc": ""
                },
                "columns": [{

                        "data": "no"
                    },
                    {
                        "data": "item_code"
                    },
                    {
                        "data": "quantity"
                    },
                    {
                        "data": "unit"
                    },
                    {
                        "data": "item_desc"
                    },


                ],
                language: {
                    paginate: {
                        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
                    }
                }
            });
        })
    </script>
</body>


</html>