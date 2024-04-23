<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Register</title>
    </head>
    <body>
        <!--Navigation-->
        <?php include("header.php"); ?>
        <?php include ("user_db-table.php"); ?>
    
        <section>
            <div class="menu-title">
                <h1>Register</h1>
            </div>
        </section>
        
        <form id="reg-form" action="user_process.php" method="post">
            <div class="reg-container">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" id="name" name="name" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="username" name="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" id="email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

                <label for="psw-repeat"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="psw-repeat" required></br>
                
                <label><input type="checkbox" checked="checked" name="remember"> Remember me</label></br>
                <label><input type="checkbox" name="TnC" required> I accept the <a href="#">Terms & Privacy</a></label></br></br>

                <button type="submit" class="signupbtn">Sign Up</button></br></br>
                <p>Already have an account? <a href="login.php">Login here!</a></p>
                <p>Copyright &#169 <a href="index.php">FoodEdge Gourmet Catering</a></p>
            </div>
        </form>

        <!--Footer-->
        <?php include("footer.php"); ?>
    </body>
</html>