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
						    	<h4 class="panel-title"><span class="glyphicons notes"><i></i></span> Reports
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h4>
						  	</div>
						  	<div class="panel-body">
						  		<style type="text/css">
						  			.panel-body a.btn{
						  				text-align: left;
						  				padding-left: 10px;
						  			}
						  		</style>
						  		<div class="clearfix">&nbsp;</div><br>
						  		<div class="col-lg-12">
						  			<div class="col-lg-6">
								  		<a href="members_report.php" class="btn btn-primary col-lg-12"><i class="icon-group icon-2x pull-left"></i><h4>Members</h4></a>
							  		</div>
							  		<div class="col-lg-6">
								  		<a href="contributions_report.php" class="btn btn-primary col-lg-12"><i class="icon-money icon-2x pull-left"></i><h4>Monthly Dues</h4></a>
							  		</div>
							  	
						  		</div>
								<div class="clearfix">&nbsp;</div><br><br>
						  		<div class="col-lg-12">
						  				<div class="col-lg-6">
								  		<a href="consumptions_report.php" class="btn btn-primary col-lg-12"><i class="icon-list-alt icon-2x pull-left"></i><h4>Facilities Fee</h4></a>
							  		</div>
						  			<div class="col-lg-6">
								  		<a href="products_report.php" class="btn btn-primary col-lg-12"><i class="icon-list-alt icon-2x pull-left"></i><h4>Other Fees </h4></a>
							  		</div>


						  		</div>	
						  		<div class="clearfix">&nbsp;</div><br><br>
	    
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