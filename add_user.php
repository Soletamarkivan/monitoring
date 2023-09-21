<?php
session_start();


if ($_SESSION['usertype'] == 'admin') {
} else {
    header('location: index.php');
}
?>



<head>

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
                                                <input type="text" class="form-control" placeholder="Company" name="company" id="company">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Department</label>
                                                <input type="text" class="form-control" placeholder="Department" name="department" id="department">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Position</label>
                                                <input type="text" class="form-control" placeholder="Position" name="position" id="position">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Usertype</label>
                                                <input type="text" class="form-control" placeholder="Usertype" name="usertype" id="usertype">
                                            </div>


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
    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQUERY SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {

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
                var usertype = $('#usertype').val();






                // var usertype = $('#').val();




                console.log(first_name, middle_name, last_name, email, username, password, employee_id, company, department, position, usertype);

                if (first_name && middle_name && last_name && email && username && password && employee_id && company && department && position && usertype) {
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
                            usertype: usertype




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