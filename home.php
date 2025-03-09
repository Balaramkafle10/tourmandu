<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
/* Standard Styling */
:root {
    --primary-color: #2c3e50;
    --secondary-color: #f39c12;
    --text-color: #333;
    --bg-color: #ecf0f1;
    --box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    --border-radius: 12px;
    --transition-speed: 0.3s;
}

body {
    font-family: 'Arial', sans-serif;
    background: var(--bg-color);
    color: var(--text-color);
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: var(--primary-color);
    color: white;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

.header .logo h3 {
    color: var(--secondary-color);
    font-size: 1.8rem;
    margin: 0;
}

.navbar a {
    color: white;
    font-size: 1rem;
    margin: 0 15px;
    text-decoration: none;
    transition: color var(--transition-speed);
}

.navbar a:hover {
    color: var(--secondary-color);
}

.icons a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    transition: color var(--transition-speed);
}

.icons a:hover {
    color: var(--secondary-color);
}

.home {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}

.swiper-slide {
    background-size: cover !important;
    background-position: center !important;
}

.swiper-slide .content {
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: var(--border-radius);
    color: white;
}

.swiper-slide .content span {
    font-size: 1.5rem;
    font-weight: bold;
}

.swiper-slide .content h3 {
    font-size: 2.5rem;
    margin: 10px 0;
}

.swiper-slide .content .btn {
    margin-top: 20px;
}

.home-about {
    display: flex;
    align-items: center;
    padding: 50px 20px;
    background: white;
    margin: 20px 0;
}

.home-about .image {
    flex: 1;
    margin-right: 20px;
}

.home-about .image img {
    width: 100%;
    border-radius: var(--border-radius);
}

.home-about .content {
    flex: 2;
}

.home-about .content h3 {
    font-size: 2rem;
    margin-bottom: 20px;
}

.home-about .content p {
    font-size: 1.1rem;
    line-height: 1.8;
}

.home-packages {
    padding: 50px 20px;
    background: var(--bg-color);
}

.home-packages .heading-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
}

.home-packages .box-container {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    gap: 20px; /* Added spacing between boxes */
    padding: 2rem;
}

.home-packages .box {
    background: white;
    padding: 20px;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    transition: transform var(--transition-speed);
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 300px;
}

.home-packages .box:hover {
    transform: translateY(-10px);
}

.home-packages .box .image {
    width: 100%;
    height: 250px;
    overflow: hidden;
    border-radius: var(--border-radius);
    display: flex;
    flex-direction: column;
}

.home-packages .box .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.home-packages .box .content {
    text-align: center;
    padding: 15px 0;
}

.home-packages .box .content h3 {
    font-size: 1.5rem;
    margin: 10px 0;
}

.home-packages .box .content p {
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 10px;
}

@media (max-width: 768px) {
    .home-packages .box-container {
        flex-wrap: wrap;
        justify-content: center;
    }
}

.load-more {
    text-align: center;
    margin-top: 20px;
}


.home-offer {
    padding: 50px 20px;
    background: var(--secondary-color);
    color: white;
    text-align: center;
}

.home-offer h3 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.home-offer p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.services {
    padding: 50px 20px;
    background: white;
}

.services .heading-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
}

.services .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    padding: 2rem;
}

.services .box {
    text-align: center;
    padding: 20px;
    background: var(--bg-color);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    transition: transform var(--transition-speed);
}

.services .box:hover {
    transform: translateY(-10px);
}

.services .box img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: var(--border-radius);
}

.services .box h3 {
    font-size: 1.5rem;
    margin: 15px 0;
}

