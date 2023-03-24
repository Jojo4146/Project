<?php
$page_title = 'Log In';
include_once 'include/header.php';
?>
    <h1 class="motto">The Premier Place for Continuing Education Credits for Imaging Technologists</h1>
    <img class="image" src="images/radtech1.jpeg" alt="radtech" width="700" height="500">
<br>
    <div class="sign-in" >
        <form action="include/login.inc.php" method="post">
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" />
                </li>
                <br>
                <li>
                    <label for="passwd">Password</label>
                    <input type="password" id="passwd" name="passwd" />
                </li>
                <br>
                <button type="submit" name="submit">Log In!</button>
            </ul>
        </form>
        <p1>If you need to sign up for our service, click <a href="signup.php">here</a></p1>
        <?php
        echo '<br> <br> <br>';
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p1>Please, fill all blanks!</p1>";
            } else if ($_GET["error"] == "wronglogin"){
                echo "<p1>Incorrect login information!</p1>";
            } else if ($_GET["error"] == "wrongloginemail"){
                echo "<p1>Email already exists!</p1>";
            } else if ($_GET["error"] == "incorrectpassword"){
                echo "<p1>Wrong password!</p1>";
            } else if ($_GET["error"] == "stmtfailed"){
                echo "<p1>Something went wrong. Try again!</p1>";
            }
        }
        echo '<br> <br> <br>';
        ?>
    </div>
<?php
include_once 'include/footer.php';
?>