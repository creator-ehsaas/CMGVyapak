<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="harshal.jpg" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $_SESSION['username'] ?></span>
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
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">User Details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="UserConfirmation.php">
                            <i class='bx bx-id-card icon' ></i>
                            <span class="text nav-text">Add User</span>
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
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>