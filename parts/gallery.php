 <!-- gallery start -->
 <?php
    $original_id = 32;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 32;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
?>
 <div class="container-fluid pb-5">
   <div class="container pb-md-4 pb-2">
     <div class="row d-flex align-items-center border-bottom pb-3 my-4">
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
         </a>
       </div>
       <div class="col-md-6 col-6 d-flex align-items-center justify-content-end">
         <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
             class="fa-solid fa-arrow-right ms-1"></i></a>
       </div>
     </div>
     <div class="row">
       <div class="col-12 col-lg-6 mb-3">
         <?php        
            $gallery = new WP_Query(array(
                  'post_type' => 'gallery',
                  'cat' => $category_id,
                  'posts_per_page' => 1,
                  'order' => 'DESC'
            ));
            while ($gallery->have_posts()):$gallery->the_post();
        ?>
         <a href="<?php the_permalink(); ?>">
           <div class="position-relative overflow-hidden gallery-container">
             <div class="gallery-img">
               <?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
               <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                 alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                 class="mb-md-2 mb-1 img-fluid w-100">
               <?php } ?>
             </div>
             <div class="image-caption position-absolute bottom-0 w-100 h-50 px-3">
               <p class="text-white fs-5">
                 <?php 
                    $galleryCaption = get_field('image_caption');
                    if(!empty($galleryCaption)){
                        echo $galleryCaption;
                    }else{
                        echo 'গ্যালারি ইমেইজ';
                    }
                ?>
               </p>
             </div>
           </div>
         </a>
         <?php
            endwhile;
            wp_reset_postdata();
         ?>
       </div>
       <div class="col-12 col-lg-6">
         <div class="row">
           <?php        
               $gallery = new WP_Query(array(
                     'post_type' => 'gallery',
                     'offset'    => 1,
                     'cat' => $category_id,
                     'posts_per_page' => 4,
                     'order' => 'DESC'
               ));
               while ($gallery->have_posts()):$gallery->the_post();
            ?>
           <div class="col-12 col-lg-6 mb-3">
             <a href="<?php the_permalink(); ?>">
               <div class="position-relative overflow-hidden gallery-container">
                 <div class="gallery-img"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
                   <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                     alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                     class="mb-md-2 mb-1 img-fluid w-100">
                   <?php } ?>
                 </div>
                 <div class="image-caption position-absolute bottom-0 w-100 h-50 px-3">
                   <p class="text-white"><?php 
                    $galleryCaption = get_field('image_caption');
                    if(!empty($galleryCaption)){
                        echo $galleryCaption;
                    }else{
                        echo 'গ্যালারি ইমেইজ';
                    }
                ?></p>
                 </div>
               </div>
             </a>
           </div>
           <?php
            endwhile;
            wp_reset_postdata();
         ?>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- gallery end -->