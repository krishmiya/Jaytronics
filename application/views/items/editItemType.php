<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url(); ?>items/edit_items_type" method="post">
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <?php
    $k = 0;
	while ($k < count($itemType)) {
	$tId = $itemType[$k]['tId'];
	$description = $itemType[$k]['description'];
	?>
        <input type="text" id="first-name" name="typeName" required class="form-control col-md-7 col-xs-12" value="<?php echo $description;?>">
        <input type="hidden" id="last-name" name="tId" required class="form-control col-md-7 col-xs-12" value="<?php echo $tId;?>">
    <?php
    	$k++;
    }
	?>
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