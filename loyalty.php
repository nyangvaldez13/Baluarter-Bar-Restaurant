<?php include('php/bs-user.php'); ?>

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
        <title>Baluarte Bar | Log In</title>

        <!-- Styles -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Favicon  -->
        <link rel="icon" href="images/baluarte-logo.jpg">

</head>

<style>
    /**************************/
/*     General Styles     */
/**************************/
body,
html {
  width: 100%;
  height: 100%;
  background-color: #0c0c0e;
  font-family: "Poppins", sans-serif;
}

/**********************/
/*     Navigation     */
/**********************/
.navbar {
	background-color: #0c0c0e;
	font-size: 0.875rem;
	line-height: 0.875rem;
	border-bottom: 1px solid #51515e;
}

.navbar .navbar-brand {
	padding-top: 0.25rem;
	padding-bottom: 0.25rem;
}

.navbar .logo-image img {
    width: 60px;
	height: 60px;
}

/* Min-width 992px */
@media (min-width: 992px) {
  /* Navigation */
	.navbar {
		padding-top: 1.75rem;
		background-color: transparent;
		border: none;
		border-bottom: 1px solid rgba(0, 0, 0, 0);
		box-shadow: none;
		transition: all 0.2s;
	}

	.navbar.extra-page {
		padding-top: 0.5rem;
	}

	.navbar.top-nav-collapse {
		padding-top: 0.5rem;
		padding-bottom: 0.5rem;
		background-color: #0c0c0e;
		border-bottom: 1px solid #51515e;
	}
}

/* Min-width 1200px */
@media (min-width: 1200px) {
  /* Navigation */
	.navbar .container {
		max-width: 100%;
		padding-right: 6rem;
		padding-left: 6rem;
	}
	/* end of navigation */
}

/**********************/
/*    Sign-in Form    */
/**********************/

.loyalty-container {
  margin-top: 100px;
  
}

.loyalty-container h1 {
  color: #fff;
  font-size: 34px;
  margin-bottom: 50px;
  text-align: center;
}

.loyalty-container h3{
    font-size: 16px;
    margin-bottom: 30px;
}

.loyalty-container label {
  display: block;
  margin-bottom: 5px;
  text-align: left;
}

form {
    margin: auto;
    margin-bottom: 4rem;
    max-width: 460px;
    
    padding: 30px;
    /*box-shadow: 0px 2px 4px rgba(255, 255, 255, 0.932);*/
    border-radius: .7rem;
    height: 440px ;
    
  }

  input[type="loyalty_no"],
  input[type="password"],
  button[type="submit"]{
    
    width: 97%;
    padding: 10px;
    margin-bottom: 20px;
    padding-right: 18px;
    border-radius: 5px;
    border: none;
    background-color: #eeeeee;
    font-size: 16px;
  }
  
  button[type="submit"] {
    float: right;
    margin-top: 40px;
    background-color: #ff1911;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    
  }
  
  button[type="submit"]:hover {
    background-color: #ff1911;
  }

  button[type="submit"] a {
    color: inherit;
    text-decoration: none;
  }

.loyalty-container input[type="loyalty_no"],
.loyalty-container input[type="password"] {
  width: 96%;
  height: 7%;

  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 9px;
  margin-bottom: 20px;
}

.signin-container input[type="password"] {
  position: relative;
}

.password-input-container {
    position: relative;
  }
  

.password-field {
    position: relative;
  }
  
  .password-input {
    padding-right: 40px;
  }
  
  #password-toggle {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }
  
  #password-toggle .fa-eye {
    font-size: 18px;
    color: #ccc;
  }
  
  #password-toggle.active .fa-eye {
    color: #ff1911;
  }

.form-checkbox{
    display: flex;
    align-items: center;
    justify-content: flex-start; /* align to the left */
    margin-top: 0;
    margin-bottom: 48px;
}

.form-checkbox label {
    margin-top: .3rem;
    font-size: 16px;
    color: #797878;
    margin-left: 5px;
    position: relative;
    
  }


  .form-checkbox input[type="checkbox"] {
    
    width: 22px;
    height: 22px;
    border: 2px solid #8c8c8c;
    border-radius: 48px;
    outline: none;
    margin-right: 5px;
    top: 3px;
    cursor: pointer;
  }

.loyalty-container button[type="submit"] {
  background-color: #ff1911;
  width: 25%;
  height: 12%;
  color: #fff;
  border: none;
  padding: 10px 10px;
  border-radius: 35px;
  cursor: pointer;
}

.loyalty-container button[type="submit"]:hover {
    background-color: #be120c;
}

.form-links{
    margin-top: 40px;
}

.form-links a {
    font-size: 17px;
    color: #ff1911;
    text-decoration: underline;
    margin-left: 0;
    transition: color 0.2s ease-in-out;
  }
  
  .form-links a:hover {
    color: #be120c;
  }

</style>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
      <div class="container">

          <!-- Image Logo -->
          <a class="navbar-brand logo-image" href="home.html"><img src="images/baluarte-logo.jpg" alt="alternative"></a> 

          <!-- Text Logo - Use this if you don't have a graphic logo -->
          <!-- <a class="navbar-brand logo-text" href="index.html">Vera</a> -->

          <!--<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>-->

  <div class="loyalty-container">
    <h1>Enter you Loyalty Card Number</h1>
    <form method="POST" action="php/bs-user.php">
        <input type="loyalty_no" id="loyalty_no" name="loyalty_no" required placeholder="*Card Number">
        <button type="submit" name="submit">Submit</button>
    </form>
  </div>

  <script>
 
  </script>

</body>

</html>