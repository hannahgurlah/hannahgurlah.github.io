<?php include "header.php";?>

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Billing Details</h4>
			      </div>
			      <div class="modal-body">
			      <?php include 'form-contribution-facility.php';?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit Payment</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

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
								<span class="dropdown-menu-title">Activity Logs</span>
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
							<h3 class="panel-title"><span class="glyphicons group"><i></i></span> Sto. Nino Subdivision  Members Billing
							<span class="pull-right">
							<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
							<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
							<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
							</span>
							</h3>
						</div>
						<div class="panel-body">
							<div class="col-lg-8">
								<label>Search Member</label>
								<div class="input-group">
									
									<input type="text" class="form-control" placeholder="">
									<span class="input-group-addon"><i class="icon-search"></i></span>
								</div> </div>
								<div class="col-lg-4" style="margin-top:40px; display:block;">
									<button class="btn btn-primary" data-toggle="modal" data-target="#new-consumer">
									<i class="icon-user"></i> Search
									</button>
								</div>
							</div>
							<br>
							<div class="clearfix"></div>
							<div class="col-lg-12">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th style="width:20%; border-top:none;">Member</th>
											<th style="width:20%; border-top:none;">Particular</th>
											<th style="width:15%; border-top:none;">Due Date</th>
											<th style="width:15%; border-top:none;">Amount</th>
											<th style="width:15%; border-top:none;">Payment Status</th>
											<th style="width:5%; border-top:none;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Henry Ong</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Bill for the Month of February</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 42,223.11</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-success">Paid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Daniel Sy</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Facility Fee</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 2,000.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-success">Paid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Richard Uy</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Bill for the Month of February</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 3,000.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-success">Paid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Dinah Penecitos Craven</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Bill for the Month of February</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 4,000.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-warning">Unpaid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Doreen Jabonero Garcia</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Bill for the Month of February</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 1,500.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-warning">Unpaid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Adinah Ralph</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Bill for the Month of February</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 1,500.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-warning">Unpaid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Adinah Ralph</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Toll Fee</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 25.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-success">Paid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
										<tr  style="width:100%; border-top:none">
											<td style="width:20%; border-top:none;">Pedro Bohol</td>
											<td style="width:20%; border-top:none;white-space:nowrap">Repairs and Maintenance</td>
											<td style="width:15%; border-top:none;">2014/03/15</td>
											<td style="width:15%; border-top:none;">Php 5,500.00</td>
											<td style="width:15%; border-top:none;"><span class="badge badge-success">Paid</span></td>
											<td style="width:5%; border-top:none;">
												<a class="btn btn-success" href="view-invoice.php"><i class="icon-zoom-in"></i></a>
											</td>														
										</tr>
									</tbody>
								</table>
							</div>
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