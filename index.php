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

if ($resultCheck > 0) {
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class = article>";
    echo "<form method='POST'>";
    echo $row['title'] . "/";
    echo $row['seo_title'] . "<br>";
    echo $row['content'] . "<br>";
    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>";
    echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
    echo "</form>";
    echo "</div>";
}
}

?>


<?php
include_once "footer.php";
?>

