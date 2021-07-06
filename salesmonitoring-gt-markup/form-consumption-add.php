<div class="col-md-10 col-md-offset-1">
<form role="form">
    <div class="row">
    
    <div class="col-lg-8">
       <label>Consumer Name</label>
      <div class="input-group">
       
        <input type="text" class="form-control" placeholder="">
        <span class="input-group-addon"><i class="icon-search"></i></span>

    </div> </div>
    <div class="col-lg-4" style="margin-top:40px; display:block;">
      <button class="btn btn-primary" data-toggle="modal" data-target="#new-consumer">
                    <i class="icon-user"></i> Add Consumer
      </button>
    </div>
    </div>
    <br>
    <div class="clearfix"></div>

   
    <table id="items" class="table table-striped table-borderd">
        
          <tr>
              <th>Item</th>
              <th>Description</th>
              <th>Unit Cost</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>Poultry</textarea><a class="delete" href="javascript:;" title="Remove row"><i class="icon-remove-sign"></i></a></div></td>
              <td class="description"><textarea>Brown Eggs</textarea></td>
              <td><textarea class="cost">$650.00</textarea></td>
              <td><textarea class="qty">1</textarea></td>
              <td><span class="price">$650.00</span></td>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>Fish</textarea><a class="delete" href="javascript:;" title="Remove row"><i class="icon-remove-sign"></i></a></div></td>

              <td class="description"><textarea>Fresh Lapu-lapu</textarea></td>
              <td><textarea class="cost">$75.00</textarea></td>
              <td><textarea class="qty">3</textarea></td>
              <td><span class="price">$225.00</span></td>
          </tr>
          
          <tr id="hiderow">
            <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add new Item</a></td>
          </tr>
          

          <tr>

              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total</td>
              <td class="total-value"><div id="total">$875.00</div></td>
          </tr>


        
        </table>
   
</form>
</div>
<div class="clearfix"></div>