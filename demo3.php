<?php
session_start();
if(isset($_SESSION['tAuthToken'])) {
echo "Your session is running " . $_SESSION['tAuthToken'];
}
?>
<script type="text/javascript">
$(document).ready(function() {
function grecaptchafunc(){



  
  if($('.verify-view-component').css('display')=='none'){
    if(isPhoneNumberValid()){
      onSignInSubmit();
    }
    else{
      alert('Please check your type!');
      return;
    }
  }
  else{
    onVerifyCodeSubmit();
  }
}
$(".sign-in-button").on('click',grecaptchafunc);
$(".digital-input").on('keydown',checkvalidate);
});
function checkvalidate(e){
e.preventDefault();
console.log(e.keyCode);
var ekey=e.keyCode;
if (ekey >= 48 && ekey <= 57) {
  $(this).val(ekey-48);
  var nextInput = $(this).next('input');
  if (nextInput.length)
    nextInput.focus();
  else
    $(this).blur();
}
else
{
  switch(ekey){
    case 39:
      var nextInput = $(this).next('input');
      if (nextInput.length)
        nextInput.focus();
      else
        $(this).blur();
      break;
    case 37:
      var prevInput = $(this).prev('input');
      if (prevInput.length)
        prevInput.focus();
      else
        $(this).blur();
      break;
    case 8:
      $(this).val('');
      var prevInput = $(this).prev('input');
      if (prevInput.length)
        prevInput.focus();
      else
        $(this).blur();
      break;
    case 46:
      $(this).val('');
    }
}
}
window.onload = function() {
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    var uid = user.uid;
    var email = user.email;
    var photoURL = user.photoURL;
    var phoneNumber = user.phoneNumber;
    var isAnonymous = user.isAnonymous;
    var displayName = user.displayName;
    var providerData = user.providerData;
    var emailVerified = user.emailVerified;
  }
});
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
  'size': 'invisible',
  'callback': function(response) {
    onSignInSubmit();
  }
});
recaptchaVerifier.render().then(function(widgetId) {
  window.recaptchaWidgetId = widgetId;
});
};
function onSignInSubmit() {
 if (isPhoneNumberValid())
 {
  window.signingIn = true;
  //updateSignInButtonUI();
  var phoneNumber = getPhoneNumberFromUserInput();
  var appVerifier = window.recaptchaVerifier;
  firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
      .then(function (confirmationResult) {
        window.confirmationResult = confirmationResult;
        window.signingIn = false;
        $('.signin-view').css('display','none');
        $('.verify-view-component').css('display','flex');
      }).catch(function (error) {
        console.error('Error during signInWithPhoneNumber', error);
        window.signingIn = false;
      });
 }
}
function onVerifyCodeSubmit() {
if (!!getCodeFromUserInput()) {
  window.verifyingCode = true;
  var code = getCodeFromUserInput();
  confirmationResult.confirm("123456").then(function (result) {
    var user = result.user;
    window.verifyingCode = false;
    window.confirmationResult = null;
    displayinfo(user);
  }).catch(function (error) {
    window.verifyingCode = false;
    alert('Wrong Verification code');
    $('.digital-input').val();
  });
}
}
function displayinfo(user){
  document.getElementById('account-details').textContent = JSON.stringify(user, null, '  ');
}
function cancelVerification(e) {
e.preventDefault();
window.confirmationResult = null;
updateVerificationCodeFormUI();
updateSignInFormUI();
}
function onSignOutClick() {
firebase.auth().signOut();
}
function getCodeFromUserInput() {
var verifystr='';
var items=$('.verify-view-component').children();
for(i in items){
  verifystr+=items[i].value;
}
return verifystr;
}
function getPhoneNumberFromUserInput() {
return document.getElementById('phone-number').value;
}
function isPhoneNumberValid() {
var pattern = /^\+[0-9\s\-\(\)]+$/;
var phoneNumber = getPhoneNumberFromUserInput();
return phoneNumber.search(pattern) !== -1;
}
function resetReCaptcha() {
if (typeof grecaptcha !== 'undefined'
    && typeof window.recaptchaWidgetId !== 'undefined') {
  grecaptcha.reset(window.recaptchaWidgetId);
}
}
function updateSignInButtonUI() {
document.getElementById('sign-in-button').disabled =
    !isPhoneNumberValid()
    || !!window.signingIn;
}
function updateSignInFormUI() {
if (firebase.auth().currentUser || window.confirmationResult) {
  document.getElementById('sign-in-form').style.display = 'none';
} else {
  resetReCaptcha();
  document.getElementById('sign-in-form').style.display = 'block';
}
}
function updateVerificationCodeFormUI() {
if (!firebase.auth().currentUser && window.confirmationResult) {
  document.getElementById('verification-code-form').style.display = 'block';
} else {
  // document.getElementById('verification-code-form').style.display = 'none';
}
}
function updateSignOutButtonUI() {
if (firebase.auth().currentUser) {
  document.getElementById('sign-out-button').style.display = 'block';
} else {
  // document.getElementById('sign-out-button').style.display = 'none';
}
}
</script>