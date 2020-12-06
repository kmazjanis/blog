<?php
include_once "header.php";
?>


 <?php
require_once "includes/functions.inc.php";
checkIfLoggedIn();
?>
 <section class="signup-form">


          <h2>Insert POST</h2>
          <form action="includes/insert_post.inc.php" method="POST" class="mx-auto" style="width: 400px; margin-top: 20px">
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput">Seo title</label>
              <input name="seo_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


          <button type="submit" name="submit" class="btn btn-primary">Add post</button>

    </form>
  </section>
</br>


<?php

include_once "footer.php";
?>









