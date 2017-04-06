<div class="row">
            <div class="container">
                <div class="col-md-12">
                    <h3><?php echo $product[0]['itemName'];?></h3>
                    <p><?php echo $product[0]['itemDescription'];?></p>
                </div>
                <div class="col-md-7">
                    <div class="thumbnail">
                        <img src="<?php echo base_url()?>jay_uploads/<?php echo $product[0]['itemImage'];?>" />
                    </div>
                    <hr />

                </div>
                <div class="col-md-5">
                    <div class="">
                        <h4><small>Price $:</small> <?php echo $product[0]['sellingPrice'];?></h4>
                    </div>
                    <!--<hr>
                    <form class="form-inline">
                        <div class="form-group">
                            <label>Color :</label>
                            <select class="form-control">
                                <option>Silver</option>
                                <option>Black</option>
                                <option>Dark Black</option>
                                <option>Red</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Size :</label>
                            <select class="form-control">
                                <option>Large</option>
                                <option>Medium</option>
                                <option>small</option>
                                <option>Large</option>
                                <option>small</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quality :</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </form>
                    <hr>
                    <button type="button" class="btn btn-primary btn-lg color-gray">Buy Now</button>-->
                    <hr />
                    <div itemprop="description" class="item-description">
                        <p><?php echo $product[0]['itemName'];?><br><?php echo $product[0]['itemDescription'];?><!--...10 YEARS OF TRUSTED SERVICE... <br>1 YEAR WARRANTY <br>ALL CREDIT CARDS ACCEPTED <br>INSTALLMENTS UPTO 36 MONTH AVAILABLE <br>ISLAND WIDE <br>FREE DELIVER &amp; INSTALLATION <br>CONDITIONS APPLY--></p>
                        <p class="opt-out">I do not want to be contacted by telemarketers.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        $(function () {
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>