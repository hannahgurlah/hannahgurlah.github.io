<form class="form-horizontal">
  <fieldset class="col-sm-12">		
    <div class="form-group">
	  <label for="period" class="control-label">Select Period</label>
	  <div class="controls row">
		<div class="input-group col-sm-4">			
			<select class="form-control" id="period">
				<option></option>
				<option>Today</option>
				<option>Yesterday</option>
			  	<option>This Week</option>
			  	<option>This Month</option>
			  	<option>This Quarter</option>
			  	<option>This Year</option>
			  	<option>Last Year</option>
			</select>
		</div>
	  </div>	
	</div>
	<div class="form-group">
	  <label for="daterange" class="control-label">Select Date Range</label>
	  <div class="controls row">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="icon-calendar"></i></span>
			<input type="text" value="" id="daterange" class="form-control">
		</div>
	  </div>	
	</div>
	<div class="form-actions">
	  <button class="btn btn-primary" type="submit">Submit</button>
	</div>
  </fieldset>
</form>