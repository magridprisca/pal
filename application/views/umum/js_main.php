<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/jquery/jquery.min.js"></script>
<!-- toastr -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/toastr/toastr.min.js"></script>
<!-- loading block-->
<script src="<?php echo base_url(); ?>assets/templates/plugins/loading-block/jquery.loading.block.js"></script>
<!-- fancybox 2 -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/fancybox-2.1.7/jquery.fancybox.js"></script>

<script>
  	toastr.options = {
  	  "closeButton": false,
  	  "debug": false,
  	  "newestOnTop": false,
  	  "progressBar": false,
  	  "positionClass": "toast-bottom-center",
  	  "preventDuplicates": true,
  	  "onclick": null,
  	  "showDuration": "300",
  	  "hideDuration": "1000",
  	  "timeOut": "5000",
  	  "extendedTimeOut": "1000",
  	  "showEasing": "swing",
  	  "hideEasing": "linear",
  	  "showMethod": "fadeIn",
  	  "hideMethod": "fadeOut"
  	}

  	function blockShow(){
  		$.loadingBlockShow({
  		 imgPath: '<?php echo base_url() ?>assets/templates/img/loading.gif',
  		 imgStyle: {
  			 width: 'auto',
  			 textAlign: 'center',
  			 marginTop: '15%'
  		 },
  		 style: {
  				position: 'fixed',
  				width: '100%',
  				height: '100%',
  				background: 'rgb(224, 224, 224)',
  				left: 0,
  				top: 0,
  				zIndex: 10000
  			}
  		});
  	}

  	function blockHide(){
  		$.loadingBlockHide();
  	}

    function goBack(){
      window.history.back();
    }
</script>
