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

<?php
      require_once "includes/db.inc.php";
      require_once "includes/functions.inc.php";
//get id
      if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM post WHERE id = $id";
        $query = mysqli_query($conn, $sql);
      }


      //edit post
      if(isset($_REQUEST['update_post'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $seotitle = $_REQUEST['seo_title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE post SET title='$title', seo_title='$seotitle', content='$content'  WHERE id = $id";
        mysqli_query($conn, $sql);

        header("location: index.php?info=updated");
        exit(); 
      }

      //delete post
      if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM post WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header("location: index.php?info=deleted");
        exit();
      }
?>
<h2>Edit POST</h2>
      <div class="form-group">
      <?php foreach($query as $q){?>
           
            
            <form method="POST">
              <input type="text" name="id" value="<?php echo $q['id'];?>">
              <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $q['title'];?>">
              <input name="seo_title" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $q['seo_title'];?>">
              <textarea name="content" class="form-control"> <?php echo $q['content'];?> 
              </textarea>
            
              <button name="update_post" class="btn btn-dark">update</button>
              <button name="delete" class="btn btn-danger btn-sm ml-2">delete</button>
            </form>

            
        <?php }?>

      </div>



          

  </section>
</br>
        

<?php
  include_once "footer.php";
?>

