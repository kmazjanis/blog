<?php
include_once "header.php";
?>

<title>Posts</title>
<h3>Posts</h3>

<?php
require_once "includes/db.inc.php";
require_once "includes/functions.inc.php";
 
$sql = "SELECT * FROM post;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<?php if ($resultCheck > 0) { ?>
   <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class = article>
            <form method='POST'>
            <?php echo $row['title'];?> /
            <?php echo $row['seo_title'];?> <br>
            <?php echo $row['content'];?> <br>
            <a href='edit.php?id="<?php $row['id'];?>"' class='btn btn-primary'>Edit</a>
            <a href='delete.php?id="<?php $row['id'];?>"' class='btn btn-danger'>Delete</a>
            </form>
        </div>
    <?php }?>
<?php }?>



<?php
include_once "footer.php";
?>
