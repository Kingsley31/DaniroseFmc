<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('css/buttons.css')}}">
    <link rel="stylesheet" href="{{asset('css/logo-menu-divider.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/getstarted-section.css')}}">
    <link rel="stylesheet" href="{{asset('css/search-doctor-form.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav-links.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-form-section.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <title>Danirose Fmc</title>
  </head>
  <body>
    <div class="p-0 m-0">
        @include('includes.header')
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
                    <a href="/appointment/home/create" class="btn btn-main btn-lg">Get Started</a>
                </div>
                <div class="bg-doctor-img d-none d-md-block col-sm-12 col-md-6">
                    
                </div>
            </div>
        </div>
        <div class="container-fluid bg-main">
            <div class="booking-container bg-main py-5">
                <h1 class="text-center mb-4 mb-md-5"> Book A Specialist</h1>
                <div class="booking-form-container">
                    <form action="/appointment/home/create" id="search-specialist-form">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-4 mb-3">
                                <label for="staticEmail2" class="sr-only">Specialization</label>
                                <select name="specialization" id="specialization" class="form-control @error('city') is-invalid @enderror">
                                    <option value="0">Choose Specilization</option>
                                    @foreach ($specializations as $specialization)
                                        <option value="{{$specialization->name}}">{{$specialization->name}}</option>
                                    @endforeach
                                </select>
                                @error('specialization')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>
                              <div class="col-sm-12 col-md-4 mb-3">
                                <label for="staticEmail2" class="sr-only">City</label>
                                <select name="city" id="specialization"  class="form-control @error('city') is-invalid @enderror">
                                    <option value="0">Choose City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                                @error('city')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>
                              <div class="col-sm-12 col-md-4 mb-1">
                                <button type="submit" class="btn btn-main">Start</button>
                              </div>
                        </div>
                    </form>
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
        @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        // $('.carousel').carousel()
    </script>
  </body>
</html>