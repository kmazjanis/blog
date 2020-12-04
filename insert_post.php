<?php
  include_once "header.php";
?>
 <section class="signup-form">

 <?php
   if(!isset($_SESSION["username"])){
    echo "not loged in";
    header("location: ../login.php");
    exit();
} else{
    echo "all gut";
};
?>



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




    <!-- <form action="includes/insert_post.inc.php" method="POST" class="mx-auto" style="width: 400px; margin-top: 20px">
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
    </form> -->




<!-- 




     
    
    // if (isset($_POST['submit'])){
    //     $title = mysqli_real_escape_string($conn, $_POST['title']);
    //     $seo_title = mysqli_real_escape_string($conn, $_POST['seo_title']);
    //     $content = mysqli_real_escape_string($conn, $_POST['content']);
    //    // $category = $_POST['category'];
    //     $author = mysqli_real_escape_string($conn, $_POST['author']);
    // }

    // include_once "includes/db.inc.php";



    // $title = $_POST['title'];
    // $seo = $_POST['seo'];
    // $content = $_POST['content'];
    // $category = $_POST['category'];
    // $author = $_POSTp['author'];

    // echo $author;
    // echo $db;

    // $sql = "SELECT * FROM post;";
    // mysqli_query($conn, $sql);



    // $resultCheck = mysqli_num_rows($result);
    
    // while($cat = mysqli_fetch_assoc($result)){
    //     echo '<pre>';
    //     print_r($cat['title']);
    //     echo '</pre>';
    // }

   
    // if ($resultCheck > 0){
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo $row['title'] . '<br>';
    //     }
    // }
    // $row = mysqli_fetch_array($result);
    // echo $rowp[0]; -->



    
