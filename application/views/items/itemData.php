<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<br />
        <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url(); ?>items/add_items" method="post">
        
        <!--<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="category" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                <input type="hidden" name="tId" id="tId" />
                <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
            </div>
        </div>-->
                                        
        	<div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<select class="form-control" name="category">
                        <option value="0"></option>
                        <?php
						$k = 0;
						while ($k < count($itemType)) {
							$tId = $itemType[$k]['tId'];
							$description = $itemType[$k]['description'];
							echo "<option value='$tId'>$description</option>";
							$k++;
                        }
                        ?>
                        <!--<option value="">Choose option</option>-->
                    </select>
                </div>
            </div>
                                        
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Code<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="first-name" name="itemCode" required class="form-control col-md-7 col-xs-12">
                </div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="itemName" required class="form-control col-md-7 col-xs-12">
				</div>
			</div>
			<div class="form-group">
            	<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="description">
				</div>
			</div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Quantity<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="itemQuantity" required class="form-control col-md-7 col-xs-12">
                </div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cost Price<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="costPrice" required class="form-control col-md-7 col-xs-12">
				</div>
			</div>
            <div class="form-group">
            	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Selling Price<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input type="text" id="last-name" name="sellingPrice" required class="form-control col-md-7 col-xs-12">
				</div>
			</div>            
            <div class="form-group">
            	<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<input id="userfile" class="form-control col-md-7 col-xs-12" type="file" name="userfile">
				</div>
			</div>
	<div class="ln_solid"></div>
    <div class="form-group">
    	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        	<button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
      </form>
    </div>
</div>