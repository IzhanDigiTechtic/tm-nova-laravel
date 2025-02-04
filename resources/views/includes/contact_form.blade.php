<style>
    .phonecon {
        height: 43px;
        position: absolute;
        top: 0;
        left: 85px;
        width: calc(100% - 85px);
        border-color: transparent;
    }

    .iti--separate-dial-code .iti__selected-flag {
        background-color: white;
    }
</style>

<form class="formStyle lpForm">

    <div class="input-group">
        <label>Enter Your Name*</label>
        <input type="text" name="name" class="form-control name" required />
    </div>
    <div class="input-group">
        <label>Enter Your Email*</label>
        <input type="email" name="email" class="form-control email" />
    </div>
    <div class="input-group">
        <label>Enter Your Number*</label>
        <input type="tel" class="phone" name="guestphonehidden"> <!--style="border:none;"*/-->
        <!-- <input type="tel" class="phonecon form-control" id="PhoneNumber2con" style="width: calc(100% - 85px);height: 52px;" name="phone" required placeholder="Your Number*"> style="padding-left: 18px;background-color: white;height: 54px;margin-top: 10px;" -->
    </div>

    <!-- <input type="hidden" id="lengcon" name="leng" class="form-control" value="0" style="background-color:yellow;">
    <input type="hidden" id="codecon" name="guestphonecode" class="form-control" value="971" style="background-color:yellow;">
    <input type="hidden" id="countrygetcon" name="guestphonecountry" class="form-control" value="United Arab Emirates" style="background-color:yellow;"> -->

    <div class="input-group">
        <label>Enter Your Query</label>
        <textarea rows="8" name="description" class=" message" required></textarea>
    </div>
    <!-- <div class="input-group" id="errorDisplaycon" style="color:red;"></div> -->
    <div class="input-group">
        <button type="button" class="contactformsubmit button-round">SUBMIT QUESTIONS</button>
    </div>
</form>