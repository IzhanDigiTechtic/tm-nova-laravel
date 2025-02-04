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
<form class="lpForm">
    <div class="input-group">
        <label>Enter Your Name</label>
        <input type="text" name="name" class="form-control name" placeholder="Enter Your Name" required />
    </div>
    <div class="input-group">
        <label>Enter Your Email</label>
        <input type="text" name="email" class="form-control email" placeholder="Enter Your Email"  />
    </div>
    <div class="input-group">
        <label>Enter Your Number</label>
        <input type="tel" class="phone" name="phone" placeholder="Enter Your Number" >
        <div class="border border-1 border-danger mt-4 bg-white p-1 rounded-2 text-danger w-100" style="display:none" id="errormsg">
    </div>
    
    <button class="button-round w-100 leadformsubmit mt-3" type="button">Discuss Your Requirements <i class="fas fa-arrow-right"></i></button>
</form>