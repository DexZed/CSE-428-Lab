<?php require_once('connection.php'); ?>
<?php
if (isset($_POST['my_limit'])){
$limit = $_POST['my_limit'];
$sql = "SELECT * FROM books LIMIT $limit";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<p>";
echo $row['title'];
echo "</p>";
}
} else { echo "No Data"; }
}
?>