<?php
  include_once "header.php";
?>

<?php
  if(isset($_SESSION['username'])){
      echo "<p class='alert alert-primary' role='alert'>Hello there " . $_SESSION["username"] . "</p>";
  }               
?>
            
<title>Posts</title>
<h3>Posts</h3>
<?php
  $conn = mysqli_connect("localhost", "root", "", "blogdb");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM post;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class = article>";
      echo $row['title'] . "<br>";
      echo $row['content'] . "<br>";
      echo "<a href='edit.php?id=". $row['id'] ."' class='btn btn-primary'>Edit</a>";
      echo "<button type='submit' name='remove_post' class='btn btn-primary'>Remove</button>";
      echo "</div>";
    }
  }




?>


<?php
  include_once "footer.php";
?>

