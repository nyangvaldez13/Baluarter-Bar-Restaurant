<?php

$db = mysqli_connect ("localhost", "root", "", "baluarte-system");

session_start();

//dran
if(isset($_POST['login'])){
        
  $email  = $_POST['email'];  
  $pass   = $_POST['password'];  

  $email = stripcslashes($email);
  $pass = stripcslashes($pass);
  
  $email = mysqli_real_escape_string ($db, $email); 
  $pass = mysqli_real_escape_string ($db, $pass); 

  $query  = " SELECT *
              FROM bs_user 
              WHERE user_email = '$email' and user_password = '$pass'";
  $result = mysqli_query($db, $query);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);
  $id = $row['user_id'];
  if($count == 1){  
      session_start();
      $_SESSION ['email']     = $email;
      $_SESSION ['user_id']   = $id;
      
      echo "<script>alert('You are successfully logged in!');</script>";
      echo "<script>location.href='../membership/welcoming.html';</script>";
      exit();            
  }  else{  
      echo '<script>alert("Login failed.")</script>';  
      echo "<script>location.href='../login.php';</script>";
      exit();
  }
}
  //ninz
  /*if(isset($_POST['signup'])){
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_no = $_POST['cardno'];
    $c_c = $_POST['cardsec'];
    $c_n = $_POST['cardname'];
  
    // Retrieve user ID, card number, and security code from database
    $query = "SELECT user_id, card_number, security_code FROM bs_user WHERE card_number = '$c_no' and security_code = '$c_c'";
    $result = mysqli_query($db, $query);
    
    if (!$result) {
      // Handle query error
      echo "<script>alert('Database error: " . mysqli_error($db) . "');</script>";
    } else {
      $row = mysqli_fetch_assoc($result);
      
      if (!$row) {
        // Handle user not found error
        echo "<script>alert('User not found. Please check your email address.');</script>";
      } else {
        // Compare card number and security code entered by customer with values from database
        $db_user_id = $row['user_id'];
        $db_c_no = $row['card_number'];
        $db_c_c = $row['security_code'];
        
        if (empty($db_c_no) || empty($db_c_c)) {
          echo "<script>alert('Card number or security code not found. Please contact customer support.');</script>";
          // Add code here to handle missing card number or security code
        } elseif ($c_no == $db_c_no && $c_c == $db_c_c) {
          // Update existing row with new user information
          $query = "UPDATE bs_user SET user_firstname = '$f_name', user_lastname = '$l_name', user_email = '$email', user_password = '$pass', card_nickname = '$c_n' WHERE user_id = '$db_user_id'";
          mysqli_query($db, $query);
          echo "<script>alert('Your account information has been updated.');</script>";
          echo "<script>location.href='../login.php';</script>";
        } else {
          echo "<script>alert('Card number or security code is incorrect. Please try again.');</script>";
          // Add code here to handle incorrect card number or security code
        }
      }
    }
  } */

  if(isset($_POST['signup'])){
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_no = $_POST['cardno'];
    $c_c = $_POST['cardsec'];
    $c_n = $_POST['cardname'];
  
    // Check if card number and security code are already associated with an email address
    $query = "SELECT user_id, user_email, card_number, security_code FROM bs_user WHERE card_number = '$c_no' AND security_code = '$c_c'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_email'] !== $email) {
            echo "<script>alert('This card number and security code are already associated with another email address.');</script>";
            exit();
        }
    }
    
    $query = "SELECT user_id, card_number, security_code FROM bs_user WHERE card_number = '$c_no' and security_code = '$c_c'";
    $result = mysqli_query($db, $query);
    
    if (!$result) {
      echo "<script>alert('Database error: " . mysqli_error($db) . "');</script>";
    } else {
      $row = mysqli_fetch_assoc($result);
      
      if (!$row) {
        // Handle user not found error
        echo "<script>alert('User not found.');</script>";
      } else {
        $db_user_id = $row['user_id'];
        $db_c_no = $row['card_number'];
        $db_c_c = $row['security_code'];
        
        if (empty($db_c_no) || empty($db_c_c)) {
          echo "<script>alert('Card number or security code not found.');</script>";
        } elseif ($c_no == $db_c_no && $c_c == $db_c_c) {
          $query = "UPDATE bs_user SET user_firstname = '$f_name', user_lastname = '$l_name', user_email = '$email', user_password = '$pass', card_nickname = '$c_n' WHERE user_id = '$db_user_id'";
          mysqli_query($db, $query);
          echo "<script>alert('Your account is successfully created.');</script>";
          echo "<script>location.href='../login.php';</script>";
        } else {
          echo "<script>alert('Card number or security code is incorrect. Please try again.');</script>";
          // Add code here to handle incorrect card number or security code
        }
      }
    }
  }  


  if(isset($_POST['submit'])){
        
    $loyalty_no  = $_POST['loyalty_no'];   
  
    $loyalty_no = stripcslashes($loyalty_no);
    
    $loyalty_no = mysqli_real_escape_string ($db, $loyalty_no); 
  
    $query  = " SELECT *
                FROM bs_loyalty 
                WHERE l_card = '$loyalty_no'";
    $result = mysqli_query($db, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    $l_id = $row['loyalty_id'];
    if($count == 1){  
        session_start();
        $_SESSION ['loyalty_no']     = $loyalty_no;
        $_SESSION ['loyalty_id']   = $l_id;
        
        echo "<script>alert('You are successfully logged in!');</script>";
        echo "<script>location.href='../membership/welcoming.html';</script>";
        exit();            
    }  else{  
        echo '<script>alert("Incorrect card number! Please try again")</script>';  
        echo "<script>location.href='../loyalty.php';</script>";
        exit();
    }
  }
  
?>