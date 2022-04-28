<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="responsive" href="Responsive.css">
    <link rel="stylesheet" href="tstyle.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
    <style>

.box{
            padding: 10px;
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       margin-left: 4%;
       margin-top: 2%;
       height: 16rem;
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
       height: 16rem;
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
        <div class="text">Customers Details</div>
        <div class="wrap">
            <form action = "" method="GET">
   <div class="search">
      <input type="text" name="search" class="searchTerm" <?php if(isset($_GET['search'])){echo($_GET['search']);}  ?> placeholder="Search For Customer...">
      <button type="submit" class="searchButton">
      <i class='bx bx-search-alt'></i>
     </button>
   </div>
   </form>
</div>
        <?php 
        
        include 'components/_dbconnect.php';
        //display customers details


        if(isset($_GET['search'])){
            $filter = $_GET['search'];
            $sql = "SELECT * FROM customers WHERE cname LIKE '$filter%' ";
            $sql_run = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($sql_run);
            if($count > 0){
                foreach($sql_run as $row){
                    echo "<div class='box'>";
                    echo "<div class='utext'>Name: ".$row["cname"]."</div>";
                    echo "<div class='utext'>Email: ".$row["cemail"]."</div>";
                    echo "<div class='utext'>Phone: ".$row["cphone"]."</div>";
                    echo "<div class='utext'>Address: ".$row["cadd"]."</div>";
                    echo "<div class='utext'>Meet: ".$row["cmeet"]."</div>";
                    if ($row["cmeet"] == "Yes") {
                        echo "<div class='tick'><i class='bx bxs-check-square' ></i> ","</div>";
                    }else{
                        echo "<div class='tick'><i class='bx bxs-x-square' ></i> ","</div>";
                    }
                    echo "</div>";
                }
                
            }else{
                echo "<div class='box'>";
                echo "<div class='utext'>No Result Found</div>";
                echo "</div>";
            }
        
        }
        else{
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<div class='box'>";
            echo "<div class='utext'>Name: ".$row["cname"]."</div>";
            echo "<div class='utext'>Email: ".$row["cemail"]."</div>";
            echo "<div class='utext'>Phone: ".$row["cphone"]."</div>";
            echo "<div class='utext'>Address: ".$row["cadd"]."</div>";
            echo "<div class='utext'>Meet: ".$row["cmeet"]."</div>";
            if ($row["cmeet"] == "Yes") {
                echo "<div class='tick'><i class='bx bxs-check-square' ></i> ","</div>";
            }else{
                echo "<div class='tick'><i class='bx bxs-x-square' ></i> ","</div>";
            }
            echo "</div>";
        }
    }
        
        ?>
            
    
        
        
    </section>

    <script src="script.js"></script>

</body>
</html>                                                                                                       