<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="/js/shop-script.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
	<title>Интернет-Магазин Цифровой Техники</title>
</head>

<body>
<div id="block-body">

<?php
    include("include/block-header.php");
?>

<div id="block-right">
<?php
    include("include/block-category.php");
    include("include/block-parameter.php");
    include("include/block-news.php");
?>
</div>
<div id="block-content"></div>

<?php
    include("include/block-footer.php");
?>
</div>

</body>
</html>