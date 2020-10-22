<!DOCTYPE html>
<html>
    <head>
        <title>Pylate &mdash; Pyl's Family Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{ asset('landing-page/images/icon.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('landing-page/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">

        <script src="https://kit.fontawesome.com/fab5b84e56.js" crossorigin="anonymous"></script>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap"  id="home-section">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
            
            <div class="container d-none d-lg-block">
                <div class="row">
                    <div class="col-12 text-center mb-4 mt-5">
                        <h1 class="mb-0 site-logo"><a href="{{ route('landing-page') }}" class="text-black h2 mb-0">Pylate<span class="text-primary">.</span> </a></h1>
                    </div>
                </div>
            </div>
            <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">
                <div class="container">
                    <div class="row align-items-center">                        
                        <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
                            <h1 class="mb-0 site-logo"><a href="{{ route('landing-page') }}" class="text-black h2 mb-0">Pylate<span class="text-primary">.</span> </a></h1>
                        </div>
                        
                        <div class="col-12 col-md-9 main-menu">
                            <nav class="site-navigation position-relative text-right" role="navigation">          
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li><a href="#home-section" class="nav-link">Home</a></li>
                                    <li><a href="#features-section" class="nav-link">Features</a></li>
                                    <li><a href="#about-section" class="nav-link">About Us</a></li>
                                    <li><a href="#posts-section" class="nav-link">Posts</a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
                    </div>
                </div>               
            </header>           
            
            <div class="site-blocks-cover">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-12" style="position: relative;" data-aos="fade-up">
                            <img src="{{ asset('landing-page/images/cover.png') }}" alt="Image" class="img-fluid img-absolute">
                            <div class="row mb-4">
                                <div class="col-lg-4 mr-auto">
                                    <h1>Pylate<span class="text-primary">.</span></h1>
                                    <p class="mb-5"><a href="#about-section">Pyl</a>'s Family website</p>
                                    <div>
                                        <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="site-section bg-light" id="features-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Features</h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><i class="fas fa-code text-primary"></i></span>
                                </div>
                                <div>
                                    <h3>My Web Templates Collection</h3>
                                    <p>Web Template Collection from a lot of resource.</p>
                                    <p><a href="#">View </a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><i class="fas fa-sitemap text-primary"></i></span>
                                </div>
                                <div>
                                    <h3>My Web Components Collection</h3>
                                    <p>Updating... <i class="fas fa-wrench"></i></p>
                                    <p><a href="javascript:void(0)">View </a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><i class="far fa-clipboard text-primary"></i></span>
                                </div>
                                <div>
                                    <h3>My Posts Collection</h3>
                                    <p>Updating... <i class="fas fa-wrench"></i></p>
                                    <p><a href="javascript:void(0)">View </a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><i class="fas fa-wrench text-primary"></i></span>
                                </div>
                                <div>
                                    <h3>And a lot of Features </h3>
                                    <p>Updating... <i class="fas fa-wrench"></i></p>
                                    <p><a href="javascript:void(0)">View </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="site-section bg-light" id="about-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">About Us</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <img src="{{ asset('landing-page/images/valley.gif') }}" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
                        </div>
                        <div class="col-lg-5 ml-auto pl-lg-5">
                            <h2 class="text-black mb-4">Pylate<span class="text-primary">.</span> 💛</h2>
                            <p class="mb-4"><i class="fab fa-hotjar"></i> Our Family Website.</p>
                            <p class="mb-4"><i class="fab fa-hotjar"></i> Our Web Template Collection.</p>
                            <p class="mb-4"><i class="fab fa-hotjar"></i> ...</p>
                            <p class="mb-4"><i class="fab fa-hotjar"></i> <i class="fas fa-heart text-danger"></i></p>
                            <p><a href="https://countday.netlify.app/" target="_blank" class="btn btn-primary">View more about us</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="site-section" id="posts-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Recent Posts</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                                <h2><a href="#">Create interactive prototypes</a></h2>
                                <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="#">Continue Reading...</a></p>
                            </div> 
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                                <h2><a href="#">Create interactive prototypes</a></h2>
                                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="#">Continue Reading...</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                                <h2><a href="#">Create interactive prototypes</a></h2>
                                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="#">Continue Reading...</a></p>
                            </div> 
                        </div> -->
                        <span>Updating ... <i class="fas fa-wrench"></i> We'll comeback soon ... <i class="far fa-smile-wink"></i></span>
                    </div>
                </div>
            </div>
            
            <div class="site-section bg-light" id="contact-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Get In Touch</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7 mb-5">
                            <form id="contact-form" class="p-5 bg-white" name="contact-form" method="POST" data-netlify="true">
                                <h2 class="h4 text-black mb-5"><i class="far fa-file-alt"></i> Contact Form</h2> 
                                
                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control rounded-0" name="fname" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black" for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control rounded-0" name="lname" required>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="email">Email</label> 
                                        <input type="email" id="email" class="form-control rounded-0" name="email" required>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Subject</label> 
                                        <input type="subject" id="subject" class="form-control rounded-0" name="subject" required>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="message">Message</label> 
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..." required></textarea>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input id="submit" type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer py-5 border-top text-center">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <p class="mb-0">
                                <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-0">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and remake with more <i class="icon-heart color-danger" aria-hidden="true" style="color: red;"></i> by <a href="#">Quân</a> and <a href="#">Thảo</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .site-wrap -->
        
        <script src="{{ asset('landing-page/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('landing-page/js/popper.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('landing-page/js/aos.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('landing-page/js/jquery.sticky.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="{{ asset('landing-page/js/main.js') }}"></script>
        <script src="{{ asset('landing-page/js/contact.js') }}"></script>
    </body>
</html>
