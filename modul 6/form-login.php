<!DOCTYPEhtml>
<html>
    <head>
    <style media="screen">
    body {
      background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(2.jpg);
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
      width: 30%;
      height: 400px;
      background: rgba(0,0,0,.2);
      box-shadow: 5px 4px 43px #000;
      position: absolute;
      top: 100px;
      left: 500px;
    }

    #form{
      margin-top: 5%;
    }

    form{
      margin: 30px auto;
      text-align: center;
    }

    h2{
      font-size: 35px;
      color: #fff;
    }
    h3{
      color: white;
    }
    a{
      color: black;
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
    <?php
    if(isset($_GET["error"])) {
                if($_GET["error"] == "wrong") {
                    echo '<h3>Username dan Password Salah!</h3>';
                }
            }
          ?>
    <div id="form">
      <img src="icon-user.png" alt="">
      <form action="login.php" method="post">
        <!-- <img src="login-icon.png"> -->
        <h2>
          Login
        </h2>
          <input type="text" name="Nis" id="Nis" placeholder="Nis">
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="submit" name="Login" value="Login" id="Login">
        <a href=""><b>Forgot Password??</b></a>
      </form>
    </div>
    </body>
</html>