    <script src="<?php echo base_url(); ?>public/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url(); ?>public/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
      $(document).on('close.fndtn.alert-box', function(event) {
		  console.info('An alert box has been closed!');
		});       

    </script>
  </body>
</html>
