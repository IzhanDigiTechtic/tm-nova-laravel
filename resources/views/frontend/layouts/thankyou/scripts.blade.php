<script src="{{asset('assets/js/all.min.js')}}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/intlTelInput.min.js"></script>

<!-- Start of alphachatpro.com Widget script -->
<script id="cd360-snippet" src="https://alphachatpro.com:/assets/scripts/snippet.js?key=6719534c13fb6b4213bb86d0"></script>
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
                        onlyCountries: ["al", "ad", "at", "au", "ae", "sa", "at", "br", "ca", "us", "cn", "dk", "cz", "fi", "de", "ge", "is", "jm", "no", "nl", "mx", "pl", "qa", "ro", "ru", "es", "ch", "se", "tr", "kw"],
                        geoIpLookup: function(callback) {
                            fetch('https://ipinfo.io', {
                                    method: 'GET'
                                })
                                .then(response => response.json())
                                .then(data => {
                                    var countryCode = (data && data.country) ? data.country : "";
                                    if (!["al", "ad", "at", "au", "ae", "sa", "at", "br", "ca", "us", "cn", "dk", "cz", "fi", "de", "ge", "is", "jm", "no", "nl", "mx", "pl", "qa", "ro", "ru", "es", "ch", "se", "tr", "kw"].includes(countryCode)) {
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

        function validateName($form) {
            var nameValue = $form.find('.name').val();
            if (nameValue === '') {
                $form.find('.name').addClass('form-error');
                return false;
            } else {
                $form.find('.name').removeClass('form-error');
                return true;
            }
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

        function validateCheckbox($form) {
            var isChecked = $form.find('.terms-checkbox').is(':checked');
            if (!isChecked) {
                $form.find('.servicesList').addClass('form-error');
                $form.find('#select-any-one-service').css('display', 'block');
                return false;
            } else {
                $form.find('.servicesList').removeClass('form-error');
                $form.find('#select-any-one-service').css('display', 'none');
                return true;
            }
        }
        // function validateService($form) {
        //     var serviceValue = $form.find('.lpService').val();
        //     if (serviceValue.length > 0) {
        //         $form.find('.lpService').removeClass('form-error');
        //         return true;
        //     } else {
        //         $form.find('.lpService').addClass('form-error');
        //         return false;
        //     }
        // }

        $('.lpForm input[name="service[]"]').on('change', function() {
            validateService($(this).closest('form'));
        });

        $(document).on('click', '.lpformsubmit', function(e) {
            e.preventDefault();
            var $form = $(this).closest('form');
            validateName($form);
            validateEmail($form);
            validatePhone($form);
            // validateService($form);
            if (validateName($form) && validateEmail($form) && validatePhone($form)) {
                $form.submit();
            }
        });

        function openChatWidget(){
            postMessage({method: "showWebWidget",type: "cd360Api", apiType: "liveChat"})
        }

        $(document).on('click', '.alphaChat', function(e) {
            openChatWidget();
        })

        $(document).on('click', '.sequenceformsubmit', function(e) {
            e.preventDefault();
            var $form = $(this).closest('form');
            validateName($form);
            validateEmail($form);
            validatePhone($form);
            validateCheckbox($form);
            if (validateName($form) && validateEmail($form) && validatePhone($form) && validateCheckbox($form)) {
                $form.submit();
            }
        });
    });
</script>
</body>

</html>