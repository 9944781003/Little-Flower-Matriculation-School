<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themazine.com/html/remakri/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2019 07:37:57 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Litte Flower Matriculation School - Gallery</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

			
	</head>

	<body>

	
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
				<?php
				include ("common/header.php");

				function add(){
					
					  if(isset($_GET['eventname']))	{
					  
							switch($_GET['eventname']) {

								case 'Gandhi Jayandhi - 2019':
									$text='';
									$total_images=25;
									for($i=1;$i<=$total_images;$i++){
										$text.=
													"
													
													<div class='col-md-4 col-xs-12 col-sm-12 '>
														<div class='gallery-image-wrapper'>
															<div class='image'>
																<img src='images/gallery/2018-19/GandhiJayandhi/1 (".$i.").JPEG' alt=''>
																<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/GandhiJayandhi/1 (".$i.").JPEG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																	
															</div>
														</div> 
													</div>"
										;
									}
									return $text;
									break;
								case 'School Feast Day - 2019':
									$text='';
									$total_images=50;
									for($i=1;$i<=$total_images;$i++){
										$text.=
													"
													
													<div class='col-md-4 col-xs-12 col-sm-12 '>
														<div class='gallery-image-wrapper'>
															<div class='image'>
																<img src='images/gallery/2018-19/SchoolFeastDay/1 (".$i.").JPG' alt=''>
																<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/SchoolFeastDay/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																	
															</div>
														</div> 
													</div>"
										;
									}
									return $text;
									break;

								case 'Club Activities - 2019':
										$text='';
										$total_images=69;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/ClubActivities/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/ClubActivities/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'National SportsDay - 2019':
										$text='';
										$total_images=42;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/NationalSportsDay/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/NationalSportsDay/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'Kalvi Tv Inaguration - 2019':
										$text='';
										$total_images=3;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/KalviTvInaguration/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/KalviTvInaguration/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;






















							
								case 'Feast Holy Mass - 2019':
										$text='';
										$total_images=42;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/FeastHolyMass/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/FeastHolyMass/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;

								case 'Sports Day - 2019':
										$text='';
										$total_images=377;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-126 col-sm-12'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/SportsDay/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/SportsDay/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'Science Expo - 2019':
										$text='';
										$total_images=59;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-12 col-sm-12'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/scienceexpo/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/scienceexpo/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'Handwash Day - 2019':
										$text='';
										$total_images=44;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-12 col-sm-12'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/handwash/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/handwash/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'Teachers Day - 2018':
										$text='';
										$total_images=44;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-12 col-sm-12'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2017-18/Teachersday/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2017-18/Teachersday/1 (".$i.").JPG' class='zoom-view' title='We�ve done lot�s of work, Let�s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;
								case 'Yoga Day - 2019':
										$text='';
										$total_images=10;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/yogaDay/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/yogaDay/1 (".$i.").JPG' class='zoom-view' title='You are viewing Little Flower Matric School's pictures'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;

								case 'Kamarajar Birth Day - 2019':
										$text='';
										$total_images=44;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"
														
														<div class='col-md-4 col-xs-12 col-sm-12 '>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/KamarajarBirthDay/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/KamarajarBirthDay/1 (".$i.").JPG' class='zoom-view' title='You are viewing Little Flower Matric School's pictures'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;
										break;

							}
					  }
					  else	 {
					  
										$text='';
										$total_images=377;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-12 col-sm-12'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/SportsDay/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/SportsDay/1 (".$i.").JPG' class='zoom-view' title='You are viewing Little Flower Matric School's pictures'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										return $text;

					  
					  
					  
					  }




				}				 				
				?>
	

			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner">
				<div class="opacity">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</a></li>
						<li>Gallery</li>
					</ul>
					<h2>Gallery</h2>
				</div> <!-- /.opacity -->
			</div> <!-- /.theme-inner-banner -->
			

		


			<!-- 
			=============================================
				Our Gallery
			============================================== 
			-->
			<div class="our-gallery section-margin-top section-margin-bottom">
				<div class="gallery-wrapper container">
					<div class="row">

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 shop-sidebar">
							
							
							<div class="shop-popular-product">
								<h4>Popular Categories</h4>
								<form method="get">

								<ul>
									<li class="clearfix">
										<img src="images/gallery/2018-19/GandhiJayandhi/1 (10).jpeg" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Gandhi Jayandhi - 2019"  class="tran3s">
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/SchoolFeastDay/1 (10).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="School Feast Day - 2019"  class="tran3s">
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/NationalSportsDay/1 (10).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="National SportsDay - 2019"  class="tran3s">
										</div>
									</li>

									<li class="clearfix">
										<img src="images/gallery/2018-19/NationalSportsDay/1 (10).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="National SportsDay - 2019"  class="tran3s">
										</div>
									</li>


									<li class="clearfix">
										<img src="images/gallery/2018-19/ClubActivities/1 (10).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Club Activities - 2019"  class="tran3s">
										</div>
									</li>

									<li class="clearfix">
										<img src="images/gallery/2018-19/KalviTvInaguration/1 (1).jpeg" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Kalvi Tv Inaguration - 2019" class="tran3s">
										</div>
									</li>


									<li class="clearfix">
										<img src="images/gallery/2018-19/KamarajarBirthDay/1 (10).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Kamarajar Birth Day - 2019" name="test" value="" class="tran3s">
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/yogaDay/1 (10).jpg" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Yoga Day - 2019" name="test" value="" class="tran3s">
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/SportsDay/1 (108).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Sports Day - 2019" name="sportsday" value="" class="tran3s">
										</div>
									</li>

									<li class="clearfix">
										<img src="images/gallery/2018-19/ScienceExpo/1 (58).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Science Expo - 2019" name="test" value="" class="tran3s">

											
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/Handwash/1 (46).jpg" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Handwash Day - 2019" name="test" value="" class="tran3s">
											
										</div>
									</li>
									<li class="clearfix">
										<img src="images/gallery/2018-19/FeastHolyMass/1 (13).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Feast Holy Mass - 2019" class="tran3s">
										</div>
									</li>

									<li class="clearfix">
										<img src="images/gallery/2017-18/TeachersDay/1 (6).JPG" alt="" class="float-left">
										<div class="name float-left">
											<input class="btn btn-primary" type="submit" name="eventname" value="Teachers Day - 2018" name="test" value="" class="tran3s">
										</div>
									</li>

								</ul>
								</form>
							</div> <!-- /.shop-popular-product -->
						</div> <!-- /.shop-sidebar -->

						<div id="" class="col-md-9">
								<div id=""  class="shop-popular-product shop-sidebar">
								<?php 
								if(isset($_GET['eventname'])){
									echo "<h4>".$_GET['eventname']."</h4>" ;
								} else{
									echo "<h4>Sports Day - 2019</h4>" ;
								}
								
								?>
								</div>
								<?php echo add();?>
						</div>

					</div> <!-- /.row -->
				</div> <!-- /.gallery-wrapper -->
			</div> <!-- /.our-gallery -->




			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			<?php include("common/footer.php"); ?>


	  
	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

			
			


		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/bootstrap.min.js"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<!-- Camera Slider -->
		<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script type='text/javascript' src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script type='text/javascript' src='vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- Mega menu  -->
		<script type="text/javascript" src="vendor/bootstrap-mega-menu/js/menu.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- Fancybox -->
		<script type="text/javascript" src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		

		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from themazine.com/html/remakri/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2019 07:38:04 GMT -->
</html>

