 <!-- world-part start -->
 <?php
    $original_id = 9;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 9;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
 <div class="container">
   <div class="row mt-md-4 mt-3">
     <div class="col-md-9 col-12 border-end pe-2 pe-md-4">
       <div class="row d-flex align-items-center border-bottom pb-3">
         <div class="col-md-2 col-6">
           <a class="text-decoration-none text-dark font-size-20 text-bold"
             href="<?php echo esc_url($category_link); ?>">
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

         <div
           class="col-md-8 d-none d-lg-flex align-items-lg-center col-lg-8 sub-category hover-world d-none d-md-block">
           <nav class="text-nowrap overflow-x-scroll category">
             <?php function primary_country_menu_fallback(){?>
             <ul class="ul d-flex gap-3 mb-0">
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">দক্ষিণ এশিয়া</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">ইউরোপ</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">যুক্তরাষ্ট্র</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">এশিয়া</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">আফ্রিকা</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">রাশিয়া</a></li>
               <li class="text-danger"><a class="text-decoration-none text-dark pe-3"
                   href="<?php the_permalink(); ?>">অস্ট্রেলিয়া</a></li>
             </ul>
             <?php }
                wp_nav_menu(array(
                    'theme_location'        => 'country-menu',
                    'menu_class'            => 'ul d-flex gap-3 mb-0',
                    'container'             => false,
                    'depth'                 => 0,
                    'fallback_cb'           => 'primary_country_menu_fallback'
                ))
             ?>
           </nav>
         </div>



         <div class="col-md-2 col-6 d-flex align-items-center justify-content-end">
           <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
               class="fa-solid fa-arrow-right ms-1"></i></a>
         </div>
       </div>
       <div class="row border-bottom">
         <div class="col-12">
           <div class="row">
             <?php 
                $world = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($world->have_posts()):$world->the_post();
            ?>
             <div class="col-md-9 mt-3 ">
               <div class="row border-end col-12">
                 <div class="col-md-6 order-2 order-md-1 mt-2">
                   <div class="heading">
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="news-body d-none d-md-block">
                     <p class="lh-base"><?php $worldText = get_the_content();
                                        $worldTrimingWords = WP_trim_words($worldText, 25, '...');
                                        echo $worldTrimingWords;?></p>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago(); ?></p>
                   </div>

                 </div>
                 <div class="col-md-6 col-12 order-md-2 order-1">
                   <a href="<?php the_permalink(); ?>"><?php
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
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
             <?php 
                 $world = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'    => 1,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($world->have_posts()):$world->the_post();
            ?>
             <div class="col-md-3 col-12 mt-md-3 mt-2">
               <div class="image">
                 <a href="<?php the_permalink(); ?>"><?php
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
                 <h6 class="mb-3 mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
               </div>
               <div class="time d-none d-md-block">
                 <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago(); ?></p>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
           </div>
         </div>

       </div>
       <div class="row mt-3 border-bottom pb-3">
         <?php 
                 $world = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'    => 2,
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                ));
                while ($world->have_posts()):$world->the_post();
            ?>
         <div class="col-md-3 col-12 mt-3 border-end border-last-none">
           <div class="image">
             <a href="<?php the_permalink(); ?>"><?php
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
             <h6 class="mb-3 mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
                 href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
           </div>
           <div class="time d-none d-md-block">
             <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago(); ?></p>
           </div>
         </div>
         <?php
                endwhile;
                wp_reset_postdata();
            ?>
       </div>

     </div>
     <div class="col-md-3 col-12 mt-md-0 mt-3">
       <!-- probash-part start -->
       <?php
            $original_id = 10;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 10;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <div class="container">
         <div class="row d-flex align-items-center border-bottom pb-3">
           <div class="col-md-6 col-6">
             <a class="text-decoration-none text-dark font-size-20 text-bold"
               href="<?php echo esc_url($category_link); ?>">
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
           <div class="col-md-6 d-flex align-items-center justify-content-end col-6">
             <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                 class="fa-solid fa-arrow-right ms-1"></i></a>
           </div>
         </div>

       </div>

       <div class="row">
         <?php 
                 $probash = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 2,
                    'order' => 'DESC'
                ));
                while ($probash->have_posts()):$probash->the_post();
            ?>
         <div class="col-12 mt-4">
           <div class="border-bottom">
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
               <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
                   href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
             </div>
             <div class="time d-none d-md-block">
               <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago(); ?></p>
             </div>
           </div>
         </div>
         <?php
                endwhile;
                wp_reset_postdata();
            ?>
       </div>
       <!-- probash-part end -->
     </div>
   </div>
 </div>
 <!-- world-part end -->