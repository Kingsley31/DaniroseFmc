<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Danirose Fmc</title>
    <style>
        .bg-main{
            background-color: #f2f2f2;
        }

        .bg-ash{
            background-color: #f2f2f2;
        }

        .btn-main {
            color: #fff;
            background-color: rgb(144, 49, 158);
            border-color: rgb(144, 49, 158);
        }

        .bg-accent{
            background-color: rgb(234, 80, 86);
        }

        .text-white{
            color: #000000;
        }

        .text-main{
            color:  rgb(144, 49, 158);
        }

        .text-accent{
            color: rgb(234, 80, 86);
        }

        .line-h {
            border-top: 2px solid rgba(0,0,0,.1);
            margin-top: 0rem;
            margin-bottom: 0rem;
        }

        a {
            color: rgb(144, 49, 158);
        }

        .slider-container{
            height: 300px;
        }

        .slide1{
            background-image: url("../images/slide1.jpg");
            background-size:cover;
            background-position:center;
            background-repeat: no-repeat;
        }

        .slide2{
            background-image: url("../images/slide2.jpg");
            background-size:cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide3{
            background-image: url("../images/slide3.jpg");
            background-size:cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slider-title{
           font-size: 28px;
        }

        .slider-text{
            font-size: 20px;
        }

        .bg-doctor-img{
            background-image: url("../images/doctor-image.png");
            background-size:contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 300px;
        }

        .carousel-inner {
            height: 300px;
        }

        .slide-caption{
          padding-top: 20%;
          padding-left: 10px;
          padding-right: 10px;
        }

        .booking-form-container {
            width: 100%;
        }

        .booking-form-container .row button{
            width: 100%;
        }

        .doctor-card img{
            height: 150px;
        }

        .doctor-card p{
            font-size: 18px;
        }

        .doctor-card h5{
            font-size: 22px;
        }

        .contact-container{
            width: 100%;
        }

        .footer-nav{
            margin: 0px;
            padding: 0px;
        }

        .footer-nav li{
            margin: 0px;
            padding: 0px;
            text-decoration:none ;
        }

        .footer-nav li a{
            color: #000000;
        }


        @media(min-width: 768px) {
            .booking_title{
                font-size: 58px;
                font-weight: 600;
                line-height: 1.26;
                margin-bottom: 18px;
            }

            .booking_body{
                max-width: 502px;
                height: 56px;
                font-size: 22px;
                line-height: 1.27;
            }

            a {
                font-size: 18px;
                font-weight: 500;
            }

            .slider-container{
                height: 500px;
            }
            .carousel-inner {
                height: 500px;
            }

            .slide-caption{
                padding-top: 10%;
                padding-left: 10px;
                padding-right: 10px;
            }

            .slider-title{
                font-size: 58px;
            }

            .slider-text{
                font-size: 30px;
            }

            .booking-form-container{
                width: 650px;
                margin-right: auto;
                margin-left: auto;
            }

            .contact-container{
                width: 650px;
                margin-right: auto;
                margin-left: auto;
            }
        }
    </style>
  </head>
  <body>
    <div class="p-0 m-0">
        <header>
            <div class="w-25 mx-auto mt-5">
                <img src="../images/danirose-logo.JPG" class="image-fluid d-block mx-auto" style="height: 90px;"   alt="">
            </div>
            <hr class="line-h bg-ash mt-3">
            <nav class="my-2 sticky-top">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link active" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                </ul>
            </nav>
        </header>
        <div class="slider-container bg-accent carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="d-block slide1 slider-container">
                        
                        <div class="slide-caption">
                            <h1 class="text-center slider-title">Get The Best Health Care</h1>
                            <p class="text-center slider-text">we render the best health care services around the world</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block slide2 slider-container">
                        <div class="slide-caption">
                            <h1 class="text-center slider-title">Get The Best Health Care</h1>
                            <p class="text-center slider-text">we render the best health care services around the world</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block slide3 slider-container">
                        <div class="slide-caption">
                            <h1 class="text-center slider-title">Get The Best Health Care</h1>
                            <p class="text-center slider-text">we render the best health care services around the world</p>
                        </div>
                    </div>
                </div>
            </div>
           
        
        </div>
        <div class="container pb-5">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6">
                    <h1 class="booking_title">Book A Specialist</h1>
                    <p class="booking_body">Do you know that you can book a specialist now</p>
                    <button class="btn btn-main btn-lg">Get Started</button>
                </div>
                <div class="bg-doctor-img d-none d-md-block col-sm-12 col-md-6">
                    
                </div>
            </div>
        </div>
        <div class="container-fluid bg-main">
            <div class="booking-container bg-main py-4">
                <h1 class="text-center mb-4 mb-md-5"> Book A Specialist</h1>
                <div class="booking-form-container">
                    <form action="#" id="search-specialist-form"></form>
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-4 mb-3">
                                <label for="staticEmail2" class="sr-only">Specialization</label>
                                <select name="specialization" id="specialization" class="form-control">
                                    <option value="0">Choose Specilization</option>
                                    <option value="1">Obstetrics and gynaecology</option>
                                    <option value="2">Surgeon</option>
                                    <option value="3">Paediatrics</option>
                                    <option value="3">Paediatrics</option>
                                    <option value="4">Dermatologist</option>
                                    <option value="5">Orthopaedics</option>
                                    <option value="6">Ophthalmologist</option>
                                    <option value="7">Family medicine</option>
                                </select>
                              </div>
                              <div class="col-sm-12 col-md-4 mb-3">
                                <label for="staticEmail2" class="sr-only">City</label>
                                <select name="city" id="specialization" class="form-control">
                                    <option value="0">Choose City</option>
                                    <option value="1">Umuahia</option>
                                </select>
                              </div>
                              <div class="col-sm-12 col-md-4 mb-1">
                                <button type="submit" class="btn btn-main">Search</button>
                              </div>
                        </div>
                    </form>
                </div>
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 mb-5">
                            <div class="card p-2 doctor-card">
                                <img class="card-img-top" src="../images/doctoora-home-slider-mobile-1.png">
                                <h5 class="mt-1 mb-0">Dr Mike Kelechukwu</h5>
                                <p>Orthopaedics</p>
                                <a href="#" class="btn btn-main">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h1 class="text-center booking_title mb-5">How It Works</h1>
            <div class="row pt-sm-0 justify-content-md-center pt-md-4 pb-sm-5 pb-md-5">
                <div class="col-6 col-md-3 mb-3">
                    <img class="image-fluid d-block mx-auto mt-3 mb-2" src="../images/danirose-search.svg" alt="">
                    <h5 class="text-center">Enter search criteria</h5>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <img class="image-fluid d-block mx-auto mb-2" src="../images/danirose-selection.svg" alt="">
                    <h5 class="text-center">Choose preferred Specialist</h5>
                </div>
                <div class="col-6 col-md-3 col-md-3 mb-3">
                    <img class="image-fluid d-block mx-auto mb-2" src="../images/danirose-select-consultation.svg" alt="">
                    <h5 class="text-center">Enter booking detail</h5>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <img class="image-fluid d-block mx-auto mb-2" src="../images/danirose-make-payment.svg" alt="">
                    <h5 class="text-center">Admin Feedback Admin</h5>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <h1 class="text-center booking_title mb-5">Contact Us</h1>
            <form action="#">
                <div class="contact-container">
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 form-group">
                            <label for="fullname" class="sr-only">Fullname</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter fullname">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row mb-0 mb-md-3">
                        <div class="col-12 form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-main w-100">Submit Form</button>
                </div>
                
            </form>
        </div>
        <div class="container-fluid pt-5 pb-2 bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4 mb-4">
                        <h5 class="text-main mb-4">Danirose FCM</h5>
                        <ul class="footer-nav">
                            <li class="nav-item d-block mb-3"><a href="#">Home</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Login</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">About</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Services</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                        <h5 class="text-main mb-4">Contact</h5>
                        <ul class="footer-nav">
                            <li class="nav-item d-block mb-3"><a href="#">support@danirosefmc.com</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Or call 0812234455</a></li>
                        </ul>
                        <h5 class="text-main mb-4 mt-4">Social Media</h5>
                        <div>
                            <a href="#" style="color: blue;"><i class="fa fa-facebook fa-lg "></i></a>
                            <a href="#" style="color: rgb(0, 102, 255);"><i class="fa fa-twitter fa-lg "></i></a>
                            <a href="#" class="text-accent"><i class="fa fa-instagram fa-lg "></i></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                        <h5 class="text-main mb-4">Legal</h5>
                        <ul class="footer-nav">
                            <li class="nav-item d-block mb-3"><a href="#">Terms and condition</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Privacy Policy</a></li>
                            <li class="nav-item d-block mb-3"><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="text-dark text-right">© Danirose FMC 2020 - All rights reserved</p>
                </div>
            </div>

        </div>

    </div>
    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        // $('.carousel').carousel()
    </script>
  </body>
</html>