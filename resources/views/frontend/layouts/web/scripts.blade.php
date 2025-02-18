<script src="{{ asset('assets/js/all.min.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/intlTelInput.min.js"></script>

<!-- Start of alphachatpro.com Widget script -->
<script id="cd360-snippet" src="https://alphachatpro.com:/assets/scripts/snippet.js?key=6719534c13fb6b4213bb86d0">
</script>
<!-- End of alphachatpro.com Widget script -->


<?php if ($_SERVER['REQUEST_URI'] != "/") { ?>
<script>
    $(document).ready(function() {
        calculateResult();
        //alert();
    });
</script>
<?php } ?>

<script src="assets/js/custom.js?v=123"></script>

<script>
    window.addEventListener("load", function(event) {


        class Phone {
            initializeIntlTelInput() {
                const phoneInputs = document.querySelectorAll(".phone");
                // const parent = document.querySelectorAll('.iti__country-container');
                phoneInputs.forEach(input => {
                    const iti = window.intlTelInput(input, {
                        // dropdownContainer: parent,
                        strictMode: true,
                        initialCountry: "us",
                        onlyCountries: ["al", "ad", "at", "au", "ae", "sa", "at", "br",
                            "ca", "us", "cn", "dk", "cz", "fi", "de", "ge", "is", "jm",
                            "no", "nl", "mx", "pl", "qa", "ro", "ru", "es", "ch", "se",
                            "tr", "kw"
                        ],
                        geoIpLookup: function(callback) {
                            fetch('https://ipinfo.io', {
                                    method: 'GET'
                                })
                                .then(response => response.json())
                                .then(data => {
                                    var countryCode = (data && data.country) ? data
                                        .country : "";
                                    if (!["al", "ad", "at", "au", "ae", "sa", "at",
                                            "br", "ca", "us", "cn", "dk", "cz",
                                            "fi", "de", "ge", "is", "jm", "no",
                                            "nl", "mx", "pl", "qa", "ro", "ru",
                                            "es", "ch", "se", "tr", "kw"
                                        ].includes(countryCode)) {
                                        countryCode = 'us';
                                    }
                                    callback(countryCode);
                                })
                                .catch(error => {
                                    callback('us');
                                });
                        },
                        showSelectedDialCode: true,
                        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js",
                    });
                    // Attach iti instance to the input element for later use
                    input.iti = iti;
                    // input.addEventListener('countrychange', function() {
                    //     const countryCode = iti.getSelectedCountryData().dialCode;

                    //     document.querySelector('.ISD_Number').value = countryCode;
                    // });


                });
            }
        }

        const phone = new Phone();
        phone.initializeIntlTelInput();

        function validateDynamicInputs($form) {
            let isValid = true;
            $form.find("input[required], textarea[required], select[required]").each(function() {
                if ($(this).is(":visible") && $(this).val().trim() === "") {
                    $(this).addClass("form-error");
                    isValid = false;
                } else {
                    $(this).removeClass("form-error");
                }
            });
            return isValid;
        }

        function validateEmail($form) {
            var emailValue = $form.find('.email').val();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailValue === "" || !emailPattern.test(emailValue)) {
                $form.find('.email').addClass('form-error');
                return false;
            } else {
                $form.find('.email').removeClass('form-error');
                return true;
            }
        }

        function showError(field, message) {
            field.addClass('form-error').after(
                `<span class="error-message text-danger ms-2" style="font-size: 70%">${message}</span>`);
        }

        function clearError(field) {
            field.removeClass('form-error').next('.error-message').remove();
        }

        function validatePhone($form) {
            var phoneInput = $form.find('.phone')[0];
            if (phoneInput && phoneInput.iti) {
                var iti = phoneInput.iti;
                if (!iti.isValidNumber()) {
                    $form.find('.phone').addClass('form-error');
                    return false;
                } else {
                    $form.find('.phone').removeClass('form-error');
                    return true;
                }
            } else {
                $form.find('.phone').addClass('form-error');
                return false;
            }
        }




        $(document).on('click', '.contactformsubmit', function(e) {
            e.preventDefault();
            var $form = $(this).closest('form');
            var $btn = $(this);
            var emailValid = validateEmail($form);
            var phoneValid = validatePhone($form);
            var dynamicValid = validateDynamicInputs($form);
            var isValid = emailValid && phoneValid && dynamicValid;
            if (!isValid) {
                return;
            }
            // Collect form data
            var name = $form.find('.name').val();
            var email = $form.find('.email').val();
            var phone = $form.find('.phone').val();
            var message = $form.find('.message').val();
            $btn.html('Submiting...');
            $btn.attr('disabled', true);
            $.ajax({
                url: 'https://tm-brands.digitechtictest.com/api/leads',
                method: 'POST',
                headers: {
                    'Authorization': 'uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB',
                    'Content-Type': 'application/json'
                },
                data: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone
                }),
                success: function(response) {

                    if (response.data && response.data.id) {

                        var lead_id = response.data.id;


                        var leadData = {
                            lead_id: lead_id,
                            lead_step: 1,
                            data: [{
                                question: "Message",
                                answer: message,
                                lead_type: "text",
                                lead_step: 1
                            }]
                        };


                        $.ajax({
                            url: 'https://tm-brands.digitechtictest.com/api/leadData',
                            method: 'POST',
                            headers: {
                                'Authorization': 'uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB', // Replace 
                                'Content-Type': 'application/json'
                            },
                            data: JSON.stringify(leadData),
                            success: function(leadDataResponse) {
                                const errorMsg = document.getElementById(
                                    "errormsg");
                                if (errorMsg.style.display == "block") {
                                    errorMsg.style.display = "none";
                                }
                                console.log("Form submitted successfully")
                                $btn.html('Discuss your Requirements');
                                $btn.attr('disabled', false);
                                // alert(
                                //     'Lead and message successfully submitted!');
                                window.location.href = `/thankyou`
                            },
                            error: function(xhr, status, error) {
                                // alert('Error submitting message!');
                                const errorMsg = document.getElementById(
                                    "errormsg");
                                errorMsg.innerHTML = "Error submitting form!";
                                errorMsg.style.display = "block";
                                $btn.html('Discuss your Requirements');
                                $btn.attr('disabled', false);

                            }
                        });
                    } else {
                        // alert('Error: lead_id not found in response!');
                        // alert('Error: Your email already exists.');
                        const errorMsg = document.getElementById("errormsg");
                        errorMsg.innerHTML = "Email Already Exists!";
                        $btn.html('Discuss your Requirements');
                        $btn.attr('disabled', false);
                        errorMsg.style.display = "block";

                        // $('.contactformsubmit').attr('disabled', 'false'); 


                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    const errorMsg = document.getElementById("errormsg");
                    errorMsg.innerHTML = "Error submitting form!";
                    errorMsg.style.display = "block";
                    // document.querySelector(".contactformsubmit").innerHTML = "Register My Trademark";
                    document.querySelector(".contactformsubmit").innerHTML =
                        `Register My Trademark`;
                    $('.contactformsubmit').removeAttr('disabled');
                    // $('.contactformsubmit').attr('disabled', 'false'); 
                }
            });

        });

        // lead form
        $(document).on('click', '.leadformsubmit', function(e) {
            e.preventDefault();
            var $form = $(this).closest('form');
            var $btn = $(this);
            var emailValid = validateEmail($form);
            var phoneValid = validatePhone($form);
            var dynamicValid = validateDynamicInputs($form);
            var isValid = emailValid && phoneValid && dynamicValid;
            if (!isValid) {
                return;
            }
            // Collect form data
            var name = $form.find('.name').val();
            var email = $form.find('.email').val();
            var phone = $form.find('.phone').val();

            $btn.html('Submitting...');
            $btn.attr('disabled', true);
            $.ajax({
                url: 'https://tm-brands.digitechtictest.com/api/leads',
                method: 'POST',
                headers: {
                    'Authorization': 'uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB',
                    'Content-Type': 'application/json'
                },
                data: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone
                }),
                success: function(response) {
                    $btn.html('Discuss your Requirements');
                    $btn.attr('disabled', false);
                    window.location.href = `/thankyou`
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    const errorMsg = document.getElementById("errormsg");
                    errorMsg.innerHTML = "Error submitting form!";
                    errorMsg.style.display = "block";
                    // document.querySelector(".leadformsubmit").innerHTML = "Register My Trademark";
                    $btn.html('Discuss your Requirements');
                    $btn.attr('disabled', false);
                    // $('.leadformsubmit').attr('disabled', 'false'); 
                }
            });

        });

        function openChatWidget() {
            postMessage({
                method: "showWebWidget",
                type: "cd360Api",
                apiType: "liveChat"
            })
        }

        $(document).on('click', '.alphaChat', function(e) {
            openChatWidget();
        })


    });
</script>
</body>

</html>
