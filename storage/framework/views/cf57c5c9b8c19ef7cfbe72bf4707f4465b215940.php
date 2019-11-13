	<!-- footer content -->

			<footer>
		        <p>All right reserved. Copyright &copy; : 
		            <a href="https://ctdworld.co/">CTD World</a>
		        </p>
		    </footer>
			<!-- /footer content -->

        <script>

          $('#summernote').summernote({

            height: 300

          });

        </script>

      <script type="text/javascript">
        var foopicker2 = new FooPicker({
          id: 'datepicker2'
        });
      </script> 


    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo e(asset('assets/admin/js/jquery-1.10.2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap.min.js')); ?>"></script>
        <!-- <script src="assets/js/editor.js"></script> 
        <script>
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });
        </script>
         <link href="assets/css/editor.css" type="text/css" rel="stylesheet"/> -->
    <!-- Bootstrap Js --> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">


    <script>

    $(function(){


        $(".pdf-div").hide();

        $(".url-div").hide();



        $('input[type="text"][name="publish_date"]').datepicker({

            changeMonth: true,

            changeYear: true,

        });



        $('input[type="text"][name="closing_date"]').datepicker({

            changeMonth: true,

            changeYear: true,

        });



        $('.select2').select2({

             maximumSelectionLength: 3

        });

    });

    </script>
	 
    <!-- DateJS -->
    <script src="<?php echo e(asset('assets/admin/js/date.js')); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('assets/admin/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/daterangepicker.js')); ?>"></script>

    <!-- Select 2 -->
    <script src="<?php echo e(asset('assets/admin/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/jquery.select2.min.js')); ?>"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo e(asset('assets/admin/js/jquery.metisMenu.js')); ?>"></script>

         <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo e(asset('assets/admin/js/dataTables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/dataTables/dataTables.bootstrap.js')); ?>"></script>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    
	
    <!-- Custom Js -->
    <script src="<?php echo e(asset('assets/admin/js/custom-scripts.js')); ?>"></script>

<?php echo $__env->yieldContent('javascript'); ?>

</html><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/partials/top_menu.blade.php ENDPATH**/ ?>