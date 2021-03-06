
<?php get_header(); ?>
            
      <div class="category-page">

        <div class="col-md-10">

          <div class="category-title">
            <h1><?php single_cat_title(); ?></h1>
          </div>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="post-preview">

              <div class="post-preview-left">
                <div class="post-image">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
                </div>
              </div>

              <div class="post-preview-right">
                <div class="post-header">
                 
                  <h1 class="post-date">
                    <?php
                      $format = 'F j, Y';
                      the_date( $format ); 
                    ?>
                  </h1>

                  <a href="<?php the_permalink(); ?>">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                  </a> 
                  
                </div>
                <div class="post-excerpt">
                   <?php echo get_the_excerpt() ?>
                </div>
              </div>

            </div>

          <?php endwhile; else: ?>

            <div class="page-header">
              <h3>Check back soon!</h3>
            </div>

          <?php endif; ?>

        </div>

        <div class="col-md-2 sidebar-container">
          <?php get_sidebar(); ?>
        </div>

      </div>

        </div>
        
<?php get_footer(); ?>