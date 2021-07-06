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
						    	<h3 class="panel-title"><span class="glyphicons notes"><i></i></span> Consumptions Report
						    		<span class="pull-right">
						    			<a class="btn-setting" href="form-elements.html#"><i class="icon-wrench"></i></a>
										<a class="btn-minimize" href="form-elements.html#"><i class="icon-chevron-up"></i></a>
										<a class="btn-close" href="form-elements.html#"><i class="icon-remove"></i></a>
						    		</span>
						    	</h3>
						  	</div>
						  	<div class="panel-body">
						  		<?php include 'reports_filter.php';?>
						  		<h1>This Week</h1>
						  		<table class="table table-bordered table-striped">
						  			<thead>
						  			<tr>
						  				<th>Date</th>
						  				<th>Regular Members</th>
						  				<th>Associate Members</th>
						  				<th>Non-Members</th>
						  			</tr>
						  			</thead>
						  		<?php
						  			$ts = time();//strtotime($date);
								    $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
								    $end = strtotime('next saturday', $start);
								    $i=$start;
								    $a = 0;
								    $rand = array('25,000','30,000','50,000');
								    while ($i<=$end ) {								    
								    	$i = strtotime("+$a day",$start);
								    	$date = date('Y-m-d', $i);
								    	?>
								    	<tr>
								    		<td><?php echo $date;?></td>
								    		<td><a class="badge badge-info amount" href="<?php echo 'consumption_list.php?date='.$date;?>">Php <?php echo $rand[rand(0,2)];?></a></td>
								    		<td><a class="badge badge-info amount" href="<?php echo 'consumption_list.php?date='.$date;?>">Php <?php echo $rand[rand(0,2)];?></a></td>
								    		<td><a class="badge badge-info amount" href="<?php echo 'consumption_list.php?date='.$date;?>">Php <?php echo $rand[rand(0,2)];?></a></td>
								    	</tr>
								    	<?php
								    	$a++;								    	
								    }
						  		?>
						  		
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