<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      

            
    @if(Auth::check())

     Your name is {{Auth::user()->name}}
     <br/>
     Your Emaii is {{Auth::user()->email}}

     @else

     You are not log in

    @endif
</body>
</html>