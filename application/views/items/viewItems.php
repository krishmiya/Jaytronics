   <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>View <small>Items</small></h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Item Type</th>
                          <th>Item Code</th>
                          <th>Item Name</th>
                          <th>Description</th>
                          <th>Item Qnt</th>
                          <th>Cost Price</th>
                          <th>Selling Price</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
						$k = 0;
						while ($k < count($items)) {
							$iId = $items[$k]['iId'];
							$tId = $items[$k]['tId'];
							$description = $items[$k]['description'];
							$itemCode = $items[$k]['itemCode'];
							$itemName = $items[$k]['itemName'];
							$itemDescription = $items[$k]['itemDescription'];
							$itemQnt = $items[$k]['itemQnt'];
							$costPrice = $items[$k]['costPrice'];
							$sellingPrice = $items[$k]['sellingPrice'];
							$itemImage = $items[$k]['itemImage'];
						?>
                        <tr><td><?php echo $k + 1; ?></td><td><?php echo $description; ?></td><td><?php echo $itemCode; ?></td><td><?php echo $itemName; ?></td><td><?php echo $itemDescription; ?></td><td><?php echo $itemQnt; ?></td><td><?php echo $costPrice; ?></td><td><?php echo $sellingPrice; ?></td><td><img src="<?php echo base_url();?>jay_uploads/<?php echo $itemImage;?>" alt="<?php echo $itemDescription;?>" width="100"></td><td><a href="<?php echo base_url();?>jaytronics/get_item_by_id/<?php echo $iId;?>">Edit</a></td></tr>
                        <?php
							$k++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>