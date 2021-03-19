<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Knack NY INC">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/images/apple-touch-icon-114x114.png');?>">
    <!-- style sheets and font icons  -->
    <?php foreach ($stylesheets as $stylesheet): ?>
        <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
</head>
<body data-mobile-nav-style="classic">
<?php $this->load->view($view); ?>
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
<!-- end scroll to top -->
<!-- javascript -->
<?php foreach ($scripts as $script): ?>
    <script src="<?php echo $script; ?>"></script>
<?php endforeach; ?>
</body>
</html>