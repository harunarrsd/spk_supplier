<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
    <title>SPK PT.FESA</title>
    <?php $this->load->view('layouts/head') ?>
</head>
<body>

<!-- <div class="wrapper"> -->

    <!-- header -->
    <?php echo $main['header'];?>
    <!-- END header -->

    <!-- <div class="content-wrapper"> -->
        <!-- pages -->
        <?php echo $main['pages']; ?>
        <!-- END pages -->
	<!-- </div> -->
    
    <!-- footer -->
    <?php $this->load->view('layouts/footer')?>
    <!-- END footer -->
<!-- </div> -->

    <!-- javascript -->
    <?php $this->load->view('layouts/javascript')?>
    <!-- END javascript -->
</body>
</html>
