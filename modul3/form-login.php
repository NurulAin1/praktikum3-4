<html>
  <head>
    <title>LOGIN</title>
    <style media="screen">
    .bi{
      background-image: url("../modul3/pink.jpg");
      background-size: cover;
    }
    .ar{
      position: absolute;
      top: 45%;
      left: 45%;
      font-size: 20px;
      font-weight: bold;
    }
    .bj{
      position: absolute;
     top: 30%;
     left: 45%;
     font-size: 40px;
    }
    </style>
  </head>
  <body class="bi">
    <h1 class="bj">L O G I N</h1>
     <form class="ar"action="variabel-hasil.php" method="post" onSubmit= "validasi()">
     username : <input type="text" name="username" id="username"/> <br> 
     Password : <input type = "password" name ="password" id="password"/> <br>
       <button type="submit" name="login">LOGIN</button>
     </form>
  </body>
</html>
