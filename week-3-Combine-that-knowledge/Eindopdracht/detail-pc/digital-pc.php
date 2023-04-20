<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT details FROM pcs where id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row["details"];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>digital-pc</title>
</head>

<body>

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">ToshiroSann<span>.</span></a>

        <nav class="navbar">
            <a href="../Eindopdracht/index.html#home">home</a>
            <a href="../Eindopdracht/index.html#about">about</a>
            <a href="../Eindopdracht/index.html#products">products</a>
            <a href="../Eindopdracht/index.html#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </header>


    <section class="detail" id="detail">

        <div class="row">

            <form action="">
                <h1 class="pc-name"> Digital-<span>PC</span> </h1>
                <div id="info-specs">
                    <h2>Specs:</h2>
                    <?php echo $name;?>
                    <h1 class="pc-price"> <span>€</span>1500 </h1>
                </div>

                <a href="#" class="btn">Add-To-Cart</a>
            </form>
            <div class="image">
                <img src="../images/img-1.jpg" alt="">
            </div>

        </div>

    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="../index.html#home">home</a>
                <a href="../index.html#about">about</a>
                <a href="../index.html#products">products</a>
                <a href="../index.html#contact">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my order</a>
                <a href="#">my favorite</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+31 6 11807997</a>
                <a href="#">owenhomanlaw@gmail.com</a>
                <a href="#">Houten, Nederland - 3995ZD</a>
                <img src="images/payment.png" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> Owen Law </span></div>

    </section>

</body>

</html>