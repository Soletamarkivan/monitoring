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


    <!-- <script type="text/javascript" src="JsBarcode.all.min.js"></script> -->
    <!-- <script src="JsBarcode.all.min.js"></script> -->

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
                <!-- <div class="form-head  d-flex flex-wrap align-items-center">
                    <h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>

                </div> -->

                <!-- Tables -->

                <!-- USER MANAGEMENT TABLE -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">List of TEIS</h4>
                                    <!-- ADD BUTTON  -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl ">
                                        <div class="modal-content">
                                            <div class="modal-header ">
                                                <h5 class="modal-title" id="exampleModalLabel">CREATE TEIS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>


                                            <!-- START MODAL HERE -->
                                            <div class="modal-body">
                                                <form method="POST" id="form_add_profile">

                                                    <div class="modal-body p-0 m-0 ">
                                                        <div class="form-group text-right  text-dark" style="font-weight:bolder; font-size:13px">
                                                            <!-- <label>DATE</label> -->
                                                            <?php
                                                            echo date('F d, Y');
                                                            echo date('F d, Y');


                                                            ?>


                                                            <!-- <input type="text" name="txtfname" id="txtfname" class="form-control" placeholder="Date"> -->
                                                        </div>

                                                        <div class="row">
                                                            <!-- FIRST ROW -->
                                                            <div class="col-6">
                                                                <div class="form-group" style="font-weight:bolder ">
                                                                    <label>Company</label>

                                                                    <select name="company" class="form-control " id="company">
                                                                        <option value="" id="company" selected disabled>Choose Company</option>

                                                                        <?php


                                                                        $result = mysqli_query($db_connect, "SELECT * FROM company");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["company_name"]; ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>

                                                                    </select>

                                                                </div>



                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Borrower Name</label>


                                                                    <select name="borrower" class="form-control" id="borrower_name">
                                                                        <option value="">Choose Company First</option>

                                                                    </select>
                                                                </div>




                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Item Description</label>


                                                                    <select name="item_desc" class="form-control" id="item_desc">
                                                                        <option value="">Choose Item Code First</option>

                                                                    </select>
                                                                </div>



                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>TEIS #</label>


                                                                    <input type="text" name="teis_no" id="teis_no" class="form-control" placeholder="TEIS No.">
                                                                </div>

                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Quantity</label>


                                                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
                                                                </div>

                                                                <!-- <div class="form-group" style="font-weight:bolder">
                                                                    <label>Noted by</label>
                                                                    <select name="company" class="form-control" id="company">
                                                                        <option value="" id="txtcomp_view">Please Choose</option>

                                                                    </select>
                                                                </div> -->



                                                                <!-- SECOND ROW -->


                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Department</label>


                                                                    <select name="department" class="form-control" id="department">
                                                                        <option value="">Choose Company First</option>

                                                                    </select>
                                                                </div>


                                                                <div class="form-group " style="font-weight:bolder">
                                                                    <label>Item Code</label>
                                                                    <select name="item_code" class="form-control" id="item_code">
                                                                        <option value="" id="txtcomp_view" selected disabled>Item Code</option>
                                                                        <?php

                                                                        $result = mysqli_query($db_connect, 'SELECT * FROM item_code_msc');
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id'] ?>">
                                                                                <?php echo $row['item_code_name']; ?>
                                                                            </option>
                                                                        <?php
                                                                        }
                                                                        ?>


                                                                    </select>
                                                                </div>

                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Unit</label>

                                                                    <select name="unit" class="form-control" id="unit">
                                                                        <option value="" id="unit">Unit</option>
                                                                        <?php

                                                                        include "db_connection.php";
                                                                        $result = mysqli_query($db_connect, "SELECT * FROM unit");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["unit_name"]; ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>

                                                                    </select>
                                                                    <!-- <input type="text" name="unit" id="unit" class="form-control" placeholder="Unit"> -->
                                                                </div>







                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Purpose</label>


                                                                    <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Purpose">
                                                                </div>






                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Prepared by</label>

                                                                    <!-- <label>Company</label> -->
                                                                    <select name="company" class="form-control" id="prepared_by">
                                                                        <option value="" id="txtcomp_view">Please Choose</option>

                                                                        <?php


                                                                        $result = mysqli_query($db_connect, "SELECT users.id, users.first_name, users.last_name FROM `users` LEFT JOIN department on users.department_id = department.id WHERE department.department_name LIKE '%WAREHOUSE%';");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["first_name"] . ' ' . $row['last_name'] ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>
                                                                    </select>
                                                                </div>

                                                                <!-- 
                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Released by</label>
                                                                    <select name="company" class="form-control" id="company">
                                                                        <option value="" id="txtcomp_view">Please Choose</option>

                                                                    </select>
                                                                </div> -->

                                                            </div>









                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 form-group text-center" style="font-weight:bolder">
                                                                <label>Item Barcode</label>
                                                                <br>

                                                                <svg id="barcode"> </svg>
                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-info addprofile">Create TEIS</button>

                                                    </div>
                                                </form>


                                            </div>
                                            <!-- END MODAL HERE -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>USERNAME</th>
                                                    <th>PASSWORD</th>
                                                    <th>ACCESS</th>
                                                    <th>EMPLOYEE ID</th>
                                                    <th>COMPANY</th>
                                                    <th>DEPARTMENT</th>
                                                    <th>POSITION</th>
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
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <!-- <script src="js/plugins-init/datatables.init.js"></script> -->

    <!-- BARCODE SCRIPT -->
    <script type="text/javascript" src="JsBarcode.all.min.js"></script>
    <script src="JsBarcode.all.min.js"></script>



    <script>
        $(document).ready(function() {
            var table = $('#example3').DataTable({


                "ajax": {
                    "url": "table_json.php",
                    "dataSrc": ""
                },
                "columns": [{

                        "data": "no"
                    },
                    {
                        "data": "username"
                    },
                    {
                        "data": "password"
                    },
                    {
                        "data": "access_name"
                    },
                    {
                        "data": "employee_id"
                    },
                    {
                        "data": "company_name"
                    },
                    {
                        "data": "department_name"
                    },
                    {
                        "data": "position"
                    },

                ],
                language: {
                    paginate: {
                        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
                    }
                }
            });



            // DROP DOWN IN COMPANY
            $('#company').change(function() {
                var company_id = $(this).val();

                $.ajax({
                    method: 'POST',
                    url: 'department_action.php',
                    data: {
                        company_id

                    },
                    success: function(data) {
                        $('#department').html(data);
                    }
                });
                $('#position').empty().append('<option selected> Please Choose an Position </option>')
            });


            // $('#item_code').change(function() {
            //     const item_code_id = $(this).val();
            //     $.ajax({
            //         method: 'POST',
            //         url: 'barcode_action.php',
            //         data: {
            //             item_code_id
            //         },
            //         success: function(data) {
            //             $('#department').textContent(data);
            //         }
            //     })
            // })



            // DROP DOWN IN DEPARTMENT

            $('#department').change(function() {
                // alert("Hola");
                var borrower_id = $(this).val();
                console.log(borrower_id)
                $.ajax({
                    method: 'POST',
                    url: 'borrower_action.php',
                    data: {
                        borrower_id
                    },
                    success: function(data) {
                        $('#borrower').html(data);

                    }
                });

            });



            // DROP DOWN IN BORROWER



            $('#borrower').change(function() {
                // alert("Hola");
                var borrower_id = $(this).val();
                console.log(borrower_id)
                $.ajax({
                    method: 'POST',
                    url: 'borrower_action.php',
                    data: {
                        borrower_id
                    }
                });

            });



            // DROP DOWN IN ITEM CODE

            $('#company').change(function() {
                var company_id = $(this).val();

                $.ajax({
                    method: 'POST',
                    url: 'department_action.php',
                    data: {
                        company_id

                    },
                    success: function(data) {
                        $('#department').html(data);
                    }
                });
                $('#position').empty().append('<option selected> Please Choose an Position </option>')
            });



            // JsBarcode("#barcode", 'sdsd');



            $('#item_code').change(function() {
                // e.preventDefault()
                var item_desc_id = $(this).val();
                var item_desc_name = $.trim($(this).children("option:selected").html());
                var text = document.getElementById("barcode");




                // const printWindow = window.open('https://www.google.com', 'width=500,height=500,top=200,left=600');
                // printWindow.onload = function() {
                //     printWindow.print();
                // }



                // console.log(item_desc_name)
                // console.log(item_desc_id);

                $.ajax({
                    method: 'POST',
                    url: 'item_code_action.php',
                    data: {
                        item_desc_id

                    },
                    success: function(data) {
                        $('#item_desc').html(data);
                        $('#item_code_name').val(item_desc_name);
                        console.log(item_desc_name);

                        JsBarcode("#barcode", item_desc_name, {
                            width: 1
                        });

                        // JsBarcode("barcodebutton");


                    }

                });
                // $('#position').empty().append('<option selected> Please Choose an Position </option>')
            });



            $('#add_teis').on('submit', function(e) {
                e.preventDefault()

                // alert("Hola");
                var company = $('#company').val();
                var department = $('#department').val();
                var borrower_name = $('#borrower_name').val();
                var item_code = $('#item_code').val();
                var item_desc = $('#item_desc').val();
                var unit = $('#unit').val();
                var teis_no = $('#teis_no').val();
                var purpose = $('#purpose').val();
                var quantity = $('#quantity').val();
                var prepared_by = $('#prepared_by').val();







                // var usertype = $('#').val();




                // console.log(access);

                if (company && department && borrower_name && item_code && item_desc && unit && teis_no && purpose && quantity && prepared_by) {
                    $.ajax({
                        method: 'POST',
                        url: 'code.php',
                        data: {

                            company: company,
                            department: department,
                            borrower_name: borrower_name,
                            item_code: item_code,
                            item_desc: item_desc,
                            unit: unit,
                            teis_no: teis_no,
                            purpose: purpose,
                            quantity: quantity,
                            prepared_by: prepared_by




                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            // console.log(data)
                            // $('#adduser').modal('hide');

                        }
                    });



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




        })
    </script>








</body>

</html>