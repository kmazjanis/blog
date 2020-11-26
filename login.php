<?php
  include_once "header.php";
?>


        
<section class="signup-form">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="POST" class="mx-auto" style="width: 400px; margin-top: 20px">    
        <div class="form-group">
            <label for="formGroupExampleInput">Username/Email</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your username / email">
        </div>
        <div class="form-group">
              <label for="formGroupExampleInput">Password</label>
              <input name="pass" type="password" class="form-control" id="formGroupExampleInput" placeholder="Your password">
          </div>
    
    
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </form>
  </section>
  <br>

  <div class="mysection">
    <?php
    if(isset($_GET["error"])) {
      if($_GET["error"] == "emptyinput"){
        echo "<p class='alert alert-primary' role='alert'>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
          echo "<p class='alert alert-primary' role='alert'>Incorrect login name/email!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
          echo "<p class='alert alert-primary' role='alert'>Invalid email!</p>";
      }
    }
  ?>
</div>


<?php
  include_once "footer.php";
?>

