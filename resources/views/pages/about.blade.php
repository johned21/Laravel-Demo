<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel Demo | About</title>
</head>
<body>

    <div class="jumbotron">

        <h1 class="display-3 text-center">About</h1>

        <hr class="my-3">
    </div>

    <nav style="margin-top: -65px; height:60px; padding:10px;" class="navbar-dark bg-dark text-center">

        <a class="btn btn-outline-info" href="{{url('/')}}">
            Home 
        </a> 
        <a class="btn btn-outline-info" href="{{url('/profile')}}">
            Profile 
        </a> 
        
        <button type="button" class="btn btn-outline-info active">
            About
        </button>
 
    </nav>
</body>
</html>