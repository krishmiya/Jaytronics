</div>

		<!-- footer content -->
        <footer>
          <div class="pull-right">
            Jaytronics - Developed by <a href="https://www.facebook.com/krishu.dawatagolla">KSS</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/dash/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/dash/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/dash/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/dash/vendors/nprogress/nprogress.js"></script>
    
        <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/pdfmake/build/vfs_fonts.js"></script>
    
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/dash/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/dash/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/dash/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/dash/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/dash/js/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/js/datepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>assets/dash/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/dash/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/dash/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/dash/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/dash/js/flot/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/dash/js/flot/date.js"></script>
    <script src="<?php echo base_url();?>assets/dash/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>assets/dash/js/flot/curvedLines.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>assets/dash/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>assets/dash/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>assets/dash/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>assets/dash/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>assets/dash/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>assets/dash/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- jVectorMap -->
    <script src="<?php echo base_url();?>assets/dash/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/dash/build/js/custom.min.js"></script>
    
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    
	<!-- jQuery autocomplete -->
    <script>
        $(document).ready(function () {
        $('#autocomplete-custom-append').autocomplete({
            source: "<?php echo base_url(); ?>Items/load_item_type",
            minLength: 1,
            select: function(event, ui) {
                $("#autocomplete-custom-append").val(ui.item.description);
                $("#tId").val(ui.item.tId);
                return false;
            }
        }).data("ui-autocomplete")._renderItem = function(ul, item) {
            return $("<li></li>")
                    .data("item.autocomplete-item", item)
                    .append("<a>" + item.description + "</a>")
                    .appendTo(ul);
        };
    });
</script>
    <!-- /jQuery autocomplete -->
    
  </body>
</html>