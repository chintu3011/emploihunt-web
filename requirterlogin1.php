<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone Authentication with invisible ReCaptcha</title>

  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-auth.js"></script>
  <script>
  var config = {
    apiKey: "AIzaSyAa_lDQgrOjrHJGLVPfyYUcXgsYRa8AUEE",
  authDomain: "emploi-hunt.firebaseapp.com",
  databaseURL: "https://emploi-hunt-default-rtdb.firebaseio.com",
  projectId: "emploi-hunt",
  storageBucket: "emploi-hunt.appspot.com",
  messagingSenderId: "881312176002",
  appId: "1:881312176002:web:ef32b523a9f792ca45219b",
  measurementId: "G-YKMWJH86CB"
    };
  firebase.initializeApp(config);
  </script>

  <style type="text/css">
    div.mdl-card,.mdl-shadow--2dp,.mdl-cell,.mdl-cell--12-col,.mdl-cell--12-col-tablet,.mdl-cell--12-col-desktop,.mdl-card__supporting-text,.mdl-color-text--grey-600{
      
      
      text-align: center;
      margin:auto;
      box-sizing: border-box;
    }
    div.mdl-textfield,.mdl-js-textfield,.mdl-textfield--floating-label{
      margin-top:100px;
    }
    div.verify-view-component{
      width: 100%;
      height: 100%;
      border: solid 1px grey;
      align-items: inline;
      display: none;
      box-sizing: border-box;
      overflow: auto;
    }
    input.mdl-textfield__input{
      padding:2px;
      font-size: 1.2em;
      text-align: center;
    }
    button.active,.mdl-button,.mdl-js-button,.mdl-button--raised{
      display: block;
      margin-top:10px;
      left: calc(50% - 40px);
      font-size: 1.1em;
      border-radius: 10px;
      background: -webkit-linear-gradient(270deg, #3366ff, #2760ca);
    }
    #account-details{
    }
    .signin-view{
      display: block;
    }
    .verify-view{
      display: none;
    }
    .inactive{
      display: none;
    }
    pre{
      text-align: left;
    }
    input.digital-input{
      width: 100%;
      height: 100%;
      margin: 1px 3px;
      padding:2px;
      font-size: 1.2em;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="">

    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

      <div id="sign-in-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
            <!-- Input to enter the phone number -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input signin-view" type="text" pattern="\+[0-9\s\-\(\)]+" id="phone-number">
              <label class="mdl-textfield__label signin-view" for="phone-number">Enter your phone number...</label>
              <span class="mdl-textfield__error signin-view">Input is not an international phone number!</span>
              <input class="mdl-textfield__input verify-view" type="text" pattern="\+[0-9\s\-\(\)]+" id="verify-code">
              
              <div class="verify-view-component">
                <input type="text" class="digital-input">
                <input type="text" class="digital-input">              
                <input type="text" class="digital-input">
                <input type="text" class="digital-input">
                <input type="text" class="digital-input">
                <input type="text" class="digital-input">
              </div>

              <label class="mdl-textfield__label verify-view" for="verify-code">Enter verify code</label>
              <span class="mdl-textfield__error verify-view">Do not copy or paste verify code!</span>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised active sign-in-button" id="sign-in-button">Submit</button>
            <button class="mdl-button mdl-js-button mdl-button--raised verify-view" id="cancel_btn">cancel</button>
            <pre><code id="account-details"></code></pre>
        </div>
      </div>
    </div>
</div>

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
</body>
</html>