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
    <link rel="stylesheet" href="{{asset('css/the-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.min.css')}}">


    <title>Danirose Fmc</title>
    <style>
        .underline-title{
            height: 4px;
            width: 70px;
        }

        .success-icon{
            height: 90px;
            width: 100px;
        }

        .login-btn{
            width: 150px;
        }

    </style>
  </head>
  <body>
    <div class="p-0 m-0">
        @include('includes.header')
        <div class="pt-5 pb-5 pr-3 pl-3 body-bg">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4">
                    @include('includes.loginform')
                </div>
            </div>
        </div>
        @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('js/the-datepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script>
    </script>
  </body>
</html>