<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'components/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "Select * from telecom where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if ($password == $row['password']){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: index.php");
            }   
            else{
                $showError = "Invalid Credentials 1 $username and $password";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials 2";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        *{
            background-color: #242526;
        }
         button{    
             color: aliceblue;
             border: 3px solid white;
             height: 50px;
             width: 30%;
             position: relative;
             left: 27%;
             font-size: 100%;
            }
            @media screen and (max-width:700px) {
                button{
                    width:7rem;
                    margin-left:-1rem;
                    .inputtext{
        height: 30px;
        width: 15rem;
        margin-top: 2%;
        border: 2px solid white;
        color: aliceblue;
        font-size: 100%;
        padding: 5px;
    }
                    
                }
                @media (max-width:700px)  {

.form{
 border: none;
 width: 80%;
 height: 80%;
 color: aliceblue;
 margin: auto;
 margin-top: 5%;
 border-radius: 20px;
 padding: 5%;
}
.inputtext{
        height: 30px;
        width: 15rem;
        margin-top: 2%;
        border: 2px solid white;
        color: aliceblue;
        font-size: 100%;
        padding: 5px;
    }
}
                
            }
    </style>
</head>
<body>
    <div class="form">
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
        <form action="login.php" method="post">
            
                <h1>Login</h1><br>
                <hr><br>
                <label for="UserName"class="text">Username :</label>
                <input type="text" name="username" placeholder="Enter Username"class="inputtext" id="username"><br><br>
                <label for="pass"class="text">Password :</label>
                <input type="password" name="password" class="inputtext"placeholder="Password" id="password">
                <br><br><br>
                <button type="submit" class="btn">Submit</button>    
            
        </form>
    </div>
</body>
</html>