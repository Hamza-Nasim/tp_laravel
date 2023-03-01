<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet"  href="style.css">
    
</head>
<body>
   <nav>
        <a href="{{route('home.home')}}">-home</a>
        <a href="{{route('home.contact')}}">-contact</a>
        <a href="{{route('home.thanks')}}">-thanks</a>
        
        
        
     
    </nav> 
    <div class="container">
    @yield("content")
    </div>
   
</body>
</html>