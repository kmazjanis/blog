<?php
  include_once "header.php";
?>

  <section class="signup-form">
          <h2>Signup</h2>
          <form action="includes/signup.inc.php" method="POST" class="mx-auto" style="width: 400px; margin-top: 20px">    
            <div class="form-group">
                <label for="formGroupExampleInput">Naame</label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput">Email</label>
              <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput">Username</label>
              <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your username">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput">Password</label>
              <input name="pass" type="password" class="form-control" id="formGroupExampleInput" placeholder="Your password">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput">Password</label>
              <input name="passrepeat" type="password" class="form-control" id="formGroupExampleInput" placeholder="Your password again">
          </div>
    
          <button type="submit" name="submit" class="btn btn-primary">Sign up</button>

    </form>
  </section>
</br>

  <div class="mysection">
    <?php
    if(isset($_GET["error"])) {
      if($_GET["error"] == "emptyinput"){
        echo "<p class='alert alert-primary' role='alert'>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invalidusername") {
          echo "<p class='alert alert-primary' role='alert'>Choose proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
          echo "<p class='alert alert-primary' role='alert'>Invalid email!</p>";
      }

      else if ($_GET["error"] == "passwordsdontmatch") {
          echo "<p class='alert alert-primary' role='alert'>Passwords doesnt match</p>";
      }

      else if ($_GET["error"] == "passtoshort") {
          echo "<p class='alert alert-primary' role='alert'>Your password is too short!</p>";
          echo "strlen($pass)";
      }

      else if ($_GET["error"] == "stmtfailed") {
        echo "<p class='alert alert-primary' role='alert'>Something went wrong!</p>";
      }

      else if ($_GET["error"] == "usernametaken") {
        echo "<p class='alert alert-primary' role='alert'>Choose different username, its taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p class='alert alert-primary' role='alert'>Youve signed up!</p>";
      }
    }
  ?>
</div>

<?php
  include_once "footer.php";
?>

