function disableSubmit() {
    var submitButton = document.querySelector('button[type="submit"]');
    var formSubmittedInput = document.querySelector('input[name="submit"]');
    formSubmittedInput.value = "true";
    submitButton.disabled = true;
    setTimeout(function () {
        submitButton.disabled = false;
    }, 3000); // Re-enable the submit button after 2 seconds (adjust the duration as needed)
    return true;
}
function disableButton() {
    var payNowBtn = document.getElementById('payNowBtn');
    payNowBtn.disabled = true;
    payNowBtn.classList.add('pe-none', 'user-select-none', 'opacity-50');
}
document.querySelector('.paymentForm').addEventListener('submit', function () {
    disableButton();
    document.getElementById('paymentSpinner').style.display = 'block';
});