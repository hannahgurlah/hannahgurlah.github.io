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
						    	<h3 class="panel-title"><span class="glyphicons group"><i></i></span> <em>Sto. Nino Subdivision </em> Members 
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
									  <i class="icon-plus-sign"></i> Add New Member
									</button> -->
						  			<a class="btn btn-primary btn-lg" href="members-add.php"><i class="icon-plus-sign"></i> Add New Member</a>
						  		</div>
						  		<div class="clearfix"></div>
						  		<h2>Listing of All Members</h2>
						  		<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Member's Name</th>

									  <th>Membership</th>
									  <th>Actions</th>
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php foreach ($members as $key => $member):?> 
								<tr>
									<td><?php echo $member[0];?></td>
									<td class="center">
										<span class="label label-success">Active</span>
									</td>
									<td class="center">
										<a class="btn btn-success" href="member-profile.php">
											<i class="icon-zoom-in "></i>  
										</a>
										<a class="btn btn-info" href="members-edit.php">
											<i class="icon-edit "></i>  
										</a>
<!-- 										<a class="btn btn-danger" href="table.html#">
											<i class="icon-trash "></i> 
										</a> -->
									</td>									
								</tr>

								<?php endforeach;?>
																								<tr>
									<td>Angelo Lim</td>

									<td class="center">
										<span class="label label-warning">Passive</span>
									</td>
									<td class="center">
										<a class="btn btn-success" href="table.html#">
											<i class="icon-zoom-in "></i>  
										</a>
										<a class="btn btn-info" href="table.html#">
											<i class="icon-edit "></i>  
										</a>
<!-- 										<a class="btn btn-danger" href="table.html#">
											<i class="icon-trash "></i> 
										</a> -->
									</td>									
								</tr>
																<tr>
									<td>Juan de la Cruz</td>

									<td class="center">
										<span class="label label-warning">Passive</span>
									</td>
									<td class="center">
										<a class="btn btn-success" href="table.html#">
											<i class="icon-zoom-in "></i>  
										</a>
										<a class="btn btn-info" href="table.html#">
											<i class="icon-edit "></i>  
										</a>
<!-- 										<a class="btn btn-danger" href="table.html#">
											<i class="icon-trash "></i> 
										</a> -->
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
