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
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Activity Logs 
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
							    <ul class="list-group">
								  <li class="list-group-item"><?php echo $members[rand(0,10)][0];?> added <a href="#">Consumption #1001</a> for <?php echo $members[rand(0,10)][0];?> <?php echo date('Y-m-d h:i A');?></li>
								  <li class="list-group-item"><?php echo $members[rand(0,10)][0];?> added <a href="#">Contribution #1134</a> for <?php echo $members[rand(0,10)][0];?><?php echo date('Y-m-d h:i A');?></li>
								  <li class="list-group-item"><?php echo $members[rand(0,10)][0];?> has approved <a href="#">Loan #201</a> for <?php echo $members[rand(0,10)][0];?> <?php echo date('Y-m-d h:i A');?></li>
								  <li class="list-group-item"><?php echo $members[rand(0,10)][0];?> has declined <a href="#">Loan #301</a> for <?php echo $members[rand(0,10)][0];?> <?php echo date('Y-m-d h:i A');?></li>
								</ul>

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