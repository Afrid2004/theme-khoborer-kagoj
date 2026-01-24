<!-- play-part start -->

<?php
    $original_id = 16;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 16;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
?>

<div class="container border-bottom pb-md-4 pb-3">
  <div class="row d-flex align-items-center justify-content-between border-bottom pb-3 mt-md-3 mt-2">
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
      <a class="text-decoration-none text-dark font-size-17 d-flex align-items-center"
        href="<?php echo esc_url($category_link); ?>">আরও <i class="fa-solid fa-arrow-right ms-1"></i></a>
    </div>
  </div>

  <div class="row mt-md-4 mt-3">
    <div class="col-md-4 col-12 border-end pe-2 pe-md-4">

      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 pb-md-3 pb-2 ">
              <?php 
                $play = new WP_Query(array(
                    'cat' => $category_id,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ));
                while ($play->have_posts()):$play->the_post();
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
                <div class="col-12 mt-2">
                  <div class="heading">
                    <h4 class="mb-3 lh-base"><a class="text-decoration-none text-dark font-size-24"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                  </div>
                  <div class="news-body">
                    <p><?php $playText = get_the_content();
                                        $playTrimingWords = WP_trim_words($playText, 25, '...');
                                        echo $playTrimingWords;?></p>
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

    <div class="col-md-4 col-12 border-end mb-4">
      <div class="row">
        <?php 
                 $play = new WP_Query(array(
                    'cat' => $category_id,
                    'offset' => 1,
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                ));
                while ($play->have_posts()):$play->the_post();
            ?>
        <div class="col-12 mt-md-3 mt-2 border-bottom pb-md-3 pb-2 margin-top-none">
          <div class="row">
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



    <div class="col-md-4 col-12">

      <div class="row">
        <?php 
                 $play = new WP_Query(array(
                    'cat' => $category_id,
                    'offset' => 5,
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                ));
                while ($play->have_posts()):$play->the_post();
            ?>
        <div class="col-12 mt-md-3 mt-2 border-bottom pb-md-3 pb-2 margin-top-none">
          <div class="row">
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



  </div>
</div>

<!-- play-part end -->