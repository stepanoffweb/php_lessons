<?php
    require_once ('data.php');
?>
<!-- footer -->
<footer class="footer-content text-center py-5">
    <div class="container py-md-3">
        <!-- logo -->
        <h2 class="logo2 text-center">
            <a href="index.php">
                <?= $companyName ?>
            </a>
        </h2>
        <!-- //logo -->
        <!-- address -->
        <div class="contact-left-footer mt-md-4">
            <ul>
                <li>
                    <p>
                        <span class="fa fa-map-marker mr-2"></span>Honey Online Educations, 9th Block,Uk
                    </p>
                </li>
                <li class="mx-4">
                    <p>
                        <span class="fa fa-phone mr-2"></span>
                        <a href="tel:<?=$phone?>"><?=$phone?></a>
                    </p>
                </li>
                <li>
                    <p class="text-wh">
                        <span class="fa fa-envelope-open mr-2"></span>
                        <a href="mailto:<?= $email ?>"><?=$email ?></a>
                    </p>
                </li>
            </ul>
        </div>
        <!-- //address -->
        <!-- social icons -->
        <div class="footer-w3pvt-copy-social my-4">
            <ul>
                <li>
                    <a href="#">
                        <span class="fa fa-facebook-square"></span>
                    </a>
                </li>
                <li class="mx-2">
                    <a href="#">
                        <span class="fa fa-twitter-square"></span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="fa fa-google-plus-square"></span>
                    </a>
                </li>
                <li class="mx-2">
                    <a href="#">
                        <span class="fa fa-linkedin-square"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-rss-square"></span>
                    </a>
                </li>
                <li class="ml-2">
                    <a href="#">
                        <span class="fa fa-pinterest-square"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //social icons -->
        <!-- copyright -->
        <div class="w3layouts-copy text-center">
            <p class="text-da">© 2019 Provision. All rights reserved | Design by
                <a href="http://w3layouts.com/">W3layouts</a>
            </p>
        </div>
        <!-- //copyright -->
        <!-- move top icon -->
        <div class="move-top text-center mt-3">
            <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
        </div>
        <!-- //move top icon -->
    </div>
</footer>
<!-- //footer -->




</body>

</html>