<?php
	include('connection/connection.php');

	$result_form = "";
	if($_POST){
		$name = $_POST['name'];
		$email_address = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['Message'];

		if($name == ''){
			$result_form = "nama tidak boleh kosong <br>";
		}
		if($email_address == ''){
			$result_form = "email tidak boleh kosong <br>";
		}
		if($subject == ''){
			$result_form = "subject tidak boleh kosong <br>";
		}
		if($message == ''){
			$result_form = "message tidak boleh kosong <br>";
		}

		if($result_form == ''){
			$sql = "INSERT INTO contact_form (name,email_address,subject,message) VALUE('".$name."','".$email_address."','".$subject."','".$message."')";

			if(mysqli_query($con,$sql)){
					$result_form = "Berhasil Menyimpan Pesan Anda!";
			}
			else{
					$result_form="Gagal Menyimpan Pesan Anda!";
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Project Progweb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>R</span>onaldo</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! We Are</span>
		  				<h1>Ronaldo <span>Group</span> </h1>
	  				<h2>My Teams
						  <span
						     class="txt-rotate"
						     data-period="500"
						     data-rotate='[ "Rinto.", "Hardus.", "Edon."]'></span>
						</h2>
					</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
						<?php 
				         	 	$sql = "SELECT * FROM biodata WHERE id=2";
				         	 	$result = mysqli_query($con,$sql);
				         	 	$rowAbout = mysqli_fetch_assoc($result);
				         ?>
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Us</h2>
		          	<?php echo $rowAbout['About Me']; ?>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span><?php echo $rowAbout['Name']; ?></span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span><?php echo $rowAbout['Date_of_birth']; ?></span></li>
		            	<li class="d-flex"><span>Address:</span> <span><?php echo $rowAbout['address']; ?></span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span><?php echo $rowAbout['zip_code']; ?></span></li>
		            	<li class="d-flex"><span>Email:</span> <span><?php echo $rowAbout['email']; ?></span></li>
		            	<li class="d-flex"><span>Phone: </span> <span><?php echo $rowAbout['phone']; ?></span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="<?php echo $rowAbout['project_complate']; ?>">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-partner">
    	<div class="container">
    		<?php 
    			$sql = "SELECT * FROM gallery";
    			$result = mysqli_query($con,$sql);
    			if(mysqli_num_rows($result) > 0){
    				$i=0;
    				while($rowPic = mysqli_fetch_assoc($result)){
    					if($i==0){
    						echo '<div class="row">';
    					}
    					?>
    					<div class="col-sm ftco-animate">
		    				<a href="#" class="partner"><img src="images/company/<?php echo $rowPic['id']?>.png" class="img-fluid" alt="Colorlib Template"></a>
		    			</div>
    					<?php
    					$i=$rowPic['space'];
    					if($i==5){
    						echo '</div>';
    						$i=0;
    					}
    				}
    			}
    		 ?>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Education</a></li>
					      <li><a href="#page-2">Experience</a></li>
					      <li><a href="#page-3">Skills</a></li>
					      <li><a href="#page-4">Awards</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">

					  <div id="page-1" class= "page one">
					  <h2 class="heading">Education</h2>
					 
						<?php 
						$sql ="SELECT * FROM education";
						$result = mysqli_query($con,$sql);
						if(mysqli_num_rows($result)>0){
							while($rowEdu = mysqli_fetch_assoc($result)){
								?>
								<div class="resume-wrap d-flex ftco-animate">
							    	<div class="icon d-flex align-items-center justify-content-center">
							    		<span class="flaticon-ideas"></span>
							    	</div>
							    	<div class="text pl-3">
				    					<span class="date"><?php echo $rowEdu['start'];?> - <?php echo ($rowEdu['end'] == 0 )?'Present' : $rowEdu['end'] ; ?></span>
				    					<h2><?php echo $rowEdu['title']; ?></h2>
				    					<span class="position"><?php echo $rowEdu['school']; ?></span>
				    					<p><?php echo $rowEdu['edu']; ?></p>
			    					</div>
		    					</div>
								<?php
							}
						}
					 ?>
					
					  </div>

					  <div id="page-2" class= "page two">
					  	<h2 class="heading">Experience</h2>
					    
						 <?php 
							 $sql = "SELECT * FROM experiences";
							 $result = mysqli_query($con, $sql);
							 if(mysqli_num_rows($result)> 0){
								 while($rowExp = mysqli_fetch_assoc($result)){
									 ?>
 								<div class="resume-wrap d-flex ftco-animate">
					    			<div class="icon d-flex align-items-center justify-content-center">
					    			<span class="flaticon-ideas"></span>
					    		</div>
					    		<div class="text pl-3">

									<!-- Start & End -->
		    						<span class="date"><?php echo $rowExp['start']; ?> - <?php echo $rowExp['end']; ?></span>
									
									<!-- Label -->
									<h2><?php echo $rowExp['label']; ?> </h2>
		    						<span class="position"><?php echo $rowExp['school']; ?></span>
									<!-- content -->
		    						<p><?php echo $rowExp['content']; ?></p>
			    					</div>
		    					</div>	
									 <?php
								 }
							 }
						 ?>

					  </div>
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	<?php 
					  	$sql = "SELECT * FROM main_skills";
					  	$result = mysqli_query($con,$sql);
					  	if(mysqli_num_rows($result) > 0){
					  		$i=0;
					  		while($rowMainSkills = mysqli_fetch_assoc($result)){
					  			if($i==0){
						  			echo '<div class="row progress-circle mb-5">';
					  			}
					  			?>	
					  			
					  			<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4"><?php echo $rowMainSkills['label']; ?></h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='<?php echo $rowMainSkills['percentage'] ?>'>
						          <span class="progress-left">
		                        <span class="progress-bar border-primary"></span>
								          </span>
								          <span class="progress-right">
		                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold"><?php echo $rowMainSkills['percentage']; ?><sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0"><?php echo $rowMainSkills['last_week']; ?>%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0"><?php echo $rowMainSkills['last_mounth']; ?>%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
								</div>
							</div>
					  		<?php
					  			$i=$rowMainSkills['id'];
					  			if($i==3){
					  				echo '</div>';
					  				$i=0;
					  			}
					  		}
					  	 }
					  	 ?>
						<?php 
							$sql = "SELECT * FROM skills";
							$result = mysqli_query($con,$sql);
							if(mysqli_num_rows($result) >0){
								$i=0;
								while($rowSkills = mysqli_fetch_assoc($result)){
										if($i==0){
											echo '<div class="row">';
										}
									?>
									<?php echo '<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>'.$rowSkills['label'].'</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
										  	aria-valuemin="0" aria-valuemax="100" style="width:'.$rowSkills['percentage'].'%">
										    <span>'.$rowSkills['percentage'].'%</span>
												  	</div>
												</div>
											</div>
										</div>'; 
									?>
									<?php
									$i=$rowSkills['id'];
									if($i==2){
										echo '</div>';
										$i=0;
									}
								}
							}
						 ?>			
						</div>	
					</div>
					  <div id="page-4" class= "page four">
					    <h2 class="heading">Awards</h2>
					    	<?php 
							$sql =  "SELECT * FROM awards";
							$result = mysqli_query($con,$sql);
							if(mysqli_num_rows($result) > 0){
								while($rowAwards = mysqli_fetch_assoc($result)){
									?>
									<div class="resume-wrap d-flex ftco-animate">
								    	<div class="icon d-flex align-items-center justify-content-center">
								    		<span class="flaticon-ideas"></span>
								    	</div>
								    	<div class="text pl-3">
					    					<span class="date"><?php echo $rowAwards['start'];?> - <?php echo ($rowAwards['end'] == 0 )?'Present' : $rowAwards['end'] ; ?></span>
					    					<h2><?php echo $rowAwards['label'];?></h2>
					    					<span class="position"><?php  echo $rowAwards['title'];?></span>
					    					<p><?php echo $rowAwards['brief']; ?></p>
				    					</div>
				    				</div>

									<?php
								}
							}

					  	 ?>
	    				</div>
					 </div>
			  </div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
         	 <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
      	  </div>
    		<div class="row">
					<?php 
						$sql = "SELECT * FROM services";
						$result = mysqli_query($con,$sql);
						if(mysqli_num_rows($result) > 0){
							while($rowService = mysqli_fetch_assoc($result)){
								?>
								<div class="col-md-4 text-center d-flex ftco-animate">
									<a href="#" class="services-1 shadow">
										<span class="icon">
											<i class="<?php echo $rowService['icon'] ?>"></i>
										</span>
										<div class="desc">
											<h3 class="mb-5"><?php echo $rowService['label']; ?></h3>
											<p><?php echo $rowService['brief']; ?></p>
										</div>
									</a>
								</div>
							<?php
							}
						}
					 ?>
				</div> <!-- div row  -->
    	</div>  <!-- div container  -->
    </section>
 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-0">
    	<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">Our Projects</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    	
		<?php 
        	$sql = "SELECT * FROM gallery_project";
        	$result = mysqli_query($con,$sql);
        	if(mysqli_num_rows($result)>0){
        		$i=0;
        		while($rowProject = mysqli_fetch_assoc($result)){
        			if($i==0){
        				echo '<div class="row no-gutters">';
        			}
        			?>
					<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('images/project/<?php echo $rowProject['id'];?>.jpg');">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#"><?php echo $rowProject['title']; ?></a></h3>
	    					<span><?php echo $rowProject['sub_title']; ?></span>
	    				</div>
	    				</div>
	    			</div>

        			<?php
        			$i=$rowProject['id'];
        			if($i==3){
        				echo '</div>';
        				$i=0;
        			}
        		}
        	}
    		?>

    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container-fluid px-md-5">
		<div class="row d-md-flex align-items-center">
			<?php 
        	$sql = "SELECT * FROM temp";
        	$result = mysqli_query($con,$sql);
        	if(mysqli_num_rows($result)>0){
        		while($rowTemp = mysqli_fetch_assoc($result)){
        		?>
        		
		         <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 shadow">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $rowTemp['total'] ?>"><?php echo $rowTemp['total']; ?></strong>
		                <span><?php  echo $rowTemp['label']; ?></span>
		              </div>
		            </div>
				</div>

        			<?php
        		}
        	}
    		?>

        </div>
      </div>
    </section>


    <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blog</h1>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
		
		<?php 
			$sql = "SELECT * FROM blog";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result)> 0){
				$i=0;
				while($rowBlog = mysqli_fetch_assoc($result)){
					if($i==0){
						echo '<div class="row d-flex">';
					}

					?>
					 <div class="col-md-4 d-flex ftco-animate">
			          	<div class="blog-entry justify-content-end">
			              <a href="single.html" class="block-20" style="background-image: url('images/blog/<?php echo $rowBlog['id']?>.jpg');">
			              </a>
			              <div class="text mt-3 float-right d-block">
			                <h3 class="heading"><a href="single.html"><?php echo $rowBlog['label']; ?></a></h3>
			                <div class="d-flex align-items-center mb-3 meta">
				                <p class="mb-0">
				                	<span class="mr-2"><?php echo $rowBlog['month'];?>. <?php echo $rowBlog['date']; ?>, <?php echo $rowBlog['year']; ?></span>
				                	<a href="#" class="mr-2"><?php echo $rowBlog['name']; ?></a>
				                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
				                </p>
			                </div>
			                <p><?php echo $rowBlog['content']; ?></p>
			              </div>
			            </div>
			          </div>
					<?php
					$i=$rowBlog['id'];
					if($i==3){
						echo '</div>';
						$i=0;
					}
				}
			}
		 ?>
        
      </div>
    </section>

    <section class="ftco-section ftco-hireme img" style="background-image: url(images/bg_1.jpg)">
    	<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
		<!--  -->
        <?php 
     	$sql= "SELECT * FROM contact_me";
     	$result = mysqli_query($con,$sql);
     	if(mysqli_num_rows($result)>0){
     		while($rowContact_Me = mysqli_fetch_assoc($result)){
     		?>
		        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
	          	<div class="align-self-stretch box text-center p-4 shadow">
	          		<div class="icon d-flex align-items-center justify-content-center">
	          			<span class="<?php echo $rowContact_Me['icon'] ?>"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-4"><?php echo $rowContact_Me['label']; ?></h3>
				            <p><a href="<?php echo $rowContact_Me['link'] ?>"><?php echo $rowContact_Me['content']; ?></a></p>
				          </div>
		       		   </div>
		          </div>
         		<?php
         		}
         	}
         ?>
        </div>

		<p><?php echo $result_form; ?></p>
        <div class="row no-gutters block-9">

          <div class="col-md-6 order-md-last d-flex">

            <form action="#" class="bg-light p-4 p-md-5 contact-form" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" >
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/about.jpg);"></div>
          </div>

        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5 ">

          <div class="col-md ">
            <div class="ftco-footer-widget mb-4 text-center d-flex justify-content-center">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5 ">
				
				 <?php 
					 $sql = "SELECT * FROM social_media";
					 $result = mysqli_query($con, $sql);
					 if(mysqli_num_rows($result)> 0){
						 while($rowSocial = mysqli_fetch_assoc($result)){
							 ?>
								<li class="ftco-animate"><a href="<?php echo $rowSocial['link']; ?>" target="_blank" ><span class="<?php echo $rowSocial['icon'];?>"></span></a></li>
							<?php
							 }
						 }
					 ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
