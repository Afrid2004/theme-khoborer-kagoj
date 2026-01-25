 <!-- footer part start -->
 <div class="container-fluid footer-bg-color mt-md-5 py-md-5">
   <div class="container">

     <div class="row">
       <div class="col-12 col-lg-4">
         <div class="logo-footer">
           <a href="<?php echo esc_url(home_url()); ?>"
             class="d-flex justify-content-center justify-content-lg-start"><img class="mw-75-percent"
               src="<?php echo get_template_directory_uri() . '/images/logo-footer.png'; ?>" alt="Logo"></a>
         </div>
         <div class="editor-section text-center text-lg-start">
           <div
             class="editor d-flex justify-content-lg-start align-items-center mt-md-5 mt-3 text-center justify-content-center text-lg-start">
             <span class="text-danger p-e-3">সম্পাদক:</span>
             <h6 class="ps-3 pt-2">মোস্তফা কামাল</h6>
           </div>
           <p>editor@khaborerkagoj.com</p>
         </div>
         <div class="address text-align-justify mt-md-5 mt-3 text-center text-lg-start">
           <p>১১৫ কাজী নজরুল ইসলাম এভিনিউ, লেভেল-১৩, বাংলামোটর, ঢাকা-১০০০ থেকে প্রকাশক মোস্তফা কামাল
             কর্তৃক
             প্রকাশিত। স্কাইব্রিজ প্রিন্টিং এন্ড প্যাকেজিং লিমিটেড, ৭/এ/১ তেজগাঁও শিল্প এলাকা, ঢাকা
             থেকে
             মুদ্রিত।</p>
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
           <p>+৮৮০২২২৬৬৬৫০৫৩-৪</p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <h6 class="text-danger fw-bold">বিজ্ঞাপন</h6>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p>+৮৮০২২২৬৬৬৫০৫১</p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <h6 class="text-danger fw-bold">সার্কুলেশন</h6>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p>৮৮০২২২৬৬৬৫০৫২</p>
         </div>
         <div class="news-room d-flex justify-content-center justify-content-lg-end">
           <p>info@khaborerkagoj.com</p>
         </div>

         <!-- social-media start -->
         <div class="row">
           <div class="col-12 d-flex justify-content-center justify-content-lg-end warp-flex mt-md-4 mt-3">
             <div class="pt-2 pb-2 d-flex justify-content-end flex-wrap font-md social-icon-box">
               <div
                 class="faceboo social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="https://www.facebook.com/"><i class="bi bi-facebook font-size-22"></i> Facebook</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="https://www.facebook.com/"><i class="bi bi-youtube font-size-22"></i> Youtube</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="https://www.facebook.com/"><i class="bi bi-instagram font-size-22"></i></i> Instagram</a>
               </div>
               <div
                 class="youtub social-icon-width d-flex justify-content-center justify-content-lg-end align-items-center mb-3">
                 <a class="text-decoration-none text-dark  align-items-center d-flex gap-2"
                   href="https://www.facebook.com/"><i class="bi bi-linkedin font-size-22"></i> Linkedin</a>
               </div>
             </div>
           </div>
         </div>
         <!-- social-media end -->

       </div>
     </div>
     <div class="col-md-12 bg-dark mt-md-3 mt-1">
       <p class="font-size-16 text-white text-center py-md-1">© ২০২৫ সর্বস্বত্ব সংরক্ষিত | খবরের কাগজ</p>
     </div>
   </div>
 </div>
 <!-- footer part end -->





 <?php wp_footer(); ?>
 </body>

 </html>