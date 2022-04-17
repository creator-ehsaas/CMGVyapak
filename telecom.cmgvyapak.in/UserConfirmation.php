<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

include 'components/_dbconnect.php';


if(isset($_POST['save']))
{	 
	 $cname = $_POST['cname'];
	 $cemail = $_POST['cemail'];
	 $cphone = $_POST['cphone'];
	 $cdd = $_POST['cadd'];
     $cmeet = $_POST['cmeet'];

	 $sql = "INSERT INTO customers (cname,cemail,cphone,cadd,cmeet) VALUES ('$cname','$cemail','$cphone','$cdd', '$cmeet')";
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
                width: 60%;
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

    </style>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
   <?php require 'components/_side-menu.php'; ?>

    <section class="home">
        <div class="text">Add Customers</div>
        <div class="form">
            <form action="UserConfirmation.php" method="post">
                <hr>
                <br>
        
                
                <input type="text" id="cname" name="cname" class="input" placeholder="Full Name"/>
                <br><br>
        
                <input type="tel" id="cphone" name="cphone" class="input" placeholder="Mobile Number "/>
                <br><br>

                <input type="email" id="cemail" name="cemail" class="input" placeholder="Email"/>
                <br><br>

                <input type="text" id="cadd" name="cadd" class="input" placeholder="Address"/>
                <br><br>
    
                <input type="text" id="cmeet" name="cmeet" class="input" style="text-transform: capitalize;" placeholder="Agreed For Meeting? Yes/No"/>
                <br><br>

               <input type="Submit" name="save" class="btn" value="ADD USER" onclick="sendOTP();"/>
        
            
            </form>
        </div>

    
        
        
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        
        var getOTPNumberCode = ''; 
        
        function sendOTP(){
            var email = jQuery('#cemail').val();
            var name = jQuery('#cname').val();
            
            var data = { 'name': name, 'email': email}; 
            
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: data,
                dataType : 'JSON',
                success : function(data){
                    console.log(data);
                
                    getOTPNumberCode = data; 
                }
            });
            
            
        }
        
        
    </script>
    <script src="script.js"></script>
    

</body>
</html>