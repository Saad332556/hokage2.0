<?php
 $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
 $id = (isset($_GET["id"]))? $_GET["id"]: "";
 $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
 $email = (isset($_GET["email"]))? $_GET["email"]: "";


 switch($alert) {
 case "no-email" :
    echo '<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
    You have not entered an email, please try again...
    </div>';
 header ("Refresh: 3; ./index.php?content=register");
 break;

 case "emailexists" :
    echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
    This email already exists, try again with another email...
    </div>';
 header ("Refresh: 3; ./index.php?content=register");
 break;
 
 case "register-error" :
    echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
    Something went wrong... Please try again or contact admin@hokage-form.com
    </div>';
 header ("Refresh: 3; ./index.php?content=register");
 break;

 case "register-success" :
    echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
    You have successfully registered. You will soon receive an email from us with a activation-link.
    </div>';
 header ("Refresh: 3; ./index.php?content=login");
 break;

 case "hacker-alert" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   You do not have the rights to do this action.
   </div>';
header ("Refresh: 3; ./index.php?content=home");
break;

case "password-empty" :
   echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
   You have not entered one off the two passwords. Please try again.
   </div>';
header ("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
break;

case "nomatch-password" :
   echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
   The two passwords you entered are not the same. Please try again.
   </div>';
header ("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
break;

case "no-id-pwh-match" :
   echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
   You are not registered in the database, you will now be redirected to the registration page.
   </div>';
header ("Refresh: 3; ./index.php?content=register");
break;

case "update-success" :
   echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
   You are succesfully registered, you will now be redirected to the login page.
   </div>';
header ("Refresh: 3; ./index.php?content=login");
break;

case "update-error" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   The registration process was not successful, please choose a new password.
   </div>';
header ("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
break;

case "already-active" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   Your account is already active. Please log in with your chosen password and email.
   </div>';
header ("Refresh: 3; ./index.php?content=login");
break;

case "no-match-pwh" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   Your activation link details are not correct, please register again.
   </div>';
header ("Refresh: 3; ./index.php?content=register");
break;

case "loginform-empty" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   You have not completed one of the two fields, please try again.
   </div>';
header ("Refresh: 3; ./index.php?content=login");
break;

case "email-unknown" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   The email address you entered is not known to us, please try again.
   </div>';
header ("Refresh: 3; ./index.php?content=login");
break;

case "not-activated" :
   echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
   Your email has not yet been activated. Check your email <span class="badge bg-danger p-2">' . $email . '</span> to activate it.
   </div>';
header ("Refresh: 3; ./index.php?content=login");
break;

 default:
 header("Location: ./index.php?content=home");
 break;
}
?>