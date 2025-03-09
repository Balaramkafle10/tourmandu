<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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

#menu-btn {
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    display: none; /* Hidden by default, typically shown on mobile via JS */
}

.heading {
    width: 100%;
    height: 50vh;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 60px; /* Adjusted for fixed header */
}

.heading h1 {
    font-size: 4rem;
    text-transform: uppercase;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.about {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 4rem 2rem;
    align-items: center;
    background: white;
}

.about .image {
    flex: 1 1 40%;
}

.about .image img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.about .content {
    flex: 1 1 40%;
    text-align: center;
}

.about .content h3 {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.about .content p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 2rem;
}

.about .content .icons-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    justify-content: center;
}

.about .content .icons-container .icons {
    background: var(--bg-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    flex: 1 1 15rem;
    text-align: center;
    transition: transform var(--transition-speed);
}

.about .content .icons-container .icons:hover {
    transform: translateY(-10px);
}

.about .content .icons-container .icons i {
    font-size: 3rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.about .content .icons-container .icons span {
    font-size: 1.2rem;
    color: var(--text-color);
}

.reviews {
    padding: 4rem 2rem;
    background: var(--bg-color);
}

.reviews .heading-title {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 2rem;
}

.reviews .swiper-wrapper {
    display: flex;
    gap: 2rem;
    padding-bottom: 3rem;
}

.reviews .slide {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    text-align: center;
    transition: transform var(--transition-speed);
}

.reviews .slide:hover {
    transform: translateY(-10px);
}

.reviews .slide .stars {
    padding-bottom: 0.5rem;
}

.reviews .slide .stars i {
    font-size: 1.5rem;
    color: var(--secondary-color);
}

.reviews .slide p {
    font-size: 1.2rem;
    line-height: 1.8;
    padding: 1rem 0;
}

.reviews .slide h3 {
    font-size: 1.8rem;
    color: var(--primary-color);
}

.reviews .slide span {
    font-size: 1.2rem;
    color: var(--secondary-color);
    display: block;
}

.reviews .slide img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-top: 1rem;
}

.footer {
    background: var(--primary-color);
    padding: 4rem 2rem;
    color: white;
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.footer .box h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.footer .box a {
    color: var(--secondary-color);
    font-size: 1.1rem;
    display: block;
    margin: 0.5rem 0;
    text-decoration: none;
    transition: color var(--transition-speed);
}

.footer .box a:hover {
    color: white;
}

.footer .credit {
    margin-top: 2rem;
    font-size: 1rem;
    text-align: center;
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
    <a href="home.php" class="logo"><h3>TOURMANDU</h3></a>
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

<div class="heading" style="background:url(https://hips.hearstapps.com/hmg-prod/images/autumn-leaves-fallen-in-forest-royalty-free-image-1628717422.jpg?crop=1xw:0.84375xh;center,top) no-repeat">
   <h1>about us</h1>
</div>

<section class="about">
    <div class="image">
        <img src="https://english.pardafas.com/wp-content/uploads/2023/07/Tourist-Nepal.jpg" alt="">
    </div>
    <div class="content">
        <h3> why choose us?</h3>
        <p>Choose us for your travel needs because we offer personalized service, exclusive deals,
             and 24/7 support. With years of expertise, wide-ranging options, and a commitment to safety,
              we ensure unforgettable experiences tailored just for you. Book now for peace of mind and unbeatable adventures!</p>
              <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
              </div>
</div>
</section>

<section class="reviews">
<h1 class="heading-title">client review</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            
        <div class="swiper-slider slide">
           
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div> 
            <p>I had an incredible experience booking my vacation through this tour website. 
                The attention to detail and personalized recommendations made my trip unforgettable. Highly recommend!</p>
                <h3>Rajesh Hamal</h3>
                <span>actor</span>
                <img src="https://i0.wp.com/english.khabarhub.com/wp-content/uploads/2020/07/Rajesh-Hamal.jpg?fit=960%2C640&ssl=1" alt="">
      

            
            
        </div>
        <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>I loved using this tour website for my recent trip. 
                The curated experiences and insider tips made all the difference. 
                Can’t wait to plan my next adventure with them!</p>
            <h3>Dayahang Rai</h3>
            <span>actor</span>
            <img src="https://www.imnepal.com/wp-content/uploads/2017/09/dayahang-rai.jpg" alt="">
        </div>
        <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>This tour company exceeded all my expectations. Their professional team ensured 
                everything was smooth and memorable. A must-try for any traveler looking for a premium experience.</p>
            <h3>Keki Adhikari</h3>
            <span>actress</span>
            <img src="https://sumitsharmasameer.com/wp-content/uploads/2023/11/keki-adhikari-1.jpeg" alt="">
        </div>
       
        <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>From start to finish, this tour website was incredible. The unique experiences and flawless 
                organization made it a trip to remember. Can't wait to book again!</p>
            <h3>Gagan Thapa</h3>
            <span>politician</span>
            <img src="https://assets-cdn.kathmandupost.com/uploads/source/news/2022/news/gaganthapaTKP-1669096736.jpg" alt="">
        </div>
        <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>This tour company is the real deal. Everything was perfectly organized and the
                 tours were truly immersive. An excellent choice for any traveler.</p>
            <h3>Anjan Bista</h3>
            <span>footballer</span>
            <img src="https://pbs.twimg.com/media/FdqUUsWaMAAdbUo.jpg" alt="">
        </div>
        <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Booking with this tour service was a breeze. The user-friendly website and 
                fantastic customer service made it a joy to plan my trip. Five stars all the way!</p>
            <h3>Prakash Saput</h3>
            <span>Singer</span>
            <img src="https://images.genius.com/ffba7bd6069f67436542f5621888f096.698x698x1.jpg" alt="">
        </div>
        
        </div>
    </div>
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
<!-- <script src="script.js"></script> -->
    

    
</body>
</html>