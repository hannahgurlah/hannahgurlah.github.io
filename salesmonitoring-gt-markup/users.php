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
						    	<h3 class="panel-title"><span class="glyphicons group"><i></i></span> User Management
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class="col-lg-10 col-lg-offset-1">
									<h3>Search User</h3>
									<div class="well">
										<form role="form">
										  <div class="form-group col-lg-8">
										    <label class="sr-only" for="keywords">Search User</label>		    
										    <input type="text" class="form-control" placeholder="Search User	">
										  </div>
										  <button type="submit" class="btn btn-primary"><i class="icon-search"></i> Search</button>
										</form>
									</div>
								</div>						  		
								<div class="pull-right">
									<a href="#" class="btn btn-primary">
									  <i class="icon-plus-sign"></i> Add New User
									</a>
								</div>
						  		<div class="clearfix"></div>
						  		<table class="table table-striped table-bordered">
								  	<thead>
									  <tr>
									  	  <th>#</th>
									  	  <th>Username</th>
										  <th>Name</th>
										  <th>Status</th>
										  <th>Actions</th>
									  </tr>
								  	</thead>   
								  <tbody>
								  	<?php 
								  		$usernames = array('admin','albertm','rodelr');
								  		foreach ($members as $key => $member):
								  			if($key > 2) break;
								  	?>
									<tr>
										<td><?php echo 1000+$key;?></td>
										<td class="center"><?php echo $usernames[$key];?></td>
										<td><?php echo $member[0];?></td>
										<td class="center" nowrap>											
											<span class="badge badge-success">active</span>
										</td>
										<td class="center">
											<a class="btn btn-success" href="#">
												<i class="icon-zoom-in "></i>  
											</a>
											<a class="btn btn-info" href="#">
												<i class="icon-edit "></i>  
											</a>
											<a class="btn btn-danger" href="#">
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