.footer {
    background: var(--primary-color);
    padding: 50px 20px;
    color: white;
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.footer .box h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.footer .box a {
    color: var(--secondary-color);
    text-decoration: none;
    display: block;
    margin: 10px 0;
    transition: color var(--transition-speed);
}

.footer .box a:hover {
    color: white;
}

.footer .credit {
    text-align: center;
    margin-top: 30px;
    font-size: 1rem;
}

.footer .credit span {
    color: var(--secondary-color);
}

.btn {
    display: inline-block;
    background: var(--secondary-color);
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: var(--border-radius);
    transition: background var(--transition-speed);
    text-decoration: none;
    margin-top: 10px;
}

.btn:hover {
    background: var(--primary-color);
}
    </style>
    
</head>
<body>
<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3> </a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <!-- <a href="book.php">Book</a> -->
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-user-circle"></i>Login</a> 
    </div>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(https://www.traveltalktours.com/wp-content/uploads/2017/01/Photo-Nepal-Essential.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

                
            <div class="swiper-slide slide" style="background:url(https://www.outlooktravelmag.com/media/RFqCz9uB1611926508-1-1611926508.4x-jpg.webp) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(https://www.natureloverstrek.com/pagegallery/everything-you-need-to-know-about-khaptad-national-park-%7C-interesting-things-about-khaptad-national-park16.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>


        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>


    </div>
</section>

<section class="home-about">
    <div class="image">
          <img src="https://english.pardafas.com/wp-content/uploads/2023/07/Tourist-Nepal.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p> Welcome to TOURMANDU, your gateway to extraordinary adventures and unforgettable experiences.
        At Tour&Travel, we're passionate about travel. Our mission is to inspire, empower, and connect travelers 
            to the world through immersive journeys that go beyond the ordinary.
        
        </p>
        <a href="about.php" class="btn">read more</a>

    </div>

</section>

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./uploads/Swayambhu.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Swayambhunath is an ancient religious complex atop a hill in the Kathmandu city.</p>
                <form action="" method="post">
                    <button name="bookNow" class="btn">book now</button>
                </form>
                <a href="package.php" class="btn">book now</a>
            </div>
        </div><br>
        <div class="box">
            <div class="image">
                <img src="./uploads/Pashupatinath_Temple.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>The Pashupatinath Temple is a Hindu temple located in Kathmandu, Nepal .</p>
                <a href="package.php" class="btn">book now</a>
            </div>

        </div><br>
        <div class="box">
            <div class="image">
                <img src="./uploads/pokhara.jpeg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Pokhara is a city on Phewa Lake, in central Nepal.</p>
                <a href="package.php" class="btn">book now</a>
            </div>

        </div>
       
    </div>
    <div class="load-more"> <a href="package.php"  class="btn">load more</a></div>

</section>

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>this offer is valid upto 30th january on the occesion of new year.
        </p>
        <!-- <a href="bookNow.php" class="btn">book now</a> -->
    </div>
</section>


<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="https://english.onlinekhabar.com/wp-content/uploads/2023/08/adventure-tourism-activities.png" alt="">
            <h3>adventure</h3>
        </div>
        <div class="box">
            <img src="https://travelumpire.com/wp-content/uploads/2022/02/EBC-Trek-with-G.jpg" alt="">
            <h3>tour guide</h3>
        </div>
        <div class="box">
            <img src="https://www.nepaltrekkinginhimalaya.com/images/articles/PXRP3-doga-yuruyusunde-bilinmesi-gerekenler.jpg" alt="">
            <h3>trekking</h3>
        </div>
        <div class="box">
            <img src="https://static.vecteezy.com/system/resources/previews/027/104/762/large_2x/nepal-s-traditional-method-of-cooking-using-wood-fire-free-photo.jpg" alt="">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="https://www.trekkingtrail.com/uploads/articles/images/self-drive-road-trip-upper-mustang-nepal.jpg" alt="">
            <h3>off road</h3>
    

</section>



<section class="footer">
    <div class="box-container">
    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
    </div>
    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> ask questtions</a>
        <a href="#"><i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
    </div>
    <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +977 9843238782</a>
        <a href="#"><i class="fas fa-envelope"></i> kafle@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> Bagmati Province, Kathmandu, Nepal</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> twitter</a>
        <a href="#"><i class="fab fa-instagram"></i> instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
    </div>

    </div>

    <div class="credit">created by <span>mr. kafle toli</span> | all right reserved!</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
    

    
</body>
</html>