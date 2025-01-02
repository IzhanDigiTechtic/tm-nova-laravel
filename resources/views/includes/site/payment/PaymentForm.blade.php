<?php

$merchant = $_COOKIE['merchant'];
$url = '';
if ($merchant == 'payArc') {
    $url = 'checkoutPackagePayArc.php';
} else if ($merchant == 'authorizeNet') {
    $url = 'checkoutPackageAuthorizeNet.php';
} else {
    return false;
}

?>

<form action="sequence/step7/<?= $url ?>" method="post" id="" onsubmit="disableSubmit();" class="paymentForm">
    <input type="hidden" name="submit" value="false">
    <div class="sequenceBoxStyle">
        <div class="row">
            <div class="col-md-12">
                <label>Name on Card</label>
                <input type="text" name="name" class="form-control mt-0" placeholder="Enter Name on Card" required />
            </div>
            <div class="col-md-4">
                <label>Card Holder Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address" required />
            </div>
            <div class="col-md-3">
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter City" required />
            </div>
            <div class="col-md-3">
                <label>State</label>
                <input type="text" name="state" class="form-control" placeholder="Enter State" required />
            </div>
            <div class="col-md-2">
                <label>Zip Code</label>
                <input type="text" name="zip" class="form-control" placeholder="00000" required />
            </div>
            <div class="col-md-8">
                <label>Card Number</label>
                <input type="text" class="form-control" id="card" name="card" placeholder="0000000000000000" required>
            </div>
            <div class="col-md-2">
                <label>Expiration</label>
                <input type="text" class="form-control" id="exp" name="exp" minlength="5" maxlength="5" placeholder="MM/YY" required onkeyup="addslashinbetween()">
            </div>
            <script>
                function addslashinbetween() {
                    var key = event.keyCode || event.charCode;
                    var a = document.getElementById("exp").value;
                    if (key == 8 || key == 46) {
                        if (a.length == 2) {
                            var arr = a.split("");
                            document.getElementById("exp").value = arr[0];
                        }
                    } else {
                        if (a.length == 2) {
                            document.getElementById("exp").value = a + "/";
                        } else if (a.length > 2) {
                            if (!a.includes('/')) {
                                var result = "";
                                var arr = a.split("");
                                for (var i = 0; i < a.length; i++) {
                                    if (i == 1) {
                                        result = result + arr[i] + "/";
                                    } else {
                                        result = result + arr[i];
                                    }
                                }
                                document.getElementById("exp").value = result;
                            }
                        }
                    }
                }
            </script>
            <div class="col-md-2 mb-3">
                <label>CVV</label>
                <input type="text" class="form-control" id="cvv2" name="cvv2" placeholder="Enter CVV" required>
            </div>
        </div>
        <input type="hidden" id="customerId" name="customerId" value="<?= $_GET["Id"] ?>">
        <input type="hidden" name="total" id="modaltotal" value="0">
        <input type="hidden" name="orgtotal" id="modalorgtotal" value="0">
    </div>
    <div class="row justify-content-end">
    </div>
    <div class="col-md-12 text-end">
        <button class="button-round d-flex align-items-center gap-2 justify-content-center" type="submit" name="submit1" id="payNowBtn">
            <span>PAY NOW</span>
            <div class="spinner-border spinner-border-sm ms-2" id="paymentSpinner" style="display: none" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </button>

    </div>
</form>