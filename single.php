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

          <div>
            <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url(home_url()); ?>">
              <i class="bi bi-house-door me-3"></i>
            </a>
            <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url($cat_link); ?>">
              <?php echo esc_html($cat_name); ?></a>
          </div>
        </div>

      </div>


    </div>

  </div>
</div>
<!-- national-part end -->

<!-- lead main box start -->
<div class="container-fluid mt-md-4 mt-3 mb-md-4 mb-2">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-12 border-end">
        <div class="col-12">

          <?php if (have_posts()):while (have_posts()):the_post();?>



          <div class="heading">
            <h1><a class="text-decoration-none text-dark"
                href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
          </div>
          <div class="timelinebox-socialmedia">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="date-and-time font-size-12 mt-md-3">
                  <div class="sourse-box d-flex justify-content-start align-items-center">
                    <i class="bi bi-crosshair2"></i>
                    <h5 class="font-size-16 ps-2 mt-2 pe-2">খবরের কাগজ ডেস্ক</h5>
                  </div>
                  <div class="timeline-box d-flex justify-content-start align-items-center">
                    <i class="bi bi-calendar"></i>
                    <h5 class="font-size-16 ps-2 mt-2">প্রকাশিত : <?php echo bangla_publish_date(get_the_time('U')); ?>
                    </h5>
                  </div>
                </div>

              </div>
              <!-- social-media start -->
              <div class="col-md-6 col-12 mt-md-4 mt-3">
                <?php
                  $social_media_facebook = get_theme_mod('npa_social_media_1', '#');
                  $social_media_youtube = get_theme_mod('npa_social_media_2', '#');
                  $social_media_instagram = get_theme_mod('npa_social_media_3', '#');
                  $social_media_linkedin = get_theme_mod('npa_social_media_4', '#');
                  $social_media_twitter = get_theme_mod('npa_social_media_5', '#');
              ?>
                <div class="pt-2 pb-2 d-flex justify-content-end gap-3 font-md ">
                  <a class="text-dark link" href="<?php echo $social_media_facebook; ?>"><i
                      class="bi bi-facebook font-size-22"></i></a>
                  <a class="text-dark link" href="<?php echo $social_media_youtube; ?>"><i
                      class="bi bi-youtube font-size-22"></i></a>
                  <a class="text-dark link" href="<?php echo $social_media_instagram; ?>"><i
                      class="bi bi-instagram font-size-22"></i></i></a>
                  <a class="text-dark link" href="<?php echo $social_media_linkedin; ?>"><i
                      class="bi bi-linkedin font-size-22"></i></a>
                  <a class="text-dark link" href="<?php echo $social_media_twitter; ?>"><i
                      class="bi bi-twitter font-size-22"></i></a>
                </div>
              </div>
              <!-- social-media end -->
            </div>
          </div>
          <div class="news-image mt-md-4 mt-3">
            <?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                      the_post_thumbnail('banner-image-size-856x460', array(
                            'class' => 'img-fluid w-100',
                            'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
              ));} else { ?>
            <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
              alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>">
            <?php } ?>
          </div>
          <div class="caption border-bottom mb-md-3 mb-2 text-center mt-2">
            <p><?php echo the_title(); ?></p>
          </div>
          <div class="news-page-body font-size-18">
            <p class="font-size-18"><?php echo the_content(); ?></p>
          </div>
          <!-- social-media start -->
          <div class="col-md-6 col-12 mt-md-4 mt-3">

            <div class="pt-2 pb-2 d-flex justify-content-start gap-3 font-md ">
              <a class="text-dark link" href="<?php echo $social_media_facebook; ?>"><i
                  class="bi bi-facebook font-size-22"></i></a>
              <a class="text-dark link" href="<?php echo $social_media_youtube; ?>"><i
                  class="bi bi-youtube font-size-22"></i></a>
              <a class="text-dark link" href="<?php echo $social_media_instagram; ?>"><i
                  class="bi bi-instagram font-size-22"></i></i></a>
              <a class="text-dark link" href="<?php echo $social_media_linkedin; ?>"><i
                  class="bi bi-linkedin font-size-22"></i></a>
              <a class="text-dark link" href="<?php echo $social_media_twitter; ?>"><i
                  class="bi bi-twitter font-size-22"></i></a>
            </div>
          </div>
          <!-- social-media end -->

          <?php endwhile; endif; ?>

        </div>
      </div>
      <!-- lead-box end -->

      <!-- video box start -->
      <div class="col-md-3 border-top pt-3 px-0 px-lg-2">
        <div class="video-box">
          <div class="row">
            <?php
              $video_id = 33;
              $categoryvideo_id = intval(get_theme_mod("rjs_category_dropdown_{$video_id}"));

              if (empty($categoryvideo_id)) {
                  $categoryvideo_id = 33;
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
                $video_id = 33;
                $categoryvideo_id = intval(get_theme_mod("rjs_category_dropdown_{$video_id}"));

                if (empty($categoryvideo_id)) {
                    $categoryvideo_id = 33;
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
          <ul class="nav justify-content-between px-2">
            <li class="nav-item">
              <a class="nav-link active text-dark text-bold font-size-22" aria-current="page" href="#">সর্বশেষ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark text-bold font-size-22" href="#">সর্বাধিক পঠিত</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- video box end -->
    </div>
  </div>
</div>
<!-- lead main box end -->


<!-- more-part start -->
<div class="container">
  <div class="row d-flex align-items-center border-bottom pb-3 mt-4">
    <div class="col-md-6 col-6">
      <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url($cat_link); ?>">আরও</a>
    </div>
  </div>
  <div class="row">
    <?php
$current_post_id = get_the_ID();
$categories = get_the_category();
$category_id = !empty($categories) ? $categories[0]->term_id : '';

$education = new WP_Query(array(
    'cat'            => $category_id,
    'posts_per_page' => 4,
    'post__not_in'   => array($current_post_id), // ⭐ বর্তমান পোস্ট বাদ
    'orderby'        => 'date',
    'order'          => 'DESC',
    'ignore_sticky_posts' => 1
));

while ($education->have_posts()) : $education->the_post();
?>
    <div class="col-md-3 mt-4">
      <div class="image">
        <a href="<?php the_permalink(); ?>"> <?php
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

      <div class="heading">
        <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20"
            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
      </div>
    </div>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  </div>
</div>
<!-- more-part end -->


<!-- video- main box start -->
<?php
    $original_id = 34;
    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
    if (empty($category_id)) {
      $category_id = 34;
    }

    $category_name = get_cat_name($category_id);
    $category_link = get_category_link($category_id);
    ?>
<div class="container-fluid special-report-bg py-3 pb-4 mt-md-3 mt-3">
  <!-- special-report-box start -->
  <div class="container">
    <div class="row d-flex align-items-center border-bottom mb-md-3 mb-2 pb-md-3 pb-2 mt-md-3 mt-2">
      <div class="col-12">
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
    </div>
    <div class="row pb-md-3 pb-2 g-3">
      <?php
      $videopart = new WP_Query(array(
        'cat' => $category_id,
        'posts_per_page' => 4,
        'order' => 'DESC'
      ));
      while ($videopart->have_posts()):$videopart->the_post();
    ?>
      <div class="col-md-3 mt-md-3 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="<?php the_permalink(); ?>"><?php
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
              if (has_post_thumbnail()) {
                the_post_thumbnail('large', array(
                  'class' => 'img-fluid rounded-top w-100',
                  'alt' => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
              } else { ?>
              <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>"
                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                class="mb-md-2 mb-1 img-fluid w-100">
              <?php } ?></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none font-size-18 text-dark"
                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h6>
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
<!-- video- main-box end -->


<?php get_footer(); ?>