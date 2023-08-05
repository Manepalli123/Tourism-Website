<?php
    session_start();
    include("back.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    if(!empty($email) && !empty($password)){
        $query="select * from data1 where mail = '$email' limit 1";
        $result=mysqli_query($con,$query);
        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);

                if($user_data['pass']==$password) {
            header("location:PLACE(main).html");
         }
        }
}
    }else{
        echo "<script type='text/javascript'>alert('ERROR!!!!!!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        } 
        .topnav{
            display: flex;
            height: 50px;
            width: 100vw;
        }
        .topnav img{
            padding: 5px;
            height: 50px;
            width: 40px;
        }
        .topnav h3{
            padding-top: 10px;
        }
        .down{
            background-color: #000045;
            height: 40px;
            padding-top: 10px;
        }
        .down a{
            color:white;
            list-style: none;
            text-decoration: none;
            padding: 20px;
        }
        .down a:hover{
            color: gold;
            background-color: red;
        }
        .login{
            position: absolute;
            margin-left:500px;
            margin-top:-250px;
            height: 350px;
            width: 400px;
            background-image: url(https://images.unsplash.com/photo-1614850523296-d8c1af93d400?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bGlnaHQlMjBjb2xvdXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80);
            border: 2px solid aquamarine;
        }
        .login h5{
            text-align: center;
            font-size: 30px;
            padding: 10px;
        }
        .login #form1{
            position: absolute;
            background-color:transparent;
            border:none;
            border-bottom:2px solid black;
            height: 30px;
            width:80%;
            margin-top: 20px;
            margin-left: 10px;
            
        }
        .login #form1:hover{
            background-color: aliceblue;
         }
        .login #form1::placeholder{
            color: black;
         }
         .login img{
            height: 30px;
            margin-top: 15px;
            margin-left: 85%;
         }
        .login #form2{
            position: absolute;
            background-color:transparent;
            border:none;
            border-bottom:2px solid black;
            height: 30px;
            width:80%;
            margin-top: 65px;
            margin-left: 12px;
        }
        .login #form2:hover{
           background-color: aliceblue;
        }
        .logindown{
        display: flex;
        margin-left: 10px;
        margin-top: 10px;
        }
        .logindown a{
            padding-left: 70px;
        }
        .button button{
            margin-top: 40px;
            margin-left: 100px;
            width: 200px;
            height: 30px;
            font-size: 20px;
            color: white;
            background-color: rgba(0, 0, 255, 0.758);
            border-radius: 10px;
            border: 1px solid red;
        }
        .button button:hover{
            background-color: yellow;
            color: #000;
            font-size: 20px;
            border: 2px solid aquamarine;
        }
        .last{
            display: flex;
            margin-top: 20px;
            margin-left: 40px;
            text-align: center;
        }
        .last a{
            margin-left: 10px;
        }
        .wall{
                background-position: bottom;
                background-image: url('https://img.freepik.com/free-vector/set-famous-landmark-vectors_53876-77150.jpg?w=1380&t=st=1689260520~exp=1689261120~hmac=9f7df24a733fab4881509a123d3e603dea7c4f0b39909ab342a94ce777f97a77');
                background-size: cover;
                height:500px;
                margin-top:300px;
        }
        .butwhat{
            margin-right:300px;
            width: 100px;
            height: 30px;
            text-align: center;
            color: white;
            font-size: 20px;
            background-color:rgba(0, 0, 255, 0.758);
            border-radius: 10px;
            margin-left:150px;
            margin-top:50px;
        }
        .butwhat:hover{
            background-color: yellow;
            color: #000;
            font-size: 20px;
            border: 2px solid aquamarine;
        }
    
    </style>
</head>
<body>
      <div class="wall">
        <div class="login">
            <h5>Login Account</h5>
            <form  method="POST">
                <input id="form1" name="mail" type="email" placeholder="Enter your email"required>
                <input id="form2"  name="pass" type="password"placeholder="Enter your password"required>
           
                <img src="https://w7.pngwing.com/pngs/741/68/png-transparent-user-computer-icons-user-miscellaneous-cdr-rectangle-thumbnail.png" alt="user">
                <img src="https://icons.veryicon.com/png/o/internet--web/sesame-treasure/login-password-3.png" alt="user">
            <div class="logindown">
                    <input id="form3" type="checkbox"> Remember me
                <a href="">Forgot Password-?</a>
            </div>
           
            <form action="PLACE(main).html" method="POST">
            <input type="submit" name="submit" value="Login" class="butwhat">
            </form>
    </div>
      </div>


       
</body>
</html>