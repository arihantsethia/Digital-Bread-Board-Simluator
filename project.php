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
							<li class="current-menu-item"><a href="project.php">Project<span class="subheader">About The Project</span></a></li>
							<li class="howto.html"><a href="howto.php">How To Use<span class="subheader">Instructions</span></a></li>
							<li class="aboutus.html"><a href="aboutus.php">About Us<span class="subheader">Who We Are</span></a></li>
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
							<span class="title">PROJECT</span>
							<span class="subtitle">DIGITAL BREADBOARD SIMULATOR</span>
						</div>
						<!-- ENDS title -->
						
						
						
		
						<!-- project column (left)-->
						<div class="project-column">
							<!-- shadow -->
							<div class="project-shadow">
								<div class="project-thumbnail"><img src="img/breadboard.jpg"  alt="Feature image" /></div>
								<!-- meta -->
								<ul class="meta">
									<li><strong>Project date</strong> Nov 28th 2012 </li>
								</ul>
								<!-- ENDS meta -->
								<div class="portfolio-left-shadow"></div>
							</div>
							<!-- ENDS shadow -->
							
							
							<!-- project gallery -->
							<h2>Project gallery</h2>
							<ul class="project-gallery" style="width:267px">
								<li><a href="img/res.jpg" class="fancybox"><img src="img/res.jpg" alt="Pic"></a></li>
								<li><a href="img/cap.jpg" class="fancybox"><img src="img/cap.jpg" alt="Pic"></a></li>
								<li><a href="img/ic.jpg" class="fancybox"><img src="img/ic.jpg" alt="Pic"></a></li>
								<li><a href="img/led.jpg" class="fancybox"><img src="img/led.jpg" alt="Pic"></a></li>
							</ul>
							<!-- ENDS project gallery -->
							
							
						</div>
						<!-- ENDS project column (left)-->
						
						<!--project column (right) -->
						<div class="project-column" style="width:60%">
							<h1 class="project-title">Abstract</h1>
							<P>Digital electronics is an area of student learning that benefits substantially from hands-on experience. Simply simulating circuits at a high level will not instill a full understanding of the pitfalls involved in circuit building, testing and design in the real world.  Consequently most electronics related curriculums will include practical lab-work to supplement any other activities to be delivered as part of a course module .The aim of the project is to design an electronics simulator for use in testing circuitry designs . Simulating a circuit’s behavior before actually building it can greatly improve design efficiency by making faulty designs known as such, and providing insight into the behavior of electronics circuit designs. In particular, for integrated circuits, the tooling (photomasks) is expensive, breadboards are impractical, and probing the behavior of internal signals is extremely difficult. Therefore almost all IC design relies heavily on simulation.</P>
							<h2 class="project-title">HOW IT WORKS ?</h2>
							<p>First of all a user have to be a member of our team  so that he can download our software and can upload it's generated file  to get result of the desired circuit . In Our Software User can draw a desired circuit by just drag and drop the circuit components like ic ,led ,wires etc . on bread board . and finallly when circuit is done user have to generate an outputfile by click on generate button shown in the window . And to get the Result  he has to upload the generated file in our site . and finally he will get result .</p>
						</div>
						<div class="clear"></div>
						<!-- ENDS project column (right) -->
						
						
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
<?php include('views/footer/footer.php'); ?>