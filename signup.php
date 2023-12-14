<!DOCTYPE html>
<html lang="en">
<title>LPA - Sign Up</title>
<?php include "header.php"; ?>
<?php 
   
    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
   
    $database = "lpaecomms"; 
   
     // Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 
   
    if($conn) { 
        echo "success";  
    }  
    else { 
        die("Error". mysqli_connect_error());  
    }  
?> 

<form action="includes/signup.inc.php" method="POST">
  <div class="container">
    <h3 class="underline white-text grid">Sign Up</h3>
    <div class="rounded-card-parent center">
      <div class="card rounded-card">
        <div class="row">
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix white-text">account_circle</i>
            <input name="username" id="username" type="text" class="validate white-text" minlength="3" maxlength="12">
            <label for="username" class="white-text">Username</label>
            <span class="helper-text grey-text left-align" data-error="Min 3, Max 12 characters" data-success="Min 3, Max 12 characters">Min 3, Max 12 characters</span>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix white-text"> password</i>
            <input name="pwd" id="pwd" type="password" class="validate white-text" minlength="3" maxlength="20">
            <label for="pwd" class="white-text"> Password</label>
            <span class="helper-text grey-text left-align" data-error="Min 3, Max 20 characters" data-success="Min 3, Max 20 characters">Min 3, Max 20 characters</span>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix white-text"> password</i>
            <input name="repeat_pwd" id="repeat_pwd" type="password" class="validate white-text" maxlength="20">
            <label for="repeat_pwd" class="white-text"> Repeat Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix white-text">email</i>
            <input name="email" id="email" type="email" class="validate white-text" maxlength="25">
            <label for="email" class="white-text">Email</label>
            <span class="helper-text white-text" data-error="Invalid email" data-success="correct"></span>
          </div>
        </div>
        <input class="btn" type="submit" name="submit" value="Sign Up">
        <div class="errormsg">
          <?php
            if (isset($_GET["error"]))
            {
              if ($_GET["error"] == "empty_input")
                echo "<p>*Fill in all fields!<p>";

              else if ($_GET["error"] == "invalid_uid")
                echo "<p>*Choose a proper username!</p>";

              else if ($_GET["error"] == "passwords_dont_match")
                echo "<p>*Passwords doesn't match!</p>";

              else if ($_GET["error"] == "username_taken")
                echo "<p>*Username/Email already taken!</p>";
                
              else if ($_GET["error"] == "none")
                echo "<p class='green-text bold'>You have signed up! Please go to Login page</p>";
                echo '<META HTTP-EQUIV="Refresh" Content="2; URL=signup.php">';
                exit();
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $('select').formSelect();

    $("#create").submit(function(e) {
      event.preventDefault();
      var username = $("#username").val();
      var pwd = $("#pwd").val();
      var repeat_pwd = $("#repeat_pwd").val();
      var level = $("#level").val();
      var email = $("#email").val();
      var submit = $("#submit_user").val();
      $("#message").load("includes/admin.inc.php", {
        username: username,
        pwd: pwd,
        repeat_pwd: repeat_pwd,
        level: level,
        email: email,
        submit: submit
      });
    })

  });
</script>
</form>

<?php include "footer.php"; ?>
</html>