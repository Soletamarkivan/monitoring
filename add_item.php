<?php
include "db_connection.php";

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
        include "includes/admin_sidebar.php";
        ?>





        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- <div class="form-head" style="background-image:url('images/background/bg3.jpg');background-position: bottom; ">
				<div class="container max d-flex align-items-center mt-0">
					<h2 class="font-w600 title text-white mb-2 mr-auto ">Dashboard</h2>
					<div class="weather-btn mb-2">
						<span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
						<select class="form-control style-1 default-select  mr-3 ">
							<option>Medan, IDN</option>
							<option>Jakarta, IDN</option>
							<option>Surabaya, IDN</option>
						</select>
					</div>
					<a href="javascript:void(0);" class="btn white-transparent mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
				</div>
			</div> -->
            <div class="container-fluid">
                <!-- <div class="form-head  d-flex flex-wrap align-items-center">
                    <h2 class="font-w600 title mb-2 mr-auto ">ADD ITEM</h2>

                    <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
                </div> -->
                <!-- <div class="row ">
					<button type="button" class="btn btn-secondary p-5 w-25 mx-auto">
						<h1>Users</h1>
					</button>
					<button type="button" class="btn btn-secondary p-5 w-25 mx-auto">
						<h1>Equipments</h1>
					</button>

				</div> -->

                <!-- Total of Borrowed -->

                <!-- Tables -->


                <div class="container-fluid">

                    <div class="row border">
                        <div class="card mx-auto">
                            <div class="mx-auto p-4">
                                <h4 class="card-title ">ADD ITEM</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

                                    <form id="add_item">

                                        <div class="form-row">

                                            <div class="form-group col-lg-6">
                                                <label>Item Code</label>
                                                <input type="text" class="form-control" placeholder="TL-000" name="item_code" id="item_code">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" placeholder="0" name="quantity" id="quantity">
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label>Unit</label>
                                                <input type="text" class="form-control" placeholder="Please input what kind of unit" name="unit" id="unit">
                                            </div>


                                            <div class="form-group col-lg-12">
                                                <label>Description Item</label>
                                                <input type="text" class="form-control" placeholder="Please input the description of item" name="item_desc" id="item_desc">
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


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



            $('#add_item').on('submit', function(e) {
                e.preventDefault()

                // alert("Hola");
                var item_code = $('#item_code').val();
                var quantity = $('#quantity').val();
                var unit = $('#unit').val();
                var item_desc = $('#item_desc').val();

                console.log(item_code, quantity, unit, item_desc)


                if (item_code && quantity && unit && item_desc) {
                    $.ajax({
                        method: 'POST',
                        url: 'code_add_item.php',
                        data: {

                            item_code: item_code,
                            quantity: quantity,
                            unit: unit,
                            item_desc: item_desc




                        },
                        success: function(data) {
                            console.log(data)
                            // $('#adduser').modal('hide');

                        }
                    });


                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 3500
                    })

                    // Swal.fire({
                    //     position: 'top-end',
                    //     icon: 'success',
                    //     title: 'Your work has been saved',
                    //     showConfirmButton: false,
                    //     timer: 3500
                    // })
                    // $('#adduser').modal('hide');


                





                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Note',
                        text: 'All fields are required',
                        // footer: '<a href="">Why do I have this issue?</a>'
                    })
                }


            });





        });
    </script>







</body>

</html>