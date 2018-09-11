<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIRSTQL <?php echo '- '.$title_page; ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jquery-confirm/dist/jquery-confirm.min.css">
  <!-- icon -->
  <!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/image.png" /> -->
  <!-- Plugins css tambahan-->
  <?php 
  if(!empty($plugins))
  {
    foreach ($plugins as $i => $value) 
    {
      $this->load->view('plugins/'.$plugins[$i].'css');
    }
  }
  ?>

</head>
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="skin-blue sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">

	<!-- BEGIN HEADER -->
    <?php $this->load->view('v_header'); ?>
    <!-- END HEADER -->
    
    <!-- BEGIN SIDEBAR -->
    <?php $this->load->view('v_sidebar'); ?>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <?php $this->load->view($content_view); ?>
    <!-- </div> -->
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php $this->load->view('v_footer'); ?>
    <!-- END FOOTER -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-confirm/dist/jquery-confirm.min.js"></script>
<!-- Plugins js tambahan-->
<?php
 if(!empty($plugins))
  {
    foreach ($plugins as $i => $value) 
    {
      $this->load->view('plugins/'.$plugins[$i].'js');
    }
  }
if( !empty($script_js) && $script_js!='')
{
  // location file assets/pages/filename.js
  echo '<script src="'. base_url() .'assets/pages/'.$script_js.'.js"></script>';
}
?>
</body>
</html>
