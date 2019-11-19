    <?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">
        <?php
        // параметры по умолчанию
            $posts = get_posts( array(
              'numberposts' => 6,
              // 'category'    => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              // 'include'     => array(),
              // 'exclude'     => array(),
              // 'meta_key'    => '',
              // 'meta_value'  =>'',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post); ?>
                <!-- формат вывода the_title() ... -->
                <div class="col-sm-4 portfolio-item">
                        <div class="portfolio-link" >
                          <a  href="<?php the_permalink();?>">
                          <div class="caption">
                            <div class="caption-content">
                              <!-- <i class="fa fa-search-plus fa-3x"></i> -->
                              <p><?php the_title();?><br><?php the_excerpt();?><p>
                            </div>
                          </div>
                          <img class="img-fluid" src="<?php the_post_thumbnail_url()?>" alt="">
                          </a>
                        </div>
                      </div>  <?php
            }

            wp_reset_postdata(); // сброс   ?>

          <!-- <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
            </div>
          </div>



          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </div>
          </div>
          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </div>
          </div>
          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </div>
          </div>
          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </div>
          </div>
          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </div> -->
          <!-- </div> -->
        </div>
      </div>
    </section>

<?php get_footer();?>
