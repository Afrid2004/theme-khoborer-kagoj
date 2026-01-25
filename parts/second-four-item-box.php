 <!-- four-item-box start -->
 <div class="container-fluid px-0">
   <div class="container mt-md-4 mt-3 border-bottom pb-md-4 pb-2">
     <div class="row">

       <!-- বিরতি start -->
       <?php
            $original_id = 28;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 28;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <div class="col-md-3 col-12 border-end mt-md-0 mt-4">
         <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-md-3 mt-2">
           <div class="col-6 ">
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

           <div class="col-6 d-flex align-items-center justify-content-end border-left">
             <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                 class="fa-solid fa-arrow-right ms-1"></i></a>
           </div>
         </div>

         <div class="row">
           <div class="col-12 mt-md-3 mt-2">
             <?php 
                $break = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($break->have_posts()):$break->the_post();
            ?>
             <div class="border-bottom">
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
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                   </div>
                 </div>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>

             <?php 
                $break = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'      => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($break->have_posts()):$break->the_post();
            ?>
             <div class="col-12 mt-md-3 mt-2 border-bottom border-bottom-none">
               <div class="heading mt-md-4 mt-3 mb-mt-4 mb-3">
                 <h4><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
           </div>

         </div>
       </div>
       <!-- sicence end -->

       <!-- রঙ্গব্যঙ্গ start -->
       <?php
            $original_id = 29;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 29;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <div class="col-md-3 col-12 border-end mt-md-0 mt-4">
         <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-md-3 mt-2">
           <div class="col-6 ">
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

           <div class="col-6 d-flex align-items-center justify-content-end border-left">
             <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                 class="fa-solid fa-arrow-right ms-1"></i></a>
           </div>
         </div>

         <div class="row">
           <div class="col-12 mt-md-3 mt-2">
             <?php 
                $rongobongo = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($rongobongo->have_posts()):$rongobongo->the_post();
            ?>
             <div class="border-bottom">
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
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                   </div>
                 </div>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>

             <?php 
                $rongobongo = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'      => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($rongobongo->have_posts()):$rongobongo->the_post();
            ?>
             <div class="col-12 mt-md-3 mt-2 border-bottom border-bottom-none">
               <div class="heading mt-md-4 mt-3 mb-mt-4 mb-3">
                 <h4><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
           </div>

         </div>
       </div>
       <!-- niramoy end -->

       <!-- টিনিএজ প্লাস start -->
       <?php
            $original_id = 30;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 30;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <div class="col-md-3 col-12 border-end mt-md-0 mt-4">
         <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-md-3 mt-2">
           <div class="col-6 ">
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

           <div class="col-6 d-flex align-items-center justify-content-end border-left">
             <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                 class="fa-solid fa-arrow-right ms-1"></i></a>
           </div>
         </div>

         <div class="row">
           <div class="col-12 mt-md-3 mt-2">
             <?php 
                $tinyage = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($tinyage->have_posts()):$tinyage->the_post();
            ?>
             <div class="border-bottom">
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
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                   </div>
                 </div>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>

             <?php 
                $tinyage = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'      => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($tinyage->have_posts()):$tinyage->the_post();
            ?>
             <div class="col-12 mt-md-3 mt-2 border-bottom border-bottom-none">
               <div class="heading mt-md-4 mt-3 mb-mt-4 mb-3">
                 <h4><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
           </div>

         </div>
       </div>
       <!-- islam end -->

       <!-- দুরন্ত start -->
       <?php
            $original_id = 31;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 31;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <div class="col-md-3 col-12 mt-md-0 mt-4">
         <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-md-3 mt-2">
           <div class="col-6 ">
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

           <div class="col-6 d-flex align-items-center justify-content-end border-left">
             <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                 class="fa-solid fa-arrow-right ms-1"></i></a>
           </div>
         </div>

         <div class="row">
           <div class="col-12 mt-md-3 mt-2">
             <?php 
                $duranta = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($duranta->have_posts()):$duranta->the_post();
            ?>
             <div class="border-bottom">
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
                     <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                         href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h4>
                   </div>
                   <div class="time d-none d-md-block">
                     <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                   </div>
                 </div>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>

             <?php 
                $duranta = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'      => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($duranta->have_posts()):$duranta->the_post();
            ?>
             <div class="col-12 mt-md-3 mt-2 border-bottom border-bottom-none">
               <div class="heading mt-md-4 mt-3 mb-mt-4 mb-3">
                 <h4><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
               </div>
             </div>
             <?php
                endwhile;
                wp_reset_postdata();
            ?>
           </div>

         </div>
       </div>
       <!-- Art and culture end -->

     </div>
   </div>
 </div>
 <!-- four-item-box end -->