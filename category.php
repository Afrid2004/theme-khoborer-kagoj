<?php 
    get_header();
?>


<!-- national-part start -->
<div class="container">
  <div class="row mt-4">
    <div class="col-12 pe-4">
      <div class="row d-flex align-items-center border-bottom pb-3">
        <div class="col-md-12 px-4 px-sm-3">
          <?php
$categories = get_the_category();
if (!empty($categories)) {
    $cat_name = $categories[0]->name;
    $cat_link = get_category_link($categories[0]->term_id);
} else {
    $cat_name = 'জাতীয়';
    $cat_link = home_url();
}
?>
          <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url($cat_link); ?>"> <i
              class="bi bi-house-door me-3"></i>
            <?php echo esc_html($cat_name); ?>
          </a>
        </div>

      </div>


    </div>

  </div>
</div>
<!-- national-part end -->

<!-- lead main box start -->
<?php
$category = get_queried_object();

if ( is_category() && $category ) {
    $category_id   = $category->term_id;
    $category_name = $category->name;
    $category_link = get_category_link($category_id);
} else {
    return;
}
?>
<div class="container-fluid mt-md-4 mt-2 mb-md-4 mb-2">
  <div class="container">
    <div class="row">

      <!-- lead-category-box start -->

      <div class="col-md-9 col-12 border-end border-bottom pb-md-3 pb-2 mb-3">
        <!-- lead-box start -->
        <div class="row ps-lg-2">

          <div class="col-md-8 col-12 border-end mb-3">
            <?php
                $news_and_event = new WP_Query(array(
                    'cat'               => $category_id,
                    'posts_per_page'    => 1,
                    'order'             => 'DESC'
                ));
                while ($news_and_event->have_posts()): $news_and_event->the_post();
            ?>
            <div class="image-lead-category position-relative bg-opacity">
              <a href="<?php the_permalink(); ?>"> <?php
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

              <h2 class="mb-0 font-size-26"><a class="text-decoration-none text-white p-md-3 p-2 lh-base"
                  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
          </div>




          <div class="col-md-4 col-12">
            <?php
                $news_and_event = new WP_Query(array(
                    'cat'               => $category_id,
                    'posts_per_page'    => 1,
                    'offset'            => 1,
                    'order'             => 'DESC'
                ));
                while ($news_and_event->have_posts()): $news_and_event->the_post();
            ?>
            <div class="row">
              <div class="col-12 order-md-1 order-2">
                <div class="heading">
                  <h4 class="mb-3"><a class="text-decoration-none text-dark mt-md-3 mt-2 font-size-18"
                      href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
                <div class="time">
                  <p class="font-size-11"> <?php echo khoborerkagoj_category_with_time_ago($category_id); ?> </p>
                </div>
              </div>
              <div class="col-12">
                <div class="order-md-2 order-1 mb-md-3 mb-2 mb-2 mb-md-0">
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
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
          </div>


        </div>



        <!-- three-part start -->
        <div class="container ">
          <!-- <div
                            class="row d-flex align-items-center border-bottom pb-3 mt-4 border-bottom mb-3 pb-md-4 pb-3 px-lg-2">
                            <div class="col-md-7 col-7 px-0">
                                <a class="text-decoration-none text-dark font-size-20 text-bold"
                                    href="category.html">রাজনীতি</a>
                            </div>
                            <div class="col-md-5 px-0 col-5 d-flex align-items-center justify-content-end">
                                <a class="text-decoration-none text-dark font-size-17" href="category.html">আারও <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div> -->
          <div class="row">
            <?php
                $news_and_event = new WP_Query(array(
                    'cat'               => $category_id,
                    'posts_per_page'    => 6,
                    'offset'            => 2,
                    'order'             => 'DESC'
                ));
                while ($news_and_event->have_posts()): $news_and_event->the_post();
            ?>
            <div class="col-md-4 col-12 mt-4 border-end ps-0 px-lg-2">
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
              <div class="heading">
                <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
              </div>
              <div class="news-body d-none d-md-block">
                <p class="lh-base"><?php 
                                        $contentText = get_the_content();
                                        $trimingWords = WP_trim_words($contentText, 15, '...');
                                        echo $trimingWords;
                                ?>
                </p>
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
        <!-- three-part end -->

      </div>
      <!-- lead-box end -->


      <div class="col-md-3">

        <div class="row tab-letest heading">
          <ul class="nav justify-content-between">
            <li class="nav-item">
              <a class="nav-link active text-dark text-bold font-size-22 pt-lg-0" aria-current="page"
                href="<?php the_permalink(); ?>">সর্বশেষ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark text-bold font-size-22 pt-lg-0" href="<?php the_permalink(); ?>">সর্বাধিক
                পঠিত</a>
            </li>
          </ul>
        </div>

        <!-- education-part start -->
        <?php
    $original_id = 35;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 35;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
        <div class="row d-md-block d-none">
          <div class="col-12">
            <div class="row d-flex align-items-center border-bottom pb-3 mt-4">
              <div class="col-md-6 col-6">
                <a class="text-decoration-none text-dark font-size-18 text-bold"
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
                  <!-- category No. On Off end -->
                </a>
              </div>
              <div class="col-md-6 col-6 d-flex align-items-center justify-content-end">
                <a class="text-decoration-none text-dark font-size-18" href="<?php echo esc_url($category_link); ?>">আরও
                  <i class="fa-solid fa-arrow-right ms-1"></i></a>
              </div>
            </div>
            <div class="row">
              <?php
      $categorypart = new WP_Query(array(
        'cat' => $category_id,
        'posts_per_page' => 4,
        'order' => 'DESC'
      ));
      while ($categorypart->have_posts()):$categorypart->the_post();
    ?>
              <div class="col-12">
                <div class="row d-flex align-items-center">
                  <div class="col-7 col-md-12">
                    <div class="heading">
                      <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-18"
                          href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    </div>
                  </div>
                  <div class="col-5 col-md-12">
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

              <?php
      endwhile;
      wp_reset_postdata();
    ?>

            </div>
          </div>
        </div>
        <!-- education-part end -->

      </div>


    </div>
    <!-- lead-category-box start -->

  </div>
</div>
</div>
<!-- lead main box end -->

<!-- category-item-start -->
<div class="container-fluid py-3">
  <div class="container">
    <?php
                $news_and_event = new WP_Query(array(
                    'cat'               => $category_id,
                    'posts_per_page'    => 6,
                    'offset'            => 8,
                    'order'             => 'DESC'
                ));
                while ($news_and_event->have_posts()): $news_and_event->the_post();
            ?>
    <div class="row d-flex justify-content-start">
      <div class="col-md-8 col-12 border-bottom pb-md-4 pb-2 mb-md-5 mb-3">
        <div class="heading mb-md-3 mb-2">
          <h3><a class="text-decoration-none text-dark font-size-24"
              href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="news-image d-flex justify-content-between">
          <div class="row">
            <div class="col-md-8">
              <div class="news-body">
                <p><?php 
                                        $contentText = get_the_content();
                                        $trimingWords = WP_trim_words($contentText, 15, '...');
                                        echo $trimingWords;
                                ?></p>
                <div class="time">
                  <p><?php echo khoborerkagoj_category_with_time_ago($category_id); ?></p>
                </div>
              </div>

            </div>
            <div class="col-md-4 image">
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

          <div>

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
<!-- category-item-end -->







<?php get_footer(); ?>