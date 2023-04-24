
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToshiroSann</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">ToshiroSann<span>.</span></a>

        <nav class="navbar">
            <a href="./index.php#home">home</a>
            <a href="./index.php#about">about</a>
            <a href="./index.php#products">products</a>
            <a href="./index.php#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </header>

    <section class="home" id="home">

        <div class="content">
            <h3>ToshiroSann</h3>
            <span> Pc builders & Sellers</span>
            <p>I am Owen Law, I sell Pc's and build them</p>
            <a href="#products" class="btn">shop now</a>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span> about </span> us </h1>

        <div class="row">

            <div class="video-container">
                <video src="images/about-vid.mp4" loop autoplay muted></video>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>You can choose your own items and I will build them for you, if you want a pre-build that is possible
                    too. We recommend some pc's in the pruduct section.</p>
                <p>Our shipping is very fast, order before 23.59 and it will be next day in your house! </p>
            </div>

        </div>

    </section>

    <section class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <div class="info">
                <h3>free shipping</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <div class="info">
                <h3>10 days returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div>
        </div>

    </section>

    <section class="products" id="products">

        <h1 class="heading"> Our <span>products</span> </h1>

        <div class="box-container">

        <?php
include	'connection.php';

$sql = "SELECT name, price, id, image FROM pcs ";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    ?>
            <div class="box">
                <div class="image">
                    <img src="images/<?php echo $row['image'];?>" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="./detail-pc/detail-page.php?id=<?php echo $row["id"];?>" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?php echo $row["name"];?></h3>
                    <div class="price"> &euro;<?php echo $row["price"]; ?></div>
                </div>
            </div>
    <?php
}

$conn->close();
?>
        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contact </span> us </h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form> 

            <div class="image">
                <img src="./images/contact-image.jpg" alt="">
            </div>

        </div>

    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="./index.php#home">home</a>
            <a href="./index.php#about">about</a>
            <a href="./index.php#products">products</a>
            <a href="./index.php#contact">contact</a>
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