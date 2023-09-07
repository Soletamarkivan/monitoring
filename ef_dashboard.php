<?php
session_start();


if ($_SESSION['usertype'] == 'admin') {
} else {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

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
                <div class="form-head  d-flex flex-wrap align-items-center">
                    <h2 class="font-w600 title mb-2 mr-auto ">EF</h2>

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
                <div class="row">
                    <div class="col-xl-3 col-sm-6 m-t35 mx-auto">
                        <div class="card card-coin">
                            <div class="card-body text-center">
                                <img class="mb-3 currency-icon" width="80" height="80" viewbox="0 0 80 80" fill="none" src="images/logos/people.png">
                                <circle cx="40" cy="40" r="40" fill="white"></circle>
                                <path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#00ADA3"></path>
                                <path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z" fill="#00ADA3"></path>
                                </img>
                                <h2 class="text-black mb-2 font-w600">Total of Borrowed</h2>
                                <h2 class="text-black mb-2 font-w100">0000</h2>
                                <!-- <p class="mb-0 fs-14">
									<svg width="29" height="22" viewbox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d1)">
											<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"></path>
										</g>
										<defs>
											<filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
												<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
												<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
												<feoffset dy="1"></feoffset>
												<fegaussianblur stddeviation="2"></fegaussianblur>
												<fecolormatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0">
												</fecolormatrix>
												<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feblend>
												<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feblend>
											</filter>
										</defs>
									</svg>
									<span class="text-success mr-1">45%</span>This week
								</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- UNDER Maintenance -->
                    <div class="col-xl-3 col-sm-6 m-t35 mx-auto">
                        <div class="card card-coin">
                            <div class="card-body text-center">
                                <img class="mb-3 currency-icon" width="80" height="80" viewbox="0 0 80 80" fill="none" src="https://cdn-icons-png.flaticon.com/512/15/15682.png">
                                <circle cx="40" cy="40" r="40" fill="white"></circle>
                                <path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#00ADA3"></path>
                                <path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z" fill="#00ADA3"></path>
                                </img>
                                <h2 class="text-black mb-2 font-w600">Under Maintenance</h2>
                                <h2 class="text-black mb-2 font-w100">0000</h2>
                                <!-- <p class="mb-0 fs-14">
									<svg width="29" height="22" viewbox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d1)">
											<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"></path>
										</g>
										<defs>
											<filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
												<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
												<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
												<feoffset dy="1"></feoffset>
												<fegaussianblur stddeviation="2"></fegaussianblur>
												<fecolormatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0">
												</fecolormatrix>
												<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feblend>
												<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feblend>
											</filter>
										</defs>
									</svg>
									<span class="text-success mr-1">45%</span>This week
								</p> -->
                            </div>
                        </div>
                    </div>

                    <!-- Total of Damaged -->
                    <div class="col-xl-3 col-sm-6 m-t35 mx-auto">
                        <div class="card card-coin">
                            <div class="card-body text-center">
                                <img class="mb-3 currency-icon" width="80" height="80" viewbox="0 0 80 80" fill="none" src="images/logos/disruption.png">
                                <circle cx="40" cy="40" r="40" fill="white"></circle>
                                <path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#00ADA3"></path>
                                <path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z" fill="#00ADA3"></path>
                                </img>
                                <h2 class="text-black mb-2 font-w600">Total of Damaged</h2>
                                <h2 class="text-black mb-2 font-w100">000</h2>
                                <!-- <p class="mb-0 fs-14">
									<svg width="29" height="22" viewbox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d1)">
											<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"></path>
										</g>
										<defs>
											<filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
												<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
												<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
												<feoffset dy="1"></feoffset>
												<fegaussianblur stddeviation="2"></fegaussianblur>
												<fecolormatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0">
												</fecolormatrix>
												<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feblend>
												<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feblend>
											</filter>
										</defs>
									</svg>
									<span class="text-success mr-1">45%</span>This week
								</p> -->
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


    <?php
    include "includes/admin_footer.php";
    ?>

</body>

</html>