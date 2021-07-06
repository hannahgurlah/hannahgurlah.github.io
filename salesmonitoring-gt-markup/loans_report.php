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
						<div class="panel panel-primary">
						  	<div class="panel-heading">
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Loans Report
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<?php include 'reports_filter.php';?>
						  		<h1>This Week</h1>
						  		<table class="table table-bordered table-striped">
						  			<thead>
						  			<tr>
						  				<th>Date</th>
						  				<th>Total Loans</th>
						  				<th>Loan Payments</th>
						  			</tr>
						  			</thead>
						  		<?php
						  			$ts = time();//strtotime($date);
								    $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
								    $end = strtotime('next saturday', $start);
								    $products = array();
								    $i=$start;
								    $a = 0;
								    $rand = array('25,000.00','30,000.00','50,000.00');
								    while ($i<=$end ) {								    
								    	$i = strtotime("+$a day",$start);
								    	$date = date('Y-m-d', $i);
								    	?>
								    	<tr>
								    		<td><?php echo $date;?></td>
								    		<td><a class="badge badge-info amount" href="<?php echo 'loans_list.php?date='.$date;?>">Php <?php echo $rand[rand(0,2)];?></td>
								    		<td><a class="badge badge-info amount" href="<?php echo 'loans_list.php?date='.$date;?>">Php <?php echo $rand[rand(0,2)];?></td>
								    	</tr>
								    	<?php
								    	$a++;								    	
								    }
						  		?>
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
			<span style="text-align:left;float:left">&copy; 2014 <a href="#" alt="Twitter Bootstrap Themes" title="Twitter Bootstrap Themes">COOPSea Monitoring System</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="#" alt="Bootstrap Admin Template" title="Bootstrap Admin Template">i-Sea SysDev </a></span>
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