    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="x_panel">
                <div class="x_content">
                <p><?php echo $links; ?></p>
                        <?php
                        foreach($results as $data) {
						?>
                             <a href="<?php echo base_url();?>Products/view_product/<?php echo $data->iId?>">
                             	<div class="col-md-4 item-thumb">
                                	<img src="<?php echo base_url().'jay_uploads/'.$data->itemImage?>" alt="<?php echo $data->itemCode?>" class="img-thumbnail">
                                </div>

                                <div class="col-md-8">
                                	<h4><strong> <?php echo $data->itemName?> </strong></h4><br />
                                    <span><?php echo $data->itemDescription?></span><br />
                                    <span><strong><?php echo '$ '.$data->sellingPrice?></strong></span>
                                </div>
                             </a>
                         <?php
						}
						?>
                    <p><?php echo $links; ?></p>
                </div>
            </div>
        </div>
    </div>