<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
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
        width:89%;
        margin-left:10%;
        height:10%;
    }
    @media screen and (max-width:700px) {
        form{
            border:none;
            width:auto;
            margin:0;
            margin-top:3%;
        }
        input{
            
            width:90%;
        }
        
    }
    </style>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="harshal.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Prathamesh</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Policy.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Policy</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="newpolicy.php">
                            <i class='bx bx-id-card icon' ></i>
                            <span class="text nav-text">New Policy Details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="UserDetails.php">
                            <i class='bx bxs-user-detail icon'></i>
                            <span class="text nav-text">User Details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-contact icon' ></i>
                            <span class="text nav-text">Contact Us</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
          <form action="" method="post" class="frm">
              <label for="name">Policy Name</label>
              <input type="text"placeholder="Policy Name"id="name"><br><br>
              <label for="no">Policy Number</label>
              <input type="text"placeholder="Policy Number"id="no"><br><br>
              <label for="amount">Enter Policy Amount</label>
              <input type="number"placeholder="Amount"id="amount"><br><br>
              <label for="nm">Enter Policy Company Name</label>
              <input type="text"placeholder="Company Name"><br><br>
              <input type="submit" value="Submit">

          </form>
            
        
        
    </section>

    <script src="script.js"></script>

</body>
</html>