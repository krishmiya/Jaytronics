<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url(); ?>items/edit_items" method="post">

		<div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<select class="form-control" name="category">
                        <?php
						echo "<option value=".$item[0]['tId'].">".$item[0]['description']."</option>";
			
						$n = 0;
						while ($n < count($itemType)) {
							$tId = $itemType[$n]['tId'];
							$description = $itemType[$n]['description'];
							echo "<option value='$tId'>$description</option>";
							$n++;
                        }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Code<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="first-name" name="itemCode" required class="form-control col-md-7 col-xs-12" value="<?php echo $item[0]['itemCode'];?>">
                    <input type="hidden" name="iId" required value="<?php echo $item[0]['iId'];?>">
                </div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="itemName" required class="form-control col-md-7 col-xs-12" value="<?php echo $item[0]['itemName'];?>">
				</div>
			</div>
			<div class="form-group">
            	<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="description" value="<?php echo $item[0]['itemDescription'];?>">
				</div>
			</div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Quantity<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="itemQuantity" required class="form-control col-md-7 col-xs-12" value="<?php echo $item[0]['itemQnt'];?>">
                </div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cost Price<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="costPrice" required class="form-control col-md-7 col-xs-12" value="<?php echo $item[0]['costPrice'];?>">
				</div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Selling Price<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="sellingPrice" required class="form-control col-md-7 col-xs-12" value="<?php echo $item[0]['sellingPrice'];?>">
				</div>
			</div>
	<div class="ln_solid"></div>
    <div class="form-group">
    	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        	<button type="reset" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
</form>