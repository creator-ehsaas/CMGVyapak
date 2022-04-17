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
        @media screen and (max-width:700px) {
            .box{
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      margin-left: 6%;
      margin-top: 1%;
      height: 45%;
      width: 90%;
      background-color: white;
      border-radius: 10px;
      /* float: left; */
      display: inline;
      margin-bottom: 1%;
  
  }
  .home.text{
        font-size: 133%;
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
                        <a href="index.php">
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
            <div class="text">New Policy Details</div>
            <a href="policy.php"><div class="box"></div></a>           
            <a href="policy.php"><div class="box"></div></a>           
            <a href="policy.php"><div class="box"></div></a>           
            <a href="policy.php"><div class="box"></div></a>           
                     
    
        
        
    </section>

    <script src="script.js"></script>

</body>
</html>