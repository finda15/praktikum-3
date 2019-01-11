<?php 
    session_start();
    if(isset($_SESSION["user"])) {
       header("location:beranda.php"); 
    }
    include ("function.php");
?>

<!DOCTYPEhtml>
<html>
    <head>
        <title>LOGIN</title>
        <style media="screen">
    body {
      background: url(2.jpg);
      background-size: cover;
      margin: 0;
    }

    input {
      width: 70%;
      outline: none;
      padding: 10px 11px;
      border: 1px #aaa solid;
      font-size: 15px;
      background: #fff;
      display: block;
      margin: 20px auto;
      border-radius: 7px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus
    {
      border: 1px solid darkblue;
    }

    #Login{
      background: #19b1ca;
      color: #fff;
      border: none;
    }

    #Login:hover{color: darkblue;}

    div{
      width: 35%;
      height: 500px;
      background: rgba(0,0,0,.2);
      box-shadow: 5px 4px 43px #000;
      position: absolute;
      top: 100px;
      left: 500px;
    }

    form{
      margin: 30px auto;
      text-align: center;
      color : white;
      font-size : 20x;
    }

    h3{
      font-size: 20px;
      color: #fff;
      text-align : center;
    }

    a{
      color: #fff;
    }

    img{
      display: block;
      margin: -75px auto 0 auto;
      width: 140px;
      height: 135px;
    }
    </style>
    </head>
    <body>
        <div id="form">
        <img src="Icon-user.png" alt="">
        <?php 
            if(isset($_GET["error"])) {
                if($_GET["error"] == "wrong") {
                    echo '<h3>Username dan Password Salah!</h3>';
                }
            }
            if(isset($_GET["notif"])) {
                if($_GET["notif"] == "logout") {
                    echo '<h3>Berhasil logout!</h3>';
                }
            }
            if(isset($_POST['submit'])) {
                echo do_login($_POST['username'], $_POST['password']);
            }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                Username : <input type="text" name="username"><br>
                Password : <input type="password" name="password"> <br>
                <input type="submit" name="submit" value="SIGN IN">
        </form>
        </div>
    </body>
</html>