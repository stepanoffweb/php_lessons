  <footer class="footer">
        <div class="container">
            <a href="tel:+75852772217" class="phone"><?php the_field('phone') ?></a>
            <div class="footer__email">
                <span><?php the_field('email') ?></span>
            </div>
        </div>
    </footer>
  <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>
Запросов <?php echo get_num_queries(); ?>
