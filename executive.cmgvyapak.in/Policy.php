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
     $pname = $_POST['pname'];
     $pamt = $_POST['pamt'];
     $pcompany = $_POST['pcompany'];

	 $sql = "INSERT INTO policy (cname,cemail,cphone,cadd,pname,pamt,pcompany) VALUES ('$cname','$cemail','$cphone','$cdd', '$pname','$pamt','$pcompany')";
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
    <link rel="responsive" href="responsive.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
    <style>
        label{
            color:white;
        }
        form{
            width:30%;
            border: 2px solid white;
             margin-left:30%;
             margin-top:3%;
            
    }
    form input, form label{
        width: 20rem;
    height: 2rem;
    margin-left: 10%;
    padding: 0.5rem;
    }
    @media screen and (max-width:700px) {
    form{
        padding: 1rem;
        width: 100%;
    border: 2px solid white;
    margin-left: -2rem;
    margin-right: 10rem;
    }
}
    </style>
</head>
<body>
<?php require 'components/_side-menu.php'; ?>

    <section class="home">
          <form action="Policy.php" method="post" class="form">
          <label for="name">Customer Name</label>
              <input type="text"placeholder="Customer Name" name="cname" id="name"require><br><br>
              <label for="name">Email</label>
              <input type="email"placeholder="Customer Email"name="cemail"id="name"require><br><br>
              <label for="name">Phone Number</label>
              <input type="number"placeholder="Customer Phone Number"name="cphone"id="name"require><br><br>
              <label for="name">Adderss</label>
              <input type="text"placeholder="Customer Address"name="cadd"id="name"require><br><br>
              <label for="name">Policy Name</label>
              <input type="text"placeholder="Policy Number"name="pname"id="no"require><br><br>
              <label for="amount">Enter Policy Amount</label>
              <input type="number"placeholder="Amount"id="amount"name="pamt"require><br><br>
              <label for="nm">Enter Policy Company Name</label>
              <input type="text"placeholder="Company Name"name="pcompany" require><br><br>
              <input type="submit" name="save" value="Submit">

          </form>
            
        
        
    </section>

    <script src="script.js"></script>

</body>
</html>