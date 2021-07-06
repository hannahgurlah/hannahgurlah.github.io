<?php include "header.php";?>
	<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Add Payment</h4>
			      </div>
			      <div class="modal-body">
			      <?php include 'form-contribution.php';?>
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
						    	<h3 class="panel-title"><span class="glyphicons stats"><i></i></span> Sto. Nino Subdivision  Members Monthly Dues
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class="pull-right">
						  			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
									  <i class="icon-plus-sign"></i>Add New Payment
									</button>

						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-lg-6">
						  				<div class="well">
						  					<h3>Total Paid Monthly Dues as of February 2014</h3>
						  					<h1 class="red">Php 1,432,000.00</h1>
						  				</div>
						  			</div>
						  		</div>
						  		<hr>

						  		<h2>Listing of Total Paid Monthly Dues per Member</h2>
						  		<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Member Name</th>
									  <th>Particulars</th>
									  <th>Amount</th>
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php foreach ($members as $key => $member):?>
							  	<tr>
									<td><?php echo $member[0];?></td>
									<td class="center">
											<?php 
												$types = array('Monthly Membership Fee','Water Bill','Damages','Citation and Violation');
												echo $types[rand(0,count($types)-1)];
											?>
											
										</td> 
									<td class="center">Php 1,000.00</td>
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
<?php include "footer.php";?>