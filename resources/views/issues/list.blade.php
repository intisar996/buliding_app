<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">


    <title>Document</title>
</head>
<body>
    <div class="countiner">

        <div class="row">

        @foreach ($users as $user)

       <div class="col-12">
       <div class="alert alert-success">username: {{$user->name}}
       </div>
            <hr>
          <ul>
            @foreach ($user->issu as $issu)

              <li> {{$issu->msg}}</li>
           @endforeach


          </ul>




       </div>
       @endforeach
       

        </div>

    </div>
    
</body>
</html>