<?php
include('db.php');
$query= "select * from chat ORDER BY id DESC";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){
    $name=$row['name'];
    $message=$row['message'];
    $date=$row['date'];
?>
<div id="chatdata">
    <span style="color:gold; "><?php echo $name;?></span>
    <span>: </span>
    <span><?php echo $message;?></span>
    <span style="color:tomato; float:right;"><?php echo $date;?></span>
</div>
<?php } ?>