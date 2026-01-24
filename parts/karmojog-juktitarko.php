 <!-- karmojog-juktitarko-part start -->
 <div class="container border-bottom pb-md-4 pb-3 border-bottom">
   <div class="row">
     <?php
        $original_id = 18;
        $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
        if (empty($category_id)) {
        $category_id = 18;
        }

        $category_name = get_cat_name($category_id);
        $category_link = get_category_link($category_id);
    ?>
     <!-- karmojog-part lead start -->
     <div class="col-md-3 col-12 pe-2 pe-md-4 border-end">
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
                $kromojog = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($kromojog->have_posts()):$kromojog->the_post();
            ?>
           <div class="row border-bottom ">
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
                 <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
               </div>
             </div>
           </div>
           <?php
                endwhile;
                wp_reset_postdata();
            ?>

           <?php 
                $kromojog = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'  => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($kromojog->have_posts()):$kromojog->the_post();
            ?>
           <div class="row border-bottom border-bottom-none">
             <div class="col-12 mt-md-3 mt-2">
               <div class="heading">
                 <h4 class="mb-3"><a class="text-decoration-none text-dark font-size-18"
                     href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </h4>
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
     <!-- karmojog-part lead end -->

     <!-- juktitarko-part lead start -->
     <div class="col-md-9 col-12 ps-3">
       <?php
            $original_id = 19;
            $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
            if (empty($category_id)) {
            $category_id = 19;
            }

            $category_name = get_cat_name($category_id);
            $category_link = get_category_link($category_id);
        ?>
       <!-- jukti-lead start -->
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

       <?php 
        
                $juktitorko = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($juktitorko->have_posts()):$juktitorko->the_post();
         ?>
       <div class="row d-flex align-items-center border-bottom">
         <div class="col-md-4 col-12 jukti-lead p-3 ">
           <a class="d-flex justify-content-center" href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid w-75 rounded',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
             <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
               alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
               class="mb-md-2 mb-1 img-fluid w-100">
             <?php } ?></a>
         </div>
         <div class="col-md-8 mt-md-5 mt-2 mb-md-5 mb-2">
           <div class="heading mb-md-3 mb-2">
             <h4><a class="text-decoration-none text-dark font-size-26" href="<?php the_permalink(); ?>"><i
                   class="fa-solid fa-quote-left pe-1 text-danger"></i><?php the_title(); ?><i
                   class="fa-solid fa-quote-right text-danger ps-1"></i></a></h4>
           </div>
           <div class="news-body">
             <p><a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>"><?php $juktiText = get_the_content();
                                        $juktiTrimingWords = WP_trim_words($juktiText, 25, '...');
                                        echo $juktiTrimingWords;?> ?></a></p>
           </div>
           <div class="writer-name">
             <p> <a class="text-decoration-none text-dark font-size-16 fw-200" href="<?php the_permalink(); ?>"> <i
                   class="fa-solid fa-user-pen pe-2 text-danger"></i>
                 <?php 
                    $juktiLekhok = get_field('juktitorko_lekhok');
                    if(!empty($juktiLekhok)){
                        echo $juktiLekhok;
                    }else{
                        echo '-';
                    }
                ?>
               </a></p>
           </div>
         </div>
       </div>
       <?php
            endwhile;
            wp_reset_postdata();
         ?>
       <!-- jukti-lead end -->

       <!-- jukti-single start -->
       <?php 
                $juktitorko = new WP_Query(array(
                    'cat' => $category_id,
                    'offset' => 1,
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
                while ($juktitorko->have_posts()):$juktitorko->the_post();
        ?>
       <div class="row d-flex align-items-center mt-md-5 mt-2 mb-md-5 mb-2 border-bottom border-bottom-none">
         <div class="col-md-4 col-12">
           <a class="d-flex justify-content-center align-items-center" href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid w-50 rounded',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
             <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
               alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
               class="mb-md-2 mb-1 img-fluid w-100">
             <?php } ?></a>
         </div>
         <div class="col-md-8">
           <div class="heading mb-md-3 mb-2">
             <h4><a class="text-decoration-none text-dark font-size-20" href="<?php the_permalink(); ?>"><i
                   class="fa-solid fa-quote-left pe-1 text-danger"></i><?php the_title(); ?><i
                   class="fa-solid fa-quote-right text-danger ps-1"></i></a></h4>
           </div>
           <div class="writer-name">
             <p> <a class="text-decoration-none text-dark font-size-16" href="<?php the_permalink(); ?>"> <i
                   class="fa-solid fa-user-pen pe-2 text-danger"></i> <?php 
                    $juktiLekhok = get_field('juktitorko_lekhok');
                    if(!empty($juktiLekhok)){
                        echo $juktiLekhok;
                    }else{
                        echo '-';
                    }
                ?></a></p>
           </div>
         </div>
       </div>
       <?php
            endwhile;
            wp_reset_postdata();
         ?>
       <!-- jukti-single end -->


     </div>

     <!-- juktitarko-part lead end -->




   </div>
 </div>
 <!-- karmojog-juktitarko-part end -->