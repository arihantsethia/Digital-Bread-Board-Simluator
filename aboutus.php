<?php include('header.php'); 
session_start();?>

		<div style="position:absolute; top:0; right:00px; background-color:#fff; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25); width:300px; height:79px;">
            <div id="login_avatar" style="width:79px; height:79px; float:left; margin:0; background-image: url('<?php echo "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['user_email'] ) ) ) . "?d=mm&s=50"; ?>')">
                <!--<img id="login_avatar" src="img/ani_avatar_static_01.png" style="width:125px; height:125px;" />-->
            </div>
            <div style="width: 110px; height: 79px; float:left; margin:0; font-family: 'Droid Sans', sans-serif; color:#666666; font-size:12px; border:0; height:100%; line-height: 50px; padding-left:20px; padding-right: 20px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><p>
                Welcome, <?php echo $_SESSION['user_name']; ?></p>
            </div>
            <div class="login_logout">
                <a href="index.php?logout" style="width:49px; height:19px; padding-top: 31px; display:block; text-align: center; font-size:10px; font-family: 'Droid Sans', sans-serif; color:#666666; border:0; background: transparent; cursor: pointer;" >Logout</a>
            </div>
            
        </div>
	<body style="background: #f1f1f1 url(../img/bg/patterns/noise.png);>
        
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="index.html"><a href="home.php">Home<span class="subheader">Welcome</span></a></li>
							<li class="project.html"><a href="project.php">Project<span class="subheader">About The Project</span></a></li>
							<li class="howto.html"><a href="howto.php">How To Use<span class="subheader">Instructions</span></a></li>
							<li class="current-menu-item"><a href="aboutus.php">About Us<span class="subheader">Who We Are</span></a></li>
							<li class="contact.html"><a href="contact.php">Contact<span class="subheader">Get in touch</span></a></li>
							<li class="software.html"><a href="software.php">Software<span class="subheader">Experiment</span></a></li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					
					<!-- content -->
					<div id="content">
						
						<!-- title -->
						<div id="page-title">
							<span class="title">About US</span>
							<span class="subtitle">The Team</span>
						</div>
						<!-- ENDS title -->
						
						<!-- filter -->
						
						<!-- ENDS filter -->
						
						<!-- Portfolio -->
						<div id="projects-list">						
							
		
							<!-- project -->
							<div class="project">
								<h1>Aditya Kumar Jha</a></h1>
								
								<!-- shadow -->
								<div class="project-shadow">
									<!-- project-thumb -->
									<div class="project-thumbnail">
										
										<!-- meta -->
										<ul class="meta">
											<li><strong>NAME :</strong> Aditya Kumar Jha </li>
											<li><strong>Dept. </strong> CSE (BTech 2nd year) </li>
											<li><strong>Roll No.</strong> 11010102 </li>
											<li><strong>Contact No.</strong> 8812016281</li>
											<li><a href="http://www.facebook.com/adityajha26"> Visit Website</a></li>
										</ul>
										<!-- ENDS meta -->
										
										<a class="cover"><img src="img/jha2.jpg"  alt="Feature image" /></a>
									</div>
									<!-- ENDS project-thumb -->
									
																		
								
								</div>
								<!-- ENDS shadow -->
							</div>
							<!-- ENDS project -->
							<!-- project -->
							<div class="project">
								<h1>Arihant Sethia</a></h1>
								
								<!-- shadow -->
								<div class="project-shadow">
									<!-- project-thumb -->
									<div class="project-thumbnail">
										
										<!-- meta -->
										<ul class="meta">
											<li><strong>Name : </strong> Arihant Sethia </li>
											<li><strong>Dept. </strong> CSE (BTech 2nd year) </li>
											<li><strong>Roll No.</strong> 11010106 </li>
											<li><strong>Contact No.</strong> 08011244745</li>
											<li><a href="http://www.facebook.com/sethia.arihant"> Visit Website</a></li>
										</ul>
										<!-- ENDS meta -->
										
										<a class="cover"><img src="img/arihant.jpg"  alt="Feature image" /></a>
									</div>
									<!-- ENDS project-thumb -->
									
																
								
								</div>
								<!-- ENDS shadow -->
							</div>
							<!-- ENDS project -->
							<!-- project -->
							<div class="project">
								<h1>Arun Bhati</a></h1>
								
								<!-- shadow -->
								<div class="project-shadow">
									<!-- project-thumb -->
									<div class="project-thumbnail">
										
										<!-- meta -->
										<ul class="meta">
											<li><strong>Name : </strong> Arun Bhati </li>
											<li><strong>Dept. </strong> CSE (BTech 2nd year) </li>
											<li><strong>Roll No.</strong> 11010108 </li>
											<li><strong>Contact No.</strong> 08486297407</li>
											<li><a href="http://www.facebook.com/arnbhati"> Visit Website</a></li>
										</ul>
										<!-- ENDS meta -->
										
										<a class="cover"><img src="img/arun.jpg "  alt="Feature image" /></a>
									</div>
									<!-- ENDS project-thumb -->
								</div>
								<!-- ENDS shadow -->
							</div>
							<!-- ENDS project -->
							
							
							
							
		
						</div>
						<!-- ENDS Portfolio -->
		
					</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						<li class="col">
							<h6>Pages</h6>
							<ul>
								<li class="page_item"><a href="home.php">Home</a></li>
								<li class="page_item"><a href="project.php">Project</a></li>
								<li class="page_item"><a href="howto.php">How To Use</a></li>
								<li class="page_item"><a href="aboutus.php">About Us</a></li>
								<li class="page_item"><a href="contact.php">Contact</a></li>
							</ul>
						</li>
						
						
						<li class="col" style="width:582px">
							<h6>About</h6>
							" BREAD BOARD SIMULATOR is a software program that converts your personal computer into a fully-functioning electronics laboratory with thousands of components and devices that are easily interconnected. This  Site provides a plateform for powerful schematic design and simulation virtually. It gives you the flexibility to design and test electronic circuits, trying all the "what if" scenarios without ever worrying about faulty parts or bad connections. "
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">All Rights Reserved. <a href="https://www.facebook.com/AsyncTech">AsyncTech</a> </div>
					<!-- Social -->
					<ul class="social ">
						<li><a href="https://www.facebook.com/AsyncTech" class="poshytip  facebook" title="Become a fan"></a></li>
					</ul>
					<!-- ENDS Social -->
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
</body>
<?php include('footer.php'); ?>