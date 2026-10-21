<?php
/**
 * Template part for displaying explore section
 *
 * @package Tourism Guide
 * @subpackage tourism_guide
 */
?>
<?php $tourism_guide_static_image = get_template_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'tourism_guide_explore_show_hide', true) != '') { ?>
<section id="travel-offer">
  <div class="container">
    <div class="cat-box">
      <div class="row">
        <?php
          $tourism_guide_post_category = get_theme_mod('tourism_guide_explore_section_category');
          if($tourism_guide_post_category){
            $tourism_guide_page_query = new WP_Query(array( 'category_name' => esc_html( $tourism_guide_post_category ,'tourism-guide')));?>
            <?php while( $tourism_guide_page_query->have_posts() ) : $tourism_guide_page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="cat-inner-box mb-3">
                  <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php }else {echo ('<img src="'.$tourism_guide_static_image .'">'); } ?>
                  <div class="offer-box p-3">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }
        ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>