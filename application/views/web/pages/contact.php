<!-- Bootbox -->
<script src="<?php echo base_url(); ?>assets/dash/js/bootbox/bootbox.min.js"></script>
        <div class="row">
            <div class="col-md-8">
                <h3>Contact US</h3>
                <?php
					if($this->session->userdata('succ_msg')){
				?>
				<div class="alert alert-success alert-dismissible fade in" role="alert">
				  <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
				  <strong>Successful!</strong> <?php echo $this->session->userdata('succ_msg'); ?> </div>
				<?php
					$this->session->unset_userdata('succ_msg');
					}
					if($this->session->userdata('err_msg')){
				?>
				<div class="alert alert-danger alert-dismissible fade in" role="alert">
				  <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
				  <strong>Error!</strong><?php echo $this->session->userdata('err_msg'); ?> </div>
				<?php
					$this->session->unset_userdata('err_msg');
					}
				?>
                <form method="post" action="<?php echo base_url();?>Contacts/contact_seller">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="cusName" name="cusName" placeholder="Name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="cusEmail" name="cusEmail" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <label>Comapy Name</label>
                        <input type="text" class="form-control" id="comName" name="comName" placeholder="Comapy Name">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label>Tell us something</label>
                        <textarea class="form-control" rows="3" id="msg" name="msg"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger pull-right" id="contact">Submit</button>
                </form>
            </div>
            <div class="col-md-4">

                    <div class="contact_info col-md-12">
                        <h3>Find Us Here</h3>
                        <div class="map">
                            <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                        </div>
                    </div>
                    <div class="company_address col-md-12">
                        <h3>Company Information :</h3>
                        <address>
                            <strong>Jaytronics, Inc.</strong><br>
                            14A, Portage Road<br>
                            New Lynn, Auckland 0600<br>
                            <abbr title="Phone">P:</abbr> +64 22 045 4645<br />
                            <abbr title="Fax">F:</abbr> 09 282 1494
                        </address>
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:#">don@jaytronics.co.nz</a>
                        </address>
                    </div>
            </div>
            </div>
    </div>
    <script>
<!-- Validation -->
    $('#contact').click(function() {
        var err = 0;
        var err_msg = "";

		if (document.getElementById('cusName').value === "") {
            err = 1;
            err_msg += "Please enter your name.<br>";
        }
		if (document.getElementById('cusEmail').value === "") {
            err = 1;
            err_msg += "Please enter your email.<br>";
        }
		if (document.getElementById('subject').value === "") {
            err = 1;
            err_msg += "Please enter your subject.<br>";
        }
		if (document.getElementById('msg').value === "") {
            err = 1;
            err_msg += "Please enter your message.<br>";
        }
        if (err === 1) {
			
            bootbox.dialog({
                message: err_msg,
                title: "Error",
                buttons: {
                    main: {
                        label: "Close",
                        className: "btn-danger",
                        callback: function() {
                            console.log("Alert Callback");
                        }
                    }
                }
            });
            return false;
        }
    });
	<!-- Validation -->
	</script>