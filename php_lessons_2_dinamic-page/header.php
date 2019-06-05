<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once ('data.php');
    $currentLink = str_replace('/', '', $_SERVER['REQUEST_URI']);
echo "{$currentLink} <br>";
    $linksArr = [
        'index.php' => 'Home',
        'about.php' => 'About Us',
        'course.php' => 'Info and prices',
        'contact.php' => 'Contact Us',
    ]
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Provision Education Category Bootstrap Responsive web Template | Home :: W3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- main -->
<div class="main-content <?php if($currentLink != 'index.php') {echo 'inner';} ?>" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="index.php"><?= $companyName?></a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <?php forEach($linksArr as $key=>$value) {?>
                    <li class="<?php if($key == $currentLink){echo 'active';} ?>"><a href="<?= $key ?>" ><?= $value ?></a></li>

                   <? } ?>
                    <li>
                        <p class="w3pvt-phone">
                            <span class="fa fa-phone mr-2"></span>
                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        </p>
                    </li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>