<?php 
   session_start();
   include("back.php");  
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['mail'];
    $name=$_POST['name'];   
    $mobile=$_POST['num'];
    $password=$_POST['pass'];
    if((!empty($email) && !empty($name) && !empty($mobile) && !empty($password))){
    $query="insert into data1(mail,user,mobile,pass)values('$email','$name','$mobile','$password')";
    mysqli_query($con,$query);
    header("location:PLACE(main).html");
    echo "<script type='text/javascript'>alert('Registration Successfull!')</script>";
    
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
            font-family: "Roboto";
            background-size: cover;
            background-repeat: no-repeat;
            height:auto;
            width:auto;
        }
        .wall{
            background-position: bottom;
            background-image: url('https://img.freepik.com/free-vector/set-famous-landmark-vectors_53876-77150.jpg?w=1380&t=st=1689260520~exp=1689261120~hmac=9f7df24a733fab4881509a123d3e603dea7c4f0b39909ab342a94ce777f97a77');
            background-size: cover;
            height:500px;
            margin-top:300px;
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
            /* margin-top: 10px; */
            margin-left: 540px;
            height: 420px;
            width: 450px;
            background-image: url(https://images.unsplash.com/photo-1614850523296-d8c1af93d400?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bGlnaHQlMjBjb2xvdXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80);
            border: 2px solid aquamarine;
            text-align: center;
            margin-top:-250px;
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
        .login #form3:hover{
            background-color: aliceblue;
         }
         .login #form4:hover{
            background-color: aliceblue;
         }
        .login #form3{
            position: absolute;
            background-color:transparent;
            border:none;
            border-bottom:2px solid black;
            height: 30px;
            width:80%;
            margin-top:105px;
            margin-left: 12px;
        }
        .login #form4{
            position: absolute;
            background-color:transparent;
            border:none;
            border-bottom:2px solid black;
            height: 30px;
            width:80%;
            margin-top: 150px;
            margin-left: 12px;
        }
        
        .button button{
            margin-top: 120px;
            margin-left: 50px;
            margin-right:50px;
            width: 200px;
            height: 30px;
            font-size: 20px;
            color: white;
            background-color: rgba(0, 0, 255, 0.758);
            border-radius: 10px;
            border: 1px solid red;
            text-align: center;
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
        }
        .last a{
            margin-left: 10px;
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
        }
        .butwhat:hover{
            background-color: yellow;
            color: #000;
            font-size: 20px;
            border: 2px solid aquamarine;
        }
        .butwhat1{
            margin-left:350px;
            margin-bottom:0px;
            margin-bottom:1500px;
            width: 100px;
            height: 30px;
            text-align: center;
            color: white;
            font-size: 20px;
            background-color:rgba(0, 0, 255, 0.758);
            border-radius: 10px;
        }
        .butwhat1:hover{
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
            <h5>SIGN UP</h5>
            <form method="POST">
                <input id="form1" name="mail" type="email" placeholder="Enter your email"required>
                <input id="form3" name="name" type="text" placeholder="Enter your name"required>
                <input id="form4" name="num" type="text" placeholder="Enter your mobile"required>
                <input id="form2" name="pass" type="password" placeholder="Enter password"required>
           
                <img src="https://w7.pngwing.com/pngs/741/68/png-transparent-user-computer-icons-user-miscellaneous-cdr-rectangle-thumbnail.png" alt="user">
                <img src="https://icons.veryicon.com/png/o/internet--web/sesame-treasure/login-password-3.png" alt="user">
            
            <div class="button">
                    <button>SIGN-UP</button>
            </form>
            </div>
        
            
            <div class="last">
                <h4>Already have an account </h4>
                <a href="Login.php">LOGIN?</a>
            </div>
            <br>
            
            <form action="tourism.html">
            <input type="submit" name="submit" value="Home" class="butwhat">
    </form>
</div>
  </div>
</body>
</html>