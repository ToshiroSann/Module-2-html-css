<?php

include("connection.php");

if(isset($_GET['action']) && $_GET['action'] == "delete"){
    $sql = "DELETE FROM pcs WHERE id = " . $_GET['id'];
    $result = $conn->query($sql);
}

if(isset($_POST['submit'])){

$sql = "INSERT INTO pcs (name, price) 
        VALUES ('".$_POST['product']."', '".$_POST['price']."')";
$result = $conn->query($sql);
}

$sql = "SELECT id, name, price FROM pcs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo 
    "id:" . $row["id"].
    "product: " . $row["name"]. 
    "price: " . $row["price"].
    
    
    "<a href ='edit.php?id=".$row['id']."'>edit</a>
    <a href='user-account.php?action=delete&id=".$row['id']."' onclick='return confirm(\"are you sure?\")'>delete</a> <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<form method="POST">

<input type="text" name="product" placeholder="product">
<input type="text" name="price" placeholder="price">
<input type="submit" name="submit" value="registgreer">

</form>