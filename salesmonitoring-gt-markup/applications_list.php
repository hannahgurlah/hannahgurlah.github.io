<?php include "header.php";?>
		
	<div class="container">
		<div class="row"> 
			<!-- start: Main Menu -->
			<?php include 'menu.php';?>
			<!-- end: Main Menu -->
			<!-- start: Content -->
			<div id="content" class="col-sm-11">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-success">
						  	<div class="panel-heading">
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Applications Report
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<?php include 'reports_filter.php';?>
						  		<h1><?php echo ucwords(str_replace("_", " ", $_REQUEST['type']));?> Application (<?php echo $_REQUEST['date'];?> ) </h1>
						  		<table class="table table-bordered table-striped">
						  			<thead>
						  			<tr>
									  <th>Member Name</th>
									  <th>Date registered</th>
									  <th>Membership Type</th>
									  <th>Actions</th>
								  </tr>
						  			</thead>
						  			<tbody>
						  				<?php 
						  					foreach ($members as $key => $member):
						  						if($key==$_REQUEST['cnt']) break;
						  				?> 
										<tr>
											<td><?php echo $member[0];?></td>
											<td class="center"><?php echo $_REQUEST['date'];?></td>
											<td class="center">
												<?php echo (@$member[3]=='bod')?'Board of Director':'';?>
												<?php echo (@$member[3]=='associate')?'Associate':'';?>
												<?php echo (empty($member[3]))?'Regular':'';?>
											</td>
											<td class="center">
												<a class="btn btn-success" href="table.html#">
													<i class="icon-zoom-in "></i>  
												</a>
												<a class="btn btn-info" href="table.html#">
													<i class="icon-edit "></i>  
												</a>
												<a class="btn btn-danger" href="table.html#">
													<i class="icon-trash "></i> 
												</a>
											</td>									
										</tr>
										<?php endforeach;?>
						  			</tbody>

						  		</table>
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
	<footer>
		<div class="container">
			<span style="text-align:left;float:left">&copy; 2013 <a href="#" alt="Twitter Bootstrap Themes" title="Twitter Bootstrap Themes">Sto. Nino Subdivision  Monitoring Software</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="#" alt="Bootstrap Admin Template" title="Bootstrap Admin Template">i-Sea</a></span>
		</div>
	</footer>
	
	<!-- start: JavaScript-->
	<!--[if !IE]>-->
		<script src="assets/js/jquery-2.0.3.min.js"></script>
	<!--<![endif]-->
	<!--[if IE]>
		<script src="assets/js/jquery-1.10.2.min.js"></script>
	<![endif]-->
	<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>
	<!--<![endif]-->
	<!--[if IE]>
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	
	<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.flot.min.js"></script>
	<script src="assets/js/jquery.flot.pie.min.js"></script>
	<script src="assets/js/jquery.flot.stack.min.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	<script src="assets/js/jquery.flot.time.min.js"></script>
	<script src="assets/js/retina.min.js"></script>
	<script src="assets/js/raphael.min.js"></script>	

	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/index.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){			
			$('#widgets-area-button').click();
		})
	</script>
	<!-- end: JavaScript-->
</body>
</html>