 <!-- rong-part start -->
 <?php
    $original_id = 17;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 17;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
?>
 <div class="container border-bottom pb-md-4 pb-3 border-bottom mb-mb-5 mb-3">
   <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-3">
     <div class="col-md-3 col-6 ruposi-first">
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

     <div class="col-md-2 col-6 d-flex align-items-center justify-content-end ruposi-last border-left">
       <a class="text-decoration-none text-dark font-size-17 d-flex gap-2"
         href="<?php echo esc_url($category_link); ?>">আরও <i class="fa-solid fa-arrow-right ms-1"></i></a>
     </div>
   </div>


   <div class="row mt-md-4 mt-3">
     <!-- rong-part lead start -->
     <div class="col-lg-5 col-12 border-end pe-2 pe-md-4">

       <div class="row">
         <div class="col-12">
           <div class="row">
             <div class="col-12 pb-md-3 pb-2 ">
               <?php 
                $rong = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($rong->have_posts()):$rong->the_post();
                ?>
               <div class="row">
                 <div class="col-12">
                   <a href="<?php the_permalink(); ?>"><?php
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
                     <?php } ?></a>
                 </div>
                 <div class="col-12 mt-md-3 mt-2">
                   <div class="heading">
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-28"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="news-body">
                     <p><?php $rongText = get_the_content();
                                        $rongTrimingWords = WP_trim_words($rongText, 25, '...');
                                        echo $rongTrimingWords;?></p>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                   </div>

                 </div>
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
     <!-- rong-part lead end -->

     <!-- rong-2nd-part lead start -->
     <div class="col-lg-7 col-12 border-end">
       <div class="row pb-md-3 pb-2">
         <?php $rong = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'    => 1,
                    'posts_per_page' => 6,
                    'order' => 'DESC'
                ));
                while ($rong->have_posts()):$rong->the_post();
         ?>
         <div class="col-md-4 col-12 special-report-single mb-3">
           <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1 border">
             <div class="image">
               <a href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid w-100 rounded-top',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
                 <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                   alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                   class="mb-md-2 mb-1 img-fluid w-100">
                 <?php } ?></a>
             </div>
             <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
               <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
                   href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
             </div>

             <div class="time ms-md-3 ms-2 ms-md-3 ms-2 me-md-2 me-2 me-md-3">
               <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
             </div>
           </div>
         </div>
         <?php
            endwhile;
            wp_reset_postdata();
         ?>
       </div>
     </div>
     <!-- rong-2nd-part lead end -->




   </div>
 </div>
 <!-- rong-part end -->