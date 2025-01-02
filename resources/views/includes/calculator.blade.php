
<!-- Begin: Calculator -->
<?php if($_SERVER['REQUEST_URI'] != "/"){ ?>

    <a href="javascript:void" id="calcBtn"><i class="fa fa-calculator fa-rotate-90"></i> Calculate Fees</a>
    <div class="calculatorWrap">
       <div class="head">
          <div class="container-fluid">
             <div class="row align-items-center justify-content-between">
                <div class="col">
                   <a href="#"><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></a>
                </div>
                <div class="col">
                   <a href="javascript:void" class="closeCalc"><span class="bar"></span><span class="bar"></span></a>
                </div>
             </div>
          </div>
       </div>
       <div class="boddy">
          <div class="container-fluid">
             <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5 col-lg-6">
                   <h2>Calculate Tradmark Filing Fees</h2>
                   <p>Ready to protect your brand with a registered trademark? Don't let the process of calculating the cost hold you back. Get an estimate for your trademark registration services! With just a few clicks, you'll get a clear breakdown of the fees and costs associated with the process. Plus, our experienced team is always here to answer any questions you have along the way.</p>
    
                   <form class="regionOpt">
                      <strong>Choose Location</strong>
                      <ul class="optList">
                          <?php 
                          $querycal="select ".$common2.",".$common8.",".$common10." from ".$table32." 
                            where ".$common7."='1'";
                          $vacanciescal=mysqli_query($con,$querycal);
                          if ($vacanciescal->num_rows > 0) {
                        	while($itemcal=mysqli_fetch_assoc($vacanciescal)){
                        	    ?>
                        	    <li>
                                    <input onchange="calculateResult()" type="radio" id="usa" name="calculortmcountry" value="<?=$itemcal[$common2]?>" <?php if($itemcal[$common2]==1){ ?> checked <?php } ?> >
                                    <div class="region">
                                       <div class="circle">
                                          <div class="dot"></div>
                                       </div>
                                       <img src="<?=$itemcal[$common10]?>" alt="">
                                       <small><?=$itemcal[$common8]?></small>
                                    </div>
                                </li>
                        	    <?php
                          }
                        }?>
                      </ul>
                      <strong>Select Number of Classes</strong>
                      <select onchange="calculateResult()" name="calculorclassId" id="calculorclassId" class="form-control">
                         <!--<option value="">Select Number of Classes</option>-->
                         <?php
                         for($i=1;$i<46;$i++){
                             ?>
                             <option value="<?=$i?>"><?=$i?></option>
                             <?php
                         }
                         ?>
                      </select>
                      <strong class="mt-3">Select Package</strong>
                      <select onchange="calculateResult()" name="calculorpackageId" id="calculorpackageId" class="form-control">
                         <!--<option value=""> - Select - </option>-->
                         <?php 
                         $query="
                            SELECT DISTINCT ".$common2.",".$common8." FROM ".$table20."
                            Where ".$common7."='1' and ".$common2." < '4'";
                            $result = mysqli_query($con,$query);
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?= $row[$common2]?>"><?= $row[$common8]?></option>
                                <?php
                            }
                         ?>
                      </select>
                   </form>
                </div>
                <div class="col-xxl-5 col-lg-6">
                   <div class="calcDetal">
                      <!--<h2><span>Total Payment</span>$488</h2>-->
                      <!--<ul>-->
                      <!--   <li>-->
                      <!--      <span>Official Registry Fees:</span>-->
                      <!--      <span>$424</span>-->
                      <!--   </li>-->
                      <!--   <li>-->
                      <!--      <span>Trademark Eagle Advice Fee:</span>-->
                      <!--      <span>$340</span>-->
                      <!--   </li>-->
                      <!--   <li>-->
                      <!--      <span>Sub-total:</span>-->
                      <!--      <span>$764</span>-->
                      <!--   </li>-->
                      <!--   <li>-->
                      <!--      <span>VAT:</span>-->
                      <!--      <span>$80</span>-->
                      <!--   </li>-->
                      <!--   <li>-->
                      <!--      <span>Total: </span>-->
                      <!--      <span>$844</span>-->
                      <!--   </li>-->
                      <!--</ul>-->
                      <div id="CalculationRecord"></div>
                   </div>
                   
                   <script>
                        
                   </script>
                   <a href="" class="button-round w-100" style="text-align: center;">Get Started <i class="fa fa-arrow-right"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
    
<?php } ?>
<!-- END: Calculator -->
