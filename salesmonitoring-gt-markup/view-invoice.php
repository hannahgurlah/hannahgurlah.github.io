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
							<div class="clearfix"></div>
							<div class="col-lg-12">
								<div id="wrap">									
									<div class="row-fluid">    
									<div class="col-lg-6">
										
										<h3>Sto. Nino Village Homeowners Association, Inc</h3>
										Banilad Cebu and Mandaue Cities<br>Cebu
										<br>Tel: 0123456789<br>Email: stoninovillagebanilad@yahoo.com
										</div>
									  
									    <div class="col-lg-6">									    									   
									   <h3>Bill To</h3>
									   <p>Attn: Henry Ong</p>   
									   Address: 4 Swift   <br> Tel: 0123456789 	<br>Email: henryong@yahoo.com
									   
										</div> 
									</div>
									<div style="clear: both;"></div>
									<p>&nbsp;</p>
									<div class="row-fluid"> 
									<div class="col-lg-6">    	
										<h3 class="inv">Invoice No. 3</h3>
										<p>Period: 01-02-2014  to 28-02-2014</p>
										<p>Status: <span class="badge badge-success">Paid</span></p>
									</div>
									<div class="col-lg-6">

									<p style="font-weight:bold;">Reference No: SL-0003</p>

									<p style="font-weight:bold;">Date: 15-03-2014</p>
									<p>&nbsp;</p>    
									</div>
									<div style="clear: both;"></div>	
									</div>

										<table style="margin-bottom: 5px;" class="table table-bordered table-hover table-striped">

										<thead> 

										<tr> 

										    <th style="vertical-align:middle;">Particular</th> 
									               
									        <th style="text-align:center; vertical-align:middle;">Quantity</th>
										    <th style="padding-right:20px; text-align:center; vertical-align:middle;white-space:nowrap">Unit Price</th> 
									        <th style="padding-right:20px; text-align:center; vertical-align:middle;">Amount</th> 
										</tr>


										</thead> 

										<tbody>
											<tr>
												<th colspan='4' style="text-align:center">Previous Bill</th>
											</tr>
											<tr>
								                <td style="vertical-align:middle;">Balance</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">39,408.84</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">39,408.84</td> 
											</tr> 
											<tr>
												<th colspan='4' style="text-align:center">Current Charges</th>
											</tr>										
											<tr>
								                <td style="vertical-align:middle;">Monthly Dues</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">1,000.00</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">1,000.00</td> 
											</tr> 
											<tr>
								                <td style="vertical-align:middle;">Water Fee</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">100.00</td>								                
								                
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">100.00</td> 
											</tr>
											<tr><td style="text-align:right; padding-right:10px;;" colspan="3">Sub-Total (PHP)</td><td style="text-align:right; padding-right:10px;">1,100.00</td></tr>
											<tr>
												<th colspan='4' style="text-align:center">Other Charges</th>
											</tr>
											<tr>
								                <td style="vertical-align:middle;">Gate/Toll Fee</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">100</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">100</td> 
											</tr>											 
											<tr>
								                <td style="vertical-align:middle;">Surcharge(3% x prev. balance)</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">1,182.27</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">1,182.27</td> 
											</tr>
											<tr>
								                <td style="vertical-align:middle;">Citation</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">100</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">100</td> 
											</tr>
											<tr>
								                <td style="vertical-align:middle;">Garbage</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">100</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">100</td> 
											</tr>
											<tr>
								                <td style="vertical-align:middle;">GMM Penalty</td>
								                <td style="width: 70px; text-align:center; vertical-align:middle;">1</td>
								                <td style="width: 80px; text-align:right; padding-right:10px; vertical-align:middle;">100</td>
								                <td style="width: 100px; text-align:right; padding-right:10px; vertical-align:middle;">100</td> 
											</tr>
											<tr><td style="text-align:right; padding-right:10px;;" colspan="3">Sub-Total (PHP)</td><td style="text-align:right; padding-right:10px;">1,582.27</td></tr>
											<tr>
												<th colspan='4' style="text-align:center">Total</th>
											</tr>
									        
											<tr>
												<td style="text-align:right; padding-right:10px;;" colspan="3">Total (PHP)</td><td style="text-align:right; padding-right:10px;">42,091.11</td>
											</tr>
											<tr>
												<td style="text-align:right; padding-right:10px;;" colspan="3">Discount (PHP)</td><td style="text-align:right; padding-right:10px;">0.00</td>
											</tr>
											<tr><td style="text-align:right; padding-right:10px;;" colspan="3">Tax (VAT)</td><td style="text-align:right; padding-right:10px;">132.00</td></tr>											
											<tr><td style="text-align:right; padding-right:10px; font-weight:bold;" colspan="3">Total Amount (PHP)</td><td style="text-align:right; padding-right:10px; font-weight:bold;">42,223.11</td></tr>

										</tbody> 

										</table>
										<h2>Payments</h2>
										<table style="margin-bottom: 5px;" class="table table-bordered table-hover table-striped">
											<thead> 
												<tr>												    
											        <th style="text-align:center; vertical-align:middle;">Payment Date</th>
											        <th style="text-align:center; vertical-align:middle;">OR #</th>
											        <th>Notes</th>
											        <th style="vertical-align:middle;">Amount</th>
												</tr>												
											</thead>
											<tbody>
												<tr>
													<td>15-03-2014</td>
													<td>2314</td>
													<td>notes here</td>
													<td>PHP 42,223.11</td>
												</tr>												
											</tbody>
										</table>
									<div style="clear: both;"></div>
									<div class="row-fluid"> 
									<div class="span12">    	
									    </div>
									</div>
									<div style="clear: both;"></div>
									<div class="row-fluid">
									<div class="span5"> 
									<p>&nbsp;</p>
									<p>Customer: Henry Ong </p>
									<p>&nbsp;</p>
									<p style="border-bottom: 1px solid #666;">&nbsp;</p>
									<p>Signature &amp; Stamp</p>
									</div>

									<div class="span5 offset2"> 
									<p>&nbsp;</p>
									<p>Issued By:  </p>
									<p>&nbsp;</p>
									<p style="border-bottom: 1px solid #666;">&nbsp;</p>
									<p>Signature &amp; Stamp</p>
									</div>
									</div>

									</div>
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