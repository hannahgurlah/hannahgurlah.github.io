<?php include "header.php";?>

	<div class="container">
		<div class="row">
			<div class="login-box">

				<div class="icons">
					<a href="index.html"><i class="halflings-icon home"></i></a>
					<a href="login.html#"><i class="halflings-icon cog"></i></a>
				</div>
				<h2><b>COMMSea Monitoring System</b></h2>
				<h2>Login to your account</h2>
				<form class="form-horizontal" action="index.html" method="post">
					<fieldset>
						<div class="input-wrap">
						<div class="input-prepend input-group" title="Username">
							<span class="input-group-addon"><i class="halflings-icon user"></i></span>
							<input class="form-control" name="username" id="username" type="text" placeholder="type username"/>
						</div>
						</div>
						<div class="input-wrap">
						<div class="input-prepend input-group" title="Password">
							<span class="input-group-addon"><i class="halflings-icon lock"></i></span>
							<input class="form-control" name="password" id="password" type="password" placeholder="type password"/>
						</div>
						</div>

						<div class="button-login">	
							<a href="index.php" class="btn btn-primary">Login</a>
						</div>
						<div class="clearfix"></div>
				</form>
				<hr> 	
			</div><!--/col-->
		</div><!--/row-->
	</div><!--/container-->
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
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>		
	<!-- end: JavaScript-->	
</body>
</html>