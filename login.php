
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin</title>

    <script type="text/javascript">
    function cek_login(){
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      if (username == 'admin' && password == 'admin') {
          document.location="file:///E:/KULIAH/Semester%205/Prak.PAW%20-%20G/pertemuan/P8/belajar_bootstrap.html";
      } else{
        alert("username dan password salah");
      }
    } 
  </script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" onsubmit="return false">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="username" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block"  onclick="cek_login()" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
