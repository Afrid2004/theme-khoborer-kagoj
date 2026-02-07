 <!-- footer part start -->
 <div class="container-fluid footer-bg-color py-md-5">
   <div class="container">

     <div class="row">
       <div class="col-12 col-lg-4">
         <div class="logo-footer">
           <?php $default_main_logo = get_template_directory_uri() . '/images/logo.png'; ?>
           <a href="<?php echo esc_url(home_url()); ?>">
             <img src="<?php echo get_theme_mod('npa-main-logo', $default_main_logo); ?>"
               alt="<?php echo esc_attr(bloginfo('name')) ?>" height="auto" class="img-fluid">
           </a>
         </div>
         <div class="editor-section text-center text-lg-start">
           <div
             class="editor d-flex justify-content-lg-start align-items-center mt-md-5 mt-3 text-center justify-content-center text-lg-start">
             <span class="text-danger p-e-3">সম্পাদক:</span>
             <h6 class="ps-2 pt-2"><?php 
             
                $editorName = get_theme_mod('editorName', 'এস এ ফারুক'); 
                echo $editorName;
             
             ?></h6>
           </div>
           <p><?php 
             
                $editorEmail = get_theme_mod('editor_email', 'faroque.computer@gmail.com'); 
                echo $editorEmail;
             
             ?></p>
         </div>
         <div class="address text-align-justify mt-md-5 mt-3 text-center text-lg-start">
           <p>
             <?php 
             
                $address = get_theme_mod('address', 'ঢাকা'); 
                echo $address;
             
             ?>
           </p>
         </div>
       </div>

       <div class="col-12 col-lg-4">
         <?php function footer_menu_fallback(){ ?>
         <ul class="row footer-link mb-0 p-0">
           <li class="mb-3 mt-1 d-flex justify-content-center justify-content-md-start justify-content-lg-center">
             <h6><a class="text-decoration-none text-black" href="category.html">গোপনীয়তার নীতি</a></h6>
           </li>

           <li class="mb-3 mt-1 d-flex justify-content-center justify-content-md-start justify-content-lg-center">
             <h6><a class="text-decoration-none text-black" href="category.html">যোগাযোগ</a></h6>
           </li>

           <li class="mb-3 mt-1 d-flex justify-content-center justify-content-md-start justify-content-lg-center">
             <h6><a class="text-decoration-none text-black" href="category.html">আর্কাইভ</a></h6>
           </li>

           <li class="mb-3 mt-1 d-flex justify-content-center justify-content-md-start justify-content-lg-center">
             <h6><a class="text-decoration-none text-black" href="category.html">বিজ্ঞাপনের মূল্য
                 তালিকা</a></h6>
           </li>

         </ul>
         <?php }
            wp_nav_menu(array(
              'theme_location'    => 'footer-menu',
              'menu_class'        => 'row footer-link mb-0 p-0',
              'depth'             => 0,
              'container'         => false,
              'fallback_cb'       => 'footer_menu_fallback'
            ))
          ?>
       </div>

       <div class="col-12 col-lg-4">
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <h6 class="text-danger fw-bold">বার্তা, সম্পাদকীয় ও ফিচার বিভাগ</h6>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p><?php 
             
                $nedPhone = get_theme_mod('news_editorial_department_phone', '+৮৮০২২২৬৬৬৫০৫৩-৪'); 
                echo $nedPhone;
             
             ?></p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <h6 class="text-danger fw-bold">বিজ্ঞাপন</h6>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p><?php 
             
                $adPhone = get_theme_mod('advertisement_phone', '+৮৮০২২২৬৬৬৫০৫১'); 
                echo $adPhone;
             
             ?></p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <h6 class="text-danger fw-bold">সার্কুলেশন</h6>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p><?php 
             
                $circulationPhone = get_theme_mod('circulation_phone', '+৮৮০২২২৬৬৬৫০৫২'); 
                echo $circulationPhone;
             
             ?></p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p><?php 
             
                $email = get_theme_mod('email', 'info@khaborerkagoj.com'); 
                echo $email;
             
             ?></p>
         </div>

         <!-- social-media start -->
         <div class="row">
           <div class="col-12 d-flex justify-content-center justify-content-lg-end warp-flex mt-md-4 mt-3">
             <div class="pt-2 pb-2 d-flex justify-content-end flex-wrap font-md social-icon-box">
               <?php
                  $social_media_facebook = get_theme_mod('npa_social_media_1', '#');
                  $social_media_youtube = get_theme_mod('npa_social_media_2', '#');
                  $social_media_instagram = get_theme_mod('npa_social_media_3', '#');
                  $social_media_linkedin = get_theme_mod('npa_social_media_4', '#');
              ?>
               <div
                 class="faceboo social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="<?php echo $social_media_facebook; ?>"><i class="bi bi-facebook font-size-22"></i> Facebook</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="<?php echo $social_media_youtube; ?>"><i class="bi bi-youtube font-size-22"></i> Youtube</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="<?php echo $social_media_instagram; ?>"><i class="bi bi-instagram font-size-22"></i></i>
                   Instagram</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="<?php echo $social_media_linkedin; ?>"><i class="bi bi-linkedin font-size-22"></i> Linkedin</a>
               </div>
             </div>
           </div>
         </div>
         <!-- social-media end -->

       </div>
     </div>
     <div class="col-md-12 bg-dark mt-md-3 mt-1">
       <p class="font-size-16 text-white text-center py-md-1"><?php 
             
                $rightReserved = get_theme_mod('rightReserved', '© ২০২৬ সর্বস্বত্ব সংরক্ষিত | খবরের কাগজ'); 
                echo $rightReserved;
             
             ?></p>
     </div>
   </div>
 </div>
 <!-- footer part end -->




 <script>
var activeTabLink = document.querySelectorAll('.active-tab-link');
activeTabLink.forEach((tab) => {
  tab.addEventListener('click', () => {
    activeTabLink.forEach((tab) => {
      tab.classList.remove('show');
    })
    tab.classList.add('show');
  })
});


document.addEventListener("DOMContentLoaded", () => {
  const loadMoreButtons = document.querySelectorAll(".load-btn");

  if (!loadMoreButtons.length) return;

  loadMoreButtons.forEach((btn) => {

    btn.addEventListener("click", function() {

      const page = parseInt(this.dataset.page);
      const max = parseInt(this.dataset.max);
      const type = this.dataset.type;

      const wrapper = this.closest(".col-md-10").querySelector(".post-wrapper");

      this.innerHTML =
        `<div class="d-flex align-items-center justify-content-center gap-2">loading <div class="loader"></div></div>`;

      let formData = new FormData();
      formData.append("action", "load_more_posts");
      formData.append("page", page + 1);
      formData.append("type", type);

      fetch(ajax_object.ajax_url, {
          method: "POST",
          body: formData,
        })
        .then((res) => res.text())
        .then((data) => {

          wrapper.insertAdjacentHTML("beforeend", data);

          this.dataset.page = page + 1;
          this.textContent = "Load More";

          if (page + 1 >= max) {
            this.style.display = "none";
          }
        })
        .catch((err) => {
          console.error("Error:", err);
          this.textContent = "Load More";
        });
    });

  });
});
 </script>

 <?php wp_footer(); ?>
 </body>

 </html>