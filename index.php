<?php
  include_once "header.php";
?>



<title>Posts</title>
<h3>Posts</h3>
<?php
  require_once "includes/db.inc.php";


  $sql = "SELECT * FROM post;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class = article>";
      echo $row['title'] . "<br>";
      echo $row['content'] . "<br>";
      echo "<a href='edit.php?id=". $row['id'] ."' class='btn btn-primary'>Edit</a>";
      echo "<button type='submit' name='remove_post' class='btn btn-danger'>Remove</button>";
      echo "</div>";
    }
  }

?>

<?php
  include_once "footer.php";
?>

