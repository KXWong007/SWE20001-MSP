<?php
    echo
        '
            <header class="header">
                <a href="index.php" class="logo"><img src="./images/Logo.png" title ="HOME - Click Me!" alt="FoodEdge"></a>
                <ul class="left-menu">
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">Menu</button>
                        <div class="dropdown-content">
                            <a href="menu1.php">Featured</a>
                            <a href="menu2.php">Local</a>
                            <a href="menu3.php">Western</a>
                            <a href="menu4.php">Halal</a>
                        </div>
                        </div>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
                <ul class="menu">
                    <li><a onclick="toggleCartSidebar()">Basket</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </header>
            <div class="header-support"></div>
        ';
?>