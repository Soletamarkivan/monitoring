<?php
session_start();


if ($_SESSION['usertype'] == 'admin') {
} else {
	header('location: index.php');
}
?>



<head>
	<?php
	include "includes/admin_header.php";
	?>
</head>

<body>
	<?php
	include "includes/admin_sidebar.php";
	?>

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


				<!-- <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a> -->


				<!-- row -->


				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Profile Datatable</h4>
								<!-- ADD BUTTON  -->
								<button type="button" class="btn btn-primary mb-2  text-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus" aria-hidden="true"></i></button>
							</div>

							<!-- START ADD MODAL HERE -->
							<!-- Button trigger modal -->
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<form id="addprofile">
											<div class="modal-body text-left">

												<input type="text" placeholder="USERNAME" class="username text-center" name="username" id="username">
												<hr>

												<input type="text" placeholder="PASSWORD" class="password text-center" name="password" id="password">
												<hr>

												<input type="text" placeholder="USERTYPE" class="password text-center" name="usertype" id="usertype">


											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-danger light" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary addprofile ">Add Profile</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<!-- END ADD MODAL HERE -->
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>NO.</th>
												<th>USERNAME</th>
												<th>PASSWORD</th>
												<th>USERTYPE</th>
												<!-- <th>Education</th>
												<th>Mobile</th>
												<th>Email</th>
												<th>Joining Date</th>
												<th>Action</th> -->
											</tr>
										</thead>
										<tbody>


										</tbody>
									</table>



								</div>
							</div>

						</div>
					</div>

				</div>
			</div>






		</div>

	</div>
	<!--**********************************
            Content body end
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

	<script>
		$(document).ready(function() {
			$('#addprofile').on('submit', function() {

				// alert("Hola");
				var username = $('#username').val();
				var password = $('#password').val();
				var usertype = $('#usertype').val();

				// console.log(username);

				if (username && password && usertype) {
					$.ajax({
						method: 'POST',
						url: 'code.php',
						data: {

							username: username,
							password: password,
							usertype: usertype

						},
						success: function(data) {
							console.log(data)
							$('#examplemodal').modal('hide');

						}
					});

					Swal.fire({
						position: 'top-end',
						icon: 'success',
						title: 'Your work has been saved',
						showConfirmButton: false,
						timer: 3500
					})
					$('#form_add_profile').modal('hide');


				} else {
					Swal.fire({
						icon: 'error',
						title: 'Note',
						text: 'All fields are required',
						// footer: '<a href="">Why do I have this issue?</a>'
					})
				}


			})

		});
	</script>

</body>

</html>