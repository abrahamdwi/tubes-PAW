<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sigup for Join</title>

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form action="" method="post" class="form-signup" onsubmit="return false">
        <h2 class="form-signup-heading">Please signup</h2>

     
        <label for="nama" class="sr-only">Username</label>
        <input type="text" name="nama" class="form-control" placeholder="Username" required >
        <label for="email" class="sr-only">Email address</label>
        <input type="text" name="email" class="form-control" placeholder="Email address" required >
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
         <button class="btn btn-lg btn-primary btn-block"  type="submit">Signup</button>
        <input type="hidden" name="signup" value="on" />
      </form>
      <?php 

          $nama_post = $_POST["nama"];
          $email_post = $_POST["email"];
          $password_post = $_POST["password"];

          include "koneksi.php";

          $kueri=" INSERT INTO user(id_user,nama,email,password) VALUES ('$nama_post','$email_post','$password_post')";
          mysql_query($kueri);
          

          /*
            if(isset($_POST['signup'])){
            include ("koneksi.php");
            
            $kueri

            $insert = mysqli_query($conn," INSERT INTO user(id_user,nama,email,password) VALUES
              (NULL, 
               '".$_POST['nama']."',
               '".$_POST['email']."',
               '".$_POST['password']."')");
              if ($insert) {
                echo "Berhasil Daftar";
              }else{
                echo "Gagal Daftar";
              }
          }
          */

          
       ?>

    </div> <!-- /container -->
  </body>
</html>
