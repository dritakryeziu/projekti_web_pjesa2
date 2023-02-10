<!DOCTYPE html>
<html>
    <head>
        <title>Agjenci turistike/udhetimi</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    </head>
    <body>
        <header class="header">
            <a href="#" class="logo"><i class="fas fa-paper-plane"></i>Agjenci turistike/udhetimi</a>
            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here" id="searchBox">
                <label for="searchBox" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-user" id="login-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <nav class="navbar">
                <a href="Home.php">Home</a>
                <a href="Pacages.php">Pacages</a>
                <a href="Services.php">Services</a>
                <a href="Price.php">Price</a>
                <a href="Review.php">Review</a>
                <a href="Contact Us.php">Contact Us</a>
                <a href="Blog.php">Blog</a>
            </nav>
            <form action=""class="login-form">
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" placeholder="Enter your email">
                </div>

                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" placeholder="Enter your password">
                </div>

                <div class="remember">
                    <input type="checkbox" name="" id="login-remember">
                    <label for="login-remember">Remember me</label>
                </div>

                <input type="submit" class="btn" value="Login">
            </form>
        </header>
<section class="price" id="price">
            <h1 class="heading"> Cmimet <span> Tona </span> </h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in-up">
                    <h3> Plani Bazik </h3>
                    <div class="price">
                        <span>euro</span>
                        <span class="amount">30</span>
                        <span>/mo</span>
                    </div>
                    <ul>
                        <li>1. 10 dite</li>
                        <li>2. Pije dhe Ushqim</li>
                        <li>3. Udherrefyes i sigurt</li>
                        <li>4. Sigurimi</li>
                        <li>5. Hotele luksoze</li>
                    </ul>
                    <a href="#" class="btn">Zgjidh planin</a>
                </div>
        
                <div class="box" data-aos="zoom-in-up">
                    <h3> Plani Standard </h3>
                    <div class="price">
                        <span>euro</span>
                        <span class="amount">50</span>
                        <span>/mo</span>
                    </div>
                    <ul>
                        <li>1. 20 dite</li>
                        <li>2. Ushqim dhe Pije 2x</li>
                        <li>3. Udherrefyes i sigurt 2x</li>
                        <li>4. Sigurimi</li>
                        <li>5. Hotele luksoze 2x</li>
                    </ul>
                    <a href="#" class="btn">Zgjidh planin</a>
                </div>
        
                <div class="box" data-aos="zoom-in-up">
                    <h3> Plani Premium </h3>
                    <div class="price">
                        <span>euro</span>
                        <span class="amount">90</span>
                        <span>/mo</span>
                    </div>
                    <ul>
                        <li>1. 30 dite</li>
                        <li>2. Ushqim dhe pije 5x</li>
                        <li>3. Udherrefyes i sigurt</li>
                        <li>4. Sigurim ne cdo moment</li>
                        <li>6. Hotel luksoz 5x</li>
                    </ul>
                    <a href="#" class="btn">Zgjidh plan</a>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Pikat tona</h3>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Prizren</a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Prishtine</a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Peje</a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Ferizaj</a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Gjakove</a>
                </div>

                <div class="box">
                    <h3>Linqet</h3>
                    <a href="Home.php"> <i class="fas fa-chevron-right"></i>Home</a>
                    <a href="Pacages.php"> <i class="fas fa-chevron-right"></i>Pacages</a>
                    <a href="Services.php"> <i class="fas fa-chevron-right"></i>Services</a>
                    <a href="Price.php"> <i class="fas fa-chevron-right"></i>Price</a>
                    <a href="Review.php"> <i class="fas fa-chevron-right"></i>Review</a>
                    <a href="Contact.php"> <i class="fas fa-chevron-right"></i>Contact</a>
                    <a href="Blogs.php"> <i class="fas fa-chevron-right"></i>Blogs</a>
                </div>

                <div class="box">
                    <h3>Kontaktimi</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+383(49)156 878</a>
                    <a href="#"> <i class="fas fa-phone"></i>+383(45)413 824</a>
                    <a href="#"> <i class="fa-solid fa-inbox"></i>dritakrz1@gmail.com</a>
                    <a href="#"> <i class="fa-solid fa-inbox"></i>blerentinabajrami@gmail.com</a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Kosovo, Prizren 20000</a>
                </div>

                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
                    <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
                    <a href="#"> <i class="fab fa-instagram"></i>Instrgram</a>
                    <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
                    <a href="#"> <i class="fab fa-pinterest"></i>Pinterest</a>
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>