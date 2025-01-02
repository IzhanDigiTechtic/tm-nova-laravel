<!-- <style>
    .iti--separate-dial-code .iti__selected-flag {
        background-color: white;
    }
</style>
<script type="text/javascript">
    function validate() {
        document.getElementById("errorDisplay").innerHTML = "";
        var name = document.getElementById("PhoneNumber2").value;
        var len = document.getElementById("leng").value;
        let myArray = name.split(" ");
        var originallen = 0;
        for (var j = 0; j < myArray.length; j++) {
            for (var i = 0; i < myArray[j].length; i++) {
                originallen = originallen + 1;
            }
        }
        if (originallen != parseInt(len)) {
            document.getElementById("errorDisplay").innerHTML = "Phone Number is not accurate";
            return false;
        }
        return true;
    }
</script> -->
<!--onsubmit="return validate();"-->
<!-- old version -->
<!--<form id="start_form" action="backend/mail_sent.php" method="POST" enctype="multipart/form-data"  > -->
<form id="start_form" class="lpForm" action="backend/sequence.php" method="POST" enctype="multipart/form-data">
 
    <input type="hidden" value="true" name="step_one" />
    <div class="input-group">
        <label>Enter Your Name</label>
        <input type="text" name="name" class="form-control name" placeholder="Enter Your Name" required />
    </div>
    <div class="input-group">
        <label>Enter Your Email</label>
        <input type="text" name="email" class="form-control email" placeholder="Enter Your Email" required />
    </div>
    <div class="input-group">
        <label>Enter Your Number</label>
        <input type="tel" class="phone" name="phone" placeholder="Enter Your Number">
        <!-- <input type="hidden" id="Lp_code" name="code" class="form-control"> -->
        <!-- <input type="tel" class="phone2 form-control" id="PhoneNumber2" name="phone" required> -->
    </div>
    <!-- <input type="hidden" id="leng" name="leng" class="form-control" value="0" style="background-color:yellow;">
    <input type="hidden" id="code" name="guestphonecode" class="form-control" value="971" style="background-color:yellow;">
    <input type="hidden" id="countryget" name="guestphonecountry" class="form-control" value="United Arab Emirates" style="background-color:yellow;"> -->
    <!-- <div class="input-group" id="errorDisplay" style="color:red;"></div> -->
    <button class="button-round w-100 lpformsubmit" type="button">Discuss Your Requirements <i class="fas fa-arrow-right"></i></button>
</form>