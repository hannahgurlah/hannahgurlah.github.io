<?php include "header.php";?>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Add Payment</h4>
			      </div>
			      <div class="modal-body">
			      <?php include 'form-contribution-otherfee.php';?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit Payment</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->



		
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
						    	<h3 class="panel-title"><span class="glyphicons stats"><i></i></span> Sto. Nino Subdivision  Other Fees
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class="pull-right">
						  			<!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
									  <i class="icon-plus-sign"></i> Add New Consumption
									</button> -->
										<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
									  <i class="icon-plus-sign"></i> Add New Fee
									</button>
						  		</div>
						  		<hr>
<br><br>
						  		<div class="row">
						  			<div class="col-lg-12">
						  				<div class="well">
						  					<h3>Total Paid for Other Fees as of February 2014</h3>
						  					<h1 class="red">Php 592,149.00</h1>
						  					<h3 class="blue"><small>Collection from Toll Fees</small> Php 524,563.25</h3>
						  					<h3 class="blue"><small>Collection from Repairs and Maintenance</small> Php 67,585.75</h3>
						  					<br>
						  				</div>
						  			</div>
						  			

						  			
						  		</div>
						  		<hr>

						  		<h2>Listing of Other Fees</h2>
						  		<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Type of Facilities</th>
									  <th>Payor</th>
									  <th>Amount</th>
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php foreach ($members as $key => $member):?>
							  	<tr>
									<td class="center">
											<?php 
												$types = array('Toll Fee','Repairs and Maintenance');
												echo $types[rand(0,count($types)-1)];
											?>
											
										</td>
									<td><?php echo $member[0];?></td> 
									<td>Php 25.00</td> 

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
			<span class="pull-left">&copy; 2014 <a href="#" alt="Twitter Bootstrap Themes" title="Twitter Bootstrap Themes">COOPSea Monitoring System</a></span>
			<span class="hidden-phone pull-right">Powered by: <a href="#" alt="Bootstrap Admin Template" title="Bootstrap Admin Template">i-Sea SysDev</a></span>
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
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/raphael.min.js"></script>
	<script src="assets/js/justgage.1.0.1.min.js"></script>
	
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
	
		<!-- inline scripts related to this page -->
	<script src="assets/js/pages/table.js"></script>
	<!-- end: JavaScript-->

</body>
</html>