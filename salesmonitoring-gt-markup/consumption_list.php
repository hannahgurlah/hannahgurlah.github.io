<?php include "header.php";?>
					<!-- Modal -->
			<div class="modal fade" id="new-consumer" tabindex="-1" role="dialog" aria-labelledby="LoanLabel" aria-hidden="true">
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
						    	<h3 class="panel-title"><span class="glyphicons stats"><i></i></span> Sto. Nino Subdivision  Consumers
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
									<a href="consumption-add.php" class="btn btn-primary btn-lg"><i class="icon-plus-sign"></i>  Add New Consumption</a>
						  		</div>
						  		<hr>
<br><br>
						  		 
						  		<h1><?php echo "Consumptions";?> (<?php echo @$_REQUEST['date'];?> ) </h1>
						  		<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Consumer Name</th>
									  <th>Consumer Type</th>
									  <th>Total Amount of Consumption</th>
									  <th>Actions</th>
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php foreach ($members as $key => $member):?>
							  	<tr>
									<td><?php echo $member[0];?></td>
									<td>Regular Member</td> 
									<td>Php 922.00</td> 
									<td class="center">
										<a class="btn btn-success" href="table.html#">
											<i class="icon-zoom-in "></i>  
										</a>
										<a class="btn btn-info" href="table.html#">
											<i class="icon-edit "></i>  
										</a>
									</td>
								</tr>
								<?php endforeach;?>
								<tr>
									<td>Juan Makiling</td>
									<td>Non-Member</td>
									<td>Php 1,540.00</td>
									<td class="center">
										<a class="btn btn-success" href="table.html#">
											<i class="icon-zoom-in "></i>  
										</a>
										<a class="btn btn-info" href="table.html#">
											<i class="icon-edit "></i>  
										</a>
										<a class="btn btn-defualt" href="table.html#">
											Promote  
										</a>
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
<?php include "footer.php";?>