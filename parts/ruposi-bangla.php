<!-- ruposi bangla -part start -->
<?php
    $original_id = 13;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 13;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
<div class="container border-bottom pb-md-4 pb-3 mb-4">
  <div class="row mt-md-4 mt-3">
    <div class="col-md-6 col-12 border-end pe-2 pe-md-4 pb-4">
      <div class="row d-flex align-items-center justify-content-between border-bottom pb-3">
        <div class="col-md-3 col-6 ruposi-first">
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
          class="division-box col-md-7 d-flex align-items-lg-center col-lg-8 sub-category text-nowrap overflow-x-scroll mb-0 hover-world d-none d-md-block category ps-lg-0">
          <nav>
            <?php function primary_district_menu_fallback(){?>
            <ul class="ul d-flex gap-3 mb-0 p-0">
              <li class="text-danger"><a class="text-decoration-none text-dark me-3 "
                  href="<?php the_permalink(); ?>">ঢাকা</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">চট্টগ্রাম</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">বরিশাল</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">খুলনা</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">সিলেট</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">রাজশাহী</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark me-3"
                  href="<?php the_permalink(); ?>">রংপুর</a></li>
              <li class="text-danger"><a class="text-decoration-none text-dark"
                  href="<?php the_permalink(); ?>">ময়মনসিংহ</a></li>
            </ul>
            <?php } 
                wp_nav_menu(array(
                    'theme_location'        => 'district-menu',
                    'menu_class'            => 'ul d-flex gap-3 mb-0 p-0',
                    'container'             => false,
                    'depth'                 => 0,
                    'fallback_cb'           => 'primary_district_menu_fallback'
                ))
            ?>
          </nav>
        </div>


        <div class="col-md-2 col-6 d-flex align-items-center justify-content-end ruposi-last border-left">
          <a class="text-decoration-none text-dark font-size-17 d-flex gap-1 px-1"
            href="<?php echo esc_url($category_link); ?>">আরও <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
      </div>
      <div class="row border-bottom">
        <div class="col-12">
          <div class="row">
            <div class="col-12 mt-md-4 mt-2 pb-md-3 pb-2 ">
              <?php 
                $ruposhiBangla = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($ruposhiBangla->have_posts()):$ruposhiBangla->the_post();
            ?>
              <div class="row">
                <div class="col-md-6 col-12 order-2 order-md-1 mt-2">
                  <div class="heading">
                    <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                  </div>
                  <div class="time d-none d-md-block">
                    <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
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
              <?php
                endwhile;
                wp_reset_postdata();
            ?>
            </div>

          </div>
        </div>
      </div>


      <div class="row">
        <?php 
                $ruposhiBangla = new WP_Query(array(
                    'cat' => $category_id,
                    'offset'      => 1,
                    'posts_per_page' => 6,
                    'order' => 'DESC'
                ));
                while ($ruposhiBangla->have_posts()):$ruposhiBangla->the_post();
            ?>
        <div class="col-md-6 col-12 mt-md-3 mt-2 pb-2 border-bottom">
          <div class="row border-end">
            <div class="col-lg-7 order-md-1 order-2">
              <div class="heading">
                <h6 class="mb-md-3 md-2"><a class="text-decoration-none font-size-18 text-dark"
                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
              </div>
              <div class="time">
                <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
              </div>
            </div>
            <div class="col-lg-5 order-md-2 order-1 mb-2 mb-md-0">
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
            </div>
          </div>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
            ?>
      </div>
    </div>

    <div class="col-md-3 col-12 border-end pb-4">
      <!-- probash-part start -->
      <?php
    $original_id = 14;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 14;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
      <div class="container">
        <div class="row d-flex align-items-center border-bottom pb-3">
          <div class="col-md-7 col-7">
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
          <div class="col-md-5 d-flex align-items-center justify-content-end col-5">
            <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                class="fa-solid fa-arrow-right ms-1"></i></a>
          </div>

        </div>

      </div>
      <!-- probash-part end -->
      <?php 
                 $court = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 2,
                    'order' => 'DESC'
                ));
                while ($court->have_posts()):$court->the_post();
            ?>
      <div class="col-12 mt-4 border-bottom mb-4 border-bottom-none">
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
          <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
              href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        </div>
        <div class="time d-none d-md-block">
          <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
        </div>

      </div>
      <?php
                endwhile;
                wp_reset_postdata();
            ?>

    </div>

    <div class="col-md-3 col-12">
      <!-- probash-part start -->
      <?php
    $original_id = 15;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 15;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
      <div class="container">
        <div class="row d-flex align-items-center border-bottom pb-3">
          <div class="col-md-7 col-7">
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
          <div class="col-md-5 d-flex align-items-center justify-content-end col-5">
            <a class="text-decoration-none text-dark font-size-17" href="<?php echo esc_url($category_link); ?>">আরও <i
                class="fa-solid fa-arrow-right ms-1"></i></a>
          </div>

        </div>

      </div>
      <!-- probash-part end -->

      <?php 
                 $oporadh = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 2,
                    'order' => 'DESC'
                ));
                while ($oporadh->have_posts()):$oporadh->the_post();
            ?>
      <div class="col-12 mt-4 border-bottom border-bottom-none mb-4">
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
          <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
              href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        </div>
        <div class="time d-none d-md-block">
          <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
        </div>

      </div>
      <?php
                endwhile;
                wp_reset_postdata();
            ?>

    </div>



  </div>
</div>

<!-- ruposi bangla -part end -->