<?php include "header.php";?>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">COMM<span>Sea</span> Monitoring System</a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.php">
								<i class="halflings-icon white warning-sign"></i>
							</a>							
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.php">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li>
									<span class="dropdown-menu-title">Need Action</span>
								</li>	
                            	<li>
                                    <a href="index.php">
										<span class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Administrator 
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
										<span class="avatar"><img src="assets/img/avatar2.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Megan Abott
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
										<span class="avatar"><img src="assets/img/avatar3.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Kate Ross
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="index.php">
										<span class="avatar"><img src="assets/img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Julie Blank
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
										<span class="avatar"><img src="assets/img/avatar5.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Jane Sanders
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all User Activities</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						 
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.php">
								<i class="halflings-icon white user"></i> Admin
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php"><i class="halflings-icon white user"></i> Profile</a></li>
								<li><a href="login.php"><i class="halflings-icon white off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="container">
		<div class="row"> 
			<!-- start: Main Menu -->
			<?php include 'menu.php';?>
			<!-- end: Main Menu -->
			<!-- start: Content -->
			<div id="content" class="col-sm-11">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
						  	<div class="panel-heading">
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Activity Logs 
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
							    <ul class="media-list">
	                                <li class="media">
	                                  <img src="assets/img/avatar.jpg" alt="Avatar" class="pull-left thumbnail">
	                                  <div class="media-body">
	                                    <p class="media-heading">Cras sit amet <b>nibh libero</b>, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <a href="#">Click Here to Update.</a></p>
	                                  </div>
	                                </li>
	                                <li class="media">
	                                  <img src="assets/img/avatar.jpg" alt="Avatar" class="pull-left thumbnail">
	                                  <div class="media-body">
	                                    <p class="media-heading">Cras sit amet <b>nibh libero</b>, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <a href="#">Click Here to Update.</a></p>
	                                  </div>
	                                </li>
	                                <li class="media">
	                                  <img src="assets/img/avatar.jpg" alt="Avatar" class="pull-left thumbnail">
	                                  <div class="media-body">
	                                    <p class="media-heading">Cras sit amet <b>nibh libero</b>, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <a href="#">Click Here to Update.</a></p>
	                                  </div>
	                                </li>
	                                <li class="media">
	                                  <img src="assets/img/avatar.jpg" alt="Avatar" class="pull-left thumbnail">
	                                  <div class="media-body">
	                                    <p class="media-heading">Cras sit amet <b>nibh libero</b>, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <a href="#">Click Here to Update.</a></p>
	                                  </div>
	                                </li>
	                            </ul>
                        	</div>
                        </div>
					</div><!--/col-->	
				</div>	
			</div>
			<!-- end: Content -->
			
			<!-- start: Widgets Area -->
		</div><!--/row-->
	</div><!--/container-->
	<div class="clearfix"></div>
<?php include "footer.php";?>