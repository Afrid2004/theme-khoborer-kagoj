<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>খবরের কাগজ । আজকের বাংলা নিউজ পেপার | বাংলা পত্রিকা</title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- header-responsive-part -->
  <div class="container-fluid bg-white px-0 d-md-none d-flex align-items-center justify-content-between position-sticky"
    style="top:0; z-index:5;">
    <div class="container shadow py-3 pe-4">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-7">
          <?php $default_main_logo = get_template_directory_uri() . '/images/logo.png'; ?>
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo get_theme_mod('npa-main-logo', $default_main_logo); ?>"
              alt="<?php echo esc_attr(bloginfo('name')) ?>" height="auto" class="img-fluid">
          </a>
        </div>


        <div class="col-3 d-flex justify-content-end">
          <div class="border border-color rounded px-4 py-2">
            <p class="mb-0 d-flex justify-content-center"><a class="text-danger font-size-12 text-decoration-none"
                href="category.html">English</a></p>
          </div>
        </div>


        <div class="col-2 d-flex justify-content-end d-md-none ms-0">
          <div class="row d-flex justify-content-end">
            <a class="btn btn-dark py-1 px-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
              aria-controls="offcanvasExample"><i class="bi bi-list font-size-22 text-white "></i></a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
              aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
                <img class="img-fluid offcanvas-title" id="offcanvasExampleLabel" src="<?php echo get_template_directory_uri() .
                      "/images/logo.png"; ?>" alt="Main Logo">

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-header pt-2 pb-2 d-flex justify-content-between font-md shadow">
                <a href="https://www.facebook.com/"><i class="bi bi-facebook font-size-22"></i></a>
                <a href="https://www.youtube.com/"><i class="bi bi-youtube font-size-22"></i></a>
                <a href="https://www.instagram.com/"><i class="bi bi-instagram font-size-22"></i></i></a>
                <a href="https://www.linkedin.com/"><i class="bi bi-linkedin font-size-22"></i></a>
                <a href="https://www.twitter.com/"><i class="bi bi-twitter font-size-22"></i></a>
              </div>
              <div class="offcanvas-body px-0">
                <div class="container-fluid px-0">

                  <?php
                  function primary_responsive_menu_fallback()
                  {
                      ?>

                  <ul class="navbar-nav text-bold">
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">প্রচ্ছদ</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">সর্বশেষ</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">জাতীয়</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">রাজনীতি</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">অর্থকড়ি</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">বিশেষ প্রতিবেদন</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">বিশ্বগ্রাম</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">রূপসী বাংলা</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">খেলার ভুবন</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">রঙ</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">সুবর্ণরেখা</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">সাহিত্যসভা</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-white font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">ইসলাম</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="category.html">চট্টগ্রামের খবর</a></li>
                  </ul>

                  <?php
                  }

                  function primary_extra_menu_fallback()
                  {
                      ?>

                  <ul class="navbar-nav text-bold extra">
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">কর্মযোগ</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">ক্যাম্পাস</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">লেখাপড়া</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">যুক্তিতর্ক</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">জ্ঞান-বিজ্ঞান</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">খেত খামার</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">ফ্যাক্টচেক</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">ফ্যাশন প্লাস</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">রঙ্গব্যঙ্গ</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">মমতাময়ী</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">সম্পাদকীয়</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">আইন-আদালত</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">শিল্প-সংস্কৃতি</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">এখানে নোঙর</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">করপোরেট কর্নার</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">ইতিহাস-ঐতিহ্য</a></li>
                    <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                        aria-current="page" href="">মুক্তিযুদ্ধ</a></li>
                  </ul>

                  <?php
                  }
                  ?>

                  <?php
                  wp_nav_menu([
                      "theme_location" => "primary-menu",
                      "menu_class" => "navbar-nav text-bold responsive-menu",
                      "container" => false,
                      "depth" => 0,
                      "fallback_cb" => "primary_responsive_menu_fallback",
                      "walker" => new WP_Bootstrap_navwalker(),
                  ]);

                  wp_nav_menu([
                      "theme_location" => "primary-extra-menu",
                      "menu_class" => "navbar-nav text-bold extra",
                      "container" => false,
                      "depth" => 0,
                      "fallback_cb" => "primary_extra_menu_fallback",
                      "walker" => new WP_Bootstrap_navwalker(),
                  ]);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--             
            <div class="border-mr-bottom mt-4"></div>
                <div class="border-mr-bottom"></div>
                <div class="border-mr-bottom"></div> -->

    </div>
  </div>
  <!-- header-responsive-end -->

  <!-- header main part start -->
  <div class="container-fluid">
    <div class="container mt-md-3 mt-1 d-none d-md-block">
      <div class="row">
        <div class="col-md-3">
          <!-- search form -->
          <?php get_template_part('/includes/get/search-form') ?>
          <!-- search form -->
          <div class="date-and-time d-flex justify-content-start font-size-12 align-items-center mt-md-3">
            <i class="bi bi-crosshair2"></i>
            <h5 class="font-size-12 ps-2 mt-2 pe-2" style="line-height: 1.3rem;font-size: .9rem;">
              <?php echo esc_html(get_option('site_location', 'ঢাকা')); ?>
            </h5>

            <i class="bi bi-calendar2-event"></i>
            <h5 class="font-size-12 ps-2 mt-2">
              <?php echo simple_bangla_date(); ?>
            </h5>
          </div>



        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <?php $default_main_logo = get_template_directory_uri() . '/images/logo.png'; ?>
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo get_theme_mod('npa-main-logo', $default_main_logo); ?>"
              alt="<?php echo esc_attr(bloginfo('name')) ?>" height="auto" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 d-flex align-items-end flex-column">
          <h3>
            <a class="text-danger font-size-20 text-decoration-none d-flex align-items-end"
              href="category.html">English</a>
          </h3>

          <div class="date-and-time d-flex justify-content-start font-size-12 align-items-center mt-md-3 flex-wrap">
            <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-archive"></i>
              <h5 class="font-size-12 ps-2 mt-2 pe-2"><a class="text-decoration-none text-dark"
                  href="category.html">আর্কাইভ</a></h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-camera-reels"></i>
              <h5 class="font-size-12 ps-2 mt-2 pe-2"><a class="text-decoration-none text-dark"
                  href="category.html">ভিডিও</a></h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-newspaper"></i>
              <h5 class="font-size-12 ps-2 mt-2 pe-2"><a class="text-decoration-none text-dark"
                  href="category.html">ই-পেপার</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-danger mt-md-3 d-none d-md-block position-sticky" style="top: 0rem;z-index:2;">
    <div class="container px-0">
      <div class="row align-items-center">
        <div class="col-md-11 px-0 d-flex align-items-center">
          <nav class="navbar navbar-expand-md py-md-0">
            <div class="container-fluid">
              <div class="collapse navbar-collapse header-nav" id="navbarNav">

                <?php
                function primary_menu_fallback()
                {
                    ?>

                <ul class="navbar-nav align-items-center flex-wrap">
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">প্রচ্ছদ</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">সর্বশেষ</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">জাতীয়</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">রাজনীতি</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">অর্থকড়ি</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">বিশেষ প্রতিবেদন</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">বিশ্বগ্রাম</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">রূপসী বাংলা</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">খেলার ভুবন</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">রঙ</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">সুবর্ণরেখা</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">সাহিত্যসভা</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">ইসলাম</a></li>
                  <li class="nav-item "><a class="nav-link text-white font-size-16 fw-normal custom-link"
                      aria-current="page" href="category.html">চট্টগ্রামের খবর</a></li>


                </ul>

                <?php
                }

                wp_nav_menu([
                    "theme_location" => "primary-menu",
                    "menu_class" => "navbar-nav align-items-center flex-wrap",
                    "container" => false,
                    "depth" => 0,
                    "fallback_cb" => "primary_menu_fallback",
                    "walker" => new WP_Bootstrap_navwalker(),
                ]);
                ?>

              </div>
            </div>
          </nav>
        </div>


        <div class="col-md-1 pe-0 d-flex align-items-center d-md-block d-none">
          <div class="container-fluid px-md-0 px-2">
            <div class="container d-flex justify-content-end">
              <a class="btn py-0 " data-bs-toggle="offcanvas" href="#offcanvasExample01" role="button"
                aria-controls="#offcanvasExample01"><i class="bi bi-list font-size-22 text-white "></i></a>


              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample01"
                aria-labelledby="offcanvasExamp01leLabel">
                <div class="offcanvas-header">
                  <img class="img-fluid offcanvas-title" id="#offcanvasExample01" src="<?php echo get_template_directory_uri() .
                        "/images/logo.png"; ?>" alt="Main Logo">

                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-header pt-2 pb-2 d-flex justify-content-between font-md shadow">
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook font-size-22"></i></a>
                  <a href="https://www.youtube.com/"><i class="bi bi-youtube font-size-22"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram font-size-22"></i></i></a>
                  <a href="https://www.linkedin.com/"><i class="bi bi-linkedin font-size-22"></i></a>
                  <a href="https://www.twitter.com/"><i class="bi bi-twitter font-size-22"></i></a>
                </div>
                <div class="offcanvas-body">
                  <div class="container-fluid">
                    <?php
                    function primary_extra_menu_lg_fallback()
                    {
                        ?>
                    <ul class="navbar-nav text-bold">
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">কর্মযোগ</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">ক্যাম্পাস</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">লেখাপড়া</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">যুক্তিতর্ক</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">জ্ঞান-বিজ্ঞান</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">খেত খামার</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">ফ্যাক্টচেক</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">ফ্যাশন প্লাস</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">রঙ্গব্যঙ্গ</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">মমতাময়ী</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">সম্পাদকীয়</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">আইন-আদালত</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">শিল্প-সংস্কৃতি</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">এখানে নোঙর</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">করপোরেট কর্নার</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">ইতিহাস-ঐতিহ্য</a></li>
                      <li class="nav-item border-bottom "><a class="nav-link text-black font-size-16 py-2 fw-normal"
                          aria-current="page" href="">মুক্তিযুদ্ধ</a></li>
                    </ul>
                    <?php
                    }
                    wp_nav_menu([
                        "theme_location" => "primary-extra-menu",
                        "menu_class" => "navbar-nav text-bold extra",
                        "container" => false,
                        "depth" => 0,
                        "fallback_cb" => "primary_extra_menu_lg_fallback",
                        "walker" => new WP_Bootstrap_navwalker(),
                    ]);
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header main part end -->