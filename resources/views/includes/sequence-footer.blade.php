<footer id="colophon" class="site-footer footer-primary pt-0">
   <div class="container">
      <div class="bottom-footer">
         <div class="row">
            <div class="col-lg-12">
               <div class="bottom-footer-content row">
                  <div class="copy-right col-md-7">Copyright &copy; 2023-<?php echo date("Y"); ?> | Powered By Trademark Nova Ltd. </div>
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

<!--<div class="modal fade" id="targetedArrowModal" tabindex="-1" aria-labelledby="targetedArrowModal" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-6 pe-0 d-lg-block d-none">
                  <figure class="leftImg"><img src="assets/images/popupbg.jpg" alt="" /></figure>
               </div>
               <div class="col-lg-6">
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="formStyle">
                     <h4>Start Your <span>Trademark</span> Registration Process</h4>
                     <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!</p>
                     <style>
                        .iti--separate-dial-code .iti__selected-flag {
                        background-color: white;
                        }
                     </style>
                     <form id="start_form" action="backend/mail_sent.php" method="POST" enctype="multipart/form-data" >
                        <div class="input-group">
                           <label>Enter Your Name</label>
                           <input type="text" name="name" class="form-control" required/>
                        </div>
                        <div class="input-group">
                           <label>Enter Your Email</label>
                           <input type="text" name="email" class="form-control" required/>
                        </div>
                         <div class="input-group d-none">

                            <label>Selecy Country</label>
                            <select name="formtmcountry" class="form-control" required>
                                <?php
                                 // $queryForm="
                                 //     SELECT DISTINCT ".$common2.",".$common8." FROM ".$table32."
                                 //     Where ".$common7."='1' and ".$common2." < '4'";
                                 // $resultform = mysqli_query($con,$queryForm);
                                 // while($row = mysqli_fetch_array($resultform)) {
                                 ?>
                                    <option value="<? //= $row[$common2]
                                                   ?>"><? //= $row[$common8]
                                                         ?></option>
                                    <?php
                                    //}
                                    ?>
                            </select>
                    
                        </div>

                        <div class="input-group">
                           <label>Enter Your Number</label>
                           <input type="tel" class="phone1 d-none form-control" id="PhoneNumber11" name="guestphonehidden">
                           <input type="tel" class="phone2 form-control" id="PhoneNumber21" name="phone" required>
                        </div>
                        <input type="hidden" id="leng1" name="leng" class="form-control" value="0" style="background-color:yellow;">
                        <input type="hidden" id="code1" name="guestphonecode" class="form-control" value="971" style="background-color:yellow;">
                        <input type="hidden" id="countryget1" name="guestphonecountry" class="form-control" value="United Arab Emirates" style="background-color:yellow;">
                        <script></script>
                        <div class="input-group" id="errorDisplay1" style="color:red;"></div>
                        <div class="input-group">
                           <button class="button-round w-100" type="submit" name="step_one">Discuss Your Requirements <i class="fas fa-arrow-right"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>-->