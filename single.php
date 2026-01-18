<?php 
get_header();

?>

<!-- national-part start -->
<div class="container">
  <div class="row mt-4">
    <div class="col-12 pe-4">
      <div class="row d-flex align-items-center border-bottom pb-3">
        <div class="col-md-12 px-4 px-sm-3">
          <a class="text-decoration-none text-dark font-size-20 text-bold" href="<?php echo esc_url(home_url()); ?>"> <i
              class="bi bi-house-door me-3"></i> জাতীয়</a>
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

                <div class="pt-2 pb-2 d-flex justify-content-between font-md ">
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook font-size-22"></i></a>
                  <a href="https://www.youtube.com/"><i class="bi bi-youtube font-size-22"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram font-size-22"></i></i></a>
                  <a href="https://www.linkedin.com/"><i class="bi bi-linkedin font-size-22"></i></a>
                  <a href="https://www.twitter.com/"><i class="bi bi-twitter font-size-22"></i></a>
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

            <div class="pt-2 pb-2 d-flex justify-content-between font-md ">
              <a href="https://www.facebook.com/"><i class="bi bi-facebook font-size-22"></i></a>
              <a href="https://www.youtube.com/"><i class="bi bi-youtube font-size-22"></i></a>
              <a href="https://www.instagram.com/"><i class="bi bi-instagram font-size-22"></i></i></a>
              <a href="https://www.linkedin.com/"><i class="bi bi-linkedin font-size-22"></i></a>
              <a href="https://www.twitter.com/"><i class="bi bi-twitter font-size-22"></i></a>
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
          <div class="image">
            <a href="#"><img class="img-fluid w-100 " src="<?php echo get_template_directory_uri() .
                                "/images/video-img.png"; ?>" alt="pic"></a>
          </div>
          <div class="head mt-3 mb-3 heading">
            <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-20" href="#">১৬ পৃষ্ঠার খবরের কাগজের
                আজকের আয়োজনে যা আছে</a></h6>
          </div>
          <div class="row">
            <div class="col-md-7 heading">
              <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-18" href="#">ভোটে ফিরছে সেনাবাহিনীর
                  শক্তি</a></h6>
            </div>
            <div class="col-md-5 image">
              <a href="#"><img class="img-fluid w-100 " src="<?php echo get_template_directory_uri() .
                                    "/images/video-img.png"; ?>" alt="pic"></a>
            </div>
          </div>
          <div class="row border-bottom mb-3 pt-1 border-top ">
            <div class="col-md-7 heading">
              <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-18" href="#">ভোটে ফিরছে সেনাবাহিনীর
                  শক্তি</a></h6>
            </div>
            <div class="col-md-5 image">
              <a href="#"><img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                                    "/images/video-img.png"; ?>" alt="pic"></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 heading">
              <h6 class="lh-base"><a class="text-decoration-none text-dark font-size-18" href="#">ভোটে ফিরছে সেনাবাহিনীর
                  শক্তি</a></h6>
            </div>
            <div class="col-md-5 image">
              <a href="#"><img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                                    "/images/video-img.png"; ?>" alt="pic"></a>
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
      <a class="text-decoration-none text-dark font-size-20 text-bold" href="#">আরও</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mt-4">
      <div class="image">
        <a href="#"> <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                        "/images/cadet-college.png"; ?>" alt="college"></a>
      </div>

      <div class="heading">
        <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20" href="#">ক্যাডেট কলেজে ভর্তি
            পরীক্ষার প্রস্তুতি: বাংলা বিষয়</a></h6>
      </div>
    </div>
    <div class="col-md-3 mt-4">
      <div class="image">
        <a href="#"> <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                        "/images/cadet-college.png"; ?>" alt="college"></a>
      </div>

      <div class="heading">
        <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20" href="#">ক্যাডেট কলেজে ভর্তি
            পরীক্ষার প্রস্তুতি: বাংলা বিষয়</a></h6>
      </div>
    </div>
    <div class="col-md-3 mt-4">
      <div class="image">
        <a href="#"> <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                        "/images/cadet-college.png"; ?>" alt="college"></a>
      </div>

      <div class="heading">
        <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20" href="#">ক্যাডেট কলেজে ভর্তি
            পরীক্ষার প্রস্তুতি: বাংলা বিষয়</a></h6>
      </div>
    </div>
    <div class="col-md-3 mt-4">
      <div class="image">
        <a href="#"> <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() .
                        "/images/cadet-college.png"; ?>" alt="college"></a>
      </div>

      <div class="heading">
        <h6 class="mt-3 lh-base"><a class="text-decoration-none text-dark font-size-20" href="#">ক্যাডেট কলেজে ভর্তি
            পরীক্ষার প্রস্তুতি: বাংলা বিষয়</a></h6>
      </div>
    </div>

  </div>
</div>
<!-- more-part end -->


<!-- video- main box start -->
<div class="container-fluid special-report-bg py-3 pb-4 mt-md-3 mt-3">
  <!-- special-report-box start -->
  <div class="container">
    <div class="row d-flex align-items-center border-bottom mb-md-3 mb-2 pb-md-3 pb-2 mt-md-3 mt-2">
      <div class="col-12">
        <a class="text-decoration-none text-dark font-size-20 text-bold" href="#">ভিডিও</a>
      </div>
    </div>
    <div class="row pb-md-3 pb-2 g-3">
      <div class="col-md-3 mt-md-3 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="#"> <img class="img-fluid rounded-top w-100" src="<?php echo get_template_directory_uri() .
                            "/images/video-img.png"; ?>" alt="Vomra"></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none font-size-18 text-dark" href="#">ছাত্রসংসদ নির্বাচন/
                তিন বিশ্ববিদ্যালয়ের খসড়া বাজেট প্রায় ৩ কোটি</a></h6>
          </div>
        </div>

      </div>

      <div class="col-md-3 mt-md-3 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="#"> <img class="img-fluid rounded-top w-100" src="<?php echo get_template_directory_uri() .
                            "/images/video-img.png"; ?>" alt="Vomra"></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none font-size-18 text-dark" href="#">ছাত্রসংসদ নির্বাচন/
                তিন বিশ্ববিদ্যালয়ের খসড়া বাজেট প্রায় ৩ কোটি</a></h6>
          </div>
        </div>

      </div>

      <div class="col-md-3 mt-md-3 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="#"> <img class="img-fluid rounded-top w-100" src="<?php echo get_template_directory_uri() .
                            "/images/video-img.png"; ?>" alt="Vomra"></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none font-size-18 text-dark" href="#">ছাত্রসংসদ নির্বাচন/
                তিন বিশ্ববিদ্যালয়ের খসড়া বাজেট প্রায় ৩ কোটি</a></h6>
          </div>
        </div>

      </div>

      <div class="col-md-3 mt-md-3 mt-2 special-report-single">
        <div class="spacila-bg-white bg-white rounded pb-md-2 pb-1">
          <div class="image">
            <a href="#"> <img class="img-fluid rounded-top w-100" src="<?php echo get_template_directory_uri() .
                            "/images/video-img.png"; ?>" alt="Vomra"></a>
          </div>
          <div class="heading ms-md-3 ms-2 me-md-2 me-2 me-md-3">
            <h6 class="mt-3 lh-base"><a class="text-decoration-none font-size-18 text-dark" href="#">ছাত্রসংসদ নির্বাচন/
                তিন বিশ্ববিদ্যালয়ের খসড়া বাজেট প্রায় ৩ কোটি</a></h6>
          </div>
        </div>

      </div>



    </div>

  </div>
</div>
<!-- video- main-box end -->


<?php get_footer(); ?>