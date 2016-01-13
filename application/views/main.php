<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
 <html>
     <head>
        <meta charset="utf-8">
        <title><?php echo $Title; ?></title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="/template/css/uikit.gradient.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="../template/js/uikit.js"></script>
    </head>
<?PHP
$this->load->view($page);
?>
</html>