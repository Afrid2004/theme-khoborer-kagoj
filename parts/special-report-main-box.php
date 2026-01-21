<!-- special-report main box start -->
<?php
    $original_id = 8;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 8;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
<div class="container-fluid special-report-bg py-md-3 py2 mt-md-3 mt-3 mb-md-3 mb-2 ">
  <!-- special-report-box start -->
  <div class="container pt-3">
    <div class="row d-flex align-items-center border-bottom mb-md-4 mb-2 pb-md-3 pb-2 mt-md-4 mt-2">
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
    <div class="row pb-3 g-3">
      <?php
      $specialReport = new WP_Query(array(
        'cat' => $category_id,
        'posts_per_page' => 8,
        'order' => 'DESC'
      ));
      while ($specialReport->have_posts()):$specialReport->the_post();
    ?>
      <div class="col-md-3 mt-md-4 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="<?php the_permalink(); ?>"> <?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid rounded-top',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
              <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                class="img-fluid rounded-top">
              <?php } ?></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
          </div>
          <div class="news-body ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <p class="lh-base"><?php $reportText = get_the_content();
                                        $reportTrimingWords = WP_trim_words($reportText, 10, '...');
                                        echo $reportTrimingWords;?></p>
          </div>
          <div class="time ms-md-3 ms-2 ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <p class="font-size-11"><?php echo khoborerkagoj_category_with_time_ago(); ?></p>
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
<!-- special-report-box end -->