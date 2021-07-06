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
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Products
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
									<a class="btn btn-primary btn-lg" href="product-add.php"><i class="icon-plus-sign"></i>  Add New Product</a>
						  		</div>
						  		<div class="clearfix"></div>
						  		<h1>Products Inventory (<?php echo $_REQUEST['date'];?> ) </h1>
						  		<div class="col-lg-12 listing">
						  			<table class="table table-striped table-bordered">
									  	<thead>
										  <tr>
											  <th>Product Name</th>
											  <!--<th>Supplier</th>-->
											  <th>Unit Price</th>
											  <th>Unit Measure</th>
											  <th>In Stock</th>
											  <th>Amount</th>
											  <th>Actions</th>
										  </tr>
									  	</thead>   
									  <tbody>
									  	<?php foreach ($members as $key => $member):?>
									  	<?php if($key >= count($products)) break;?> 
										<tr>
											<?php $rand = array('25,000.00','30,000.00','50,000.00');?>
											<td><?php echo $products[$key][0];?></td>
											 <!--<td><?php echo $member[0];?></td>-->
											<td><?php echo $products[$key][1];?></td>
											<td><?php echo $unit_types[rand(0,count($unit_types)-1)];?></td>
											<td><?php echo rand(50,100);?></td>
											<td>Php <?php echo $rand[rand(0,2)];?></td>
											<td class="center">
												<a class="btn btn-success" href="table.html#" data-toggle="modal" data-target="#addStockModal">
													<i class="icon-zoom-in "></i>  
												</a>
												<a class="btn btn-info" href="product-edit.php">
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
	<div class="modal fade" id="addStockModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">	    
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add Stock</h4>
	      </div>
	      <div class="modal-body">
	      	<form role="form">
			    <label>Date</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="icon-calendar"></i></span>
				  <input type="text" class="form-control" placeholder="" value="<?php echo date('Y-m-d');?>">
				</div>
				<label>Supplier</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="icon-user"></i></span>
				  <input type="text" class="form-control" value="Alberto A. Mananay Jr.">
				</div>
				<br/>
				<label>Product Name</label>
				<div class="input-group">				  
					<span class="input-group-addon"><i class="icon-paste"></i></span>
				  <input type="text" class="form-control" value="Product 1">
				</div>
				<br>
				<label>Quantity</label>
				<div class="input-group">				  
				  <input type="text" class="form-control" value="">
				</div>
                <br>
                <label>Unity Type</label>
				<div class="input-group">				  
				  <input type="text" class="form-control" value="Kilogram" disabled>
				</div>
                <br>
			    <label>Total Amount</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="icon-money"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Php">
				</div>
			</form>	                                                     
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="addCustomerBtn">Save</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
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
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
		<script type='text/javascript' src='assets/js/example.js'></script>

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