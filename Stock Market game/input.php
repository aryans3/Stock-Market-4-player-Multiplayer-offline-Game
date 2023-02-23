<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
      include 'partials/_dbconnect.php';
        $name1 = $_POST["name1"];
        $name2 = $_POST["name2"];
        $name3 = $_POST["name3"];
        $name4 = $_POST["name4"];
        $time = $_POST["time"];
        session_start();
        $_SESSION['name1']=$name1;
        $_SESSION['name2']=$name2;
        $_SESSION['name3']=$name3;
        $_SESSION['name4']=$name4;
        $_SESSION['time']=$time;
    
        header("location: data.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <video id="bgvideo" autoplay muted loop>
        <source src="backv.mp4" type="video/mp4">
    </video>
    <style>
    .b1,.b2,.b3,.b4{
    display: inline-block;
    border-radius: 20px;
    margin-top: 20px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: x-large;
    margin-right: 50px;
    padding: 50px;
    color: white;
    text-align: center;
    position: sticky;
    z-index: 3;
    border: 1px solid #f1f1f1;
    backdrop-filter: blur(10px);
    background-color: rgba(146, 146, 146, 0.082);
    transition-timing-function: ease-in-out;
    transition-duration: 0.2s;

  }
  input{
    border-radius: 6px;
    padding: 10px;
    border-color: white;
    text-decoration-color: white;
  }
  .b1:hover,.b2:hover,.b3:hover,.b4:hover{
    transform: scale(1.2);
    transition-duration: 0.2s;
  }
    </style>
    <div id="con">
        <form action="input.php" method="POST">
        <div class="b1">
            <label>PLAYER 1</label><br><br>
            <input id="name1" name="name1" placeholder="Enter Name" required>
        </div>
        <div class="b2">
            <label>PLAYER 2</label><br><br>
            <input id="name2" name="name2" placeholder="Enter Name" required>
        </div>
        <div class="b3">
            <label>PLAYER 3</label><br><br>
            <input id="name3" name="name3" placeholder="Enter Name" required>
        </div>
        <div class="b4">
            <label>PLAYER 4</label><br><br>
            <input id="name4" name="name4" placeholder="Enter Name" required>
        </div>
        <div class="b4">
            <label>TIME</label><br><br>
            <input id="name4" name="time" placeholder="In Minutes" required>
        </div>
        <br>
        <button type="submit" style="margin-right:40px;">START</button>
        </form>
    </div>
</body>
</html>