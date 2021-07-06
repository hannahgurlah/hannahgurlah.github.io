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
						    	<h3 class="panel-title"><span class="glyphicons icon-align-justify"><i></i></span> Applications
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">						  		
						  		<div class="clearfix"></div>
						  		<div class="box">									
									<div class="box-content">
										<ul id="myTab" class="nav tab-menu nav-pills" style="margin-top:5px">
											<li class=""><a href="applications.php#pending">Pending</a></li>
											<li class=""><a href="applications.php#approved">Approved</a></li>
											<li class=""><a href="applications.php#declined">Declined</a></li>
										</ul>

										<div class="tab-content" id="myTabContent">
											<div id="pending" class="tab-pane">
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
												  			if($key > 9) break;
												  	?>
													<tr>
														<td><?php echo 1000+$key;?></td>
														<td class="center">2013/12/15</td>
														<td><?php echo $member[0];?></td>
														<td class="center">
															<?php 
																$types = array('Membership Application','Facility Rental Application','Member Details Update');
																echo $types[rand(0,count($types)-1)];
															?>
														</td>
														<td class="center" nowrap>
															<?php if(rand(0,1)==0):?>
																<?php $review = 'Checking';$btnClass='btn-warning';?>
																<span class="badge badge-warning">Pending for Checking</span>
															<?php else:?>
																<?php $review = 'Approval';$btnClass='btn-success';?>
																<span class="badge badge-success">Pending for Approval</span>
															<?php endif;?>
														</td>
														<td class="center" nowrap>
															<a class="btn <?php echo $btnClass;?>" href="table.html#" data-toggle="modal" data-target="#reviewModal<?php echo $review;?>">
																<i class="icon-check "></i>  
															</a>
															<a class="btn btn-success" href="table.html#" data-toggle="modal" data-target="#reviewModal">
																<i class="icon-eye-open "></i>  
															</a>
														</td>									
													</tr>
													<?php endforeach;?>
												  </tbody>
											  </table>
											</div>
											<div id="approved" class="tab-pane">
												<table class="table table-striped table-bordered">
												  	<thead>
													  <tr>
													  	  <th>#</th>
													  	  <th>Date</th>
														  <th>Member Name</th>
														  <th>Type</th>
														  <th>Approved By</th>
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
																$types = array('Membership Application','Loan Application','Member Details Update');
																echo $types[rand(0,count($types)-1)];
															?>
														</td>
														<td><?php echo $members[rand(5,8)][0];?></td>
														<td class="center" nowrap>
															<a class="btn btn-success" href="table.html#" data-toggle="modal" data-target="#reviewModal">
																<i class="icon-eye-open "></i>  
															</a>
														</td>									
													</tr>
													<?php endforeach;?>
												  </tbody>
											  </table>
											</div>											
											<div id="declined" class="tab-pane">
												<table class="table table-striped table-bordered">
												  	<thead>
													  <tr>
													  	  <th>#</th>
													  	  <th>Date</th>
														  <th>Member Name</th>
														  <th>Type</th>
														  <th>Declined By</th>
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
																$types = array('Membership Application','Facility Application','Member Details Update');
																echo $types[rand(0,count($types)-1)];
															?>
														</td>
														<td><?php echo $members[rand(5,8)][0];?></td>
														
														<td class="center" nowrap>
															<a class="btn btn-success" href="table.html#" data-toggle="modal" data-target="#reviewModal">
																<i class="icon-eye-open "></i>  
															</a>
														</td>									
													</tr>
													<?php endforeach;?>
												  </tbody>
											  </table>
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
 

	<!-- Modal -->
	<div class="modal fade" id="reviewModalApproval" tabindex="-1" role="dialog" aria-hidden="true">
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

	<!-- Modal -->
	<div class="modal fade" id="reviewModalChecking" tabindex="-1" role="dialog" aria-hidden="true">
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
				  <option>Checked</option>
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
<?php include "footer.php";?>