<footer id="colophon" class="site-footer footer-primary py-4">

   <div class="container">
      <div class="row align-items-center pb-3">
         <div class="col-sm-12 col-lg-2">
            <a href="../../"><img src="{{asset('assets/images/logo-mob.webp')}}" class="ftrlogo" alt=""></a>
         </div>
         <div class="col-sm-12 col-lg-10">
            <ul class="contInfo">
               <li><a href="#"><i class="fa fa-map-marker-alt"></i> 5900 Balcone Drive STE 100, Austin
                     Texas
                     78731</a></li>
               <li><a href="tel:{{ config('var.number') }}"><i class="fa fa-phone-alt"></i> {{ config('var.numberdisplay') }}</a>
               </li>
               <li><a href="mailto:{{ config('var.email') }}"><i class="fa fa-envelope"></i> {{ config('var.email') }}</a></li>
            </ul>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="bottom-footer">
         <div class="row">
            <div class="col-lg-12">
               <div class="bottom-footer-content row py-0 pt-4">
                  <div class="copy-right col-md-7">Copyright &copy; 2023-<?php echo date("Y"); ?> | Powered By Trademark
                     Nova Ltd.
                  </div>
                  <div class="footer-menu text-md-end col-md-5">
                     <ul>
                        <li>
                           <a href="{{route('privacy.policy')}}">
                              <i aria-hidden="true" class="fa fa-folder"></i>
                              <span> Privacy Policy</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{route('terms.and.conditions')}}">
                              <i aria-hidden="true" class="fa fa-folder"></i>
                              <span> Our Terms & Conditions</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

<a href="#" class="roleback topButton">
   <i class="fas fa-angle-double-up"></i>
</a>