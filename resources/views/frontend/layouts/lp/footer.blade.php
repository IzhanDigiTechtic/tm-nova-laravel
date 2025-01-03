<footer id="colophon" class="site-footer footer-primary">
   <div class="container">
      <div class="top-footer">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <aside class="widget">
                  <h3 class="widget-title">Trademark Registration</h3>
                  <ul>
                     <li><a href="{{route('book.free.consultation')}}">Trademark Consultation</a></li>
                     <li><a href="{{route('comprehensive.trademark.search')}}">Comprehensive Trademark Search</a></li>
                     <!--<li><a href="file-a-uk-trademark">File a UK Trademark</a></li>-->
                     <!--<li><a href="file-eu-trademark">File an EU Trademark</a></li>-->
                     <li><a href="{{route('file.a.us.trademark')}}">File a U.S. Trademark</a></li>
                     <li><a href="{{route('file.an.international.trademark')}}">File an International Trademark</a></li>
                     <li><a href="{{route('IPO.representation.on.behalf.of.your.company')}}">IPO Representation</a></li>
                  </ul>
               </aside>
            </div>
            <div class="col-lg-3 col-md-6">
               <aside class="widget">
                  <h3 class="widget-title">Post-Filing Trademark Needs</h3>
                  <ul>
                     <li><a href="{{route('trademark.renewal')}}">Trademark Renewal</a></li>
                     <li><a href="{{route('response.to.opposition')}}">Response to Opposition</a></li>
                     <li><a href="{{route('statement.of.use')}}">Trademark Statement of Use</a></li>
                     <li><a href="{{route('co.existence.agreement')}}">Co-Existence Agreement</a></li>
                     <li><a href="{{route('abandoned.trademark.refiling')}}">Abandoned Trademark ReFiling</a></li>
                  </ul>
               </aside>
            </div>
            <div class="col-lg-3 col-md-6">
               <aside class="widget">
                  <h3 class="widget-title">Ongoing Protection</h3>
                  <ul>
                     <li><a href="{{route('trademark.dispute.insurance')}}">Trademark Dispute Insurance</a></li>
                     <li><a href="{{route('trademark.monitoring')}}">Trademark Monitoring</a></li>
                     <li><a href="{{route('trademark.ownership.transfer')}}">Ownership Transfer</a></li>
                     <li><a href="{{route('cease.desist.letter')}}">Cease & Desist Letter</a></li>
                     <li><a href="{{route('domain.resolution')}}">Domain Resolution</a></li>
                  </ul>
               </aside>
            </div>
            <div class="col-lg-3 col-md-6">
               <aside class="widget contact-widget">
                  <h3 class="widget-title">Location Address</h3>
                  <p>Know where to find us? Let's take a look and get in touch !</p>
                  <div class="widget-wrap row">
                     <div class="contact-detail-widget">
                        <ul>
                           <li>
                              <i aria-hidden="true" class="fa fa-map-marker"></i>
                              5900 Balcone Drive STE 100, Austin Texas 78731
                           </li>

                           <li>
                              <a href="tel:{{ config('var.number') }}">
                                 <i aria-hidden="true" class="fa fa-phone"></i>
                                 {{ config('var.numberdisplay') }}
                              </a>
                           </li>
                           <li>
                              <a href="mailtop:sales@trademarknova.com">
                                 <i aria-hidden="true" class="fa fa-envelope"></i>
                                 <span>sales@trademarknova.com</span>
                                 <!--class="__cf_email__" data-cfemail="4a23242c250a2e25272b232464292527"-->
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </aside>
            </div>
            <!--<div class="col-lg-12 footerForm">
               <aside class="widget contact-widget">
                  <div class="formStyle">
                     <img src="assets/images/arrow.png" alt="" class="targetedDown" />
                     <h4 class="blinkAnim">Start Your <span>Trademark</span> Registration Process</h4>
                     <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!</p>
                     
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
                                <option value=""> - Trade Mark Registration For - </option>
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
                           <input type="tel" class="phone1 d-none form-control" id="PhoneNumber1mbl" name="guestphonehidden">
                           <input type="tel" class="phone2 form-control" id="PhoneNumber2mbl" name="phone" required>
                        </div>
                        <input type="hidden" id="lengmbl" name="leng" class="form-control" value="0" style="background-color:yellow;">
                        <input type="hidden" id="codembl" name="guestphonecode" class="form-control" value="971" style="background-color:yellow;">
                        <input type="hidden" id="countrygetmbl" name="guestphonecountry" class="form-control" value="United Arab Emirates" style="background-color:yellow;">
                        <div class="input-group" id="errorDisplaymbl" style="color:red;"></div>
                        <div class="input-group">
                           <button class="button-round w-100" type="submit" name="step_one">Discuss Your Requirements <i class="fas fa-arrow-right"></i></button>
                        </div>
                     </form>
                  </div>
               </aside>
            </div>-->
         </div>
      </div>
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