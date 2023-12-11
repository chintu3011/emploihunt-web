<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EmployeeHunt</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/Emploihunt Logo Design_Final (1).png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
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
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <img style="width: 100px;" src="img/Emploihunt Logo Design_Final (1).png">
              </a>
  
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div> -->
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="requirterlogin.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-fluid py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Recruitr Login</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Recruitr Login</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="">

  <div class="container">

<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

  <div id="sign-in-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
    <div class="mdl-card__supporting-text mdl-color-text--grey-600">
        <!-- Input to enter the phone number -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input signin-view" type="text" pattern="\+[0-9\s\-\(\)]+" id="phone-number">
          <label class="mdl-textfield__label signin-view" for="phone-number">Enter your phone number...</label>
          <span class="mdl-textfield__error signin-view">Input is not an international phone number!</span>

          <div class="container">
          <input class="mdl-textfield__input verify-view" type="text" id="verificationCode"  type="text" pattern="\+[0-9\s\-\(\)]+"  placeholder="Enter verification code">
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



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">Code By </a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script type="text/javascript">
  $(document).ready(function() {
    function grecaptchafunc(){  
      if($('.container').css('display')=='none'){
        if(isPhoneNumberValid()){
          $.ajax({
            url: 'api_request.php',
            type: 'GET',
            data: { mobile: getPhoneNumberFromUserInput() },
            dataType: 'json',
            success: function (response) {
                if (response.status == 200) {
                    // API response is 200, call onSignInSubmit() function
                    onSignInSubmit();

                    console.error('API response status: ' + response.status);
                } else {
                    // Handle other response statuses if needed
                    console.error('API response status: ' + response.status);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error making AJAX request:', error);
            }
        });
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
        $.ajax({
            url: 'check_existing_user.php',
            type: 'GET',
            data: { mobile: getPhoneNumberFromUserInput() },
            dataType: 'json',
            success: function (response) {
                if (response.status == 200) {
                    // API response is 200, call onSignInSubmit() function
                    onSignInSubmit();

                    console.error('API response status: ' + response.status);
                } else {
                    // Handle other response statuses if needed
                    console.error('API response status: ' + response.status);
                }
            },
            error: function (xhr, status, error) {
              alert("Opps Sorry! You are not register in emploihunt. So please register in emploihunt using application (Android/IOS)");
            }
        });
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
            $('.container').css('display','flex');
          }).catch(function (error) {
            console.error('Error during signInWithPhoneNumber', error);
            alert("Error during signInWithPhoneNumber", error);
            window.signingIn = false;
          });
     }
  }
  function onVerifyCodeSubmit() {
  if (!!getCodeFromUserInput()) {
    window.verifyingCode = true;
    var code = getCodeFromUserInput();
    alert(code);
    confirmationResult.confirm(code).then(function (result) {
      var user = result.user;
      window.verifyingCode = false;
      window.confirmationResult = null;

      // Assuming vMobile and vFirebaseId need to be sent dynamically
      displayinfo(user)
      var vMobile = user.phoneNumber;
      var vFirebaseId = user.uid;

      // Send AJAX request to PHP
      $.ajax({
        type: 'POST',
        url: 'login_api.php', // Replace with your PHP file path
        contentType: 'application/json',
        data: JSON.stringify({
          vMobile: vMobile,
          vFirebaseId: vFirebaseId
        }),
        success: function (response) {
          // Handle the response from the server if needed
          console.log(response);
        },
        error: function (error) {
          window.verifyingCode = false;
          alert('Error during cURL request');
          console.error(error);
        }
      });

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
    var verifystr = document.getElementById('verificationCode').value;
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