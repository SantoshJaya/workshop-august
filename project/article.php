<?php
include('./inc/config.php');
include('./inc/header.php');

$sql = "SELECT * FROM article where id=".$_GET['id'];
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo '
          <div class="pt-5 container">
          <img src="'.$row['image'].'" style="width:100%">
           
          <h1>'.$row['head'].'</h1>
           <P>'.$row['desc'].'</P>
          </div>';
    }
}
 
?>

