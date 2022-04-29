<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

include 'components/_dbconnect.php';


if(isset($_POST['save']))
{	 
	 $euser = $_POST['euser'];
	 $epass = $_POST['epass'];

	 $sql = "INSERT INTO executive (username, password) VALUES ('$euser','$epass')";
	 if (mysqli_query($conn, $sql)) {
		$showAlert = true;
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }



}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="tstyle.css">
    <link rel="responsive" href="Responsive.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <style>
        
            form{
                width: 40%;
                height: 60%;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
                /* border: #ccc solid 2px; */
                padding: 20px;
                margin-left: 30%;
            }

            .btn{
                width: 70%;
                height: 50px;
                border: 3px solid white;
                color: aliceblue;
                font-size: 100%;
                background-color: #242526;
                padding: 10px;
                margin-left: 20%;

            }
            .input{
            height: 40px;
            width: 100%;
            border: 3px solid white;
            margin: auto;
            margin-top: 2%;
            padding: 10px;

                
            }

            .btn:hover{
                background-color: #ccc;
                color: #242526;
                cursor: pointer;
            }
            @media  screen and (max-width:700px) {
            form {
        width: 71%;
        height: 60%;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        border: none;
        padding: 5px;
        margin-left: 10%;
    }}
    </style>
    
    <title>Add Executive</title> 
</head>
<body>
   <?php require 'components/_side-menu.php'; ?>

    <section class="home">
        <div class="text">Add Executive</div>
        <div class="form">
            <form action="addexe.php" method="post">
                <hr>
                <br>
        
                
                <input type="text" id="euser" name="euser" class="input" placeholder="Username"require/>
                <br><br>
                <input type="password" id="epass" name="epass" class="input" placeholder="Password"require/>
                <br><br>

               <input type="Submit" name="save" class="btn" value="ADD EXECUTIVE" onclick="sendOTP();"/>
        
            
            </form>
        </div>

    
        
        
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="script.js"></script>
    

</body>
</html>