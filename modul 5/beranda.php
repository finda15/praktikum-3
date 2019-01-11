<?php
    session_start();
    include("function.php");
    echo check_login();
 ?> 

 <!DOCTYPEhtml>
 <html>
    <head>
        <title>praktik login session</title>
        <style media="screen">
        body {
            text-align : center;
            background-image: url(3.jpg);
            background-size: cover;
            margin: 0;
        }
        div{
      width: 35%;
      height: 400px;
      background: rgba(0,0,0,.2);
      box-shadow: 5px 4px 43px #000;
      position: absolute;
      top: 100px;
      left: 500px;
    }
    h1 {
        margin: 30px auto;
      text-align: center;
      color : white;
      font-size : 35x;
    }
    h3 {
        margin: 60px;
      text-align: center;
      color : white;
      font-size : 20x;
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

    #logout{
      background: #19b1ca;
      color: #fff;
      border: none;
    }

    #logout:hover{color: darkblue;}
        </style>
    </head>
    <body>
        <div id="form">
        <h1>Selamat Datang!</h1>
        <h3><a href="profil.php">Edit Profil</a></h3>
        <h3><a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a></h3>
        </div>
    </body>
 </html>