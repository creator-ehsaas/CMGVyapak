<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


include 'components/_dbconnect.php'; 
             $sql = "SELECT * FROM policy";
             $results = $conn->query($sql);
             $cemail = $_POST['confemail'];
                 if(isset($_POST['send'])){
                    $url = 'https://api2.juvlon.com/v4/httpSendMail';
                    $data = '{"ApiKey":"OTA5MTUjIyMyMDIyLTA0LTI3IDIyOjAwOjM3",
                        "requests":
                              [{
                                "subject":"Policy Reminder",
                                "from":"prathamesh@shareskills.in",
                                "body":"Hello, Your policy is due coming soon. Please pay the policy amount before. Thank you.",
                                "to": "'.$cemail.'"             
                              }]
                            }';
                    $options = array(
                           'http' => array(
                               'header'  => "Content-type: application/json\r\n",
                               'method'  => 'POST',
                               'content' => $data
                                )
                            );
                    $context  = stream_context_create($options);
                    $result = file_get_contents($url, false, $context);
                    if ($result === FALSE) { echo "Error"; }
                    print_r($result);
                }
             

             if(isset($_POST['Sent']))
             {	 
                $cemail = $_POST['confemail'];
                $edt = $_POST['edt'];
                $sql1 = "UPDATE policy SET edt = '$edt' WHERE cemail = '$cemail'";
                if (mysqli_query($conn, $sql1)) {
                    $showAlert = true;
                    echo 'Done!';
                    echo $cemail;
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
    
    <title>Policy Reminders</title> 
    <style>
         .box{
            padding: 10px;
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       margin-left: 4%;
       margin-top: 2%;
       height: 32rem;
       width: 20rem;
       background-color: rgb(255, 255, 255);
       border-radius: 10px;
       display: inline;
       float: left;
        }

        @media screen and (max-width:700px){
        .box{
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       margin-left: 11%;
       margin-top: 2%;
       height: 35rem;
        width: 15rem;
       background-color: rgb(255, 255, 255);
       border-radius: 10px;
       display: inline;
       float: left;
            }

        .search{
            margin-left: 2rem;
            width: 15rem
        }
        }
    </style>
</head>
<body>
<?php require 'components/_side-menu.php'; ?>

    <section class="home">
            <div class="text">Policy Details</div>
            <?php 
             include 'components/_dbconnect.php'; 
             $sql = "SELECT * FROM policy order by edt asc";
             $result = $conn->query($sql);
             while ($row = $result->fetch_assoc()) {
                 echo "<div class='box'>";
                 echo "<div class='utext'>Name: ".$row["cname"]."</div>";
                 echo "<div class='utext'>Email: ".$row["cemail"]."</div>";
                 echo "<div class='utext'>Phone: ".$row["cphone"]."</div>";
                 echo "<div class='utext'>Address: ".$row["cadd"]."</div>";
                 echo "<div class='utext'>Policy Name: ".$row["pname"]."</div>";
                 echo "<div class='utext'>Policy Amount: ".$row["pamt"]."</div>";
                 echo "<div class='utext'>Company: ".$row["pcompany"]."</div>";
                 echo "<div class='utext'>Start Date: ".$row["dt"]."</div>";
                 echo "<div class='utext'>End Date: ".$row["edt"]."</div>";
                 echo "<form  style='margin-left:0%;'action='policyrem.php' method='post'><input placeholder='Update End-Date' type='text' name='edt' id='edt'>";
                 echo "<input type='text' name='confemail' id='confemail' style='margin-top:5px' placeholder='Confirm Email' required>";
                 echo "<div class='utext'><button style='margin:10px; padding:2px;' type='submit' name='Sent'>Add End Date</button><button value='Reminde' type='submit' style='margin:10px; padding:2px;' name='send'>REMIND</button></div>";  
                 echo "<div class='utext'><p id='demo'></p></div>";
                 echo "</form></div>";
              }

             ?>        
    
        
        
    </section>

    <script src="script.js"></script>
</body>
</html>