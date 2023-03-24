<?php
$page_title = 'Sign Up';
include_once 'include/header.php';
?>

<h1 class="page-intro" >Get your Continuing Education Credits Today!</h1>
<h4 class="link-login" >Have you registered already? Then click <a href="login.php">
        here</a> to log in:</h4>
<?php
// Error notifications
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p1>Please, fill blank fields!</p1>";
    } else if ($_GET["error"] == "invalidemail"){
        echo "<p1>Please, choose a proper email!</p1>";
    } else if ($_GET["error"] == "pwdsdontmatch"){
        echo "<p1>Passwords don't match!</p1>";
    } else if ($_GET["error"] == "emailalreadytaken") {
        echo "<p1>That email is already taken!</p1>";
    } else if ($_GET["error"] == "stmtfailed1") {
        echo "<p1>Something went wrong, try again!</p1>";
    } else if ($_GET["error"] == "stmtfailed2") {
        echo "<p1>Something went wrong, try again!</p1>";
    } else if ($_GET["error"] == "noerrors") {
        echo "<p1>CONGRATULATIONS, YOU HAVE SIGNED UP!</p1>";
    }
}
?>
    <fieldset>
        <legend class="legend">Enter your information below:</legend>
        <!-- post method form -->
        <form action="include/signup.inc.php" method="post">
            <p><label>
                    Name:  <input type="text" name="name" placeholder="Full name..." size="40"
                                  maxlength="40"
                </label></p>

            <p><label>
                    Address:  <input class="delivery-address" type="text" name="home" size="60"
                                     maxlength="40">
                </label></p>

            <p><label>
                    City: <input class="delivery-address-city" type="text" name="city" size="20"
                                 maxlength="40">
                </label></p>
            <p><label>State:
                    <select class="delivery-address state" name="state">
                        <option value="">Please Choose...</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AS">American Samoa</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="GU">Guam</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="VI">US Virgin Islands</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </label></p>

            <p><label>
                    Zip Code:  <input id="zip" name="zip" type="text" placeholder="11111" pattern="[0-9]*">
                </label></p>

            <p><label>
                    Email:  <input type="email" name="email" placeholder="sample@sample.com" size="40"
                                  maxlength="60"></label>
                </label></p>

            <p><label>Primary Certification:
                    <select name="certification">
                        <option value="">Please Choose...</option>
                        <option value="BD">Bone Densitometry</option>
                        <option value="BS">Breast Sonography</option>
                        <option value="CI">Cardiac Interventional Radiography</option>
                        <option value="CT">Computed Tomography</option>
                        <option value="MR">Magnetic Resonance Imaging</option>
                        <option value="M">Mammography</option>
                        <option value="N">Nuclear Medicine Technology</option>
                        <option value="T">Radiation Therapy</option>
                        <option value="R">Radiography</option>
                        <option value="RRA">Registered Radiologist Assistant</option>
                        <option value="S">Sonography</option>
                        <option value="VI">Vascular Interventional Radiography</option>
                        <option value="VS">Vascular Sonography</option>
                    </select>
                </label></p>
            <p>
                <label for="birthday">Date of Birth:  </label>
                <input type="date" id="birthday" name="dob">
            </p>
            <p>
                <label for="birthday">Recertification Deadline:  </label>
                <input type="date" id="birthday" name="recert">
            </p>

            <p><label>
                    Phone Number:  <input type="tel" id="phone" name="phone" placeholder="111-111-1111"
                                         pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </label></p>
            <p><label for="payment">Method of Payment:  </label>
                <label>
                    <input type="radio" name="payment" value="AMEX">
                </label>AMEX
                <label>
                    <input type="radio" name="payment" value="Visa">
                </label>Visa
                <label>
                    <input type="radio" name="payment" value="MasterCard">
                </label>MasterCard
                <label>
                    <input type="radio" name="payment" value="Discover">
                </label>Discover
                <label>
                    <input type="radio" name="payment" value="PP">
                </label>PayPal
            </p>

            <p>
                <label for="birthday">Expiration Date:  </label>
                <label for="expDate"></label><input type="date" id="expDate" name="expDate">
            </p>

            <p><label>
                    Login Password:  <input type="password" name="pwd" placeholder="Password..." size="20" maxlength="20">
                    Confirm Password:  <input type="password" name="pwdRepeat" placeholder="Confirm password..." size="20"
                                             maxlength="20">
                </label></p>
            <p>
                <button type="submit" name="submit">Sign Up!</button>
            </p>
        </form>
    </fieldset>

<?php
include_once 'include/footer.php';
?>