<?php include "header.php";?>

				<!-- Modal -->
			<div class="modal fade" id="loanpayment" tabindex="-1" role="dialog" aria-labelledby="LoanLabel" aria-hidden="true">
			  <div class="modal-dialog" style="width:750px">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="LoanLabel">Loan Payment</h4>
			      </div>
			      <div class="modal-body">
			      <?php include 'form-loan-payment.php';?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Submit Loan Payment</button>
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
						    	<h3 class="panel-title"><span class="glyphicons stats"><i></i></span> Sto. Nino Subdivision  Loan Details
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class="pull-right">

						  			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loanpayment">
									  <i class="icon-money"></i> Loan Payment
									</button>

						  		
						  			<a href="loan-form.php" class="btn btn-primary btn-lg"><i class="icon-plus-sign"></i> Apply New Loan</a>
						  		</div>
						  		<hr>

						  		<h2>Listing of Active Loan</h2>
						  		<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Member Name</th>
									  <th>Loan Amount</th>
									  <th>Terms</th>
									  <th>Monthly Due</th>
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Anton Phunihel</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 578.00
									</td>
								</tr>
								<tr>
									<td>Alphonse Ivo</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 578.00
									</td>
								</tr>
								<tr>
									<td>Thancmar Theophanes</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 578.00
									</td>
								</tr>
								<tr>
									<td>Walerian Khwaja</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Clemens Janko</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Chidubem Gottlob</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Hristofor Sergio</td>
									<td class="center">Php 368,523.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 685.36
									</td>
									
								</tr>
								<tr>
									<td>Tadhg Griogair</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">2 yrs</td>
									<td class="center">
										Php 685.36
									</td>
									
								</tr>
								<tr>
									<td>Pollux Beaumont</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Adam Alister</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Carlito Roffe</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Sana Amrin</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">1 yr</td>
									<td class="center">
										Php 578.00
									</td>
									
								</tr>
								<tr>
									<td>Adinah Ralph</td>
									<td class="center">Php 25,422.00</td>
									<td class="center">3 yrs</td>
									<td class="center">
										Php 365.50
									</td>
									
								</tr>
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