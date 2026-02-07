<!-- lead main box start -->
<div class="container-fluid mt-md-4 mt-2 mb-md-4 mb-2">
  <div class="container">
    <div class="row">
      <div class="col-md-9 border-end">
        <!-- lead-box start -->
        <div class="row">
          <?php
                $original_id = 1;
                $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
                if (empty($category_id)) {
                  $category_id = 1;
                }

                $category_name = get_cat_name($category_id);
                $category_link = get_category_link($category_id);

                // Sticky posts
                $sticky = get_option('sticky_posts');

                $args = array(
                    'posts_per_page' => 1,
                );

                // 👉 যদি sticky থাকে
                if (!empty($sticky)) {
                    $args['post__in'] = $sticky;
                    $args['ignore_sticky_posts'] = 1;
                } 
                // 👉 sticky না থাকলে latest post
                else {
                    $args['cat']     = $category_id;
                    $args['orderby'] = 'date';
                    $args['order']   = 'DESC';
                }
                $featured_post_id = 0;

                $leadBreakingNews = new WP_Query($args);

                while ($leadBreakingNews->have_posts()):$leadBreakingNews->the_post();
                $featured_post_id = get_the_ID();
            ?>
          <div class="col-md-6 col-12 border-end">
            <div class="image">
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
              <a href="<?php the_permalink(); ?>">
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
                  class="img-fluid w-100">
                <?php } 
                            ?>
              </a>
            </div>
            <div class="heading">
              <h2 class="mt-3 mb-3 lh-base">
                <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
            </div>
            <div class="news-body">
              <p>
                <?php 
                                        $contentText = get_the_content();
                                        $trimingWords = WP_trim_words($contentText, 15, '...');
                                        echo $trimingWords;
                                ?>
              </p>
            </div>
            <div class="time">
              <p class="font-size-11"> <?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
            </div>
          </div>
          <?php
                endwhile;
                wp_reset_postdata();
            ?>
          <div class="col-md-6 col-12">
            <div class="row">
              <div class="col-12">
                <?php
                $original_id = 1;
                $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
                if (empty($category_id)) {
                $category_id = 1;
                }

                $category_name = get_cat_name($category_id);
                $category_link = get_category_link($category_id);

                $leadBreakingNews = new WP_Query(array(
                    'cat'                  => $category_id,
                    'posts_per_page'       => 4,
                    'post__not_in'         => array($featured_post_id), // ⭐ বামের পোস্ট বাদ
                    'orderby'              => 'date',
                    'order'                => 'DESC',
                    'ignore_sticky_posts'  => 1
                ));
                while ($leadBreakingNews->have_posts()):$leadBreakingNews->the_post();
            ?>
                <div class="border-bottom border-bottom-none  pb-2 mb-3">
                  <div class="row">
                    <div class="col-lg-7 order-md-1 order-2">
                      <div class="heading">
                        <h4 class="mb-3 font-size-20"><a class="text-decoration-none text-dark"
                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      </div>
                      <div class="time">
                        <p class="font-size-11 mb-0"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-5 mb-2">
                      <div class="order-md-2 order-1 mb-2 mb-md-0">
                        <a href="#"><?php
                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large', array(
                                    'class' => 'img-fluid w-100',
                                    'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                                    ));
                                } else { ?>
                          <img
                            src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                            alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                            class="img-fluid w-100">
                          <?php } 
                            ?></a>
                      </div>
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
        <!-- lead-box end -->
        <!-- trading box start -->
        <div class="row trending-box py-2 border-bottom border-top mt-2 gap-2 gap-lg-0">
          <?php
                $original_id = 36;
                $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
                if (empty($category_id)) {
                  $category_id = 36;
                }

                $category_name = get_cat_name($category_id);
                $category_link = get_category_link($category_id);
            ?>
          <div class="col-12 col-lg-3">
            <a href="<?php echo esc_url($category_link); ?>">
              <button type="button" class="btn btn-danger px-md-5">
                <i class="fa-solid fa-arrow-trend-up pe-md-3 pe-2"></i>
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
              </button>
            </a>
          </div>

          <div class="col-lg-9 col-12 overflow-hidden">
            <?php function category_menu_fallback() {?>
            <ul class="all-category d-flex gap-2 px-0 text-nowrap overflow-x-scroll category ps-lg-0 d-flex">
              <li class="tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled">
                <h6 class="mb-0 tag-btn text-end">
                  <a class="text-decoration-none text-black font-size-20" href="category.html">ছাত্রসংসদ নির্বাচন</a>
                </h6>
              </li>
              <li class="tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled">
                <h6 class="mb-0 tag-btn text-end">
                  <a class="text-decoration-none text-black font-size-20" href="category.html">জুলাই সনদ</a>
                </h6>
              </li>
              <li class="tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled">
                <h6 class="mb-0 tag-btn text-end">
                  <a class="text-decoration-none text-black font-size-20" href="category.html">সাদা পাথর</a>
                </h6>
              </li>
              <li class="tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled">
                <h6 class="mb-0 tag-btn text-end">
                  <a class="text-decoration-none text-black font-size-20" href="category.html">দুর্ণীতির খবর</a>
                </h6>
              </li>
              <li class="tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled">
                <h6 class="mb-0 tag-btn text-end">
                  <a class="text-decoration-none text-black font-size-20" href="category.html">স্বর্ণের বাজার</a>
                </h6>
              </li>
            </ul>
            <?php }
                wp_nav_menu(array(
                  'theme_location'    => 'category-menu',
                  'menu_class'        => 'all-category px-0 d-flex gap-2 text-nowrap overflow-x-scroll category ps-lg-0',
                  'depth'             => 0,
                  'container'         => false,
                  'fallback_cb'       => 'category_menu_fallback'
                ))
            ?>
          </div>
        </div>



        <div class="trending-box py-md-3 py-2 mt-2 mt-md-3">
          <div class="border-bottom d-none d-md-block pb-4">


            <div class="row">
              <?php
                $trendingPost = new WP_Query(array(
                    'cat'               => $category_id,
                    'posts_per_page'    => 2,
                    'order'             => 'DESC'
                ));
                while ($trendingPost->have_posts()): $trendingPost->the_post();
              ?>
              <div class="col-md-6 col-6 pb-2">
                <div class="row border-end">
                  <div class="col-lg-8 order-md-1 order-2">
                    <div class="heading">
                      <h6 class="mb-md-3 md-2 "><a class=" font-size-22 text-decoration-none text-dark"
                          href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    </div>
                    <div class="time">
                      <p class="font-size-11 mb-0"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                    </div>
                  </div>
                  <div class="col-lg-4 order-md-2 order-1 mb-2 mb-md-0">
                    <div class="image">
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
                  </div>
                </div>
              </div>
              <?php
                endwhile;
                wp_reset_postdata();
              ?>
            </div>
          </div>

          <div class="border-bottom mt-2 col-12 d-md-none">
            <mn1-border></mn1-border>
          </div>

        </div>

        <div class="trending-box py-md-3 py-2">
          <div class="row">
            <?php
                $trendingPost = new WP_Query(array(
                    'cat'               => $category_id,
                    'offset'            => 2,
                    'posts_per_page'    => 2,
                    'order'             => 'DESC'
                ));
                while ($trendingPost->have_posts()): $trendingPost->the_post();
              ?>
            <div class="col-md-6 col-6 pb-2">
              <div class="row border-end">
                <div class="col-lg-8 order-md-1 order-2">
                  <div class="heading">
                    <h6 class="mb-md-3 md-2 "><a class=" font-size-22 text-decoration-none text-dark"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                  </div>
                  <div class="time">
                    <p class="font-size-11 mb-0"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                  </div>
                </div>
                <div class="col-lg-4 order-md-2 order-1 mb-2 mb-md-0">
                  <div class="image">
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
                </div>
              </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
              ?>
          </div>

          <div class="border-bottom mt-2 col-12 d-md-none">
            <mn1-border></mn1-border>
          </div>

        </div>
        <!-- trading box end -->


      </div>
      <div class="col-md-3 mt-3 mt-lg-0">
        <div class="video-box">
          <div class="row">
            <?php
              $video_id = 2;
              $categoryvideo_id = intval(get_theme_mod("rjs_category_dropdown_{$video_id}"));

              if (empty($categoryvideo_id)) {
                  $categoryvideo_id = 2;
              }

              $videocategory_name = get_cat_name($categoryvideo_id);
              $videocategory_link = get_category_link($categoryvideo_id);

              $videoargs = array(
                  'posts_per_page'      => 1,
                  'cat'                 => $categoryvideo_id,
                  'orderby'             => 'date',
                  'order'               => 'DESC',
                  'ignore_sticky_posts' => 1, // ⭐ VERY IMPORTANT
              );

              $catBreaking = new WP_Query($videoargs);

              while ($catBreaking->have_posts()) : $catBreaking->the_post();
            ?>
            <!-- category No. On Off start -->
            <?php
                if (is_user_logged_in()) {
                $videocategoryOnOff = get_theme_mod('npa_category_switcher_id');
                if ('0' != $videocategoryOnOff) {
                    echo '<span class="text-danger"> ' . esc_html($video_id) . ' </span>';
                }
                }
                ?>
            <!-- category No. On Off end -->
            <div class="col-12">
              <div class="row">
                <div class="image col-12">
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
                      class="img-fluid w-100">
                    <?php } 
                                ?></a>
                </div>
                <div class="head mt-3 mb-3 heading  col-12">
                  <div class="border-bottom">
                    <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-20"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                  </div>
                </div>
              </div>
            </div>

            <?php
              endwhile;
              wp_reset_postdata();
          ?>
          </div>

          <div class="row">
            <div class="col-12">
              <?php
                $video_id = 2;
                $categoryvideo_id = intval(get_theme_mod("rjs_category_dropdown_{$video_id}"));

                if (empty($categoryvideo_id)) {
                    $categoryvideo_id = 2;
                }

                $videocategory_name = get_cat_name($categoryvideo_id);
                $videocategory_link = get_category_link($categoryvideo_id);

                $videoargs = array(
                    'posts_per_page'      => 3,
                    'offset'              => 1,
                    'cat'                 => $categoryvideo_id,
                    'orderby'             => 'date',
                    'order'               => 'DESC',
                    'ignore_sticky_posts' => 1, // ⭐ VERY IMPORTANT
                );

                $catBreaking = new WP_Query($videoargs);

                while ($catBreaking->have_posts()) : $catBreaking->the_post();
              ?>
              <div class="row mb-3">
                <div class="col-lg-7 heading">
                  <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-18"
                      href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                </div>
                <div class="col-lg-5 image">
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
                      class="img-fluid w-100">
                    <?php } 
                                ?></a>
                </div>
                <div class="col-12">
                  <div class="border-bottom"></div>
                </div>
              </div>
              <?php
                endwhile;
                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
        <div class="row mt-md-3 mt-3 tab-letest heading">
          <!-- Nav tabs -->
          <div class="nav justify-content-around" id="myTab" role="tablist">
            <a class="nav-link active-tab-link show tab-link active text-dark text-bold font-size-22 pb-2 mb-4"
              data-bs-toggle="tab" href="#recent" role="tab">
              সর্বশেষ
            </a>

            <a class="nav-link active-tab-link tab-link text-dark text-bold font-size-22 pb-2 mb-4" data-bs-toggle="tab"
              href="#moreviewed" role="tab">
              সর্বাধিক পঠিত
            </a>
          </div>

          <!-- Tab content -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active d-flex flex-column" id="recent" role="tabpanel">
              <?php 
                $args = array(
                  'posts_per_page' => 10,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                );
                $counter = 1;
                $query = new WP_Query($args);

              if ($query->have_posts()):while ($query->have_posts()):$query->the_post();?>
              <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                <h5 class="border-bottom pb-2"><?php echo convert_to_bangla($counter); ?>. <?php echo the_title(); ?>
                </h5>
              </a>
              <?php $counter++; endwhile; endif; ?>
            </div>

            <div class="tab-pane fade d-flex flex-column" id="moreviewed" role="tabpanel">
              <?php 
                $args = array(
                  'posts_per_page' => 10,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                );
                $nextCounter = 1;
                $query = new WP_Query($args);

              if ($query->have_posts()):while ($query->have_posts()):$query->the_post();?>
              <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                <h5 class="border-bottom pb-2"><?php echo convert_to_bangla($nextCounter); ?>.
                  <?php echo the_title(); ?></h5>
              </a>
              <?php $nextCounter++; endwhile; endif; ?>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>
<!-- lead main box end -->