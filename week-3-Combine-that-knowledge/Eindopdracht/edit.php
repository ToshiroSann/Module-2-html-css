<?php

include("connection.php");

$id = $_GET['id'];

if(isset($_POST['submit'])){
$sql = "UPDATE pcs SET 
        name='".$_POST['name']."',
        price= '".$_POST['price']."',
        gpu='".$_POST['gpu']."',
        cpu='".$_POST['cpu']."',
        ram='".$_POST['ram']."',
        storage='".$_POST['storage']."',
        storage_type='".$_POST['storage_type']."',
        image='".$_POST['image']."'
        WHERE id= " . $id;
        $result = $conn->query($sql);
}

$sql = "SELECT * FROM pcs WHERE id = " . $id;
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_row();
}

?>

<form method="POST">

<input type="text" name="name" placeholder="name" value="<?php echo $row[1];?>"><br>
<input type="text" name="price" placeholder="price" value="<?php echo $row[2];?>"><br>
<input type="text" name="gpu" placeholder="gpu" value="<?php echo $row[3];?>"><br>
<input type="text" name="cpu" placeholder="cpu" value="<?php echo $row[4];?>"><br>
<input type="text" name="ram" placeholder="ram" value="<?php echo $row[5];?>"><br>
<input type="text" name="storage" placeholder="storage" value="<?php echo $row[6];?>"><br>
<input type="text" name="storage_type" placeholder="storage_type" value="<?php echo $row[7];?>"><br>
<input type="text" name="image" placeholder="image" value="<?php echo $row[8];?>"><br>
<input type="submit" name="submit" value="save">

</form>