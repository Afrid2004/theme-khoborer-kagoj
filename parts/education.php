 <!-- education-part start -->
 <?php
    $original_id = 3;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 3;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
 <div class="container">
   <div class="row d-flex align-items-center border-bottom pb-3 mt-4">
     <div class="col-md-6 col-6">
       <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url($category_link); ?>">
         <?php echo esc_html($category_name); ?>

         <!-- category No. On Off start -->
         <?php
        if (is_user_logged_in()) {
          $categoryOnOff = get_theme_mod('npa_category_switcher_id');
          if ('0' != $categoryOnOff) {
            echo '<span class="text-danger"> ' . esc_html($original_id) . ' </span>';
          }
        }
        ?>
         <!-- category No. On Off end -->
       </a>
     </div>
     <div class="col-md-6 col-6 d-flex align-items-center justify-content-end">
       <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
           class="fa-solid fa-arrow-right ms-1"></i></a>
     </div>
   </div>
   <div class="row">
     <?php
      $education = new WP_Query(array(
        'cat' => $category_id,
        'posts_per_page' => 4,
        'order' => 'DESC'
      ));
      while ($education->have_posts()):$education->the_post();
    ?>
     <div class="col-md-3 mt-4">
       <div class="image">
         <a href="<?php the_permalink(); ?>"> <?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('news-and-event-image-420x250', array(
                  'class' => 'img-fluid mb-md-2 mb-1 w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
           <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
             alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
             class="mb-md-2 mb-1 img-fluid w-100">
           <?php } ?></a>
       </div>

       <div class="heading">
         <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
             href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
       </div>
     </div>
     <?php
      endwhile;
      wp_reset_postdata();
    ?>

   </div>
 </div>
 <!-- education-part end -->