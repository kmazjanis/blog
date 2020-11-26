<?php
  include_once "header.php";
?>

<?php
  if(isset($_SESSION['username'])){
      echo "<p class='alert alert-primary' role='alert'>Hello there " . $_SESSION["username"] . "</p>";
  }               
?>
        
<form action="insert_post.php" method="POST" class="mx-auto" style="width: 400px; margin-top: 20px">
  <input name="author" type="hidden" class="form-control" value="1">
    <div class="form-group">
        <label for="formGroupExampleInput">Title</label>
        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">SEO title</label>
        <input name="seo_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <select name="category" class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Content</label>
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">SEND</button>
  </form>

<?php
  include_once "footer.php";
?>

