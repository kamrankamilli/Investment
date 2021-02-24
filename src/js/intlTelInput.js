var input = document.querySelector("#phone");
function isSeparateDialCode() {
  if ($(window).width() < 400) {
    return false;
  }
  return true;
}
console.log(isSeparateDialCode());
var iti = window.intlTelInput(input, {
  initialCountry: "auto",
  separateDialCode: isSeparateDialCode(),
  autoHideDialCode: true,
  hiddenInput: "full",
  geoIpLookup: function (callback) {
    $.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
      var countryCode = resp && resp.country ? resp.country : "us";
      callback(countryCode);
    });
  },
  utilsScript: "lib/intl-tel-input-master/build/js/utils.js",
});
$("form").submit(function () {
  var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
  $("input[name='phone_number[full]'").val(full_number);
});
var errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = [
  "Invalid number",
  "Invalid country code",
  "Too short",
  "Too long",
  "Invalid number",
];
var reset = function () {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener("blur", function () {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});

// on keyup / change flag: reset
input.addEventListener("change", reset);
input.addEventListener("keyup", reset);
