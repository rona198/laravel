<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    </head>
    <body style="background-image: url('src/img/bg.jpg'); background-repeat: no-repeat;">
        @include('includes.header1')
       <div class = "container">
            @yield('content')
       </div>
       
       <br> 
      @include('includes.footer')

       <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-migrate-3.0.0.js" integrity="sha256-lsVOB+3Yhm6He5MkTO3Bw/Xw4NXK7wYYTi1Y+M/2PrM=" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="{{ URL::to('src/js/app.js') }}"></script>
    </body>
</html>
