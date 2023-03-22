<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camp Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
  </head>
  <body class="bg-gray-login">
    <div class="container">
        @include('component/message')
      <form action="/create" method="POST">
        <div class="d-flex" style="height: 100vh">
          <div class="card-login m-auto">
            <a class="login">Register</a>
            @csrf
            <div class="inputBox">
                <input type="text" required="required" name="email" id="email" value="{{Session::get('email')}}">
                <span class="user">E-mail</span>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="name" id="name" value="{{Session::get('name')}}">
                <span class="user">Nama Lengkap</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password" id="password">
                <span>Password</span>
            </div>
            <button class="enter" name="submit" type="submit">Register</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>