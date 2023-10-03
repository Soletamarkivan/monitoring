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
                <div class="form-head  d-flex flex-wrap align-items-center">
                    <h2 class="font-w600 title mb-2 mr-auto ">Add User Profile</h2>

                    <!-- <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a> -->
                </div>
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

                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add User</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

                                    <form id="adduser">

                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Juan" name="first_name" id="first_name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control" placeholder="Cruz" name="middle_name" id="middle_name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Dela Cruz" name="last_name" id="last_name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Juandelacruz@gmail.com" name="email" id="email">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Juan-IT" name="username" id="username">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Employee ID</label>
                                                <input type="text" class="form-control" placeholder="043" name="employee_id" id="employee_id">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Company</label>
                                                <select name="company" class="form-control" id="company">
                                                    <option value="" id="txtcomp_view">Choose Company</option>
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

                                            <div class="form-group col-md-3">
                                                <label>Department</label>


                                                <select name="txtdept" class="form-control" id="department">
                                                    <option value="">Choose Department</option>

                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Position</label>


                                                <select name="txtposition" class="form-control" id="position">
                                                    <option value="">Choose Position</option>

                                                </select>
                                            </div>
                                            <!-- 
                                            <div class="form-group col-md-3">
                                                <label>Department</label>
                                                <input type="text" class="form-control" placeholder="Department" name="department" id="department">
                                            </div> -->

                                            <!-- <div class="form-group col-md-3">
                                                <label>Position</label>
                                                <input type="text" class="form-control" placeholder="Position" name="position" id="position">
                                            </div> -->

                                            <div class="form-group col-md-6">
                                                <label>Usertype</label>


                                                <select name="access" class="form-control" id="access">
                                                    <option value="">Choose Access</option>
                                                    <?php
                                                    $result = mysqli_query($db_connect, "SELECT * FROM access");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row["access_name"]; ?></option>
                                                    <?php
                                                    }

                                                    ?>

                                                </select>
                                            </div>

                                            <!-- <div class="form-group col-md-6">
                                                <label>Usertype</label>
                                                <input type="text" class="form-control" placeholder="Usertype" name="usertype" id="usertype">
                                            </div> -->


                                            <!-- 
                                            <div class="form-group col-md-6">
                                                <label>Company</label>
                                                <select id="inputState" class="form-control default-select">
                                                    <option selected="">Choose Company</option>
                                                    <option>FMC</option>
                                                    <option>MBI</option>
                                                    <option>MSE</option>
                                                    <option>EF</option>

                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Department</label>
                                                <select id="inputState" class="form-control default-select">
                                                    <option selected="">Choose Department</option>
                                                    <option>IT</option>
                                                    <option>HR</option>
                                              
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Position</label>
                                                <select id="inputState" class="form-control default-select">
                                                    <option selected="">Choose Position</option>
                                                    <option>Manager</option>
                                                    <option>Programmer</option>
                                              

                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Usertype</label>
                                                <select id="inputState" class="form-control default-select">
                                                    <option selected="">Choose Usertype</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                              

                                                </select>
                                            </div> -->
                                            <!-- <div class="form-group col-md-6">
                                                <label>Department</label>
                                                <input type="text" class="form-control" placeholder="IT">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Position</label>
                                                <input type="text" class="form-control" placeholder="Manager">
                                            </div> -->
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

                <!-- TABLE WITH DESIGN -->
                <!-- 
				<div class="container-fluid">

					<div class="row">

						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Primary Table Hover</h4>
									<button type="button" class="btn btn-primary mb-2  text-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div> -->

                <!-- DISPLAY DATA -->
                <!-- <div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table primary-table-bg-hover">
											<thead>
												<tr>
													<th scope="col">NO.</th>
													<th scope="col">USERNAME</th>
													<th scope="col">PASSWORD</th>
													<th scope="col">USERTYPE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th>1</th>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<th>2</th>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div> -->
                <!-- END OF THE WITH DESIGN -->

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
    <script src="js/plugins-init/datatables.init.js"></script>


    <script>
        $(document).ready(function() {

            // Dropdown Jquery
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

            $('#department').change(function() {
                // alert("Hola");
                var department_id = $(this).val();
                console.log(department_id)
                $.ajax({
                    method: 'POST',
                    url: 'position_action.php',
                    data: {
                        department_id
                    },
                    success: function(data) {
                        $('#position').html(data);

                    }
                });

            });

            // $('#position').change()

            // $('#position').empty().append('<option selected >Please choose an Position</option>')
            // document.getElementById("adduser").reset();
            // Swal.fire({
            //     position: 'top-end',
            //     icon: 'success',
            //     title: 'Your work has been saved',
            //     showConfirmButton: false,
            //     timer: 3500
            // })


            // $(document).on('submit', '#addprofile', function() {
            // 	alert('sds');
            // 	// var username = $('#username').val();
            // 	// var password = $('#password').val();
            // 	// var usertype = $('#usertype').val();
            // 	// var equipments = $('#equipments').val();
            // 	// var equipments_type = $('#equipments_type').val();
            // 	// var status = $('#status').val();

            // 	console.log(username);

            // })

            // alert("Hola"); 
            $('#adduser').on('submit', function(e) {
                e.preventDefault()

                // alert("Hola");
                var first_name = $('#first_name').val();
                var middle_name = $('#middle_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var username = $('#username').val();
                var password = $('#password').val();
                var employee_id = $('#employee_id').val();
                var company = $('#company').val();
                var department = $('#department').val();
                var position = $('#position').val();
                var access = $('#access').val();






                // var usertype = $('#').val();




                // console.log(access);

                if (first_name && middle_name && last_name && email && username && password && employee_id && company && department && position && access) {
                    $.ajax({
                        method: 'POST',
                        url: 'code.php',
                        data: {

                            first_name: first_name,
                            middle_name: middle_name,
                            last_name: last_name,
                            email: email,
                            username: username,
                            password: password,
                            employee_id: employee_id,
                            company: company,
                            department: department,
                            position: position,
                            access: access




                        },
                        success: function(data) {
                            console.log(data)
                            // $('#adduser').modal('hide');

                        }
                    });

                    $('#position').empty().append('<option selected >Please choose an Position</option>')
                    document.getElementById("adduser").reset();
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