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
							</div>
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

											<!-- <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
												<td>Doris Wilder</td>
												<td>Sales Assistant</td>
												<td>Female</td>
												<td>B.A, B.C.A</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="c7aea9a1a887a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</span></strong></a>
												</td>
												<td>2010/09/20</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
												<td>Angelica Ramos</td>
												<td>Executive Officer</td>
												<td>Male</td>
												<td>B.COM., M.COM.</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="d7beb9b1b897b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</span></strong></a>
												</td>
												<td>2009/10/09</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
												<td>Gavin Joyce</td>
												<td>Developer</td>
												<td>Female</td>
												<td>B.TACH, M.TACH</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="3a53545c557a5f425b574a565f14595557">[email&#160;protected]</span></strong></a>
												</td>
												<td>2010/12/22</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
												<td>Jennifer Chang</td>
												<td>Regional Director</td>
												<td>Male</td>
												<td>B.A, B.C.A</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5d34333b321d38253c302d3138733e3230">[email&#160;protected]</span></strong></a>
												</td>
												<td>2010/11/14</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
												<td>Brenden Wagner</td>
												<td>Software Engineer</td>
												<td>Female</td>
												<td>B.TACH, M.TACH</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="87eee9e1e8c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></strong></a>
												</td>
												<td>2011/06/07</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
												<td>Fiona Green</td>
												<td>Operating Officer</td>
												<td>Male</td>
												<td>B.A, B.C.A</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="422b2c242d02273a232f322e276c212d2f">[email&#160;protected]</span></strong></a>
												</td>
												<td>2010/03/11</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
												<td>Shou Itou</td>
												<td>Regional Marketing</td>
												<td>Female</td>
												<td>B.COM., M.COM.</td>
												<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="751c1b131a35100d14180519105b161a18">[email&#160;protected]</span></strong></a>
												</td>
												<td>2011/08/14</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
											</tr> -->
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
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Datatable -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<!-- <script src="js/styleSwitcher.js"></script> -->

</body>

</html>