<?php
$conn = mysqli_connect('localhost', 'root', '', 'dentist_db') or die('query failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('query failed');
    if($insert){
        $message[] = 'appointment made successfully';
    }else{
        $message = 'appointment failed';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website Design</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo"> dental<span>care. </span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews </a>
                    <a href="#contact">contact </a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile </h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium fugit iste tempore vitae sapiente autem dolores soluta dolorum unde quos. Reiciendis sequi blanditiis similique vitae natus accusamus quos illum libero?</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3> True Healthcare For Your Family </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nulla possimus quisquam corrupti qui quas iure sed voluptas inventore? Rerum perspiciatis quibusdam recusandae molestiae numquam deserunt soluta corporis facilis voluptatibus!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quia nisi soluta tempora ad quis explicabo omnis numquam veritatis voluptates autem, consequuntur repellat exercitationem possimus quae sed? Reiciendis, quam reprehenderit.</p>
            </div>
        </div>
    </section>

    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quasi expedita magnam deleniti labore? Ratione, maxime ipsam commodi, enim suscipit voluptatum beatae, sed ipsum eum aperiam quod nulla tempora quia!</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quasi expedita magnam deleniti labore? Ratione, maxime ipsam commodi, enim suscipit voluptatum beatae, sed ipsum eum aperiam quod nulla tempora quia!</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quasi expedita magnam deleniti labore? Ratione, maxime ipsam commodi, enim suscipit voluptatum beatae, sed ipsum eum aperiam quod nulla tempora quia!</p>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque voluptatibus at fugiat harum esse quae quis aliquam. Perspiciatis, consectetur earum nobis modi asperiores accusamus temporibus debitis qui eaque sint!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque voluptatibus at fugiat harum esse quae quis aliquam. Perspiciatis, consectetur earum nobis modi asperiores accusamus temporibus debitis qui eaque sint!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque voluptatibus at fugiat harum esse quae quis aliquam. Perspiciatis, consectetur earum nobis modi asperiores accusamus temporibus debitis qui eaque sint!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>

    <section class="contact" id="#contact">
        <h1 class="heading">make appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php 
    if(isset($message)){
        foreach($message as $message){
            echo '<p class="mesage">'.$message.'</p>';
        }
    }
    ?>
    <span> your name : </span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>
    <span>youe email : </span>
    <input type="email" name="email" placeholder="enter youe email" class="box" required>
    <span>you number : </span>
    <input type="number" name="number" placeholder="enter your number" class="box" required>
    <span>appointment date : </span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appintment" name="submit" class="link-btn">
    
    </form>
    </section>



    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-456-789</p>
                <p>+112-2223-443</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>mumbai, india</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p> 00:00 </p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>mahmoudhmidan99@gmail.com</p>
            </div>
        </div>
        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. Mahmod Hmidan</span></div>
    </section>


    <script src="js/script.js"></script>


</body>
</html>