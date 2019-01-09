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
     left: 30%;
     font-size: 50px;
     font-family: "arial";
    }
    </style>
</head>
<body class="bi">
<h1 class= "bj">
    <?php
    $user=$_POST['username'];
    $pass=$_POST['password'];

    if($user == "admin1" && $pass == "admin1"){
        echo "Login Berhasil";
    } else{
        echo " login Gagal";
    }
    ?>
    </h1>
</body>
</html>