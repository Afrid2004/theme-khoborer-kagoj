<!-- english-part start -->
<?php
    $original_id = 6;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 6;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
<div class="container-fluid pb-5 px-0">
  <div class="container">
    <div class="row d-flex align-items-center border-bottom pb--md-3 pb-2 mt-3 mt-md-4">
      <div class="col-md-6">
        <a class="text-decoration-none text-dark font-size-20 fw-bold" href="<?php echo esc_url($category_link); ?>">
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
    </div>
    <div class="row border-bottom pb-md-3 pb-2 ps-2">
      <?php
        $englishNews = new WP_Query(array(
            'cat' => $category_id,
            'posts_per_page' => 4,
            'order' => 'DESC'
        ));
        while ($englishNews->have_posts()):$englishNews->the_post();
        ?>
      <div class="col-lg-3 col-6">
        <div class="row mt-2 mt-md-3 d-flex align-items-start">
          <div class="col-md-4 col-12 px-md-0">
            <a href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid mb-md-2 mb-1 w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
              <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                class="mb-md-2 mb-1 img-fluid w-100">
              <?php } ?></a>
          </div>
          <div class="col-md-8 col-12 mt-2 mt-md-0 px-md-2">
            <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
              <p class="font-size-15 mb-0"><?php the_title(); ?></p>
            </a>
          </div>
        </div>
      </div>
      <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>

    <div class="row border-bottom pb-md-3 pb-2 ps-2">
      <?php
        $englishNews = new WP_Query(array(
            'cat' => $category_id,
            'posts_per_page' => 4,
            'offset'    => 4,
            'order' => 'DESC'
        ));
        while ($englishNews->have_posts()):$englishNews->the_post();
        ?>
      <div class="col-lg-3 col-6">
        <div class="row mt-2 mt-md-3 d-flex align-items-start">
          <div class="col-md-4 col-12 px-md-0">
            <a href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid mb-md-2 mb-1 w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
              <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                class="mb-md-2 mb-1 img-fluid w-100">
              <?php } ?></a>
          </div>
          <div class="col-md-8 col-12 mt-2 mt-md-0 px-md-2">
            <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
              <p class="font-size-15 mb-0"><?php the_title(); ?></p>
            </a>
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
<!-- english-part end -->