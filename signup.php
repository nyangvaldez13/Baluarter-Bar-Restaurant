<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Baluarte Bar | Create-Account</title>

        <!-- Styles -->
        <link href="Membership/css/create-ac.css" rel="stylesheet">
        <!-- Favicon  -->
        <link rel="icon" href="images/baluarte-logo.jpg">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
      <div class="container"> 

          <!-- Image Logo -->
          <a class="navbar-brand logo-image" href="home.html"><img src="images/barbar.png" alt="alternative"></a> 

          <!-- Text Logo - Use this if you don't have a graphic logo -->
          <!-- <a class="navbar-brand logo-text" href="index.html">Vera</a> -->

          <!--<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>-->
      </div> <!-- end of container -->
  </nav> <!-- end of navbar -->

    <div class="signup-container">
        <h1>Create an account</h1>
        <h3>BALUARTE BAR MEMBERSHIP</h3>
        <div class="text">Lorem ipsum dolor sit amet, consectetur <br>
              adipiscing elit, sed do eiusmod tempor incididunt ut <br>
              labore et dolore magna aliqua. 
        </div>
    </div> 
        
  <div class="signin-container">
    <form method="POST" action="php/bs-user.php">
        <h4>* indicates required field</h4>
        <h2>Personal Information</h2><br>
        <input name="firstname" type="firstname" required placeholder="*First name">
        <input name="lastname" type="lastname" required placeholder="*Last name">

        <h2>Register your Loyalty Card</h2><br>
        <input name="cardno" type="cardno" required placeholder="*Card Number">
        <input name="cardsec" type="cardsec" required placeholder="*Card Security Code">
        <p class="user-indication">Check the security code at the back of your card.</p> 
        <input name="cardname" type="cardname" required placeholder="*Card Nickname (optional)">

        <h2>Account Security</h2><br>
        <input name="email" type="email" required placeholder="*Username or email address">
        <p class="user-indication">this will be your username.</p> 
        <div class="password-input-container">
         <div class="password-field">
           <input type="password" id="password" name="password" class="password-input" required placeholder="*Password">
           <label for="password-input" id="password-toggle">
             <i class="fas fa-eye"></i>
           </label>
          </div>
        </div>
        <p class="user-indication">Create a password 8 to 25 characters long that includes at least 1 uppercase and 1 lowercase letter, 1 number and 1 special character like an exclamation point or asterisk.</p>
        
        <h3>COLLECT MORE STARS AND EARN REWARDS</h3>
        <p class="reward-indication">Email is a great way to know about offers and what’s new from Starbucks.</p>
        <div class="form-checkbox">
            <input type="checkbox" id="keep-signed-in">
            <label for="keep-signed-in">Yes I'd like email from Baluarte Bar</label>
        </div>

        <h3>TERMS OF USE</h3>
        <div class="form-checkbox">
            <input type="checkbox" id="keep-signed-in">
            <label for="keep-signed-in">Yes I agree to the</label><span><a href="trial.html#terms-conditions">Baluarte Bar Membership Terms and Conditions</a></span>
           
        </div>
        <button type="submit" name="signup">Create Account</button>
        <!--<button type="submit" id="signup"><a href="#">Create account</a></button>-->
        
      </form>
  </div>

  <script>
  const passwordInput = document.querySelector('.password-input');
  const togglePassword = document.querySelector('#password-toggle');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

  </script>
   
</body>

</html>