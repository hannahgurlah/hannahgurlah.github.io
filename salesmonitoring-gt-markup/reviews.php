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
						    	<h3 class="panel-title"><span class="glyphicons icon-align-justify"><i></i></span> Pending Reviews
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">						  		
						  		<div class="clearfix"></div>
						  		<table class="table table-striped table-bordered">
								  	<thead>
									  <tr>
									  	  <th>#</th>
									  	  <th>Date</th>
										  <th>Member Name</th>
										  <th>Type</th>
										  <th>Status</th>
										  <th>Actions</th>
									  </tr>
								  	</thead>   
								  <tbody>
								  	<?php 
								  		foreach ($members as $key => $member):
								  			if($key > 2) break;
								  	?>
									<tr>
										<td><?php echo 1000+$key;?></td>
										<td class="center">2013/12/15</td>
										<td><?php echo $member[0];?></td>
										<td class="center">
											<?php 
												$types = array('Contribution','Consumption','Loan');
												echo $types[rand(0,count($types)-1)];
											?>
										</td>
										<td class="center" nowrap>
											<?php if(rand(0,1)==0):?>
												<span class="badge badge-warning">Pending Review</span>
											<?php else:?>
												<span class="badge badge-success">Pending Approval</span>
											<?php endif;?>
										</td>
										<td class="center" nowrap>
											<a class="btn btn-success" href="table.html#" data-toggle="modal" data-target="#reviewModal">
												<i class="icon-check "></i>  
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
 

	<!-- Modal -->
	<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">	    
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Review</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="hero-unit">
	      		<h1>Details Here</h1>
	      	</div>
	      	<fieldset>
	      		<legend>Conclusion</legend>
				<select class="form-control">
				  <option>Approved</option>
				  <option>Decline</option>
				</select>
	      	</fieldset>                                                  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Submit</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
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