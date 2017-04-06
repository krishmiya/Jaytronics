<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url(); ?>Sales/add_sles" method="post">
   <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>View <small>Sales</small></h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <!--<div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Customer Name<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">-->
                        <input type="hidden" id="last-name" name="customerName" required class="form-control col-md-7 col-xs-12" value="KSS">
                    <!--</div>
                </div>-->
            
                  <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12">Item Name</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<select class="form-control" name="itemName">
                        <option value="0"></option>
                        <?php
						$k = 0;
						while ($k < count($items)) {
							$iId = $items[$k]['iId'];
							$itemDescription = $items[$k]['itemCode']." / ".$items[$k]['itemName'];
							echo "<option value='$iId'>$itemDescription</option>";
							$k++;
                        }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Quantity<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="itemQuantity" required class="form-control col-md-7 col-xs-12">
                </div>
			</div>
            
            <div class="ln_solid"></div>
    <div class="form-group">
    	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
                      <!--<table id="POITable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <td>#</td>
                            <td>Item</td>
                            <td>Qnt</td>
                            <td>Delete?</td>
                            <td>Add Rows?</td>
                        </tr>
                      </thead>


                      <tbody>
                      	<tr>
                            <td>1</td>
                            <td><input size=25 type="text" id="latbox" name="item[]"/></td>
                            <td><input size=25 type="text" id="latbox" name="qnt[]"/></td>
                            <td><input type="button" id="delPOIbutton" value="Delete" onClick="deleteRow(this)"/></td>
                            <td><input type="button" id="addmorePOIbutton" value="Add" onClick="insRow()"/></td>
                        </tr>
                      </tbody>
                    </table>-->
                  </div>
              </div>
          </div>
      </div>
</form>
<script>
function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}

function insRow()
{
    console.log( 'hi');
    var x=document.getElementById('POITable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    new_row.cells[0].innerHTML = len;
    
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id += len;
    inp1.value = '';
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id += len;
    inp2.value = '';
    x.appendChild( new_row );
}
</script>