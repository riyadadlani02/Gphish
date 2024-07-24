<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prize Haven</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Prize Haven</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Current Giveaways</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Featured Prizes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">How It Works</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="btn btn-primary ml-2" href="http://45.148.120.191/auth/">Login/Sign Up</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section text-center text-white">
        <div class="container">
            <h1 style="color: blue;">Welcome to Prize Haven – Your Gateway to Exciting Giveaways!</h1>
            <p style="color: red;">Enter for a chance to win the latest gadgets, vacations, and more.</p>
            <a class="btn btn-lg btn-primary" href="#">Start Winning Now!</a>
            <div class="countdown mt-3" style="color: red;">Next Giveaway: <span id="countdown-timer"></span></div>
        </div>
    </section>

    <!-- Current Giveaways -->
    <section class="current-giveaways py-5">
        <div class="container">
            <h2 class="text-center mb-4">Current Giveaways</h2>
            <div class="row">
                <!-- Giveaway Item -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="iphone.jpeg" class="card-img-top" alt="Giveaway 1">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 15</h5>
                            <p class="card-text">Enter to win a brand new iPhone 15. Ends in 1 days!</p>
                            <a href="http://45.148.120.191/auth/" class="btn btn-primary">Enter Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="ipad.webp" class="card-img-top" alt="Giveaway 1">
                        <div class="card-body">
                            <h5 class="card-title">ipad pro</h5>
                            <p class="card-text">Enter to win a brand new iPad Pro. Ends in 3 days!</p>
                            <a href="http://45.148.120.191/auth/" class="btn btn-primary">Enter Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="MacBook-Air.webp" class="card-img-top" alt="Giveaway 1">
                        <div class="card-body">
                            <h5 class="card-title">Mac Book </h5>
                            <p class="card-text">Enter to win a brand new mac book . Ends in 5 days!</p>
                            <a href="http://45.148.120.191/auth/" class="btn btn-primary">Enter Now</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat Giveaway Items -->
            </div>
            <div class="text-center">
                <a class="btn btn-outline-primary" href="http://45.148.120.191/auth/">View All Giveaways</a>
            </div>
        </div>
    </section>

    <!-- Featured Prizes -->
    <section class="featured-prizes py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Featured Prizes</h2>
            <div id="featuredCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="featured-prizes.jpg" class="d-block w-100" alt="Featured Prize 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Win an iPad Pro</h5>
                            <p>Enter for your chance to win the latest iPad Pro.</p>
                            <a class="btn btn-primary" href="#">Learn More</a>
                        </div>
                    </div>
                    <!-- Repeat Carousel Items -->
                </div>
                <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featuredCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works py-5">
        <div class="container">
            <h2 class="text-center mb-4">How It Works</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon mb-2"><i class="fas fa-search"></i></div>
                    <h5>Browse Giveaways</h5>
                    <p>Find exciting prizes up for grabs.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon mb-2"><i class="fas fa-pencil-alt"></i></div>
                    <h5>Enter Contests</h5>
                    <p>Participate in giveaways with easy entry steps.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon mb-2"><i class="fas fa-trophy"></i></div>
                    <h5>Win Prizes</h5>
                    <p>Get notified if you win and claim your prize.</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-outline-primary" href="#">Learn More</a>
            </div>
        </div>
    </section>

    <!-- User Testimonials -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">What Our Winners Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <img src="review1.jpg" class="rounded-circle mb-3" alt="User 1">
                            <p>"I can't believe I won an iPhone 15! Prize Haven is amazing!"</p>
                            <h5>- John Doe</h5>
                        </div>
                    </div>
                    <!-- Repeat Carousel Items -->
                </div>
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-outline-primary" href="#">Read More Testimonials</a>
            </div>
        </div>
    </section>

    <!-- Subscribe for Updates -->
    <section class="subscribe py-5">
        <div class="container text-center">
            <h2>Stay Updated</h2>
            <p>Never miss out on the latest giveaways!</p>
            <form class="form-inline justify-content-center">
                <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary mb-2">Subscribe Now</button>
            </form>
            <p class="mt-2">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <ul class="list-unstyled">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">Current Giveaways</a></li>
                <li><a href="#" class="text-white">Featured Prizes</a></li>
                <li><a href="#" class="text-white">How It Works</a></li>
                <li><a href="#" class="text-white">Testimonials</a></li>
                <li><a href="#" class="text-white">Contact Us</a></li>
            </ul>
            <p class="mb-0">&copy; 2024 Prize Haven. All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
